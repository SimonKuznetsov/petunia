<div class="index-page__advantage advantage">
	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/ground-icon.png">
		<div class="advantage__text">Выращиваем только самые лучшие побеги</div>

	</div>

	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/delivery-icon.png">
		<div class="advantage__text">Бережно и быстро доставим заказ в ваш дом</div>

	</div>

	<div class="advantage__item">
		<img class="advantage__img" src="/petunia/www/images/plant-icon.png">
		<div class="advantage__text">Наша служба поддержки всегда поможет</div>

	</div>
</div>

<div class="footer" id="footer">
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

		<div class="serves__item"><a href="/petunia/www/#about">О компании</a></div>
		<div class="serves__item"><a href="/petunia/www/?controller=index&action=page&page=pay">Оплата</a></div>
		<div class="serves__item"><a href="/petunia/www/?controller=index&action=page&page=delivery">Доставка</a></div>
		<div class="serves__item"><a href="/petunia/www/#footer">Контакты</a></div>
	</div>

	<div class="footer__phone"><a href="tel:79956565137">+7 (995) 656 51 37</a></div>

	<div class="footer__email"><a href="mailto:kuznetsovsimonm@gmail.com">kuznetsovsimonm@gmail.com</a></div>

	<div class="footer__timetable">График работы с 9:00 до 20:00</div>

	<div class="footer__social">
		<img src="/petunia/www/images/whatsup-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/youtube-icon.png" alt="" class="footer__icon">
		<img src="/petunia/www/images/instagram-icon.png" alt="" class="footer__icon">
	</div>
</div>

<script src="/petunia/www/js/script.js"></script>
<script src="/petunia/www/js/phonemask.js"></script>

</body>

</html>