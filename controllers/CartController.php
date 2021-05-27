<?php
	   /*
   *  Контроллер работы с корзиной
   */


   // Подключаем модели
   //include_once '../models/CategoriesModel.php';
   //include_once '../models/ProductsModel.php';
   //include_once '../models/OrdersModel.php';
   //include_once '../models/PurchaseModel.php';
   


	/*
   *  Формирование страницы корзины
   */
	function indexAction($smarty) {
		//$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

		//$rsCategories = getAllMainCatsWithChildren();
		//$rsProducts = getProductsFromArray($itemsIds);
		
		$smarty->assign('pageTitle', 'Корзина');
		//$smarty->assign('rsCategories', $rsCategories);
		//$smarty->assign('rsProducts', $rsProducts);
		
		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'cart');
		loadTemplate($smarty, 'footer');
	}
?>