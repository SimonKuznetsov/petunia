<?php
   /*
   *  Контроллер работы с корзиной
   */


   // Подключаем модели
   include_once '../models/CategoriesModel.php';
   include_once '../models/ProductsModel.php';
   include_once '../models/OrdersModel.php';
   include_once '../models/PurchaseModel.php';
   

   /*
   *  Добавление продукта в корзину 
   * 
   *  @param integer id GET параметр - ID добавляемого продукта
   *  @return json информация об операции (успех, колличество элементов в корзине)
   */
   function addtocartAction() {
      $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
      if (! $itemId) return false; 
       
      $resData = array();

		$cnt = array_count_values($_SESSION['cart']);
		$size = $_POST['size'];
		$count = isset($_POST['count']) ? $_POST['count'] : 1;

		$rsGoods = getAllGoods();
		$goods =[];

		for ($i=0; $i < sizeof($rsGoods); $i++) { 
			$goods[$rsGoods[$i]['id']][$rsGoods[$i]['size']] = $rsGoods[$i]['count'];
		}

      // Если значение не найдено то добавляем
      if (isset($_SESSION['cart']) && $cnt[$itemId] < 3 && !$_SESSION['params'][$itemId][$size] && $goods[$itemId][$size]+1 > $count) {
         $_SESSION['cart'][] = $itemId;
         $resData['cntItems'] = count($_SESSION['cart']);
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
      }

		
		if (isset($_SESSION['cart']) && $goods[$itemId][$size]+1 > $count) {
			$_SESSION['params'][$itemId][$size] = $count;
		}
		

      echo json_encode($resData);
   }

   /*
   *  Удаление продукта из корзины
   * 
   *  @param integer id GET параметр - ID удаляемого из корзины продукта
   *  @return json информация об операции (успех, колличество элементов в корзине)
   */
   function removefromcartAction() {
      $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
      if (! $itemId) exit(); 

		$n = $_POST['n'];
	
       
      $resData = array();
      $key = array_search($itemId, $_SESSION['cart']);
      if ($key !== false) {
         unset($_SESSION['cart'][$key]);
         $resData['cntItems'] = count($_SESSION['cart']);
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
      }
		
		unset($_SESSION['params'][$itemId][$n]);
		if (sizeof($_SESSION['params'][$itemId]) == 0) {
			unset($_SESSION['params'][$itemId]);
		}

      echo json_encode($resData);
   }

   /*
   *  Формирование страницы корзины
   */
   function indexAction($smarty) {
      $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
		
      $rsCategories = getAllMainCatsWithChildren();
      $rsProducts = getProductsFromArray($itemsIds);
		$cart = $_SESSION['cart'];
		$rsGoods = getAllGoods();
		$goods =[];

		for ($i=0; $i < sizeof($rsGoods); $i++) { 
			$goods[$rsGoods[$i]['id']][$rsGoods[$i]['size']] = $rsGoods[$i]['count'];
		}
		
		$params = $_SESSION['params'];
		$ID = $rsProducts[0]['id'];
		//d($params);
		for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
			$rsProducts[$i]['size'] = key($params[$rsProducts[$i]['id']]);
			$rsProducts[$i]['count'] = $params[$rsProducts[$i]['id']][$rsProducts[$i]['size']];
			unset($params[$rsProducts[$i]['id']][$rsProducts[$i]['size']]);
		}
		
      $smarty->assign('pageTitle', 'Корзина');
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsProducts', $rsProducts);
		
		$smarty->assign('cart', $cart);
		$smarty->assign('rsGoods', $goods);
		
		$smarty->assign('productParams', $_SESSION['params']);

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'cart');
      loadTemplate($smarty, 'footer');
   }

	function changecountAction() {
      $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
      if (! $itemId) return false; 

		$size = $_POST['size'];
		$count = isset($_POST['count']) ? $_POST['count'] : 1;
		echo '123';
		$_SESSION['params'][$itemId][$size] = $count;

   }

   /*
   *  Формирование страницы заказа
   */
   function orderAction($smarty) {
      // Получаем массив идентификаторов (ID) продуктов корзины
      $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
      // Если корзина пуста, то редиректим в корзину
      if (! $itemsIds) {
         redirect('/petunia/www/?controller=cart');
         return;
      }
		
		$rsProducts = getProductsFromArray($itemsIds);
		$params = $_SESSION['params'];
		$ID = $rsProducts[0]['id'];
		
		for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
			$rsProducts[$i]['size'] = key($params[$rsProducts[$i]['id']]);
			$rsProducts[$i]['count'] = $params[$rsProducts[$i]['id']][$rsProducts[$i]['size']];
			unset($params[$rsProducts[$i]['id']][$rsProducts[$i]['size']]);
		}
      $rsCategories = getAllMainCatsWithChildren();

      // hideLoginBox переменная - флаг для того, чтобы спрятать блоки логина и регистрации
      if (! isset($_SESSION['user'])) {
         $smarty->assign('hideLoginBox', 1);
      }

		$rsMainCategories = getAllMainCategories();
		$smarty->assign('rsMainCategories', $rsMainCategories);
      
      $smarty->assign('pageTitle', 'Заказ');
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsProducts', $rsProducts);
      
      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'order');
      loadTemplate($smarty, 'footer'); 
   }
   
   /*
   *  AJAX функция сохранения заказа
   * 
   *  @param array $_SESSION['saleCart'] массив покупаемых продуктов
   *  @return json информация о результате выполнения
   */
   function saveorderAction() {
      // Получаем массива покупаемых товаров
     // $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;
      // Если корзина пуста, то формируем ответ с ошибкой, отдоём его в формате json и выходим из функции

		$cart = $_SESSION['params'];
		
      if (! $cart) {
         $resData['success'] = 0;
         $resData['message'] = 'Нет товаров для заказа';
         echo json_encode($resData);
         return;
      }

      $email = $_POST['email'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
		$region = $_POST['region'];
      $city = $_POST['city'];
      $place = $_POST['place'];
		$index = $_POST['index'];
		$sum = $_POST['sum'];
      
      // Создаём новый заказ и получаем его ID
      $orderId = makeNewOrder($email, $name, $phone, $region, $city, $place, $index, $sum);
      $_SESSION['payment']['id'] = $orderId;
      
      // Если заказ не создан, то выдаём ошибку и завершаем функцию
      if (! $orderId) {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка создания заказа';
         echo json_encode($resData);
         return;
      }

		$itemsIds = $_SESSION['cart'];
		$rsProducts = getProductsFromArray($itemsIds);
		$params = $_SESSION['params'];
		$ID = $rsProducts[0]['id'];
		
		for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
			$rsProducts[$i]['size'] = key($params[$rsProducts[$i]['id']]);
			$rsProducts[$i]['count'] = $params[$rsProducts[$i]['id']][$rsProducts[$i]['size']];
			unset($params[$rsProducts[$i]['id']][$rsProducts[$i]['size']]);
		}

      // Сохраняем товары для созданного заказа
      $res = setPurchaseForOrder($orderId, $rsProducts);

      // Ели успешно, то формируем ответ, удоляем переменные корзины
      if ($res) {
         $resData['success'] = 1;
         $resData['message'] = 'Заказ сохранен';
         $_SESSION['cart'] = [];
			$_SESSION['params'] = [];
      } else {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка внесения данных для заказа № ' . $orderId;
      }

      echo json_encode($resData);
   }

   /*
   *   Сбор данных для оплаты
   */
   function paymentAction($smarty) {
      if ($_SESSION['payment'] === null) {
         redirect('/php%20shop/www/');
      }

      $paymentData = [0 . date('U'), $_SESSION['payment']['sum']];

      $smarty->assign('pageTitle', 'Оплата');
      $smarty->assign('paymentData', $paymentData);
      
      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'payment');
      loadTemplate($smarty, 'footer');
   }

   /*
   *  Страница успешной оплаты 
   */
   function successAction($smarty) {
      $smarty->assign('pageTitle', 'Успешная оплата');

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'success');
      loadTemplate($smarty, 'footer'); 
   }
   
   /*
   *  Страница ошибки оплаты 
   */
   function errorAction($smarty) {
      $smarty->assign('pageTitle', 'Ошибка оплаты');

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'error');
      loadTemplate($smarty, 'footer'); 
   }

   /*
   *  Страница результата оплаты 
   */
   function resultAction($smarty) {
      $dataSet = [$_POST['ik_co_id'], $_POST['ik_pm_no'], $_POST['ik_am'], $_POST['ik_cur'], $_POST['ik_desc']];
      d($dataSet);
      unset($dataSet['ik_sign']);
      ksort($dataSet, SORT_STRING);
      array_push($dataSet, 'DSvjC1xglM9276cJ');
      $signString = implode(':', $dataSet);
      $sign = base64_encode(md5($signString, true));
      
      $sign;


      $smarty->assign('pageTitle', 'Результат оплаты');

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'result');
      loadTemplate($smarty, 'footer'); 
   }
?>