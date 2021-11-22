<div class="ordering">

	<div class="cart__back" onclick="window.history.back();">← Вернуться в корзину</div>

	<div class="cart__title">Оформление заказа</div>

	<div class="cart__hr" id="cartHr1"></div>
	<div class="cart__items">
		{foreach $rsProducts as $item name=products}
		<div class="cart__item">
			<img src="/petunia/www/images/products/{$item['image']}" alt="" class="cart__img">

			<div class="cart__name">{$item['name']}</div>
			<div class="cart__color"><span>Цвет:</span> {$item['color']}</div>
			<div class="cart__size" style="flex-direction: row;"><span
					style="display: block !important; margin-right: 5px;">Размер:
				</span>{if
				$item['size'] ==
				1}черенок{else if $item['size'] ==
				2}кустик{else if $item['size'] == 3}большой куст{/if}</div>
			<div class="cart__count">
				<div class="item__plus" id="plus">+
				</div>
				<input name="cartCnt_{$item['id']}" type="number" disabled value="{$item['count']}"
					class="item__input order__count">
				<div class="item__minus" id="minus">
					-
				</div>
			</div>
			<div class="cart__prc order__price"><span>{if $item['size'] == 1}{$item['priceS']}{else if
					$item['size'] ==
					2}{$item['priceM']}{else if $item['size'] == 3}{$item['priceL']}{/if}</span> руб.</div>
			<div class="cart__price order__realprice"><span id="cartRealPrice_{$item['id']}" class="realprice">
				</span></div>

		</div>
		{/foreach}
	</div>
	<div class="cart__hr"></div>
	<div class="cart__sum">
		<br>ИТОГО: <span id="Price">{$sum}</span> руб.<br>
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

</div>