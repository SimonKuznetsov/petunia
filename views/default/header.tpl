<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$pageTitle}</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="{$teplateWebPath}css/style.css">
	<link rel="icon" href="/petunia/www/images/icon.png">
</head>

<body onload="conversionPrice(1);">

	<div class="index-page__line line">

		<div class="line__menu">
			<div class="line__hamburger">
				<div class="line__line"></div>
				<div class="line__line"></div>
				<div class="line__line"></div>
			</div>

			<div class="line__info">
				<a href="/petunia/www/?controller=index&action=page&page=delivery">
					<div class="line__text">Доставка</div>
				</a>
				<a href="/petunia/www/?controller=index&action=page&page=pay">
					<div class="line__text">Оплата</div>
				</a>
			</div>
		</div>

		<div class="line__phone">
			<a href="tel:+79956565137">+7 (995) 656 61 37</a>
		</div>

		<div class="line__icons">

			<a href="">
				<img src="/petunia/www/images/search-icon.png" alt="">
			</a>

			<a href="/petunia/www/?controller=user">
				<img src="/petunia/www/images/user-icon.png" alt="">
			</a>

			<a class="line__cart" href="/petunia/www/?controller=cart">
				<img src="/petunia/www/images/cart-icon.png" alt="">
				<span id="cartCntItems" class="line__count {if $cartCntItems == 0}none{/if}">
					{if $cartCntItems > 0}{$cartCntItems}{else}0{/if}
				</span>
			</a>

		</div>

		<div class="line__mobil close">
			<a href="/petunia/www/#" class="line__item">
				<div>Каталог</div>
			</a>
			<a href="/petunia/www/#about" class="line__item">
				<div>О нас</div>
			</a>
			<a href="/petunia/www/?controller=index&action=page&page=delivery" class="line__item">
				<div>Доставка</div>
			</a>
			<a href="/petunia/www/?controller=index&action=page&page=pay" class="line__item">
				<div>Оплата</div>
			</a>
			<a href="/petunia/www/#footer" class="line__item">
				<div>Контакты</div>
			</a>
		</div>


	</div>

	<div class="small-header">
		<div class="small-header__catalog">каталог ▼</div>
		<a href="/petunia/www/#about">
			<div class="small-header__about">о нас</div>
		</a>
		<a href="#footer">
			<div class="small-header__contacts">контакты</div>
		</a>
		<div class="menu">
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
	</div>