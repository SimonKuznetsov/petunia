<div class="product-item">
	<div class="product-item__back" onclick="window.history.back();">← Вернуться к покупкам</div>


	<div class="product-item__slider">
		<div class="product-item__wrapper">
			<img class="product-item__image a a1 on" src="/petunia/www/images/products/{$rsProduct['image1']}" alt="no">
			<img class="product-item__image b b1" src="/petunia/www/images/products/{$rsProduct['image2']}" alt="no">
			<img class="product-item__image c c1" src="/petunia/www/images/products/{$rsProduct['image3']}" alt="no">
			<img class="product-item__image d d1" src="/petunia/www/images/products/{$rsProduct['image4']}" alt="no">
			<img class="product-item__image e e1" src="/petunia/www/images/products/{$rsProduct['image5']}" alt="no">
			<div class="product-item__left"><img src="/petunia/www/images/left-icon.png" alt=""></div>
			<div class="product-item__right"><img src="/petunia/www/images/right-icon.png" alt=""></div>
			<div class="product-item__dots">
				<div class="aa"></div>
				<div class="bb"></div>
				<div class="cc"></div>
				<div class="dd"></div>
				<div class="ee"></div>
			</div>
		</div>
	</div>

	<div class="product-item__description">
		<div class="product-item__name">{$rsProduct['name']}</div>
		<div class="product-item__desc">{$rsProduct['fullDesc']}
			<div class="product-item__color"><span>Цвет:</span> {$rsProduct['color']}</div>
		</div>


		<div class="product-item__price"><span id="productPrice2_{$rsProduct['id']}">{$rsProduct['priceM']} </span>
			<span style="display: none;" id="productPrice1_{$rsProduct['id']}">{$rsProduct['priceS']} </span>
			<span style="display: none;" id="productPrice3_{$rsProduct['id']}">{$rsProduct['priceL']} </span> руб.
		</div>

		<div class="product-item__size">
			размер:
			<select class="product__select" id="productCnt_{$rsProduct['id']}"
				onchange="changePrice({$rsProduct['id']}); addToCart({$rsProduct['id']}); return false;">
				<option value="1">черенок</option>
				<option value="2" selected="selected">кустик</option>
				<option value="3">большой куст</option>
			</select>
		</div>

		<div class="product-item__count">
			Количество:
			<input name="itemCnt_{$rsProduct['id']}" id="itemCnt_{$rsProduct['id']}" type="number" value="1"
				class="item__input" onchange="indexAddToCart({$rsProduct['id']}); return false;">
		</div>

		<div class="product-item__cart">
			<a class="{if ! in_array($rsProduct['id'], $cart)}none{/if}" id="removeCart_{$rsProduct['id']}"
				href="/petunia/www/?controller=cart&action=removefromcart&id={$rsProduct['id']}"
				onclick="removeFromCart({$rsProduct['id']}, 2); return false;">
				<div class="product-item__button">Удалить</div>
			</a>
			<a class="{if in_array($rsProduct['id'], $cart)}none{/if}" id="addCart_{$rsProduct['id']}"
				href="/petunia/www/?controller=cart&action=addtocart&id={$rsProduct['id']}" {if $itemInCart} class="none"
				{/if} onclick="addToCart({$rsProduct['id']}); return false;">
				<div class="product-item__button">В корзину</div>
			</a>
		</div>

		<div class="product-item__love">
			Сохраните товар в избранном:
			<div class="product-item__tolove">
				<img src="/petunia/www/images/empty_hurt-icon.png" alt="">
				<img src="/petunia/www/images/full_hurt-icon.png" alt="">
				В избранное
			</div>
		</div>

		<div class="product-item__pay">
			<img src="/petunia/www/images/pay-icon1.png" alt="">
			<img src="/petunia/www/images/pay-icon2.png" alt="">
			<img src="/petunia/www/images/pay-icon3.png" alt="">
		</div>
	</div>

	<hr>
	<div class="product-item__title">С этим товаром смотрят:</div>
	<div class="product-item__with"></div>
</div>