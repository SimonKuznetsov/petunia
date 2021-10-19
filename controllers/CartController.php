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

      // Если значение не найдено то добавляем
      if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
         $_SESSION['cart'][] = $itemId;
         $resData['cntItems'] = count($_SESSION['cart']);
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
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
       
      $resData = array();
      $key = array_search($itemId, $_SESSION['cart']);
      if ($key !== false) {
         unset($_SESSION['cart'][$key]);
         $resData['cntItems'] = count($_SESSION['cart']);
         $resData['success'] = 1;
      } else {
         $resData['success'] = 0;
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
      
      $smarty->assign('pageTitle', 'Корзина');
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsProducts', $rsProducts);
      
      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'cart');
      loadTemplate($smarty, 'footer');
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

      // Получаем из массива $_POST количество покупаемых товаров
      $itemsCnt = array();
      foreach ($itemsIds as $item) {
         // Формируем ключ для массива POST
         $postVar = 'itemCnt_' . $item;
         // Создаём элемент массива количества покупаемого товара
         // Ключ массива - ID товара, значение массива - количество товара
         // $itemsCnt[1] = 3; тавар с ID == 1 покупают 3 штуки
         $itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
      }

      // Получаем список продуктов по массиву корзины
      $rsProducts = getProductsFromArray($itemsIds);

      // Добавляем каждому продукту дополнительное поле
      // "realPrice = количество продуктов * на цену продукта"
      // "cnt" = количество покупаемого товара

      // &$item - для того, чтобы при изменении переменной $item менялся и элемент массива $rsProducts
      $i = 0;
      foreach ($rsProducts as &$item) {
         $item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
         if ($item['cnt']) {
            $item['realPrice'] = $item['cnt'] * $item['price'];
            $sum = $sum + $item['realPrice'];
         } else {
            // Если вдруг получилось так, что товар в корзине есть, а количество == нулю, то удаляем этот товар
            unset($rsProducts[$i]);
         }
         $i++;
      }
      
      $_SESSION['payment']['sum'] = $sum;

      if (! $rsProducts) { 
         echo "Корзина пуста";
         return;
      }
     
      // Полученный массив покупаемых товаров помещаем в сессионную переменную
      $_SESSION['saleCart'] = $rsProducts;

      $rsCategories = getAllMainCatsWithChildren();

      // hideLoginBox переменная - флаг для того, чтобы спрятать блоки логина и регистрации
      if (! isset($_SESSION['user'])) {
         $smarty->assign('hideLoginBox', 1);
      }
      
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
      $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;
      // Если корзина пуста, то формируем ответ с ошибкой, отдоём его в формате json и выходим из функции
      if (! $cart) {
         $resData['success'] = 0;
         $resData['message'] = 'Нет товаров для заказа';
         echo json_encode($resData);
         return;
      }

      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $adress = $_POST['adress'];
      
      // Создаём новый заказ и получаем его ID
      $orderId = makeNewOrder($name, $phone, $adress, $_SESSION['payment']['sum']);
      $_SESSION['payment']['id'] = $orderId;
      
      // Если заказ не создан, то выдаём ошибку и завершаем функцию
      if (! $orderId) {
         $resData['success'] = 0;
         $resData['message'] = 'Ошибка создания заказа';
         echo json_encode($resData);
         return;
      }

      // Сохраняем товары для созданного заказа
      $res = setPurchaseForOrder($orderId, $cart);

      // Ели успешно, то формируем ответ, удоляем переменные корзины
      if ($res) {
         $resData['success'] = 1;
         $resData['message'] = 'Заказ сохранен';
         unset($_SESSION['saleCart']);
         unset($_SESSION['cart']);
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