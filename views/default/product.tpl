<div class="product-item">
	<div class="product-item__back" onclick="window.history.back();">← Вернуться к покупкам</div>


	<div class="product-item__slider">
		<div class="product-item__wrapper">
			<img class="product-item__image a a1 on" src="/petunia/www/images/products/{$rsProduct['id']}_1.png" alt="no">
			<img class="product-item__image b b1" src="/petunia/www/images/products/{$rsProduct['id']}_2.png" alt="no">
			<img class="product-item__image c c1" src="/petunia/www/images/products/{$rsProduct['id']}_3.png" alt="no">
			<img class="product-item__image d d1" src="/petunia/www/images/products/{$rsProduct['id']}_4.png" alt="no">
			<img class="product-item__image e e1" src="/petunia/www/images/products/{$rsProduct['id']}_5.png" alt="no">
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


		<div class="product-item__price">{$rsProduct['price']} руб.</div>

		<div class="product-item__size">
			размер:
			<select class="product-item__select">
				<option value="s">s</option>
				<option value="m">m</option>
				<option value="l">l</option>
			</select>
		</div>

		<div class="product-item__count">
			Количество:
			<input type="number" value="1">
		</div>

		<a href="" class="product-item__cart">
			<div class="product-item__button">В корзину</div>
		</a>

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