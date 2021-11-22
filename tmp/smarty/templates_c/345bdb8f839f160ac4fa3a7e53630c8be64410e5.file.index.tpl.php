<?php /* Smarty version Smarty-3.1.6, created on 2021-11-16 21:54:51
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17215895985f9930eabf4f03-59123257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1637088876,
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
    'cart' => 0,
    'itemInCart' => 0,
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
				<a href="/petunia/www/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
">
					<div class="menu__child"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</div>
				</a>
				<?php } ?>
				<?php }?>
			</div>
			<?php } ?>
		</div>

		<div class="main__products">

			<div class="main__line">
				<div class="main__filters">
					<img src="/petunia/www/images/filters-icon.png" alt="">
					<div class="main__filters-icon">фильтры</div>
				</div>

				<img id="searchFiltersImg" src="/petunia/www/images/black-search-icon.png" alt="">

				<div class="main__wrapper">
					<div class="main__hr"></div>
					<div class="main__item">сортировка <img src="/petunia/www/images/small-right-icon.png" alt="">
						<div class="main__sort">
							<select class="main__select">
								<option value="main">s</option>
								<option value="up">m</option>
								<option value="down">l</option>
							</select>
						</div>
					</div>
					<div class="main__hr"></div>
					<div class="main__item">цена <img src="/petunia/www/images/small-right-icon.png" alt=""></div>
					<div class="main__hr"></div>
					<div class="main__item">цвет <img src="/petunia/www/images/small-right-icon.png" alt=""></div>

					<div class="main__search">
						<form id="searchForm" action="/petunia/www/?controller=index&action=search" method="POST">
							<input class="main__input" type="text" name="search" placeholder="ПОИСК">
							<button type="submit" class="main__searching"><img src="/petunia/www/images/black-search-icon.png"
									alt=""></button>
						</form>
					</div>
					<div class="main__sort"></div>
				</div>
			</div>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsBestOfferProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

			<div class="main__product product">
				<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img
						src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" class="product__img"></a>

				<div class="product__description">
					<a href="/petunia/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
						<div class="product__title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
					</a>

					<div class="product__desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>

					<div class="product__price">
						<span id="productPrice2_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceM'];?>
 </span>
						<span style="display: none;" id="productPrice1_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceS'];?>
 </span>
						<span style="display: none;" id="productPrice3_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['priceL'];?>
 </span> руб.
					</div>

					<div class="product__size">
						размер:
						<select class="product__select" id="productCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
							onchange="changePrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
							<option value="1">черенок</option>
							<option value="2" selected="selected">кустик</option>
							<option value="3">большой куст</option>
						</select>
					</div>

					<a class="<?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>none<?php }?>" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						href="/petunia/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
						onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, 2); return false;">
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
						<div class="item__plus" id="plus"
							onclick="countIndexPlus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); indexAddToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
							+
						</div>
						<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" value="1"
							class="item__input" onchange="indexAddToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
						<div class="item__minus" id="minus"
							onclick="countIndexMinus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); indexAddToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
							-
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div style="width: 100%;">
				<div class="main__more aaa">Загрузить ещё</div>
			</div>

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