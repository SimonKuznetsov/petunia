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
				<div class="menu__child">{$itemChild['name']}</div>
				{/foreach}
				{/if}
			</div>
			{/foreach}
		</div>

		<div class="main__products">

			{foreach $rsBestOfferProducts as $item name=products}

			<div class="main__product product">
				<img src="/petunia/www/images/products/1.png" alt="" class="product__img">

				<div class="product__description">
					<a href="/petunia/www/?controller=product&id={$item['id']}/">
						<div class="product__title">{$item['name']}</div>
					</a>

					<div class="product__desc">{$item['description']}</div>

					<div class="product__price">{$item['price']} руб.</div>

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

			{/foreach}

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