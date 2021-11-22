/*
*  Получение данных с форм
*/
function getData(obj_form) {
	var hData = {};
	$('input, textarea, select', obj_form).each(function () {
		if (this.name && this.name != '') {
			hData[this.name] = this.value;
		}
	});
	return hData;
};

/*
*  Добавление новой категории
*/
function newCategory() {
	let postData = getData('#blockNewCategory');
	console.log(postData);
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=addnewcat",
		data: postData,
		dataType: 'json',
		success: function (data) {
			if (data['success']) {
				alert(data['message']);
				$('#newCategoryName').val('');
				location.reload();
			} else {
				alert(data['message']);
			}
		}
	});
}

/*
*  Обновление данных категории
*/
function updateCat(itemId) {
	let parentId = $('#parentId_' + itemId).val();
	let newName = $('#itemName_' + itemId).val();
	let postData = { itemId: itemId, parentId: parentId, newName: newName };
	console.log(postData);
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=updatecategory",
		data: postData,
		dataType: 'json',
		success: function (data) {
			if (data['success']) {
				alert(data['message']);
			}
		}
	});
}

/*
*  Добавление нового продукта
*/
function addProduct() {
	let itemName = $('#newItemName').val();
	let itemPrice1 = $('#newItemPrice1').val();
	let itemPrice2 = $('#newItemPrice2').val();
	let itemPrice3 = $('#newItemPrice3').val();
	let itemBest = $('#newItemBest:checked').val() ? 1 : 0;
	let itemColor = $('#newItemColor').val();
	let itemCatId = $('#newItemCatId').val();
	let itemFullDesc = $('#newItemFullDesc').val();
	let itemDesc = $('#newItemDesc').val();

	let postData = { itemName: itemName, itemPrice1: itemPrice1, itemPrice2: itemPrice2, itemPrice3: itemPrice3, itemBest: itemBest, itemColor: itemColor, itemFullDesc: itemFullDesc, itemCatId: itemCatId, itemDesc: itemDesc };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=addproduct",
		data: postData,
		dataType: 'json',
		success: function (data) {
			alert(data['message']);
			if (data['success']) {
				location.reload();
			}
		}
	});
}

/*
*  Изменение данных продукта
*/
function updateProduct(itemId) {
	let itemName = $('#itemName_' + itemId).val();
	let itemPrice1 = $('#itemPrice1_' + itemId).val();
	let itemPrice2 = $('#itemPrice2_' + itemId).val();
	let itemPrice3 = $('#itemPrice3_' + itemId).val();
	let itemBest = $('#itemBest_' + itemId + ':checked').val() ? 1 : 0;
	let itemColor = $('#itemColor_' + itemId).val();
	let itemCatId = $('#itemCatId_' + itemId).val();
	let itemFullDesc = $('#itemFullDesc_' + itemId).val();
	let itemDesc = $('#itemDesc_' + itemId).val();
	let itemStatus = $('#itemStatus_' + itemId + ':checked').val() ? 0 : 1;

	let postData = { itemId: itemId, itemStatus: itemStatus, itemName: itemName, itemPrice1: itemPrice1, itemPrice2: itemPrice2, itemPrice3: itemPrice3, itemBest: itemBest, itemColor: itemColor, itemFullDesc: itemFullDesc, itemCatId: itemCatId, itemDesc: itemDesc };
	console.log(postData);
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=updateproduct",
		data: postData,
		dataType: 'json',
		success: function (data) {
			alert(data['message']);
			location.reload();
		}
	});
}

/*
*  Показывать или прятать данные о заказе
*/
function showProducts(id) {
	var objName = "#purchasesForOrderId_" + id;
	if ($(objName).css('display') != 'table-row') {
		$(objName).show();
	} else {
		$(objName).hide();
	}
}

/*
*  Изменение статуса заказа
*/
function updateOrderStatus(itemId) {
	let status = $('#itemStatus_' + itemId + ':checked').val() ? 1 : 0;

	var postData = { itemId: itemId, status: status };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=setorderstatus",
		data: postData,
		dataType: 'json',
		success: function (data) {
			location.reload();
			if (!data['success']) {
				alert(data['message']);
			}
		}
	});
}

/*
*  Изменение информации об оплате заказа
*/
function updateDatePayment(itemId) {
	var datePayment = $('#datePayment_' + itemId).val();
	var postData = { itemId: itemId, datePayment: datePayment };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/php%20shop/www/?controller=admin&action=setorderdatepayment",
		data: postData,
		dataType: 'json',
		success: function (data) {
			if (!data['success']) {
				alert(data['message']);
			}
		}
	});
}

/*
*  Изменение статуса категории
*/
function updateCatStatus(itemId) {
	var postData = { itemId: itemId, status: 0 };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=setcatstatus",
		data: postData,
		dataType: 'json',
		success: function (data) {
			location.reload();
			if (!data['success']) {
				alert(data['message']);
			}
		}
	});
}

function createXML() {
	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=createxml",
		dataType: 'html',
		success: function (data) {
			$('#xml-place').html(data);
			window.open('/petunia/www/xml/products.xml', '_blank');
		}
	});
}

function setErrorFor(input, message) {
	let formControl = input.parentElement;
	let small = formControl.querySelector('small');

	// add error message inside small
	small.innerText = message;

	// add error class
	formControl.className = 'form-control error';
}

function setSuccessFor(input) {
	let formControl = input.parentElement;
	formControl.className = 'form-control success';
}

/*
*  Изменение данных остатков
*/
function updateGoods(id, size) {
	let count = $('#goodsCount' + size + '_' + id).val();

	let postData = { id: id, size: size, count: count };

	$.ajax({
		type: 'POST',
		async: false,
		url: "/petunia/www/?controller=admin&action=updategood",
		data: postData,
		dataType: 'json',
		success: function (data) {
			alert(data['message']);
			location.reload();
		}
	});
}