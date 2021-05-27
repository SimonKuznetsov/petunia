<div class="footer">
	<div class="footer__title">Продажа и доставка соротовых петуний</div>
	<div class="footer__adress">Королёв, Лесная д. 3</div>

	<div class="footer__catalog catalog">
		<div class="catalog__title">Каталог</div>

		{foreach $rsMainCategories as $item name=mainCats}
		<div class="catalog__item">
			{$item['name']}
		</div>
		{/foreach}

	</div>

	<div class="footer__serves serves">
		<div class="serves__title">Сервисы</div>

		<div class="serves__item">О компании</div>
		<div class="serves__item">Оплата</div>
		<div class="serves__item">Доставка</div>
		<div class="serves__item">Контакты</div>
	</div>

	<div class="footer__phone"><a href="tel:79956565137">+7 (995) 656 51 37</a></div>

	<div class="footer__email">kuznetsovsimonm@gmail.com</div>

	<div class="footer__timetable">График работы с 9:00 до 20:00</div>

	<div class="footer__social">
		<img src="/petunia/www/images/whatsup-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/youtube-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/instagram-icon.png" alt="" class="footer__icon">
	</div>
</div>

<script src="/petunia/www/templates/default/js/script.js"></script>

</body>

</html>