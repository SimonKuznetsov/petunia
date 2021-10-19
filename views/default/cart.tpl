{if ! $rsProducts}
<div class="cart__empty">
	<div class="cart__back" onclick="window.history.back();">← Вернуться к покупкам</div>
	В корзине пусто...
</div>
{else}

<div class="cart">

	<div class="cart__back" onclick="window.history.back();">← Вернуться к покупкам</div>

	<div class="cart__title">Корзина</div>

	<div class="cart__hr" id="cartHr"></div>
	<form action="/petunia/www/?controller=cart&action=order" method="POST">
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
					<a id="removeCart_{$item['id']}"
						href="/petunia/www/?controller=cart&action=removefromcart&id={$item['id']}"
						onclick="removeFromCart({$item['id']}); conversionPrice({$item['id']}); styleCart({$item['id']}); return false;"
						alt="Удалить из корзины"><img src="/petunia/www/images/plus-icon.svg" alt=""></a>
					<a id="addCart_{$item['id']}" href="/petunia/www/?controller=cart&action=addtocart&id={$item['id']}"
						class="none"
						onclick="addToCart({$item['id']}); conversionPrice({$item['id']}); unstyleCart({$item['id']}); return false;"
						alt="Восстановить элемент"><img src="/petunia/www/images/plus-icon.svg"
							style="transform: rotate(45deg);" alt=""></a>
				</div>
			</div>
			{/foreach}
		</div>
		<div class="cart__hr"></div>
		<div class="cart__sum">
			<br>ИТОГО: <span id="sumPrice">{$sum}</span> руб.<br>
		</div>

		<div class="cart__wrapper">
			<button class="cart__button">Оформить заказ</button>
		</div>
	</form>

</div>
{/if}