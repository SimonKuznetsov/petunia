<input type="button" class="aproduct__exml" onclick="createXML();" value="Сохранить в XML">
<div id="xml-place"></div>

<hr class="aproduct__hr">

<div class="aproduct__title">Импорт</div> 
<form class="aproduct__xml" action="/petunia/www/?controller=admin&action=loadfromxml" method="POST" enctype="multipart/form-data">
   <input type="file" name="filename"><br>
   <input type="submit" class="main-button" value="Загрузить"><br>
</form>
<hr class="aproduct__hr">

<div class="aproduct__add" id="addProduct">
   <table cellpadding="1" cellspacing="1" border="1" class="aproduct__table">
      <div class="aproduct__title">Добавить продукт</div>
      <tr>
         <th>Название</th>
         <th>Цена за черенок</th>
			<th>Цена за кустик</th>
			<th>Цена за куст</th>
			<th>Цвет</th>
         <th>Категория</th>
         <th>Описание</th>
			<th>Краткое описание</th>
			<th>Лучшее предложение</th>
         <th>Сохранить</th>
      </tr>

      <tr>
         <td>
            <input type="edit" class="main-input" id="newItemName" value="">
         </td>
         <td>
            <input type="number" class="aproduct__price" id="newItemPrice1" value="">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="newItemPrice2" value="">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="newItemPrice3" value="">
         </td>
			<td>
            <input type="edit" class="" id="newItemColor" value="">
         </td>
         <td>
            <select class="select" name="generalCatId" id="newItemCatId">
               <option value="0">Главная Категория
                  {foreach $rsCategories as $itemCat}
               <option value="{$itemCat['id']}">{$itemCat['name']}
                  {/foreach}
            </select>
         </td>
         <td>
            <textarea id="newItemFullDesc" class="main-input"></textarea>
         </td>
			<td>
            <textarea id="newItemDesc" class="main-input"></textarea>
         </td>
			<td>
            <input type="checkbox" class="aproduct__price" id="newItemBest">
         </td>
         <td>
            <input type="button" class="main-button" value="Сохранить" onclick="addProduct();">
         </td>
      </tr>
   </table>
</div>

<div class="aproduct" id="productAdminTable">
   <table cellpadding="1" cellspacing="1" border="1" class="aproduct__table">
      <div class="aproduct__title">Редактировать</div>
      <tr>
         <th>№</th>
         <th>ID</th>
         <th>Название</th>
         <th>Цена за черенок</th>
			<th>Цена за кустик</th>
			<th>Цена за куст</th>
         <th>Категория</th>
         <th>Описание</th>
			<th>Краткое описание</th>
			<th>Лучшее предложение</th>
			<th>Цвет</th>
         <th>Удалить</th>
         <th>Изображение</th>
			<th>Картинки</th>
         <th>Сохранить</th>
      </tr>
      {foreach $rsProducts as $item name=products}
      <tr {if $item['status']==0}style="background-color: whitesmoke;" {/if}>
         <td>{$smarty.foreach.products.iteration}</td>
         <td>{$item['id']}</td>
         <td>
            <input type="edit" class="main-input" id="itemName_{$item['id']}" value="{$item['name']}">
         </td>
         <td>
            <input type="number" class="aproduct__price" id="itemPrice1_{$item['id']}" value="{$item['priceS']}">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="itemPrice2_{$item['id']}" value="{$item['priceM']}">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="itemPrice3_{$item['id']}" value="{$item['priceL']}">
         </td>
         <td>
            <select class="select" id="itemCatId_{$item['id']}">
               <option value="0">Главная Категория
                  {foreach $rsCategories as $itemCat}
               <option value="{$itemCat['id']}" {if $item['category_id']==$itemCat['id']}selected{/if}>
                  {$itemCat['name']}
                  {/foreach}
            </select>
         </td>
         <td>
            <textarea id="itemFullDesc_{$item['id']}" class="main-input" rows="5">
            {$item['fullDesc']}
         </textarea>
         </td>
			<td>
            <textarea id="itemDesc_{$item['id']}" class="main-input" rows="5">
            {$item['description']}
         </textarea>
         </td>
			<td>
            <input type="checkbox" id="itemBest_{$item['id']}" {if $item['best_offer']==1}checked="checked" {/if}>
         </td>
			<td>
            <input type="edit" id="itemColor_{$item['id']}" value="{$item['color']}">
         </td>
         <td>
            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status']==0}checked="checked" {/if}>
         </td>
         <td>

            {if $item['image']}
            <img src="/petunia/www/images/products/{$item['image']}" width="100">
            {/if}
            <form class="img-form" action="/petunia/www/?controller=admin&action=uploadmain" method="POST"
               enctype="multipart/form-data">
               <input type="file" name="filename"><br>
               <input type="hidden" name="itemId" value="{$item['id']}">
               <input type="submit" class="main-button" value="Загрузить"><br>
            </form>
         </td>
			<td>
            <img src="/petunia/www/images/products/{$item['image1']}" width="30">
				<img src="/petunia/www/images/products/{$item['image2']}" width="30">
				<img src="/petunia/www/images/products/{$item['image3']}" width="30">
				<img src="/petunia/www/images/products/{$item['image4']}" width="30">
				<img src="/petunia/www/images/products/{$item['image5']}" width="30">
            <form class="img-form" action="/petunia/www/?controller=admin&action=uploadimages" method="POST"
               enctype="multipart/form-data">
               <input type="file" multiple name="filename[]"><br>
					<input type="hidden" name="itemId" value="{$item['id']}">
               <input type="submit" class="main-button" value="Загрузить"><br>
            </form>
         </td>
         <td>
            <input type="button" class="main-button" value="Сохранить" onclick="updateProduct('{$item['id']}');">
         </td>
      </tr>
      {/foreach}
   </table>
</div>
