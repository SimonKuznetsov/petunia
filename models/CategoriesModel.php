<?php
	/*
   *   Модель для таблицы категорий (categories)
   */


   // Подключение к БД
   include_once '../config/db.php';

	 /*
   *  Получить все главные категории (категории, которые не являются дочерними)
   * 
   *  @return array массив категорий
   */
	function getAllMainCategories() {
		global $db;

		$sql = "SELECT * FROM `categories` WHERE `parent_id` = 0 and `status` = 1";

		$rs = mysqli_query($db, $sql);
		
		return createSmartyRsArray($rs);
	}

	/*
   *  Получить дочернии категории для категории $catId
   * 
   *  @param integer $catId ID категории
   *  @return array массив дочерних категорий
   */
  function getChildrenForCat($catId) {
		global $db;

		$sql = "SELECT * FROM `categories` WHERE `parent_id` = '{$catId}' and `status` = 1";

		$rs = mysqli_query($db, $sql);

		return createSmartyRsArray($rs);
	}

	/*
	*
   *  Получить главные категории с привязками дочерних
   * 
   *  @return array массив категорий
   */
  function getAllMainCatsWithChildren () {
      global $db;
   
      $sql = 'SELECT * FROM `categories` WHERE `parent_id` = 0 and `status` = 1';
   
      $rs = mysqli_query($db, $sql);

      return createSmartyRsArray($rs);
   }

/*
*  Добавление новой категории
* 
*  @param string $catName название категории
*  @param integer $catParentId ID родительской категории
*  @return integer id новой категории
*/
function insertCat($catName, $catParentId = 0) {
	global $db;

	// готовим запрос
	$sql = "INSERT INTO `categories` (`parent_id`, `name`) VALUES ('{$catParentId}', '{$catName}')";
	
	// выполняем запрос
	mysqli_query($db, $sql);
 
	// получение id добавленной записи
	$id = mysqli_insert_id($db);

	return $id;
}

  /*
   *  Получить данные категории по id
   *
   *  @param integer $catId ID категории
   *  @return array массив - строка категории
   */
  function getCatById($catId) {
	global $db;

	$catId = intval($catId);
	$sql = "SELECT * FROM `categories` WHERE `id` = '{$catId}' and `status` = 1";

	$rs = mysqli_query($db, $sql);
	
	return mysqli_fetch_assoc($rs);
}

/*
*  Получить все категории
* 
*  @return array массив категорий
*/
function getAllCategories() {
	global $db;

	$sql = "SELECT * FROM `categories` WHERE `status` = 1 ORDER BY `parent_id` ASC";

	$rs = mysqli_query($db, $sql);
	
	return createSmartyRsArray($rs);
}

/*
*  Обновление категории
* 
*  @param integer $itemId ID категории
*  @param integer $parentId ID главной категории
*  @param string $newName новое имя категории
*  @return type
*/
function updateCategoryData($itemId, $parentId = -1, $newName = '') {
	global $db;

	$set = array();

	if ($newName) {
		$set[] = "`name` = '{$newName}'";
	}

	if ($parentId > -1) {
		$set[] = "`parent_id` = '{$parentId}'";
	}
	
	$setStr = implode($set, ", ");
	$sql = "UPDATE `categories` SET {$setStr} WHERE `id` = '{$itemId}'";
	
	$rs = mysqli_query($db, $sql);
	
	return $rs;
}

function updateCatStatus($itemId, $status) {
	global $db;

	$sql = "UPDATE `categories` SET `status` = '{$status}' WHERE `id` = '{$itemId}'";
	
	$rs = mysqli_query($db, $sql);

	return $rs;
}
?>