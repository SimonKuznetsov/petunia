<?php /* Smarty version Smarty-3.1.6, created on 2021-10-21 21:31:56
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2475568085f99a916e1adb9-49004720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1634841072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2475568085f99a916e1adb9-49004720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f99a916f1a00',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
    'cartCntItems' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f99a916f1a00')) {function content_5f99a916f1a00($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/style.css">
	<link rel="icon" href="/petunia/www/images/icon.png">
</head>

<body onload="conversionPrice(1);">

	<div class="index-page__line line">

		<div class="line__menu">
			<div class="line__hamburger">
				<div class="line__line"></div>
				<div class="line__line"></div>
				<div class="line__line"></div>
			</div>

			<div class="line__info">
				<a href="/petunia/www/?controller=index&action=page&page=delivery">
					<div class="line__text">Доставка</div>
				</a>
				<a href="/petunia/www/?controller=index&action=page&page=pay">
					<div class="line__text">Оплата</div>
				</a>
			</div>
		</div>

		<div class="line__phone">
			<a href="tel:+79956565137">+7 (995) 656 61 37</a>
		</div>

		<div class="line__icons">

			<a href="">
				<img src="/petunia/www/images/search-icon.png" alt="">
			</a>

			<a href="/petunia/www/?controller=user">
				<img src="/petunia/www/images/user-icon.png" alt="">
			</a>

			<a class="line__cart" href="/petunia/www/?controller=cart">
				<img src="/petunia/www/images/cart-icon.png" alt="">
				<span id="cartCntItems" class="line__count <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value==0){?>none<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>0<?php }?>
				</span>
			</a>

		</div>

		<div class="line__mobil close">
			<a href="/petunia/www/#" class="line__item">
				<div>Каталог</div>
			</a>
			<a href="/petunia/www/#about" class="line__item">
				<div>О нас</div>
			</a>
			<a href="/petunia/www/?controller=index&action=page&page=delivery" class="line__item">
				<div>Доставка</div>
			</a>
			<a href="/petunia/www/?controller=index&action=page&page=pay" class="line__item">
				<div>Оплата</div>
			</a>
			<a href="/petunia/www/#footer" class="line__item">
				<div>Контакты</div>
			</a>
		</div>


	</div>

	<div class="small-header">
		<div class="small-header__catalog">каталог ▼</div>
		<a href="/petunia/www/#about">
			<div class="small-header__about">о нас</div>
		</a>
		<a href="#footer">
			<div class="small-header__contacts">контакты</div>
		</a>
		<div class="menu">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="menu__item">
				<div class="menu__title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
				<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
				<?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
				<a href="/petunia/www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
">
					<div class="menu__child"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</div>
				</a>
				<?php } ?>
				<?php }?>
			</div>
			<?php } ?>
		</div>
	</div><?php }} ?>