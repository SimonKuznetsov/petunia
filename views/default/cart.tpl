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
				<a href="/petunia/www/?controller=product&id={$item['id']}/"><img
						src="/petunia/www/images/products/{$item['image']}" alt="" class="cart__img"></a>


				<a href="/petunia/www/?controller=product&id={$item['id']}/">
					<div class="cart__name">{$item['name']}</div>
				</a>
				<div class="cart__color"><span>Цвет:</span> {$item['color']}</div>
				<div class="cart__size"><span>Размер:</span><select
						onchange="startAddAction({$item['id']}, {$item['size']}); removeFromCart({$item['id']}, {$item['size']}); document.location.reload();"
						class="cart__select" id="cartSize{$item['size']}_{$item['id']}">
						<option {if $item['size']==1} selected="selected" {/if} value="1">черенок
						</option>
						<option {if $item['size']==2} selected="selected" {/if} value="2">кустик
						</option>
						<option {if $item['size']==3} selected="selected" {/if} value="3">большой
							куст</option>
					</select></div>
				<div class="cart__count">
					<div class="item__plus" id="plus"
						onclick="countPlus({$item['id']}, {$item['size']}); conversionPrice({$item['id']}, {$item['size']}); maxValue({$item['id']}, {$item['size']}, {$rsGoods[$item['id']][$item['size']]}); changeParams({$item['id']}, {$item['size']});">
						+
					</div>
					<input name="itemCnt_{$item['id']}" id="itemCnt{$item['size']}_{$item['id']}" type="number"
						value="{$item['count']}"
						oninput="conversionPrice({$item['id']}, {$item['size']}); maxValue({$item['id']}, {$item['size']}, {$rsGoods[$item['id']][$item['size']]}); changeParams({$item['id']}, {$item['size']});"
						class="item__input">
					<div class="item__minus" id="minus"
						onclick="countMinus({$item['id']}, {$item['size']}); conversionPrice({$item['id']}, {$item['size']}); maxValue({$item['id']}, {$item['size']}, {$rsGoods[$item['id']][$item['size']]}); changeParams({$item['id']}, {$item['size']});">
						-
					</div>
				</div>
				<div class="cart__prc" id="itemPrice_{$item['id']}">
					<div {if $item['size']!=1} style="display: none;" {else} class="exCartPrice{$item['size']}_{$item['id']}"
						{/if} id="itemPrice1_{$item['id']}">{$item['priceS']}</div>
					<div {if $item['size']!=2} style="display: none;" {else} class="exCartPrice{$item['size']}_{$item['id']}"
						{/if} id="itemPrice2_{$item['id']}">{$item['priceM']}</div>
					<div {if $item['size']!=3} style="display: none;" {else} class="exCartPrice{$item['size']}_{$item['id']}"
						{/if} id="itemPrice3_{$item['id']}">{$item['priceL']}</div>
					руб.
				</div>
				<div class="cart__price"><span id="itemRealPrice{$item['size']}_{$item['id']}" class="realprice">
						{$item['price']}
					</span> руб.</div>
				<div class="cart__remove">
					<a id="removeCart{$item['size']}_{$item['id']}"
						href="/petunia/www/?controller=cart&action=removefromcart&id={$item['id']}"
						onclick="removeFromCart({$item['id']}, {$item['size']}); conversionPrice({$item['id']}, {$item['size']}); styleCart({$item['id']}, {$item['size']}); return false;"
						alt="Удалить из корзины"><img src="/petunia/www/images/plus-icon.svg" alt=""></a>
					<a id="addCart{$item['size']}_{$item['id']}"
						href="/petunia/www/?controller=cart&action=addtocart&id={$item['id']}" class="none"
						onclick="addToCart({$item['id']}, {$item['size']}); conversionPrice({$item['id']}, {$item['size']}); unstyleCart({$item['id']}, {$item['size']}); return false;"
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
			<button type="submit" class="cart__button">Оформить заказ</button>
		</div>
	</form>

</div>
{/if}