<?php /* Smarty version Smarty-3.1.6, created on 2020-12-30 15:42:09
         compiled from "../views/admin\adminOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3026349525fbf3964901772-24176881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5949173ce98fde930df71ad4ac736fb0943fded' => 
    array (
      0 => '../views/admin\\adminOrders.tpl',
      1 => 1609332122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3026349525fbf3964901772-24176881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbf39649af32',
  'variables' => 
  array (
    'rsOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbf39649af32')) {function content_5fbf39649af32($_smarty_tpl) {?><div class="table__body" id="orderAdminTable">
   <h2 class="table__title">Заказы</h2>
   <?php if (!$_smarty_tpl->tpl_vars['rsOrders']->value){?>
   Нет заказов
   <?php }else{ ?>
   <table cellpadding="1" cellspacing="1" class="table__table">
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
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']++;
?>
      <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==1){?>style="background-color: whitesmoke;" <?php }?>>
         <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'];?>
</td>
         <td><a class="main-link" href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;">Показать товар
               заказа</a></td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
         <td>
            <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']){?>checked="checked" <?php }?>
               onclick="updateOrderStatus('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">Закрыт
         </td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
         <td>
            <input class="main-input" type="text" id="datePayment_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
">
            <input type="button" class="main-button" value="Сохранить" onclick="updateDatePayment('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">
         </td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_modification'];?>
</td>
      </tr>

      <tr class="hide" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
         <td colspan="8">
            <?php if ($_smarty_tpl->tpl_vars['item']->value['children']){?>
            <table cellpadding="1" cellspacing="1" width="100%" class="table__table">
               <tr class="table__header">
                  <th>№</th>
                  <th>ID</th>
                  <th>Название</th>
                  <th>Цена</th>
                  <th>Количество</th>
               </tr>
               <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
               <tr>
                  <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                  <td>
                     <a href="/php%20shop/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
"
                        class="main-link"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
               </tr>
               <?php } ?>
            </table>
            <?php }?>
         </td>
      </tr>
      <?php } ?>
   </table>
   <?php }?>
</div><?php }} ?>