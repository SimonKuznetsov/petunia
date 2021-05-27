<?php
	 /*
   *  Контроллер функций пользователя
   */


   // Подключаем модели
  /* include_once '../models/CategoriesModel.php';
   include_once '../models/OrdersModel.php';
   include_once '../models/UsersModel.php';
   include_once '../models/PurchaseModel.php';*/

	/*
   *  Формирование главной страницы пользователя
   * 
   *  @param object $smarty шаблонизатор
   */
	function indexAction($smarty) {
		// Если пользователь не залогинен, то редирект на гланую страницу
		/*if (! isset($_SESSION['user'])) {
			redirect('/php%20shop/www/');
		}*/

		// Получаем список категорий для меню
		//$rsCategories = getAllMainCatsWithChildren();

		// Получение списка заказов пользователя
		//$rsUserOrders = getCurUserOrders();
		
		$smarty->assign('pageTitle', 'Страница пользователя');
		//$smarty->assign('rsCategories', $rsCategories);
		//$smarty->assign('rsUserOrders', $rsUserOrders);
		
		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'user');
		loadTemplate($smarty, 'footer');
	}
?>