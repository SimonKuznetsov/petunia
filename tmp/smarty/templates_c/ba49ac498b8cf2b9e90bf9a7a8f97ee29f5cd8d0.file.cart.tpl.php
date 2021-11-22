<?php /* Smarty version Smarty-3.1.6, created on 2021-11-22 19:35:59
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19634968215f9f69d6b180f0-86120771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1637598957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19634968215f9f69d6b180f0-86120771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9f69d6bcc60',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'rsGoods' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9f69d6bcc60')) {function content_5f9f69d6bcc60($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
<div class="cart__empty">
	<div class="cart__back" onclick="window.history.back();">← Вернуться к покупкам</div>
	В корзине пусто...
</div>
<?php }else{ ?>

<div class="cart">

	<div class="cart__back" onclick="window.history.back();">← Вернуться к покупкам</div>

	<div class="cart__title">Корзина</div>

	<div class="cart__hr" id="cartHr"></div>
	<form action="/petunia/www/?controller=cart&action=order" method="POST">
		<div class="cart__items">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="cart__item">
				<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img
						src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" class="cart__img"></a>


				<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
					<div class="cart__name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
				</a>
				<div class="cart__color"><span>Цвет:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
</div>
				<div class="cart__size"><span>Размер:</span><select
						onchange="startAddAction(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); document.location.reload();"
						class="cart__select" id="cartSize<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<option <?php if ($_smarty_tpl->tpl_vars['item']->value['size']==1){?> selected="selected" <?php }?> value="1">черенок
						</option>
						<option <?php if ($_smarty_tpl->tpl_vars['item']->value['size']==2){?> selected="selected" <?php }?> value="2">кустик
						</option>
						<option <?php if ($_smarty_tpl->tpl_vars['item']->value['size']==3){?> selected="selected" <?php }?> value="3">большой
							куст</option>
					</select></div>
				<div class="cart__count">
					<div class="item__plus" id="plus"
						onclick="countPlus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); maxValue(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
, <?php echo $_smarty_tpl->tpl_vars['rsGoods']->value[$_smarty_tpl->tpl_vars['item']->value['id']][$_smarty_tpl->tpl_vars['item']->value['size']];?>
); changeParams(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
);">
						+
					</div>
					<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number"
						value="<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
"
						oninput="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); maxValue(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
, <?php echo $_smarty_tpl->tpl_vars['rsGoods']->value[$_smarty_tpl->tpl_vars['item']->value['id']][$_smarty_tpl->tpl_vars['item']->value['size']];?>
); changeParams(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
);"
						class="item__input">
					<div class="item__minus" id="minus"
						onclick="countMinus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); maxValue(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
, <?php echo $_smarty_tpl->tpl_vars['rsGoods']->value[$_smarty_tpl->tpl_vars['item']->value['id']][$_smarty_tpl->tpl_vars['item']->value['size']];?>
); changeParams(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
);">
						-
					</div>
				</div>
				<div class="cart__prc" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<div <?php if ($_smarty_tpl->tpl_vars['item']->value['size']!=1){?> style="display: none;" <?php }else{ ?> class="exCartPrice<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						<?php }?> id="itemPrice1_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceS'];?>
</div>
					<div <?php if ($_smarty_tpl->tpl_vars['item']->value['size']!=2){?> style="display: none;" <?php }else{ ?> class="exCartPrice<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						<?php }?> id="itemPrice2_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceM'];?>
</div>
					<div <?php if ($_smarty_tpl->tpl_vars['item']->value['size']!=3){?> style="display: none;" <?php }else{ ?> class="exCartPrice<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						<?php }?> id="itemPrice3_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceL'];?>
</div>
					руб.
				</div>
				<div class="cart__price"><span id="itemRealPrice<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="realprice">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

					</span> руб.</div>
				<div class="cart__remove">
					<a id="removeCart<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); styleCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); return false;"
						alt="Удалить из корзины"><img src="/petunia/www/images/plus-icon.svg" alt=""></a>
					<a id="addCart<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="none"
						onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); unstyleCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
); return false;"
						alt="Восстановить элемент"><img src="/petunia/www/images/plus-icon.svg"
							style="transform: rotate(45deg);" alt=""></a>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="cart__hr"></div>
		<div class="cart__sum">
			<br>ИТОГО: <span id="sumPrice"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</span> руб.<br>
		</div>

		<div class="cart__wrapper">
			<button type="submit" class="cart__button">Оформить заказ</button>
		</div>
	</form>

</div>
<?php }?><?php }} ?>