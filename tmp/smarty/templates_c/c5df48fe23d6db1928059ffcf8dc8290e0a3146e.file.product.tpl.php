<?php /* Smarty version Smarty-3.1.6, created on 2021-09-14 17:04:35
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5719897655f9c34b707f236-49613022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1631628273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5719897655f9c34b707f236-49613022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9c34b70ec4c',
  'variables' => 
  array (
    'rsProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9c34b70ec4c')) {function content_5f9c34b70ec4c($_smarty_tpl) {?><div class="product-item">
	<div class="product-item__back" onclick="window.history.back();">← Вернуться к покупкам</div>


	<div class="product-item__images"></div>
	<div class="product-item__slider">
		<img src="/petunia/www/images/products/1.png" alt="">
	</div>

	<div class="product-item__description">
		<div class="product-item__name"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</div>
		<div class="product-item__desc"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['fullDesc'];?>
</div>
		<div class="product-item__color">Цвет: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['color'];?>
</div>
	</div>

	<div class="product-item__tools">
		<div class="product-item__price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 руб.</div>

		<div class="product-item__size">
			размер:
			<select class="product-item__select">
				<option value="s">s</option>
				<option value="m">m</option>
				<option value="l">l</option>
			</select>
		</div>

		<div class="product-item__count">
			Количество:
			<input type="number" value="1">
		</div>

		<a href="" class="product-item__cart">
			<div class="product-item__button">В корзину</div>
		</a>

		<div class="product-item__love">
			Сохраните товар в избранном:
			<div class="product-item__tolove">
				<img src="/petunia/www/images/empty_hurt-icon.png" alt="">
				<img src="/petunia/www/images/full_hurt-icon.png" alt="">
				В избранное
			</div>
		</div>

		<div class="product-item__pay">
			<img src="/petunia/www/images/pay-icon1.png" alt="">
			<img src="/petunia/www/images/pay-icon2.png" alt="">
			<img src="/petunia/www/images/pay-icon3.png" alt="">
		</div>
	</div>

	<hr>
	<div class="product-item__title">С этим товаром смотрят:</div>
	<div class="product-item__with"></div>
</div><?php }} ?>