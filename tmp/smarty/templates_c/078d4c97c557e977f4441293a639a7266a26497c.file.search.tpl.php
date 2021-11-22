<?php /* Smarty version Smarty-3.1.6, created on 2021-10-26 21:21:24
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102596848601bf2654d03d6-21310602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1635272483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102596848601bf2654d03d6-21310602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_601bf26559c1f',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'searchedProducts' => 0,
    'cart' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_601bf26559c1f')) {function content_601bf26559c1f($_smarty_tpl) {?><div class="index-page">




	<div class="index-page__main main categories">

		<div class="cart__back" onclick="window.history.back();">← Вернуться к покупкам</div>

		<div class="main__title">Петуния <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</div>

		<div class="main__menu menu">
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
				<div class="menu__child"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</div>
				<?php } ?>
				<?php }?>
			</div>
			<?php } ?>
		</div>

		<div class="main__products">

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchedProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

			<div class="main__product product">
				<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img
						src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.png" alt="" class="product__img"></a>

				<div class="product__description">
					<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
						<div class="product__title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
					</a>

					<div class="product__desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>

					<div class="product__price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</div>

					<div class="product__size">
						размер:
						<select class="product__select">
							<option value="s">s</option>
							<option value="m">m</option>
							<option value="l">l</option>
						</select>
					</div>

					<a class="<?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>none<?php }?>" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
						<div class="product__button">Удалить</div>
					</a>
					<a class="<?php if (in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>none<?php }?>" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="none"
						<?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
						<div class="product__button">В корзину</div>
					</a>

					<div class="product__love">
						<img src="/petunia/www/images/empty_hurt-icon.png" alt="">
						<img src="/petunia/www/images/full_hurt-icon.png" alt="">
					</div>

					<div class="product__sum">
						<div class="item__plus" id="plus" onclick="countPlus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
							+
						</div>
						<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" value="1"
							oninput="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" class="item__input" max="999">
						<div class="item__minus" id="minus"
							onclick="countMinus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
							-
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			</div>
	</div>
</div><?php }} ?>