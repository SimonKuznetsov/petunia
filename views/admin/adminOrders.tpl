<div class="table__body" id="orderAdminTable">
   <h2 class="aorders__title">Заказы</h2>
   {if ! $orders}
   Нет заказов
   {else}
   <table cellpadding="1" border="1" cellspacing="1" class="aorders__table">
      <tr class="table__header">
         <th>№</th>
         <th>Действие</th>
         <th>ID заказа</th>
         <th width="110" ;>Статус</th>
         <th>Дата создания</th>
         <th>Дата оплаты</th>
         <th>Дополнительная информация</th>
         <th>Дата изменения заказа</th>
      </tr>
      {foreach $orders as $item name=orders}
      <tr {if $item['status']==1}style="background-color: whitesmoke;" {/if}>
         <td>{$smarty.foreach.orders.iteration}</td>
         <td><a class="main-link" href="#" onclick="showProducts('{$item['id']}'); return false;">Показать товар
               заказа</a></td>
         <td>{$item['id']}</td>
         <td>
            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status']}checked="checked" {/if}
               onclick="updateOrderStatus('{$item['id']}');">Закрыт
         </td>
         <td>{$item['date_created']}</td>
         <td>
            <input class="main-input" type="text" id="datePayment_{$item['id']}" value="{$item['date_payment']}">
            <input type="button" class="main-button" value="Сохранить" onclick="updateDatePayment('{$item['id']}');">
         </td>
         <td>{$item['comment']}</td>
         <td>{$item['date_modification']}</td>
      </tr>

      <tr class="none" id="purchasesForOrderId_{$item['id']}">
         <td colspan="8">
            {if $item['purchases']}
            <table cellpadding="1" cellspacing="1" border="1" width="100%" class="table__table">
               <tr class="table__header">
                  <th>№</th>
                  <th>ID</th>
                  <th>Название</th>
						<th>Размер</th>
                  <th>Количество</th>
						<th>Цена</th>
						<th>Стоимость</th>
               </tr>
               {foreach $item['purchases'] as $itemChild name=products}
               <tr>
                  <td>{$smarty.foreach.products.iteration}</td>
                  <td>{$itemChild['product_id']}</td>
                  <td>
                     <a href="/php%20shop/www/?controller=product&id={$itemChild['product_id']}"
                        class="main-link">{$itemChild['name']}</a>
                  </td>
						<td>{$itemChild['size']}</td>
                  <td>{$itemChild['amount']}</td>
						<td>{$itemChild['price']} руб.</td>
						<td>{$itemChild['price'] * $itemChild['amount']} руб.</td>
               </tr>
               {/foreach}
            </table>
            {/if}
         </td>
      </tr>
      {/foreach}
   </table>
   {/if}
</div>