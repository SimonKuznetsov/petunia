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
?>