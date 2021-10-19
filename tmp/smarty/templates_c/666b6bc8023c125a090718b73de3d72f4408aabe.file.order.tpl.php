<?php /* Smarty version Smarty-3.1.6, created on 2021-10-17 17:49:12
         compiled from "../views/default\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10499459455fb65cf1d895a9-49863916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666b6bc8023c125a090718b73de3d72f4408aabe' => 
    array (
      0 => '../views/default\\order.tpl',
      1 => 1634482135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10499459455fb65cf1d895a9-49863916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fb65cf1df529',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb65cf1df529')) {function content_5fb65cf1df529($_smarty_tpl) {?><div class="ordering">

	<div class="cart__back" onclick="window.history.back();">← Вернуться в корзину</div>

	<div class="cart__title">Оформление заказа</div>

	<div class="cart__hr" id="cartHr"></div>
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
" href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
					alt="Восстановить элемент"><img src="/petunia/www/images/plus-icon.svg" style="transform: rotate(45deg);"
						alt=""></a>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="cart__hr"></div>
	<div class="cart__sum">
		<br>ИТОГО: <span id="sumPrice"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</span> руб.<br>
	</div>

	<div class="ordering__info">

		<div class="ordering__contacts">
			<input type="email" class="ordering__input" placeholder="Ваш e-mail">
			<input type="text" class="ordering__input" placeholder="Ваши ФИО">
			<input data-tel-input class="ordering__input" placeholder="Ваш номер телефона">
		</div>

		<div class="ordering__name">Доставка</div>

		<div class="ordering__delivery">
			<input type="text" class="ordering__input" placeholder="Регион">
			<input type="text" class="ordering__input" placeholder="Город">
			<div class="ordering__wrapper">
				<input type="text" class="ordering__input" id="home" placeholder="Улица, дом, квартира">
				<input type="number" class="ordering__input" placeholder="Почтовый индекс">
			</div>
		</div>

		<div class="ordering__name">Способ доставки</div>

		<div class="ordering__del">
			<label for="post" class="ordering__label">
				<div id="" class="ordering__checkbox checked"></div>
				Почта России - 350 руб.
			</label>
			<label for="sdeck" class="ordering__label">
				<div id="" class="ordering__checkbox"></div> СДЭК - 300 руб.
			</label>
			<label for="self" class="ordering__label">
				<div id="" class="ordering__checkbox"></div>
				Самовывоз
			</label>
		</div>

		<textarea class="ordering__comment" placeholder="Комментарий к заказу"></textarea>

	</div>

	<div class="ordering__button">К оплате</div>

</div><?php }} ?>