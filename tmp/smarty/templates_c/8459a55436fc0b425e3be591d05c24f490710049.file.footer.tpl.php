<?php /* Smarty version Smarty-3.1.6, created on 2021-09-14 15:34:05
         compiled from "../views/default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6748578085f99a9170672e5-51374682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8459a55436fc0b425e3be591d05c24f490710049' => 
    array (
      0 => '../views/default\\footer.tpl',
      1 => 1631622844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6748578085f99a9170672e5-51374682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f99a91706c49',
  'variables' => 
  array (
    'rsMainCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f99a91706c49')) {function content_5f99a91706c49($_smarty_tpl) {?><div class="index-page__advantage advantage">
	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/ground-icon.png">
		<div class="advantage__text">Выращиваем только самые лучшие побеги</div>

	</div>

	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/delivery-icon.png">
		<div class="advantage__text">Бережно и быстро доставим заказ в ваш дом</div>

	</div>

	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/plant-icon.png">
		<div class="advantage__text">Наша служба поддержки всегда поможет</div>

	</div>
</div>

<div class="footer" id="footer">
	<div class="footer__title">Продажа и доставка соротовых петуний</div>
	<div class="footer__adress">Королёв, Лесная д. 3</div>

	<div class="footer__catalog catalog">
		<div class="catalog__title">Каталог</div>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsMainCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="catalog__item">
			<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

		</div>
		<?php } ?>

	</div>

	<div class="footer__serves serves">
		<div class="serves__title">Сервисы</div>

		<div class="serves__item">О компании</div>
		<div class="serves__item">Оплата</div>
		<div class="serves__item">Доставка</div>
		<div class="serves__item">Контакты</div>
	</div>

	<div class="footer__phone"><a href="tel:79956565137">+7 (995) 656 51 37</a></div>

	<div class="footer__email">kuznetsovsimonm@gmail.com</div>

	<div class="footer__timetable">График работы с 9:00 до 20:00</div>

	<div class="footer__social">
		<img src="/petunia/www/images/whatsup-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/youtube-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/instagram-icon.png" alt="" class="footer__icon">
	</div>
</div>

<script src="/petunia/www/templates/default/js/script.js"></script>

</body>

</html><?php }} ?>