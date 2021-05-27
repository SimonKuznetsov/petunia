<?php /* Smarty version Smarty-3.1.6, created on 2021-02-05 15:51:00
         compiled from "../views/admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9313423925fbbabb637c360-99185514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57e82fa5ed0880e976fb6af9573ee08cc54de83' => 
    array (
      0 => '../views/admin\\adminHeader.tpl',
      1 => 1612529458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9313423925fbbabb637c360-99185514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbbabb645b4b',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbbabb645b4b')) {function content_5fbbabb645b4b($_smarty_tpl) {?>
<html>

<head>
   <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="/php%20shop/www/templates/admin/js/admin.js"></script>
   <script src="/php%20shop/www/templates/admin/js/pagination.js"></script>
   <script src="https://kit.fontawesome.com/e739369670.js" crossorigin="anonymous"></script>
</head>

<body style="min-width: 767px;">

   <header class="admin-header">
      <h1 class="main-title">Управление сайтом</h1>

      <div>
         <a class="header__main-button" href="/php%20shop/www/?controller=admin&action=addcategory">Главная</a><br>
      </div>
      <div>
         <a class="header__main-button" href="/php%20shop/www/?controller=admin&action=category">Категории</a><br>
      </div>
      <div>
         <a class="header__main-button" href="/php%20shop/www/?controller=admin&action=products">Товар</a><br>
      </div>
      <div>
         <a class="header__main-button" href="/php%20shop/www/?controller=admin&action=orders">Заказы</a><br>
      </div>
      <div>
         <a class="header__main-button" href="/php%20shop/www/">На сайт</a><br>
      </div>
      <div>
         <a href="/php%20shop/www/?controller=admin&action=logout" class="admin-header__logout">Выход</a>
      </div>
   </header>


   <div id="centerColumn"><?php }} ?>