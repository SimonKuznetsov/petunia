<?php /* Smarty version Smarty-3.1.6, created on 2021-09-14 16:53:46
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2475568085f99a916e1adb9-49004720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1631627624,
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

<body>

	<div class="index-page__line line">

		<div class="line__menu">
			<div class="line__hamburger">
				<div class="line__line"></div>
				<div class="line__line"></div>
				<div class="line__line"></div>
			</div>

			<div class="line__info">
				<div class="line__text">Доставка</div>
				<div class="line__text">Оплата</div>
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

			<a href="/petunia/www/?controller=cart">
				<img src="/petunia/www/images/cart-icon.png" alt="">
			</a>

		</div>

		<div class="line__mobil close">
			<div class="line__item">Каталог</div>
			<div class="line__item">О нас</div>
			<div class="line__item">Доставка</div>
			<div class="line__item">Оплата</div>
			<div class="line__item">Контакты</div>
		</div>


	</div>

	<div class="small-header">
		<div class="small-header__catalog">каталог ▼</div>
		<a href="#about">
			<div class="small-header__about">о нас</div>
		</a>
		<a href="#footer">
			<div class="small-header__contacts">контакты</div>
		</a>
	</div><?php }} ?>