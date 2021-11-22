<?php /* Smarty version Smarty-3.1.6, created on 2021-11-19 20:45:02
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5719897655f9c34b707f236-49613022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1637343900,
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
    'cart' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9c34b70ec4c')) {function content_5f9c34b70ec4c($_smarty_tpl) {?><div class="product-item">
	<div class="product-item__back" onclick="window.history.back();">← Вернуться к покупкам</div>


	<div class="product-item__slider">
		<div class="product-item__wrapper">
			<img class="product-item__image a a1 on" src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image1'];?>
" alt="no">
			<img class="product-item__image b b1" src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image2'];?>
" alt="no">
			<img class="product-item__image c c1" src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image3'];?>
" alt="no">
			<img class="product-item__image d d1" src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image4'];?>
" alt="no">
			<img class="product-item__image e e1" src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image5'];?>
" alt="no">
			<div class="product-item__left"><img src="/petunia/www/images/left-icon.png" alt=""></div>
			<div class="product-item__right"><img src="/petunia/www/images/right-icon.png" alt=""></div>
			<div class="product-item__dots">
				<div class="aa"></div>
				<div class="bb"></div>
				<div class="cc"></div>
				<div class="dd"></div>
				<div class="ee"></div>
			</div>
		</div>
	</div>

	<div class="product-item__description">
		<div class="product-item__name"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</div>
		<div class="product-item__desc"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['fullDesc'];?>

			<div class="product-item__color"><span>Цвет:</span> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['color'];?>
</div>
		</div>


		<div class="product-item__price"><span id="productPrice2_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['priceM'];?>
 </span>
			<span style="display: none;" id="productPrice1_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['priceS'];?>
 </span>
			<span style="display: none;" id="productPrice3_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['priceL'];?>
 </span> руб.
		</div>

		<div class="product-item__size">
			размер:
			<select class="product__select" id="productCnt_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
				onchange="changePrice(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;">
				<option value="1">черенок</option>
				<option value="2" selected="selected">кустик</option>
				<option value="3">большой куст</option>
			</select>
		</div>

		<div class="product-item__count">
			Количество:
			<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" type="number" value="1"
				class="item__input" onchange="indexAddToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;">
		</div>

		<div class="product-item__cart">
			<a class="<?php if (!in_array($_smarty_tpl->tpl_vars['rsProduct']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>none<?php }?>" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
				href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
				onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
, 2); return false;">
				<div class="product-item__button">Удалить</div>
			</a>
			<a class="<?php if (in_array($_smarty_tpl->tpl_vars['rsProduct']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>none<?php }?>" id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
				href="/petunia/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="none"
				<?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;">
				<div class="product-item__button">В корзину</div>
			</a>
		</div>

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