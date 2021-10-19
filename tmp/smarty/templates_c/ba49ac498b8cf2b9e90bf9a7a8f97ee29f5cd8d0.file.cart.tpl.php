<?php /* Smarty version Smarty-3.1.6, created on 2021-10-17 13:31:21
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19634968215f9f69d6b180f0-86120771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1634466659,
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
				<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.png" alt="" class="cart__img">

				<div class="cart__name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
				<div class="cart__color"><span>Цвет:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
</div>
				<div class="cart__size"><span>Размер:</span> S</div>
				<div class="cart__count">
					<div class="item__plus" id="plus" onclick="countPlus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">+
					</div>
					<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" value="1"
						oninput="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" class="item__input" max="999">
					<div class="item__minus" id="minus" onclick="countMinus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
						-
					</div>
				</div>
				<div class="cart__prc" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</div>
				<div class="cart__price"><span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="realprice">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

					</span> руб.</div>
				<div class="cart__remove">
					<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); styleCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"
						alt="Удалить из корзины"><img src="/petunia/www/images/plus-icon.svg" alt=""></a>
					<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="/petunia/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						class="none"
						onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); unstyleCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
			<button class="cart__button">Оформить заказ</button>
		</div>
	</form>

</div>
<?php }?><?php }} ?>