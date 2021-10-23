<?php
   /*
   *  Контроллер страницы товара
   */
  

   // Подключаем модели
   include_once '../models/CategoriesModel.php';
   include_once '../models/ProductsModel.php';

   /*
   *  Формирование страницы продукта
   * 
   *  @param object $smarty шаблонизатор
   */
   function indexAction($smarty) {
      $itemId = isset($_GET['id']) ? $_GET['id'] : null;
      if ($itemId == null) exit(); 
      
      // Получить данные продукта
      $rsProduct = getProductById($itemId);

      // Получить все категории
      $rsCategories = getAllMainCatsWithChildren(); 

      $smarty->assign('itemInCart', 0);
      if (in_array($itemId, $_SESSION['cart'])) {
         $smarty->assign('itemInCart', 1);
      }
		$rsMainCategories = getAllMainCategories();
		$smarty->assign('rsMainCategories', $rsMainCategories);
      
      $smarty->assign('pageTitle', $rsProduct['name']);
      $smarty->assign('rsCategories', $rsCategories);
      $smarty->assign('rsProduct', $rsProduct);

      loadTemplate($smarty, 'header');
      loadTemplate($smarty, 'product');
      loadTemplate($smarty, 'footer');
   }
?>