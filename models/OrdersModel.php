<?php
   /*
   *  Модель для таблицы заказов (orders)
   */


   // Подключение к БД
   include_once '../config/db.php';

   /*
   *  Создание заказа (без привязки товара)
   * 
   *  @return integer ID созданного заказа
   */
   function makeNewOrder($email, $name, $phone, $region, $city, $place, $index, $sum) {
      global $db;

      // Инициализация переменных
      $userId = 1;
      $comment = "id пользователя: {$userId}<br> Имя: {$name}<br> Телефон: {$phone}<br> Адрес: {$region}, {$city}, {$place}";

      $dateCreated = date('Y.m.d.H.i.s');
      $userIp = $_SERVER['REMOTE_ADDR'];

      // Формирование запроса к БД
      $sql = "INSERT INTO `orders` (`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`, `sum`) VALUES ('{$userId}', '{$dateCreated}', null, '0', '{$comment}', '{$userIp}', '{$sum}')";
      
      $rs = mysqli_query($db, $sql);

      // Получить id созданного заказа
      if ($rs) {
         $sql = "SELECT `id` FROM `orders` ORDER BY `id` DESC LIMIT 1";

         $rs = mysqli_query($db, $sql);
         // Преобразавание результатов запроса
         $rs = createSmartyRsArray($rs);

         // Возвращаем id созданного запроса
         if (isset($rs[0])) {
            return $rs[0]['id'];
         }
      }
   }

   /*
   *  Получить список заказов с привязкой к продуктам для пользователя $userId
   * 
   *  @param integer $userId ID пользователя
   *  @return array массив заказов с привязкой к продуктам
   */
   function getOrdersWithProductsByUser($userId) {
      global $db;

      $userId = intval($userId);
      $sql = "SELECT * FROM `orders` WHERE `user_id` = '{$userId}' ORDER BY `id` DESC";

      $rs = mysqli_query($db, $sql);

      $smartyRs = array();
      while ($row = mysqli_fetch_assoc($rs)) {
         $rsChildren = getPurchaseForOrder($row['id']);
         
         if ($rsChildren) {
            $row['children'] = $rsChildren;
            $smartyRs[] = $row;
         }
      }

      return $smartyRs;
   }

   function getOrders() {
      global $db;
      
      $sql = "SELECT * FROM `orders`";
      
      $rs = mysqli_query($db, $sql);

      return createSmartyRsArray($rs);
   }

   /*
   *  Палучить продукты заказа
   *  @param integer $orderId ID заказа
   *  @return array массив данных товаров
   */
   function getProductsForOrder($orderId) {
      global $db;

      $sql = "SELECT * FROM `purchase` AS pe LEFT JOIN `products` AS ps ON pe.product_id = ps.id WHERE `order_id` = '{$orderId}'";
      
      $rs = mysqli_query($db, $sql);

      return createSmartyRsArray($rs);
   }

   function updateOrderStatus($itemId, $status) {
      global $db;

      $status = intval($status);
      $sql = "UPDATE `orders` SET `status` = '{$status}' WHERE `id` = '{$itemId}'";
      
      $rs = mysqli_query($db, $sql);

      return $rs;
   }

   function updateOrderDatePayment($itemId, $datePayment) {
      global $db;

      $sql = "UPDATE `orders` SET `date_payment` = '{$datePayment}' WHERE `id` = '{$itemId}'";
      
      $rs = mysqli_query($db, $sql);

      return $rs;
   }
?>