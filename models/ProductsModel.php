<?php
	/*
   *  Модель для таблицы продукции (products)
   */


   // Подключение к БД
   include_once '../config/db.php';


	/*
	* Получаем лучшее предложение 
	*/

	function getBestOfferProducts() {
		global $db;

      $sqlCnt = "SELECT count(id) as cnt FROM `products` WHERE `status` = 1";
      $rs = mysqli_query($db, $sqlCnt);
      $cnt = createSmartyRsArray($rs);
      
      $sql = "SELECT * FROM `products` WHERE `best_offer` = 1 ORDER BY `id` DESC LIMIT 12";
           
      $rs = mysqli_query($db, $sql);

      return createSmartyRsArray($rs);
	}

	 /*
   *  Получить данные продукта по ID
   * 
   *  @param integer $itemId ID продукта
   *  @return array массив данных продукта
   */
  	function getProductById($itemId) {
		global $db;

		$itemId = intval($itemId);
		$sql = "SELECT * FROM `products` WHERE `status` = 1 and `id` = '{$itemId}'";
		
		$rs = mysqli_query($db, $sql);
		
		return mysqli_fetch_assoc($rs);
	}      

	/*
	*  Получить список продуктов из массива идентификаторов (ID`s)
	* 
	*  @param type $itemsIds массив идентификаторов продуктов
	*  @return array массив данных продуктов
	*/
	function getProductsFromArray($itemsIds) {
		global $db;
		
		$strIds = implode($itemsIds, ', ');
		$sql = "SELECT * FROM `products` WHERE `status` = 1 and `id` in ({$strIds})";
		
		$rs = mysqli_query($db, $sql);
		
		return createSmartyRsArray($rs);
	}
?>
