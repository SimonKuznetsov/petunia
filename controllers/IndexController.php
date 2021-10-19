<?php
   /*
   *   Контроллер главной страницы
   */


   // Подключаем модели
   include_once '../models/CategoriesModel.php';
   include_once '../models/ProductsModel.php';

   function testAction() {
      echo 'IndexController.php > testAction';
   }



   /* 
   *  Формирование главной страницы сайта
   * 
   *  @param object $smarty шаблонизатор
   */
   function indexAction($smarty) {
      /*// Пагинатор
      $paginator = array();
      $paginator['perPage'] = 6;
      $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;
      $paginator['offset'] = ($paginator['currentPage'] * $paginator['perPage']) - $paginator['perPage'];
      $paginator['link'] = '/php%20shop/www/?controller=index&page=';
      
      list($rsProducts, $allCnt) = getLastProducts($paginator['offset'], $paginator['perPage']);

      $paginator['pageCnt'] = ceil($allCnt / $paginator['perPage']);
      $smarty->assign('paginator', $paginator);*/

      $rsCategories = getAllMainCatsWithChildren();

		$rsMainCategories = getAllMainCategories();
		$rsBestOfferProducts = getBestOfferProducts();

		$cart = $_SESSION['cart'];
		
      $smarty->assign('pageTitle', 'Главная страница сайта');
      $smarty->assign('rsCategories', $rsCategories);
      //$smarty->assign('rsProducts', $rsProducts);
		$smarty->assign('rsMainCategories', $rsMainCategories);
      $smarty->assign('rsBestOfferProducts', $rsBestOfferProducts);
		$smarty->assign('cart', $cart);

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'index');
      loadTemplate($smarty, 'footer');
   }
?>