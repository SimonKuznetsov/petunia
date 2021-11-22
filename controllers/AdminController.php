<?php
   /*
   *  Контроллер бэкенда сайта
   */


   // Подключаем модели
   include_once '../models/CategoriesModel.php';
   include_once '../models/ProductsModel.php';
   include_once '../models/OrdersModel.php';
   include_once '../models/PurchaseModel.php';
   include_once '../models/UsersModel.php';

   $smarty->setTemplateDir(TemplateAdminPrefix);
   $smarty->assign('teplateWebPath', TemplateAdminWebPath);

   function indexAction($smarty) {
		
      $login = htmlspecialchars($_POST['login']);
      $pwd = htmlspecialchars($_POST['password']);
      
      $userData = loginAdmin($login, $pwd);
      
      if ($userData['success']) {
         $userData = $userData[0];

         $_SESSION['admin'] = $userData;
         
         $resData = $_SESSION['admin'];
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Неверный логин или пароль';
      }

      if (isset($_SESSION['admin'])) {
         redirect('/petunia/www/?controller=admin&action=category');
      }
      
      json_encode($resData);

      $smarty->assign('pageTitle', 'Управление сайтом');

      loadTemplate($smarty, 'admin');
   }

   function addnewcatAction() {
      $catName = $_POST['newCategoryName'];
      $catParentId = $_POST['generalCatId'];
		
      $res = insertCat($catName, $catParentId);
      if ($res) {
         $resData['success'] = 1;
         $resData['message'] = 'Категория добавлена';
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка добавления категории';
      }

      echo json_encode($resData);
      return;
   }

   /*
   *  Страница управления категориями
   * 
   *  @param type $smarty
   */
   function categoryAction($smarty) {
      if (! isset($_SESSION['admin'])) {
         redirect('/petunia/www/?controller=admin');
      }
      
      $rsCategories = getAllCategories();
      $rsMainCategories = getAllMainCategories();
      
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsMainCategories', $rsMainCategories);
      $smarty->assign('pageTitle', 'Управление сайтом');

      loadTemplate($smarty, 'adminHeader');
      loadTemplate($smarty, 'adminCategory');
   }

   function updatecategoryAction() {
      $itemId = $_POST['itemId'];
      $parentId = $_POST['parentId'];
      $newName = $_POST['newName'];
      
      $res = updateCategoryData($itemId, $parentId, $newName);
      if ($res) {
         $resData['success'] = 1;
         $resData['message'] = 'Категория обновлена';
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка изменения данных категории';
      }

      echo json_encode($resData);
      return;
   }

   function setcatstatusAction() {
      $itemId = $_REQUEST['itemId'];
      $status = 0;
      
      $res = updateCatStatus($itemId, $status);

      if ($res) {
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка установки статуса';
      }

      echo json_encode($resData);
      return;
   }

   /*
   *  Страница управления товарами
   * 
   *  @param type $smarty
   */
   function productsAction($smarty) {
      
		$rsProducts = getProducts();

      if (! isset($_SESSION['admin'])) {
         redirect('/petunia/www/?controller=admin');
      }

      $rsCategories = getAllCategories();
      
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsProducts', $rsProducts);
      $smarty->assign('pageTitle', 'Управление сайтом');

      loadTemplate($smarty, 'adminHeader');
      loadTemplate($smarty, 'adminProducts');
   }

   function addproductAction() {
      $itemName = $_POST['itemName'];
      $itemPrice1 = $_POST['itemPrice1'];
		$itemPrice2 = $_POST['itemPrice2'];
		$itemPrice3 = $_POST['itemPrice3'];
		$itemColor = $_POST['itemColor'];
      $itemDesc =$_POST['itemDesc'];
		$itemFullDesc =$_POST['itemFullDesc'];
      $itemCatId = $_POST['itemCatId'];
		$itemBest = $_POST['itemBest'];
      
      $res = insertProduct($itemName, $itemPrice1, $itemPrice2, $itemPrice3, $itemColor, $itemDesc, $itemFullDesc, $itemBest, $itemCatId);
		if ($res) {
			$resData['success'] = 1;
			$resData['message'] = 'Изменения успешно внесены';
		} else {
			$resData['success'] = 0;
			$resData['message'] = 'Ошибка изменения данных';
		}
      echo json_encode($resData);
      return;
   }

   function updateproductAction() {
		$itemId = $_POST['itemId'];
      $itemName = $_POST['itemName'];
      $itemPrice1 = $_POST['itemPrice1'];
		$itemPrice2 = $_POST['itemPrice2'];
		$itemPrice3 = $_POST['itemPrice3'];
		$itemColor = $_POST['itemColor'];
      $itemDesc =$_POST['itemDesc'];
		$itemFullDesc =$_POST['itemFullDesc'];
      $itemCatId = $_POST['itemCatId'];
		$itemBest = $_POST['itemBest'];
		$itemStatus = $_POST['itemStatus'];

		if ($itemStatus == 0) {
			deleteGood($itemId);
		}

      $res = updateProduct($itemId, $itemName, $itemPrice1, $itemPrice2, $itemPrice3, $itemColor, $itemDesc, $itemFullDesc, $itemBest, $itemCatId, $itemStatus);

      if ($res) {
         $resData['success'] = 1;
         $resData['message'] = 'Изменения успешно внесены';
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка изменения данных';
      }

      echo json_encode($resData);
      return;
   }

   function uploadmainAction() {
      $itemId = $_POST['itemId'];
      $successUploadFileName = uploadFile($_FILES['filename']['name'], '/petunia/www/images/products/');
  
      if (! $successUploadFileName) {
          echo 'Ошибка загрузки файла!';
          return;
      }
      $res = $_SERVER['DOCUMENT_ROOT'] . '/petunia/www/images/products/' . $successUploadFileName;
  
      if ($res) {
          $res = updateProductImage($itemId, $successUploadFileName);
          if ($res) {
            redirect('/petunia/www/?controller=admin&action=products');
          }
      }else{
          echo ('Ошибка загрузки файла');
      }
  }

  function uploadimagesAction() {
	$itemId = $_POST['itemId'];
	$n = '';
	for ($i=0; $i < sizeof($_FILES['filename']['name']); $i++) { 
		$successUploadFileName = uploadFile($_FILES['filename']['name'][$i], '/petunia/www/images/products/', $i+1);
		if (! $successUploadFileName) {
				echo 'Ошибка загрузки файла!';
				return;
		}
		$res = $_SERVER['DOCUMENT_ROOT'] . '/petunia/www/images/products/' . $successUploadFileName;

		$res = updateProductImages($itemId, $successUploadFileName, $i+1);
	}

	if ($res) {
		redirect('/petunia/www/?controller=admin&action=products');
	}
}


   function ordersAction($smarty) {
      if (! isset($_SESSION['admin'])) {
         redirect('/petunia/www/?controller=admin');
      }

      $orders = getOrders();
		
		for ($i=0; $i < sizeof($orders); $i++) { 
			$purchases = getPurchaseForOrder($orders[$i]['id']);
			$orders[$i]['purchases'] = $purchases;
		}
		
      $smarty->assign('orders', $orders);
      $smarty->assign('pageTitle', 'Заказы');
		
      loadTemplate($smarty, 'adminHeader');
      loadTemplate($smarty, 'adminOrders');
   }

   function setorderstatusAction() {
      $itemId = $_POST['itemId'];
      $status = $_POST['status'];
      
      $res = updateOrderStatus($itemId, $status);

      if ($res) {
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка установки статуса';
      }

      echo json_encode($resData);
      return;
   }

   /*function setorderdatepaymentAction() {
      $itemId = $_REQUEST['itemId'];
      $datePayment = $_REQUEST['datePayment'];

      $res = updateOrderDatePayment($itemId, $datePayment);

      if ($res) {
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка установки статуса';
      }
      
      echo json_encode($resData);
      return;
   }*/

   function createxmlAction() {
      $rsProducts = getProducts();
		
      $xml = new DomDocument('1.0', 'utf-8');  
      $xmpProducts = $xml->appendChild($xml->createElement('products'));

      foreach ($rsProducts as $product) {
         $xmpProduct = $xmpProducts->appendChild($xml->createElement('product'));
         foreach ($product as $key => $val) {
            $xmlName = $xmpProduct->appendChild($xml->createElement($key));
            $xmlName->appendChild($xml->createTextNode($val));
         }
      }

      $xml->save($_SERVER["DOCUMENT_ROOT"] . '/petunia/www/xml/products.xml');
   }

	function uploadFile($localFilename, $localPath = '/petunia/www/upload/', $n = null) {
      // Получаем расширение загружаемого файла
      $ext = pathinfo($localFilename, PATHINFO_EXTENSION);
		
      $pathInfo = pathinfo($localFilename);
		
      if ($ext != $pathInfo['extension']) return false;
		
      // Создаём имя файла
      $newFileName = $pathInfo['filename'] . '_' . time() . '.' . $pathInfo['extension'];
		
      $path = $_SERVER['DOCUMENT_ROOT'] . $localPath;
      if (! file_exists($path)) {
         mkdir($path);
      }

		if ($n) {
			$name = $_FILES['filename']['tmp_name'][$n-1];
		} else {
			$name = $_FILES['filename']['tmp_name'];
		}

      // Загружен ли файл
      if (is_uploaded_file($name)) {
         // Если файл загружен, то перемещаем его из временной директории в конечную
         $res = move_uploaded_file($name, $path . $newFileName);
         return ($res == true) ? $newFileName : false;
      } else {
         echo ("Ошибка загрузки файла");
         return false;
      }
   }

   function loadfromxmlAction() {
      $successUploadFileName = uploadFile('import_products.xml', '/petunia/www/xml/import/');

      if (! $successUploadFileName) {
         echo 'Ошибка загрузки файла';
         return;
      }

      $xmlFile = $_SERVER['DOCUMENT_ROOT'] . '/petunia/www/xml/import/' . $successUploadFileName;
      $xmlProducts = simplexml_load_file($xmlFile);
		
      $products = array(); $i = 0;
      foreach ($xmlProducts as $product) {
         $products[$i]['name'] = htmlentities($product->name);
         $products[$i]['category_id'] = intval($product->category_id);
         $products[$i]['description'] = htmlentities($product->description);
			$products[$i]['fullDesc'] = htmlentities($product->fullDesc);
			$products[$i]['color'] = htmlentities($product->color);
         $products[$i]['priceS'] = intval($product->priceS);
			$products[$i]['priceM'] = intval($product->priceM);
			$products[$i]['priceL'] = intval($product->priceL);
			$products[$i]['best_offer'] = intval($product->best_offer);
         $products[$i]['status'] = intval($product->status);
         $i++;
      }
      
      $res = insertImportProducts($products);

      if ($res) {
         redirect('/petunia/www/?controller=admin&action=products');
      }
   }

   /*
   *  Разлогинивание админ
   */
  function logoutAction() {
   if (isset($_SESSION['admin'])) {
      unset($_SESSION['admin']);
   }

   redirect('/petunia/www/');
}

function goodsAction($smarty) {
	if (! isset($_SESSION['admin'])) {
		redirect('/petunia/www/?controller=admin');
	}

	$rsProducts = getProducts();
	$goods = getAllGoods();
	$gProducts = [];
	$goodsIds = [];
	for ($i=0; $i < sizeof($goods); $i++) { 
		$goodsIds[$i]['id'] = $goods[$i]['id'];
	}
	
	for ($f=1; $f < 4; $f++) { 
		for ($n=0; $n < sizeof($rsProducts); $n++) {
			$res = 0;
			for ($m=0; $m < sizeof($goodsIds); $m++) { 
				if (in_array($rsProducts[$n]['id'], $goodsIds[$m])) {
					$res += 1;
				}
			}
			
			if ($res < 3) {			
				$gProducts[$n]['id'] = $rsProducts[$n]['id'];
				$gProducts[$n]['size'] = $f;
				
				$gProducts[$n]['count'] = 0;
			}
			$res = 0;
		}
		
		$res = insertGoods($gProducts);
	}
	
	for ($i=0; $i < sizeof($goods); $i++) { 
		$name = getProductNameById($goods[$i]['id']);
		$goods[$i]['name'] = $name[0]['name']; 
	}
	
	$smarty->assign('goods', $goods);
	$smarty->assign('pageTitle', 'Остатки');

	loadTemplate($smarty, 'adminHeader');
	loadTemplate($smarty, 'adminGoods');
}

function updategoodAction() {
	$id = $_POST['id'];
	$count = $_POST['count'];
	$size = $_POST['size'];

	$res = updateGoods($id, $count, $size);

	if ($res) {
		$resData['success'] = 1;
		$resData['message'] = 'Изменения успешно внесены';
	} else {
		$resData['success'] = 0;
		$resData['message'] = 'Ошибка изменения данных';
	}

	echo json_encode($resData);
	return;
}
?>