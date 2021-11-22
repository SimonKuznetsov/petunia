<div class="acategory__add" id="blockNewCategory">
   <div class="acategory__wrapper">
      Новая категория:
      <input class="acategory__input" type="text" name="newCategoryName" id="newCategoryName" value="">

      Подкатегория для
      <select class="acategory__select" name="generalCatId">
         <option value="0">Главная Категория</option>
         {foreach $rsCategories as $item}
         <option value="{$item['id']}">{$item['name']}
            {/foreach}
      </select>

      <div><input type="button" onclick="newCategory();" class="admin__button" value="Добавить категорию"></div>
   </div>
</div>

<div class="acategory" id="categoryAdminTable">
   <div class="acategory__title">Категории</div>
   <table cellpadding="1" cellspacing="1" border="1" class="acategory__table">
      <tr>
         <th>№</th>
         <th>ID</th>
         <th>Название</th>
         <th>Родительская категория</th>
         <th>Удалить</th>
         <th>Сохранить</th>
      </tr>
      {foreach $rsCategories as $item name=categories}
      <tr>
         <td>{$smarty.foreach.categories.iteration}</td>
         <td>{$item['id']}</td>
         <td>
            <input class="main-input" type="edit" id="itemName_{$item['id']}" value="{$item['name']}">
         </td>
         <td>
            <div>
               <select class="select" id="parentId_{$item['id']}">
                  <option value="0">Главная Категория
                     {foreach $rsMainCategories as $mainItem}
                  <option value="{$mainItem['id']}" {if $item['parent_id']==$mainItem['id']}selected{/if}>
                     {$mainItem['name']}
                     {/foreach}
               </select>
            </div>
         </td>
         <td>
            <input type="checkbox" id="catStatus_{$item['id']}" onclick="updateCatStatus({$item['id']});">
         </td>
         <td>
            <input class="main-button" type="button" value="Сохранить" onclick="updateCat({$item['id']});">
         </td>
      </tr>
      {/foreach}
   </table>
</div>