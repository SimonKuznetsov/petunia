<?php /* Smarty version Smarty-3.1.6, created on 2021-09-14 16:53:46
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17215895985f9930eabf4f03-59123257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1631627612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17215895985f9930eabf4f03-59123257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9930eac679e',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'rsBestOfferProducts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9930eac679e')) {function content_5f9930eac679e($_smarty_tpl) {?><div class="index-page">

	<div class="index-page__header header">

		<div class="header__title">Продажа и доставка сортовых петуний</div>
		<div class="header__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
		<div class="header__button">В каталог</div>

		<div class="header__desctop">
			<div class="header__white"></div>

			<div class="header__nav nav">
				<a>
					<div class="nav__item">каталог</div>
				</a>
				<a href="#about">
					<div class="nav__item">о нас</div>
				</a>
				<a href="#footer">
					<div class="nav__item">контакты</div>
				</a>
			</div>

			<div class="header__brown">
				<div class="header__brown-text">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit.
				</div>
			</div>
		</div>
	</div>




	<div class="index-page__main main">

		<div class="main__title">Лучшие предложения</div>

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
 $_from = $_smarty_tpl->tpl_vars['rsBestOfferProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

			<div class="main__product product">
				<img src="/petunia/www/images/products/1.png" alt="" class="product__img">

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

					<a href="" class="product__cart">
						<div class="product__button">В корзину</div>
					</a>

					<div class="product__love">
						<img src="/petunia/www/images/empty_hurt-icon.png" alt="">
						<img src="/petunia/www/images/full_hurt-icon.png" alt="">
					</div>

					<div class="product__sum">
						<div class="product__minus">-</div>
						<div class="product__number">1</div>
						<div class="product__plus">+</div>
					</div>
				</div>
			</div>

			<?php } ?>

		</div>

	</div>




	<div id="about" style="height: 137px;"></div>
	<div class="index-page__about about">
		<img class="about__img" src="/petunia/www/images/about.png" alt="">
		<div class="about__wrapper">
			<div class="about__title">О нас</div>
			<div class="about__desc">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil explicabo iusto, veritatis
				ducimus fugiat dolorem? Nemo ducimus beatae quisquam id, in repellendus, possimus dolorem vel ex dicta
				aspernatur veniam laudantium quae. Eius quam est sit? Reprehenderit dolor, reiciendis odio rerum nostrum
				repellendus nam sint atque perferendis incidunt, ad, est laborum.
			</div>

			<div class="about__list list">
				<div class="list__item">
					<div class="list__wrapper">
						<div class="list__title">Lorem, ipsum dolor.</div>
						<div class="list__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos beatae nostrum quas
							repudiandae
							voluptatem adipisci quam vitae obcaecati explicabo dolorem!
						</div>
					</div>
					<div class="list__number">1</div>
				</div>
				<div class="list__item">
					<div class="list__wrapper">
						<div class="list__title">Lorem, ipsum dolor.</div>
						<div class="list__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos beatae nostrum quas
							repudiandae
							voluptatem adipisci quam vitae obcaecati explicabo dolorem!
						</div>
					</div>
					<div class="list__number">2</div>
				</div>
				<div class="list__item">
					<div class="list__wrapper">
						<div class="list__title">Lorem, ipsum dolor.</div>
						<div class="list__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos beatae nostrum quas
							repudiandae
							voluptatem adipisci quam vitae obcaecati explicabo dolorem!
						</div>
					</div>
					<div class="list__number">3</div>
				</div>
			</div>
		</div>
	</div>



</div>

<script>
	$(".small-header").addClass('move');

	$(window).scroll(function () {
		var top = $(document).scrollTop();
		var windowHeight = $(window).height();
		if (top < windowHeight - 49) $(".small-header").removeClass('fixed');
		else $(".small-header").addClass('fixed');
	});
</script><?php }} ?>