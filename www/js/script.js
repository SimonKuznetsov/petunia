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
function addToCart(itemId) {
	console.log("js - addToCart");
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=addtocart&id=" + itemId,
		dataType: 'json',
		success: function (data) {
			if (data['success']) {
				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).hide();
				$('#removeCart_' + itemId).show();


				$('#itemRealPrice_' + itemId).addClass("realprice");
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
function removeFromCart(itemId) {
	console.log("js - removeFromCart(" + itemId + ")");
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=cart&action=removeFromCart&id=" + itemId,
		dataType: 'json',
		success: function (data) {
			if (data['success']) {
				$('#itemRealPrice_' + itemId).removeClass("realprice");

				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).show();
				$('#removeCart_' + itemId).hide();
			}
		}
	});
}

function styleCart(id) {
	document.querySelector('#removeCart_' + id).parentNode.parentNode.style.backgroundColor = '#fcfafc';
}

function unstyleCart(id) {
	document.querySelector('#removeCart_' + id).parentNode.parentNode.style.backgroundColor = 'white';
}

/*
*  Подсчёт стоимости купленного товара
* 
*  @param integer itemId ID продукта
*/
function conversionPrice(itemId) {
	var newCnt = $('#itemCnt_' + itemId).val();
	var itemPrice = parseInt($('#itemPrice_' + itemId).text());

	if (parseInt(newCnt) < 1 || newCnt == '') {
		newCnt = 1;
		$('#itemCnt_' + itemId).val(1);
	}
	var itemRealPrice = newCnt * itemPrice;

	$('#itemRealPrice_' + itemId).html(itemRealPrice);

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

function countMinus(itemId) {
	let int = $('#itemCnt_' + itemId).val();
	int = parseInt(int) - 1;
	$('#itemCnt_' + itemId).val(int);
	if (parseInt($('#itemCnt_' + itemId).val()) < 1) {
		$('#itemCnt_' + itemId).val(1);
	}
}

function countPlus(itemId) {
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
