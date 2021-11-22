const mobilHeader = document.querySelector('.line__mobil');
const openButton = document.querySelector('.line__menu');
const hamburger = document.querySelector('.line__hamburger');

if (document.body.clientWidth < 767) {
	openButton.addEventListener('click', function () {

		if (mobilHeader.classList.contains('open')) {
			mobilHeader.classList.add('close');
			mobilHeader.classList.remove('open');

			hamburger.classList.add('opend');
			hamburger.classList.remove('closed');
		} else {
			mobilHeader.classList.remove('close');
			mobilHeader.classList.add('open');

			hamburger.classList.add('closed');
			hamburger.classList.remove('opend');
		}
	})
}


let images = document.querySelectorAll('.product-item__image');
let left = document.querySelector('.product-item__left');
let right = document.querySelector('.product-item__right');
let dots = document.querySelectorAll('.product-item__dots div');
let slider = document.querySelector('.product-item__slider');


if (document.body.clientWidth < 767 && document.querySelector('.on')) {


	let on = document.querySelector('.on');
	if (on.classList.contains('a')) {
		dots[0].style.backgroundColor = '#B3AEAC';
	} else if (on.classList.contains('b')) {
		dots[1].style.backgroundColor = '#B3AEAC';
	} else if (on.classList.contains('c')) {
		dots[2].style.backgroundColor = '#B3AEAC';
	} else if (on.classList.contains('d')) {
		dots[3].style.backgroundColor = '#B3AEAC';
	} else {
		dots[4].style.backgroundColor = '#B3AEAC';
	}

	images.forEach(el => {
		el.addEventListener('click', function () {
			/*dots[0].classList.remove('aa');
			dots[1].classList.remove('bb');
			dots[2].classList.remove('cc');
			dots[3].classList.remove('dd');
			dots[4].classList.remove('ee');
			document.querySelector('.a1').classList.remove('a1');
			document.querySelector('.b1').classList.remove('b1');
			document.querySelector('.c1').classList.remove('c1');
			document.querySelector('.d1').classList.remove('d1');
			document.querySelector('.e1').classList.remove('e1');*/
			dots[0].classList.remove('aa');
			dots[1].classList.remove('bb');
			dots[2].classList.remove('cc');
			dots[3].classList.remove('dd');
			dots[4].classList.remove('ee');
			document.querySelector('.a1').classList.add('a');
			document.querySelector('.b1').classList.add('b');
			document.querySelector('.c1').classList.add('c');
			document.querySelector('.d1').classList.add('d');
			document.querySelector('.e1').classList.add('e');
			document.querySelector('.a1').classList.remove('a1');
			document.querySelector('.b1').classList.remove('b1');
			document.querySelector('.c1').classList.remove('c1');
			document.querySelector('.d1').classList.remove('d1');
			document.querySelector('.e1').classList.remove('e1');

		});
	});




	left.addEventListener('click', function () {
		if (document.querySelector('.a1')) {
			dots[0].classList.remove('aa');
			dots[1].classList.remove('bb');
			dots[2].classList.remove('cc');
			dots[3].classList.remove('dd');
			dots[4].classList.remove('ee');
			document.querySelector('.a1').classList.add('a');
			document.querySelector('.b1').classList.add('b');
			document.querySelector('.c1').classList.add('c');
			document.querySelector('.d1').classList.add('d');
			document.querySelector('.e1').classList.add('e');
			document.querySelector('.a1').classList.remove('a1');
			document.querySelector('.b1').classList.remove('b1');
			document.querySelector('.c1').classList.remove('c1');
			document.querySelector('.d1').classList.remove('d1');
			document.querySelector('.e1').classList.remove('e1');
		}

		let on = document.querySelector('.on');
		if (on.classList.contains('a')) {
			on.style.opacity = '0';
			document.querySelector('.e').style.opacity = '1';
			document.querySelector('.a').classList.remove('on');
			document.querySelector('.e').classList.add('on');
			dots[0].style.backgroundColor = '#DDD3CD';
			dots[4].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('b')) {
			on.style.opacity = '0';
			document.querySelector('.a').style.opacity = '1';
			document.querySelector('.b').classList.remove('on');
			document.querySelector('.a').classList.add('on');
			dots[1].style.backgroundColor = '#DDD3CD';
			dots[0].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('c')) {
			on.style.opacity = '0';
			document.querySelector('.b').style.opacity = '1';
			document.querySelector('.c').classList.remove('on');
			document.querySelector('.b').classList.add('on');
			dots[2].style.backgroundColor = '#DDD3CD';
			dots[1].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('d')) {
			on.style.opacity = '0';
			document.querySelector('.c').style.opacity = '1';
			document.querySelector('.d').classList.remove('on');
			document.querySelector('.c').classList.add('on');
			dots[3].style.backgroundColor = '#DDD3CD';
			dots[2].style.backgroundColor = '#B3AEAC';
		} else {
			on.style.opacity = '0';
			document.querySelector('.d').style.opacity = '1';
			document.querySelector('.e').classList.remove('on');
			document.querySelector('.d').classList.add('on');
			dots[4].style.backgroundColor = '#DDD3CD';
			dots[3].style.backgroundColor = '#B3AEAC';
		}
	});

	right.addEventListener('click', function () {
		if (document.querySelector('.a1')) {
			dots[0].classList.remove('aa');
			dots[1].classList.remove('bb');
			dots[2].classList.remove('cc');
			dots[3].classList.remove('dd');
			dots[4].classList.remove('ee');
			document.querySelector('.a1').classList.add('a');
			document.querySelector('.b1').classList.add('b');
			document.querySelector('.c1').classList.add('c');
			document.querySelector('.d1').classList.add('d');
			document.querySelector('.e1').classList.add('e');
			document.querySelector('.a1').classList.remove('a1');
			document.querySelector('.b1').classList.remove('b1');
			document.querySelector('.c1').classList.remove('c1');
			document.querySelector('.d1').classList.remove('d1');
			document.querySelector('.e1').classList.remove('e1');
		}

		let on = document.querySelector('.on');
		if (on.classList.contains('a')) {
			on.style.opacity = '0';
			document.querySelector('.b').style.opacity = '1';
			document.querySelector('.a').classList.remove('on');
			document.querySelector('.b').classList.add('on');
			dots[0].style.backgroundColor = '#DDD3CD';
			dots[1].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('b')) {
			on.style.opacity = '0';
			document.querySelector('.c').style.opacity = '1';
			document.querySelector('.b').classList.remove('on');
			document.querySelector('.c').classList.add('on');
			dots[1].style.backgroundColor = '#DDD3CD';
			dots[2].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('c')) {
			on.style.opacity = '0';
			document.querySelector('.d').style.opacity = '1';
			document.querySelector('.c').classList.remove('on');
			document.querySelector('.d').classList.add('on');
			dots[2].style.backgroundColor = '#DDD3CD';
			dots[3].style.backgroundColor = '#B3AEAC';
		} else if (on.classList.contains('d')) {
			on.style.opacity = '0';
			document.querySelector('.e').style.opacity = '1';
			document.querySelector('.d').classList.remove('on');
			document.querySelector('.e').classList.add('on');
			dots[3].style.backgroundColor = '#DDD3CD';
			dots[4].style.backgroundColor = '#B3AEAC';
		} else {
			on.style.opacity = '0';
			document.querySelector('.a').style.opacity = '1';
			document.querySelector('.e').classList.remove('on');
			document.querySelector('.a').classList.add('on');
			dots[4].style.backgroundColor = '#DDD3CD';
			dots[0].style.backgroundColor = '#B3AEAC';
		}
	});

}

let body = document.querySelector('body');

if (document.body.clientWidth > 767 && document.querySelector('.a')) {
	setInterval(() => {
		let on = document.querySelector('.on');
		if (on.classList.contains('a')) {
			document.querySelector('.a').classList.remove('on');
			document.querySelector('.b').classList.add('on');
			document.querySelector('.a').style.gridColumn = '4 / 5';
			document.querySelector('.c').style.gridColumn = '1 / 2';
			document.querySelector('.d').style.gridColumn = '2 / 3';
			document.querySelector('.e').style.gridColumn = '3 / 4';
		} else if (on.classList.contains('b')) {
			document.querySelector('.b').classList.remove('on');
			document.querySelector('.c').classList.add('on');
			document.querySelector('.b').style.gridColumn = '4 / 5';
			document.querySelector('.d').style.gridColumn = '1 / 2';
			document.querySelector('.e').style.gridColumn = '2 / 3';
			document.querySelector('.a').style.gridColumn = '3 / 4';
		} else if (on.classList.contains('c')) {
			document.querySelector('.c').classList.remove('on');
			document.querySelector('.d').classList.add('on');
			document.querySelector('.c').style.gridColumn = '4 / 5';
			document.querySelector('.e').style.gridColumn = '1 / 2';
			document.querySelector('.a').style.gridColumn = '2 / 3';
			document.querySelector('.b').style.gridColumn = '3 / 4';
		} else if (on.classList.contains('d')) {
			document.querySelector('.d').classList.remove('on');
			document.querySelector('.e').classList.add('on');
			document.querySelector('.d').style.gridColumn = '4 / 5';
			document.querySelector('.a').style.gridColumn = '1 / 2';
			document.querySelector('.b').style.gridColumn = '2 / 3';
			document.querySelector('.c').style.gridColumn = '3 / 4';
		} else {
			document.querySelector('.e').classList.remove('on');
			document.querySelector('.a').classList.add('on');
			document.querySelector('.e').style.gridColumn = '4 / 5';
			document.querySelector('.b').style.gridColumn = '1 / 2';
			document.querySelector('.c').style.gridColumn = '2 / 3';
			document.querySelector('.d').style.gridColumn = '3 / 4';
		}
	}, 3000);
}

images.forEach(image => {
	image.addEventListener('click', function (e) {
		let on = document.querySelector('.on');
		if (on.classList.contains('a1')) {
			document.querySelector('.a1').classList.remove('on');
			e.target.classList.add('on');
		} else if (on.classList.contains('b1')) {
			document.querySelector('.b1').classList.remove('on');
			e.target.classList.add('on');
		} else if (on.classList.contains('c1')) {
			document.querySelector('.c1').classList.remove('on');
			e.target.classList.add('on');
		} else if (on.classList.contains('d1')) {
			document.querySelector('.d1').classList.remove('on');
			e.target.classList.add('on');
		} else {
			document.querySelector('.e1').classList.remove('on');
			e.target.classList.add('on');
		}
		if (e.target.classList.contains('b1')) {
			document.querySelector('.a1').style.gridColumn = '4 / 5';
			document.querySelector('.e1').style.gridColumn = '3 / 4';
			document.querySelector('.d1').style.gridColumn = '2 / 3';
			document.querySelector('.c1').style.gridColumn = '1 / 2';
		} else if (e.target.classList.contains('c1')) {
			document.querySelector('.b1').style.gridColumn = '4 / 5';
			document.querySelector('.a1').style.gridColumn = '3 / 4';
			document.querySelector('.e1').style.gridColumn = '2 / 3';
			document.querySelector('.d1').style.gridColumn = '1 / 2';
		} else if (e.target.classList.contains('a1')) {
			document.querySelector('.e1').style.gridColumn = '4 / 5';
			document.querySelector('.c1').style.gridColumn = '3 / 4';
			document.querySelector('.d1').style.gridColumn = '2 / 3';
			document.querySelector('.b1').style.gridColumn = '1 / 2';
		} else if (e.target.classList.contains('d1')) {
			document.querySelector('.c1').style.gridColumn = '4 / 5';
			document.querySelector('.b1').style.gridColumn = '3 / 4';
			document.querySelector('.a1').style.gridColumn = '2 / 3';
			document.querySelector('.e1').style.gridColumn = '1 / 2';
		} else if (e.target.classList.contains('e1')) {
			document.querySelector('.d1').style.gridColumn = '4 / 5';
			document.querySelector('.c1').style.gridColumn = '3 / 4';
			document.querySelector('.b1').style.gridColumn = '2 / 3';
			document.querySelector('.a1').style.gridColumn = '1 / 2';
		}
	});
});


if (document.querySelector('.product-item__wrapper')) {
	let wrapper = document.querySelector('.product-item__wrapper');
	wrapper.addEventListener('mouseover', function () {
		document.querySelector('.a1').classList.remove('a');
		document.querySelector('.b1').classList.remove('b');
		document.querySelector('.c1').classList.remove('c');
		document.querySelector('.d1').classList.remove('d');
		document.querySelector('.e1').classList.remove('e');
	});

	wrapper.addEventListener('mouseout', function () {
		document.querySelector('.a1').classList.add('a');
		document.querySelector('.b1').classList.add('b');
		document.querySelector('.c1').classList.add('c');
		document.querySelector('.d1').classList.add('d');
		document.querySelector('.e1').classList.add('e');
	});
}

let more = document.querySelector('.main__more');

if (document.body.clientWidth > 767 && more) {
	more.addEventListener('click', function () {
		more.style.display = 'none';
		let products = document.querySelectorAll('.product');
		for (let i = 0; i < products.length; i++) {
			const product = products[i];
			if (i > 5) {
				product.style.display = 'block';
			}
		}
	});
}

if (document.body.clientWidth < 767 && more) {
	more.addEventListener('click', function () {
		let products = document.querySelectorAll('.product');
		if (more.classList.contains('aaa')) {
			products[3].style.display = 'block';
			products[4].style.display = 'block';
			more.classList.remove('aaa');
			more.classList.add('bbb');
		} else if (more.classList.contains('bbb')) {
			products[5].style.display = 'block';
			products[6].style.display = 'block';
			more.classList.remove('bbb');
			more.classList.add('ccc');
		} else if (more.classList.contains('ccc')) {
			products[7].style.display = 'block';
			products[8].style.display = 'block';
			more.classList.remove('ccc');
			more.classList.add('ddd');
		} else if (more.classList.contains('ddd')) {
			products[9].style.display = 'block';
			products[10].style.display = 'block';
			more.classList.remove('ddd');
			more.classList.add('eee');
		} else if (more.classList.contains('eee')) {
			products[11].style.display = 'block';
			products[12].style.display = 'block';
			more.classList.remove('eee');
			more.style.display = 'none';
		}
	});
}

let checkbox = document.querySelectorAll('.ordering__checkbox');

checkbox.forEach(el => {
	el.addEventListener('click', function (e) {
		document.querySelector('.checked').classList.remove('checked');
		e.target.classList.add('checked');
	})
});


/*
*  Функция добавления товара в корзину
* 
*  @param integer itemId ID продукта
*  @return в случае успеха обновятся данные корзины на странице
*/
function addToCart(itemId, n) {
	console.log("js - addToCart");

	let count = $('#itemCnt_' + itemId).val();
	if (window.location.href.includes('cart')) {
		var numero = parseInt(n);
	} else {
		var numero = $('#productCnt_' + itemId + ' option:selected').val();
	}

	let postData = { size: numero, count: count };
	console.log(postData);
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=addtocart&id=" + itemId,
		dataType: 'json',
		data: postData,
		success: function (data) {
			if (data['success']) {
				$('#cartCntItems').html(data['cntItems']);
				console.log($('#cartCntItems'));

				$('#addCart' + numero + '_' + itemId).hide();
				$('#removeCart' + numero + '_' + itemId).show();
				$('#addCart_' + itemId).hide();
				$('#removeCart_' + itemId).show();

				$('#itemRealPrice' + n + '_' + itemId).addClass("realprice");

				let productSize = $('#productCnt_' + itemId).val();

				$('#cartSize' + numero + '_' + itemId).val(productSize);
			}
		}
	});
}

/*
*  Удаление продукта из корзины
* 
*  @param integer itemId ID продукта
*  @return в случае успеха обновятся данные корзины на странице
*/
function removeFromCart(itemId, n) {
	console.log("js - removeFromCart(" + itemId + ")");

	let postData = { n: n };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=removeFromCart&id=" + itemId,
		dataType: 'json',
		data: postData,
		success: function (data) {
			if (data['success']) {
				$('#itemRealPrice' + n + '_' + itemId).removeClass("realprice");

				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).show();
				$('#removeCart_' + itemId).hide();
				$('#addCart' + n + '_' + itemId).show();
				$('#removeCart' + n + '_' + itemId).hide();
			}
		}
	});
}

function styleCart(id, n) {
	document.querySelector('#removeCart' + n + '_' + id).parentNode.parentNode.style.backgroundColor = '#fcfafc';
}

function unstyleCart(id, n) {
	document.querySelector('#removeCart' + n + '_' + id).parentNode.parentNode.style.backgroundColor = 'white';
}

function changeParams(id, n) {

	let count = $('#itemCnt' + n + '_' + id).val();

	let postData = { size: n, count: count };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=changecount&id=" + id,
		dataType: 'json',
		data: postData,
		success: function () {

		}
	});
}

/*
*  Подсчёт стоимости купленного товара
* 
*  @param integer itemId ID продукта
*/
function conversionPrice(itemId, num) {
	var newCnt = $('#itemCnt' + num + '_' + itemId).val();
	var itemPrice = parseInt($('#itemPrice' + num + '_' + itemId).text());

	if (parseInt(newCnt) < 1 || newCnt == '') {
		newCnt = 1;
		$('#itemCnt' + num + '_' + itemId).val(1);
	}
	var itemRealPrice = newCnt * itemPrice;

	$('#itemRealPrice' + num + '_' + itemId).html(itemRealPrice);

	var sum = 0;
	$('.realprice').each(function () {
		sum = sum + Number($(this).text());
	});
	$('#sumPrice').html(sum);
}


/*
*  Инкримент количества товара в корзине
*/
var integer = 2;

function countMinus(itemId, num) {
	let int = $('#itemCnt' + num + '_' + itemId).val();
	int = parseInt(int) - 1;
	$('#itemCnt' + num + '_' + itemId).val(int);
	if (parseInt($('#itemCnt' + num + '_' + itemId).val()) < 1) {
		$('#itemCnt' + num + '_' + itemId).val(1);
	}
}

function countPlus(itemId, num) {
	let int = $('#itemCnt' + num + '_' + itemId).val();
	int = parseInt(int) + 1;
	$('#itemCnt' + num + '_' + itemId).val(int);
	if (parseInt($('#itemCnt' + num + '_' + itemId).val()) < 1) {
		$('#itemCnt' + num + '_' + itemId).val(1);
	}
}

function countIndexMinus(itemId) {
	let int = $('#itemCnt_' + itemId).val();
	int = parseInt(int) - 1;
	$('#itemCnt_' + itemId).val(int);
	if (parseInt($('#itemCnt_' + itemId).val()) < 1) {
		$('#itemCnt_' + itemId).val(1);
	}
}

function countIndexPlus(itemId) {
	let int = $('#itemCnt_' + itemId).val();
	int = parseInt(int) + 1;
	$('#itemCnt_' + itemId).val(int);
	if (parseInt($('#itemCnt_' + itemId).val()) < 1) {
		$('#itemCnt_' + itemId).val(1);
	}
}

if (document.body.clientWidth > 767) {
	document.querySelector('.small-header__catalog').addEventListener('click', function () {
		let menu = document.querySelector('.menu');

		if (menu.classList.contains('show')) {
			menu.classList.remove('show');
		} else {
			menu.classList.add('show');
		}
	});
}

let filter = document.querySelector('.main__filters');
if (document.body.clientWidth < 767 && filter) {

	filter.addEventListener('click', function () {
		if (filter.classList.contains('abc')) {
			document.querySelector('.main__wrapper').style.display = 'none';
			filter.classList.remove('abc');
		} else {
			document.querySelector('.main__wrapper').style.display = 'block';
			filter.classList.add('abc');
			document.querySelectorAll('.main__item').forEach(el => {
				el.style.display = 'block';
			});
			document.querySelectorAll('.main__hr').forEach(el => {
				el.style.display = 'block';
			});
		}
	})



	let search = document.querySelector('#searchFiltersImg');
	search.addEventListener('click', function () {
		if (search.classList.contains('abc')) {
			document.querySelector('.main__wrapper').style.display = 'none';
			search.classList.remove('abc');
			document.querySelectorAll('.main__item').forEach(el => {
				el.style.display = 'block';
			});
			document.querySelectorAll('.main__hr').forEach(el => {
				el.style.display = 'block';
			});
		} else {
			document.querySelector('.main__wrapper').style.display = 'block';
			document.querySelectorAll('.main__item').forEach(el => {
				el.style.display = 'none';

			});
			document.querySelectorAll('.main__hr').forEach(el => {
				el.style.display = 'none';
			});
			search.classList.add('abc');
		}
	})
}
/* Очистить поле input после ввода */
/*setTimeout(function cleanSearchValue() {
	let element = $('.search__input');

	element.val('');
}, 500)*/


window.onload = function () {
	if (window.location.href.includes('cart') && !window.location.href.includes('order')) {
		let items = document.querySelectorAll('.item__input');
		let selects = document.querySelectorAll('.cart__select');
		for (let i = 0; i < items.length; i++) {
			let id = selects[i].id.substring(10);
			let num = selects[i].options[selects[i].selectedIndex].value;
			conversionPrice(id, num);

			let select1 = document.querySelector('#cartSize1_' + id);
			let select2 = document.querySelector('#cartSize2_' + id);
			let select3 = document.querySelector('#cartSize3_' + id);
			//console.log(select1, select2, select3);

			if (select1 && select2 && select3) {
				let select = document.querySelector('#cartSize' + num + '_' + id);
				select.querySelectorAll('option').forEach(el => {
					el.style.display = 'none';
				});
			} else if ((select1 && select2) || (select1 && select3) || (select2 && select3)) {
				if (select1 && select2) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="1"]').style.display = 'none';
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="2"]').style.display = 'none';
				} else if (select1 && select3) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="1"]').style.display = 'none';
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="3"]').style.display = 'none';
				} else if (select2 && select3) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="2"]').style.display = 'none';
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="3"]').style.display = 'none';
				}
			} else if ((select1 && !select2 && !select3) || (select2 && !select1 && !select3) || (select3 && !select2 && !select1)) {
				if (select1) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="1"]').style.display = 'none';
				} else if (select3) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="3"]').style.display = 'none';
				} else if (select2) {
					document.querySelector('#cartSize' + num + '_' + id).querySelector('option[value="2"]').style.display = 'none';
				}
			}
		}
	} else if (window.location.href.includes('order')) {
		let prices = document.querySelectorAll('.order__price span');
		let counts = document.querySelectorAll('.order__count');
		let realprices = document.querySelectorAll('.order__realprice');
		let price = document.querySelector('#Price');
		var orderSum = 0;

		for (let i = 0; i < prices.length; i++) {
			let sum = prices[i].innerText * counts[i].value;
			realprices[i].innerHTML = `${sum} руб.`;
			orderSum += sum;
		}

		price.innerHTML = orderSum;
	}
}

function changePrice(id) {
	let num = $('#productCnt_' + id + ' option:selected').val();

	$('#productPrice1_' + id).css("display", "none");
	$('#productPrice2_' + id).css("display", "none");
	$('#productPrice3_' + id).css("display", "none");
	$('#productPrice' + num + '_' + id).css("display", "block");
}

function changeCartPrice(id, n) {
	let num = $('#cartSize' + n + '_' + id + ' option:selected').val();
	console.log(num);
	$('#itemPrice1_' + id).css("display", "none");
	$('#itemPrice2_' + id).css("display", "none");
	$('#itemPrice3_' + id).css("display", "none");
	$('#itemPrice1_' + id).removeClass('exCartPrice' + num + '_' + id);
	$('#itemPrice2_' + id).removeClass('exCartPrice' + num + '_' + id);
	$('#itemPrice3_' + id).removeClass('exCartPrice' + num + '_' + id);
	$('#itemPrice' + num + '_' + id).css("display", "block");
	$('#itemPrice' + num + '_' + id).addClass('exCartPrice' + num + '_' + id);

	var newCnt = $('#itemCnt' + n + '_' + id).val();
	var itemPrice = parseInt($('.exCartPrice' + num + '_' + id).text());

	if (parseInt(newCnt) < 1 || newCnt == '') {
		newCnt = 1;
		$('#itemCnt' + n + '_' + id).val(1);
	}
	var itemRealPrice = newCnt * itemPrice;

	$('#itemRealPrice' + n + '_' + id).html(itemRealPrice);

	var sum = 0;
	$('.realprice').each(function () {
		sum = sum + Number($(this).text());
	});
	$('#sumPrice').html(sum);

	let select1 = document.querySelector('#cartSize1_' + id);
	let select2 = document.querySelector('#cartSize2_' + id);
	let select3 = document.querySelector('#cartSize3_' + id);
	//console.log(select1, select2, select3);

	if (select1 && select2 && select3) {
		let select = document.querySelector('#cartSize' + num + '_' + id);
		select.querySelectorAll('option').forEach(el => {
			el.style.display = 'none';
		});
	} else if ((select1 && select2) || (select1 && select3) || (select2 && select3)) {
		if (select1 && select2) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="1"]').style.display = 'none';
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="2"]').style.display = 'none';
		} else if (select1 && select3) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="1"]').style.display = 'none';
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="3"]').style.display = 'none';
		} else if (select2 && select3) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="2"]').style.display = 'none';
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="3"]').style.display = 'none';
		}
	} else if ((select1 && !select2 && !select3) || (select2 && !select1 && !select3) || (select3 && !select2 && !select1)) {
		if (select1) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="1"]').style.display = 'none';
		} else if (select3) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="3"]').style.display = 'none';
		} else if (select2) {
			document.querySelector('#cartSize' + n + '_' + id).querySelector('option[value="2"]').style.display = 'none';
		}
	}
}

function startAddAction(id, n) {
	let size = document.querySelector('#cartSize' + n + '_' + id).options[document.querySelector('#cartSize' + n + '_' + id).selectedIndex].value;

	addToCart(id, size);
}

function indexAddToCart(id) {
	let int = $('#itemCnt_' + id).val();
	addToCart(id, int);
}

function maxValue(id, n, limit) {
	let input = document.querySelector('#itemCnt' + n + '_' + id);
	if (input.value > limit) {
		input.value = limit;
	}
}

/*
*  Проверка данных пользователя при создании заказа
*/

function checkOrderParams() {
	let email = document.getElementById('email');
	let name = document.getElementById('name');
	let phone = document.getElementById('phone');
	let region = document.getElementById('region');
	let city = document.getElementById('city');
	let place = document.getElementById('place');
	let index = document.getElementById('index');
	let comment = document.getElementById('comment');

	let emailValue = email.value.trim();
	let nameValue = name.value.trim();
	let phoneValue = phone.value.trim();
	let regionValue = region.value.trim();
	let cityValue = city.value.trim();
	let placeValue = place.value.trim();
	let indexValue = index.value.trim();
	let commentValue = comment.value.trim();

	let success = 1;

	if (emailValue == '') {
		email.style.border = '1px solid red';
		success = null;
	} else {
		email.style.border = '1px solid #B8B8B8';
	}

	if (nameValue == '') {
		name.style.border = '1px solid red';
		success = null;
	} else {
		name.style.border = '1px solid #B8B8B8';
	}

	if (phoneValue == '') {
		phone.style.border = '1px solid red';
		success = null;
	} else {
		phone.style.border = '1px solid #B8B8B8';
	}

	if (regionValue == '') {
		region.style.border = '1px solid red';
		success = null;
	} else {
		region.style.border = '1px solid #B8B8B8';
	}

	if (cityValue == '') {
		city.style.border = '1px solid red';
		success = null;
	} else {
		city.style.border = '1px solid #B8B8B8';
	}

	if (placeValue == '') {
		place.style.border = '1px solid red';
		success = null;
	} else {
		place.style.border = '1px solid #B8B8B8';
	}

	if (indexValue == '') {
		index.style.border = '1px solid red';
		success = null;
	} else {
		index.style.border = '1px solid #B8B8B8';
	}

	if (commentValue == '') {
		comment.style.border = '1px solid red';
		success = null;
	} else {
		comment.style.border = '1px solid #B8B8B8';
	}

	if (success == 1) {
		saveOrder();
	}
}

/*
*  Сохранение заказа
*/
function saveOrder() {
	let email = document.getElementById('email').value;
	let name = document.getElementById('name').value;
	let phone = document.getElementById('phone').value;
	let region = document.getElementById('region').value;
	let city = document.getElementById('city').value;
	let place = document.getElementById('place').value;
	let index = document.getElementById('index').value;
	let comment = document.getElementById('comment').value;
	let delivery = document.querySelector('.ordering__label .checked').parentNode.id;
	let sum = document.getElementById('Price').innerText;
	let realSum = parseInt(sum) + parseInt(delivery);

	let postData = { email: email, name: name, phone: phone, region: region, city: city, place: place, index: index, comment: comment, delivery: delivery, sum: realSum };
	console.log(postData);
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=saveorder",
		data: postData,
		dataType: 'json',
		success: function (data) {
			if (data['success']) {
				window.location.href = '/petunia/www/';
			}
		}
	});
}