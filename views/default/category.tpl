<div class="index-page">




	<div class="index-page__main main categories">

		<div class="main__title">Петуния {$rsCategory['name']}</div>

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

			{foreach $rsProducts as $item name=products}

			<div class="main__product product">
				<a href="/petunia/www/?controller=product&id={$item['id']}/"><img
						src="/petunia/www/images/products/{$item['id']}.png" alt="" class="product__img"></a>

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

					<a class="{if ! in_array($item['id'], $cart)}none{/if}" id="removeCart_{$item['id']}"
						href="/petunia/www/?controller=cart&action=removefromcart&id={$item['id']}"
						onclick="removeFromCart({$item['id']}); return false;">
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
						<div class="item__plus" id="plus" onclick="countPlus({$item['id']}); conversionPrice({$item['id']});">
							+
						</div>
						<input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="number" value="1"
							oninput="conversionPrice({$item['id']});" class="item__input" max="999">
						<div class="item__minus" id="minus"
							onclick="countMinus({$item['id']}); conversionPrice({$item['id']});">
							-
						</div>
					</div>
				</div>
			</div>
			{/foreach}
			</div>
	</div>
</div>