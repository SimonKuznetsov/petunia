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
   *  Получаем последние добавленные товары
   *
   *  @param integer $limit лимит товаров
   *  @return array массив товаров
   */
  function getLastProducts($offset = 1, $limit = 9) {
	global $db;

	$sqlCnt = "SELECT count(id) as cnt FROM `products` WHERE `status` = 1";
	$rs = mysqli_query($db, $sqlCnt);
	$cnt = createSmartyRsArray($rs);
	
	$sql = "SELECT * FROM `products` WHERE `status` = 1 ORDER BY `id` DESC";
	$sql .= " LIMIT {$offset}, {$limit}";
	
	$rs = mysqli_query($db, $sql);
	$rows = createSmartyRsArray($rs);

	return array($rows, $cnt[0]['cnt']);
}

/* 
*  Получаем последние добавленные товары категории
*
*  @param integer $limit лимит товаров
*  @return array массив товаров
*/
function getCatProducts($offset = 1, $limit = 9, $catId) {
	global $db;

	$sqlCnt = "SELECT count(id) as cnt FROM `products` WHERE `status` = 1 and `category_id` = '{$catId}'";
	$rs = mysqli_query($db, $sqlCnt);
	$cnt = createSmartyRsArray($rs);
	
	$sql = "SELECT * FROM `products` WHERE `status` = 1 ORDER BY `id` DESC";
	$sql .= " LIMIT {$offset}, {$limit}";
	
	$rs = mysqli_query($db, $sql);
	$rows = createSmartyRsArray($rs);

	return array($rows, $cnt[0]['cnt']);
}

/* 
*  Получить продукты для категории $itemId
* 
*  @param integer $itemId ID котегории
*  @return array массив продуктов
*/
function getProductsByCat($itemId){
	global $db;

	$itemId = intval($itemId);
	$sql = "SELECT * FROM `products` WHERE `status` = 1 and `category_id` = '{$itemId}'";
	
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

function getProducts() {
	global $db;

	$sql = "SELECT * FROM `products` WHERE `status` = 1 ORDER BY `id` DESC";
	
	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);
}

/*
*  Добавление нового товара
* 
*  @param string $itemName Название продукта
*  @param integer $itemPrice Цена
*  @param string $itemDesc Описание
*  @param integer $itemCat ID категории
*  @return type 
*/
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat) {
	global $db;

	$sql = "INSERT INTO `products` SET `name` = '{$itemName}', `price` = '{$itemPrice}', `description` = '{$itemDesc}', `category_id` = '{$itemCat}', `image` = ''";
	
	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $newFileName = null) {
	global $db;

	$set = array();

	if ($itemName) {
		$set[] = "`name` = '{$itemName}'";
	}
	if ($itemPrice > 0) {
		$set[] = "`price` = '{$itemPrice}'";
	}
	if ($itemStatus !== null) {
		$set[] = "`status` = '{$itemStatus}'";
	}
	if ($itemDesc) {
		$set[] = "`description` = '{$itemDesc}'";
	}
	if ($itemCat) {
		$set[] = "`category_id` = '{$itemCat}'";
	}
	if ($newFileName) {
		$set[] = "`image` = '{$newFileName}'";
	}

	$setStr = implode($set, ", ");
	$sql = "UPDATE `products` SET {$setStr} WHERE `id` = '{$itemId}'";
	
	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateProductImage($itemId, $newFileName) {
	$rs = updateProduct($itemId, null, null, null, null, null, $newFileName);
	
	return $rs;
}

function insertImportProducts($aProducts) {
	global $db;

	if (! is_array($aProducts)) return false;

	$sql = "INSERT INTO `products` (`name`, `category_id`, `description`, `price`, `status`) VALUES ";
	$cnt = count($aProducts);
	for ($i = 0; $i < $cnt; $i++) {
		if ($i > 0) $sql .= ', ';
		$sql .= "('". implode("', '", $aProducts[$i]) . "')";
	}
	
	$rs = mysqli_query($db, $sql);
	return $rs;
}

function searchProducts($name) {
	global $db;

	$sql = "SELECT * FROM `products` WHERE `status` = 1 and `name` like '%{$name}%' ORDER BY `id` DESC";
	
	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);
}
?>
