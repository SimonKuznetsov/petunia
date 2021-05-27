<?php /* Smarty version Smarty-3.1.6, created on 2021-02-07 11:14:00
         compiled from "../views/admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9442106955fbceaebc67798-17284048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61841b8e82aca4be8c4677ab9d757aa621ae9f09' => 
    array (
      0 => '../views/admin\\adminProducts.tpl',
      1 => 1612685610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9442106955fbceaebc67798-17284048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbceaebcff55',
  'variables' => 
  array (
    'rsCategories' => 0,
    'itemCat' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbceaebcff55')) {function content_5fbceaebcff55($_smarty_tpl) {?><h1 class="main-title">Товар</h1>

<input type="button" class="main-button" onclick="createXML();" value="Сохранить в XML">
<div id="xml-place"></div>

<hr>

Импорт
<form action="/php%20shop/www/?controller=admin&action=loadfromxml" method="POST" enctype="multipart/form-data">
   <input type="file" name="filename"><br>
   <input type="submit" class="main-button" value="Загрузить"><br>
</form>
<hr>

<div class="table__body" id="addProduct">
   <table cellpadding="1" cellspacing="1" class="table__table">
      <h2 class="table__title">Добавить продукт</h2>
      <tr class="table__header">
         <th>Название</th>
         <th>Цена</th>
         <th>Категория</th>
         <th>Описание</th>
         <th>Сохранить</th>
      </tr>

      <tr>
         <td>
            <input type="edit" class="main-input" id="newItemName" value="">
         </td>
         <td>
            <input type="edit" class="main-input" id="newItemPrice" value="">
         </td>
         <td>
            <select class="select" name="generalCatId">
               <option value="0">Главная Категория
                  <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" id="newItemCatId"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                  <?php } ?>
            </select>
         </td>
         <td>
            <textarea id="newItemDesc" class="main-input"></textarea>
         </td>
         <td>
            <input type="button" class="main-button" value="Сохранить" onclick="addProduct();">
         </td>
      </tr>
   </table>
</div>

<br>
<br>
<br>

<div class="table__body" id="productAdminTable">
   <table cellpadding="1" cellspacing="1" class="table__table">
      <h2 class="table__title">Редактировать</h2>
      <tr class="table__header">
         <th class="admin-hide">№</th>
         <th>ID</th>
         <th>Название</th>
         <th>Цена</th>
         <th>Категория</th>
         <th>Описание</th>
         <th>Удалить</th>
         <th>Изображение</th>
         <th>Сохранить</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
      <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>style="background-color: whitesmoke;" <?php }?>>
         <td class="admin-hide"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
         <td>
            <input type="edit" class="main-input" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
         </td>
         <td>
            <input type="edit" class="main-input" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
         </td>
         <td>
            <select class="select" id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
               <option value="0">Главная Категория
                  <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']){?>selected<?php }?>>
                  <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                  <?php } ?>
            </select>
         </td>
         <td>
            <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="main-input" rows="8">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

         </textarea>
         </td>
         <td>
            <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>checked="checked" <?php }?>>
         </td>
         <td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
            <img src="/php shop/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
            <?php }?>
            <form class="img-form" action="/php%20shop/www/?controller=admin&action=upload" method="POST"
               enctype="multipart/form-data">
               <input type="file" name="filename"><br>
               <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
               <input type="submit" class="main-button" value="Загрузить"><br>
            </form>
         </td>
         <td>
            <input type="button" class="main-button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">
         </td>
      </tr>
      <?php } ?>
   </table>
</div>

<div class="pagination">
   <div style="display: none;"><?php echo $_smarty_tpl->tpl_vars['paginator']->value['pageCnt'];?>
</div>
   <ul>

   </ul>
</div><?php }} ?>