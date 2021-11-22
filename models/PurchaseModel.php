<?php
   /*
   *  Модель для таблицы продукции (purchase)
   */


   // Подключение к БД
   include_once '../config/db.php';

   /*
   *  Внесение в БД данных продуктов с привязкой к заказу
   * 
   *  @param integer $orderId ID заказа
   *  @param array $cart массив карзины
   *  @return boolean TRUE в случае успешного добавления в БД
   */
   function setPurchaseForOrder($orderId, $cart) {
      global $db;

      $sql = "INSERT INTO `purchase` (`order_id`, `product_id`, `price`, `amount`, `size`, `name`) VALUES ";

      $values = array();
      // Фомируем массив строк для запроса для каждого товара
      foreach ($cart as $item) {
			if ($item['size']==1) {
				$price = $item['priceS'];
			} else if ($item['size']==2) {
				$price = $item['priceM'];
			} else if ($item['size']==3) {
				$price = $item['priceL'];
			}
         $values[] = "('{$orderId}', '{$item['id']}', '{$price}', '{$item['count']}', '{$item['size']}', '{$item['name']}')";
      }
		
      // Преобразовываем массив в строку
      $sql .= implode($values, ', ');
      $rs = mysqli_query($db, $sql);

      return $rs;
   }

   function getPurchaseForOrder($orderId) {
      global $db;

      $sql = "SELECT * FROM `purchase` WHERE `order_id` = {$orderId}";
      
      $rs = mysqli_query($db, $sql);

      return createSmartyRsArray($rs);
   }
?>