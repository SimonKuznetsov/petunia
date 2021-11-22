<div class="index-page">

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
			{foreach $rsCategories as $item name=catalog}
			<div class="menu__item">
				<div class="menu__title">{$item['name']}</div>
				{if isset($item['children'])}
				{foreach $item['children'] as $itemChild}
				<a href="/petunia/www/?controller=category&id={$itemChild['id']}">
					<div class="menu__child">{$itemChild['name']}</div>
				</a>
				{/foreach}
				{/if}
			</div>
			{/foreach}
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

			{foreach $rsBestOfferProducts as $item name=products}

			<div class="main__product product">
				<a href="/petunia/www/?controller=product&id={$item['id']}/"><img
						src="/petunia/www/images/products/{$item['image']}" alt="" class="product__img"></a>

				<div class="product__description">
					<a href="/petunia/www/?controller=product&id={$item['id']}/">
						<div class="product__title">{$item['name']}</div>
					</a>

					<div class="product__desc">{$item['description']}</div>

					<div class="product__price">
						<span id="productPrice2_{$item['id']}">{$item['priceM']} </span>
						<span style="display: none;" id="productPrice1_{$item['id']}">{$item['priceS']} </span>
						<span style="display: none;" id="productPrice3_{$item['id']}">{$item['priceL']} </span> руб.
					</div>

					<div class="product__size">
						размер:
						<select class="product__select" id="productCnt_{$item['id']}"
							onchange="changePrice({$item['id']}); addToCart({$item['id']}); return false;">
							<option value="1">черенок</option>
							<option value="2" selected="selected">кустик</option>
							<option value="3">большой куст</option>
						</select>
					</div>

					<a class="{if ! in_array($item['id'], $cart)}none{/if}" id="removeCart_{$item['id']}"
						href="/petunia/www/?controller=cart&action=removefromcart&id={$item['id']}"
						onclick="removeFromCart({$item['id']}, 2); return false;">
						<div class="product__button">Удалить</div>
					</a>
					<a class="{if in_array($item['id'], $cart)}none{/if}" id="addCart_{$item['id']}"
						href="/petunia/www/?controller=cart&action=addtocart&id={$item['id']}" {if $itemInCart} class="none"
						{/if} onclick="addToCart({$item['id']}); return false;">
						<div class="product__button">В корзину</div>
					</a>

					<div class="product__love">
						<img src="/petunia/www/images/empty_hurt-icon.png" alt="">
						<img src="/petunia/www/images/full_hurt-icon.png" alt="">
					</div>

					<div class="product__sum">
						<div class="item__plus" id="plus"
							onclick="countIndexPlus({$item['id']}); indexAddToCart({$item['id']});">
							+
						</div>
						<input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="number" value="1"
							class="item__input" onchange="indexAddToCart({$item['id']}); return false;">
						<div class="item__minus" id="minus"
							onclick="countIndexMinus({$item['id']}); indexAddToCart({$item['id']});">
							-
						</div>
					</div>
				</div>
			</div>
			{/foreach}
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
</script>