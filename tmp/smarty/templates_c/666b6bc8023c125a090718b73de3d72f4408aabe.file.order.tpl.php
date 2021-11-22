<?php /* Smarty version Smarty-3.1.6, created on 2021-11-22 15:54:52
         compiled from "../views/default\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10499459455fb65cf1d895a9-49863916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666b6bc8023c125a090718b73de3d72f4408aabe' => 
    array (
      0 => '../views/default\\order.tpl',
      1 => 1637585557,
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

	<div class="cart__hr" id="cartHr1"></div>
	<div class="cart__items">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="cart__item">
			<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" class="cart__img">

			<div class="cart__name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
			<div class="cart__color"><span>Цвет:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
</div>
			<div class="cart__size" style="flex-direction: row;"><span
					style="display: block !important; margin-right: 5px;">Размер:
				</span><?php if ($_smarty_tpl->tpl_vars['item']->value['size']==1){?>черенок<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==2){?>кустик<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==3){?>большой куст<?php }?></div>
			<div class="cart__count">
				<div class="item__plus" id="plus">+
				</div>
				<input name="cartCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" disabled value="<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
"
					class="item__input order__count">
				<div class="item__minus" id="minus">
					-
				</div>
			</div>
			<div class="cart__prc order__price"><span><?php if ($_smarty_tpl->tpl_vars['item']->value['size']==1){?><?php echo $_smarty_tpl->tpl_vars['item']->value['priceS'];?>
<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==2){?><?php echo $_smarty_tpl->tpl_vars['item']->value['priceM'];?>
<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==3){?><?php echo $_smarty_tpl->tpl_vars['item']->value['priceL'];?>
<?php }?></span> руб.</div>
			<div class="cart__price order__realprice"><span id="cartRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="realprice">
				</span></div>

		</div>
		<?php } ?>
	</div>
	<div class="cart__hr"></div>
	<div class="cart__sum">
		<br>ИТОГО: <span id="Price"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</span> руб.<br>
	</div>

	<div class="ordering__info" id="orderInfo">

		<div class="ordering__contacts">
			<input type="email" id="email" class="ordering__input" placeholder="Ваш e-mail">
			<input type="text" id="name" class="ordering__input" placeholder="Ваши ФИО">
			<input data-tel-input class="ordering__input" id="phone" placeholder="Ваш номер телефона">
		</div>

		<div class="ordering__name">Доставка</div>

		<div class="ordering__delivery">
			<input type="text" id="region" class="ordering__input" placeholder="Регион">
			<input type="text" id="city" class="ordering__input" placeholder="Город">
			<div class="ordering__wrapper">
				<input type="text" id="place" class="ordering__input" id="home" placeholder="Улица, дом, квартира">
				<input type="number" id="index" class="ordering__input" placeholder="Почтовый индекс">
			</div>
		</div>

		<div class="ordering__name">Способ доставки</div>

		<div class="ordering__del">
			<label for="post" class="ordering__label" id="350">
				<div id="" class="ordering__checkbox checked"></div>
				Почта России - 350 руб.
			</label>
			<label for="sdeck" class="ordering__label" id="300">
				<div id="" class="ordering__checkbox"></div> СДЭК - 300 руб.
			</label>
			<label for="self" class="ordering__label" id="0">
				<div id="" class="ordering__checkbox"></div>
				Самовывоз
			</label>
		</div>

		<textarea class="ordering__comment" id="comment" placeholder="Комментарий к заказу"></textarea>

	</div>

	<div class="ordering__button" onclick="checkOrderParams();">К оплате</div>

</div><?php }} ?>