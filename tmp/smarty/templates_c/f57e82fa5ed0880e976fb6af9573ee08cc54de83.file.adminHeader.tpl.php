<?php /* Smarty version Smarty-3.1.6, created on 2021-11-18 20:21:08
         compiled from "../views/admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9313423925fbbabb637c360-99185514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57e82fa5ed0880e976fb6af9573ee08cc54de83' => 
    array (
      0 => '../views/admin\\adminHeader.tpl',
      1 => 1637256067,
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
css/admin.css">
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
<?php }} ?>