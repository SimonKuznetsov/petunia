<div class="ordering">

	<div class="cart__back" onclick="window.history.back();">← Вернуться в корзину</div>

	<div class="cart__title">Оформление заказа</div>

	<div class="cart__hr" id="cartHr"></div>
	<div class="cart__items">
		{foreach $rsProducts as $item name=products}
		<div class="cart__item">
			<img src="/petunia/www/images/products/{$item['id']}.png" alt="" class="cart__img">

			<div class="cart__name">{$item['name']}</div>
			<div class="cart__color"><span>Цвет:</span> {$item['color']}</div>
			<div class="cart__size"><span>Размер:</span> S</div>
			<div class="cart__count">
				<div class="item__plus" id="plus" onclick="countPlus({$item['id']}); conversionPrice({$item['id']});">+
				</div>
				<input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="number" value="1"
					oninput="conversionPrice({$item['id']});" class="item__input" max="999">
				<div class="item__minus" id="minus" onclick="countMinus({$item['id']}); conversionPrice({$item['id']});">
					-
				</div>
			</div>
			<div class="cart__prc" id="itemPrice_{$item['id']}">{$item['price']} руб.</div>
			<div class="cart__price"><span id="itemRealPrice_{$item['id']}" class="realprice">
					{$item['price']}
				</span> руб.</div>
			<div class="cart__remove">
				<a id="removeCart_{$item['id']}" href="/petunia/www/?controller=cart&action=removefromcart&id={$item['id']}"
					onclick="removeFromCart({$item['id']}); conversionPrice({$item['id']}); styleCart({$item['id']}); return false;"
					alt="Удалить из корзины"><img src="/petunia/www/images/plus-icon.svg" alt=""></a>
				<a id="addCart_{$item['id']}" href="/petunia/www/?controller=cart&action=addtocart&id={$item['id']}"
					class="none"
					onclick="addToCart({$item['id']}); conversionPrice({$item['id']}); unstyleCart({$item['id']}); return false;"
					alt="Восстановить элемент"><img src="/petunia/www/images/plus-icon.svg" style="transform: rotate(45deg);"
						alt=""></a>
			</div>
		</div>
		{/foreach}
	</div>
	<div class="cart__hr"></div>
	<div class="cart__sum">
		<br>ИТОГО: <span id="sumPrice">{$sum}</span> руб.<br>
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

</div>