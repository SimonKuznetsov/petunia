{* хедер *}
<html>

<head>
   <title>{$pageTitle}</title>
   <link rel="stylesheet" href="{$teplateWebPath}css/admin.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="/petunia/www/templates/admin/js/admin.js"></script>
</head>

<body>

   <div class="aheader">
      <div class="aheader__item">
         <a class="aheader__link" href="/petunia/www/?controller=admin&action=category">Категории</a><br>
      </div>
      <div class="aheader__item">
         <a class="aheader__link" href="/petunia/www/?controller=admin&action=products">Товар</a><br>
      </div>
      <div class="aheader__item">
         <a class="aheader__link" href="/petunia/www/?controller=admin&action=orders">Заказы</a><br>
      </div>
		<div class="aheader__item">
         <a class="aheader__link" href="/petunia/www/?controller=admin&action=goods">Остатки</a><br>
      </div>
      <div class="aheader__item">
         <a class="aheader__link" href="/petunia/www/">На сайт</a><br>
      </div>
      <div class="aheader__item">
         <a href="/petunia/www/?controller=admin&action=logout" class="aheader__logout">Выход</a>
      </div>
   </div>
