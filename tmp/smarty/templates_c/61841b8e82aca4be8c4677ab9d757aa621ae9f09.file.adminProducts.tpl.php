<?php /* Smarty version Smarty-3.1.6, created on 2021-11-18 19:11:32
         compiled from "../views/admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9442106955fbceaebc67798-17284048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61841b8e82aca4be8c4677ab9d757aa621ae9f09' => 
    array (
      0 => '../views/admin\\adminProducts.tpl',
      1 => 1637251826,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbceaebcff55')) {function content_5fbceaebcff55($_smarty_tpl) {?><input type="button" class="aproduct__exml" onclick="createXML();" value="Сохранить в XML">
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
                  <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                  <?php } ?>
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
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
      <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>style="background-color: whitesmoke;" <?php }?>>
         <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
         <td>
            <input type="edit" class="main-input" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
         </td>
         <td>
            <input type="number" class="aproduct__price" id="itemPrice1_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['priceS'];?>
">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="itemPrice2_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['priceM'];?>
">
         </td>
			<td>
            <input type="number" class="aproduct__price" id="itemPrice3_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['priceL'];?>
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
            <textarea id="itemFullDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="main-input" rows="5">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['fullDesc'];?>

         </textarea>
         </td>
			<td>
            <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="main-input" rows="5">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

         </textarea>
         </td>
			<td>
            <input type="checkbox" id="itemBest_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['best_offer']==1){?>checked="checked" <?php }?>>
         </td>
			<td>
            <input type="edit" id="itemColor_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
">
         </td>
         <td>
            <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>checked="checked" <?php }?>>
         </td>
         <td>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
            <img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
            <?php }?>
            <form class="img-form" action="/petunia/www/?controller=admin&action=uploadmain" method="POST"
               enctype="multipart/form-data">
               <input type="file" name="filename"><br>
               <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
               <input type="submit" class="main-button" value="Загрузить"><br>
            </form>
         </td>
			<td>
            <img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
" width="30">
				<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
" width="30">
				<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
" width="30">
				<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image4'];?>
" width="30">
				<img src="/petunia/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image5'];?>
" width="30">
            <form class="img-form" action="/petunia/www/?controller=admin&action=uploadimages" method="POST"
               enctype="multipart/form-data">
               <input type="file" multiple name="filename[]"><br>
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
<?php }} ?>