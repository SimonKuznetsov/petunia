<?php /* Smarty version Smarty-3.1.6, created on 2020-12-30 15:27:00
         compiled from "../views/admin\adminLeftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3768443555fbbabb648ede9-57570324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acec6194b13479678294930a7c057116aedb8b86' => 
    array (
      0 => '../views/admin\\adminLeftcolumn.tpl',
      1 => 1609331217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3768443555fbbabb648ede9-57570324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbbabb648f52',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbbabb648f52')) {function content_5fbbabb648f52($_smarty_tpl) {?>

<div id="leftColumn">
   <div id="leftMenu">
      <h3>Меню:</h3>
      <a class="main-link" href="/php%20shop/www/?controller=admin&action=addcategory">Главная</a><br>
      <a class="main-link" href="/php%20shop/www/?controller=admin&action=category">Категории</a><br>
      <a class="main-link" href="/php%20shop/www/?controller=admin&action=products">Товар</a><br>
      <a class="main-link" href="/php%20shop/www/?controller=admin&action=orders">Заказы</a><br>
      <a class="main-link" href="/php%20shop/www/">На сайт</a><br>
   </div>
</div><?php }} ?>