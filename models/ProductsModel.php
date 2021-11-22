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
      
      $sql = "SELECT * FROM `products` WHERE `best_offer` = 1 and `status` = 1 ORDER BY `id` DESC LIMIT 12";
           
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
	
	$strIds = array_values($itemsIds);

	$sql = "SELECT * FROM (SELECT {$strIds[0]} AS a ";
	
	for ($i=1; $i < sizeof($strIds); $i++) { 
		$sql .= "UNION ALL SELECT {$strIds[$i]} ";
	}
	
	$sql .= ") n LEFT JOIN `products` p ON n.a=p.id";

	//d($sql);

	$rs = mysqli_query($db, $sql);

	//d(createSmartyRsArray($rs));
	
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
function insertProduct($itemName, $itemPrice1, $itemPrice2, $itemPrice3, $itemColor, $itemDesc, $itemFullDesc, $itemBest, $itemCat) {
	global $db;

	$sql = "INSERT INTO `products` SET `name` = '{$itemName}', `priceS` = '{$itemPrice1}', `priceM` = '{$itemPrice2}', `priceL` = '{$itemPrice3}', `description` = '{$itemDesc}', `fullDesc` = '{$itemFullDesc}', `color` = '{$itemColor}', `best_offer` = '{$itemBest}', `category_id` = '{$itemCat}', `image` = ''";
	
	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateProduct($itemId, $itemName, $itemPrice1, $itemPrice2, $itemPrice3, $itemColor, $itemDesc, $itemFullDesc, $itemBest, $itemCat, $itemStatus) {
	global $db;

	$sql = "UPDATE `products` SET `name` = '{$itemName}', `priceS` = '{$itemPrice1}', `priceM` = '{$itemPrice2}', `priceL` = '{$itemPrice3}', `description` = '{$itemDesc}', `fullDesc` = '{$itemFullDesc}', `color` = '{$itemColor}', `best_offer` = '{$itemBest}', `category_id` = '{$itemCat}', `image` = '', `status` = '{$itemStatus}' WHERE `id` = '{$itemId}'";

	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateProductImage($itemId, $newFileName) {
	global $db;

	$sql = "UPDATE `products` SET `image` = '{$newFileName}' WHERE `id` = '{$itemId}'";

	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateProductImages($itemId, $newFileName, $i) {
	global $db;

	$sql = "UPDATE `products` SET `image{$i}` = '{$newFileName}' WHERE `id` = '{$itemId}'";
	//d($sql);
	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function insertImportProducts($aProducts) {
	global $db;

	if (! is_array($aProducts)) return false;

	$sql = "INSERT INTO `products` (`name`, `category_id`, `description`, `fullDesc`, `color`, `priceS`, `priceM`, `priceL`, `best_offer`, `status`) VALUES ";
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

function getAllGoods() {
	global $db;

	$sql = "SELECT * FROM `goods`";
	
	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);
}

function getGoodsById($id, $n) {
	global $db;

	$sql = "SELECT `count` FROM `goods` WHERE `id` = {$id} and `size` = {$n}";

	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);
}

function insertGoods($gProducts) {
	global $db;
	
	$sql = "INSERT INTO `goods` (`id`, `size`, `count`) VALUES ";
	
	$cnt = count($gProducts);
	for ($i = 0; $i < $cnt; $i++) {
		if ($i > 0) $sql .= ', ';
		$sql .= "('". implode("', '", $gProducts[$i]) . "')";
	}
	
	$rs = mysqli_query($db, $sql);
	return $rs;
}

function getProductNameById($id) {
	global $db;

	$sql = "SELECT `name` FROM `products` WHERE `id` = {$id}";

	$rs = mysqli_query($db, $sql);

	return createSmartyRsArray($rs);
}

function deleteGood($id) {
	global $db;

	$sql = "DELETE FROM `goods` WHERE `id` = {$id}";
	
	$rs = mysqli_query($db, $sql);
	return $rs;
}

function updateGoods($id, $count, $size) {
	global $db;

	$sql = "UPDATE `goods` SET `count` = {$count} WHERE `id` = {$id} and `size` = {$size}";
	
	$rs = mysqli_query($db, $sql);
	return $rs;
}
?>
