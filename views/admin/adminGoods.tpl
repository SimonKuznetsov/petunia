<div class="aproduct" id="productAdminTable">
   <table cellpadding="1" cellspacing="1" border="1" class="aproduct__table">
      <div class="aproduct__title">Редактировать</div>
      <tr>
         <th>№</th>
         <th>ID</th>
			<th>Название</th>
         <th>Размер</th>
         <th>Колличество</th>
			<th>Сохранить</th>
      </tr>
      {foreach $goods as $item name=goods}
      <tr>
         <td>{$smarty.foreach.goods.iteration}</td>
         <td>{$item['id']}</td>
         <td>
         {$item['name']}
         </td>
         <td>
         {if $item['size'] == 1}черенок{else if $item['size'] == 2}кустик{else if $item['size'] == 3}большой куст{/if}
         </td>
			<td>
            <input type="number" class="aproduct__price" id="goodsCount{$item['size']}_{$item['id']}" value="{$item['count']}">
         </td>
			<td>
            <input type="button" value="Сохранить" onclick="updateGoods({$item['id']}, {$item['size']});">
         </td>
		</tr>
      {/foreach}
   </table>
</div>