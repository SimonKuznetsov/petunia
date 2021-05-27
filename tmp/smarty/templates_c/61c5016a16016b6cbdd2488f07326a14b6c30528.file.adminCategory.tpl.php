<?php /* Smarty version Smarty-3.1.6, created on 2021-02-05 20:26:54
         compiled from "../views/admin\adminCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20083268185fbcc86b0ef2a0-45552359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5016a16016b6cbdd2488f07326a14b6c30528' => 
    array (
      0 => '../views/admin\\adminCategory.tpl',
      1 => 1612545916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20083268185fbcc86b0ef2a0-45552359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbcc86b1fc80',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'rsMainCategories' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbcc86b1fc80')) {function content_5fbcc86b1fc80($_smarty_tpl) {?><div class="table__body" id="categoryAdminTable">
   <h2 class="table__title">Категории</h2>
   <table cellpadding="1" cellspacing="1" class="table__table">
      <tr class="table__header">
         <th class="cat-admin-hide">№</th>
         <th>ID</th>
         <th>Название</th>
         <th>Родительская категория</th>
         <th>Удалить</th>
         <th>Сохранить</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']++;
?>
      <tr>
         <td class="cat-admin-hide"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['iteration'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
         <td>
            <input class="main-input" type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
         </td>
         <td>
            <div>
               <select class="select" id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                  <option value="0">Главная Категория
                     <?php  $_smarty_tpl->tpl_vars['mainItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mainItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsMainCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->key => $_smarty_tpl->tpl_vars['mainItem']->value){
$_smarty_tpl->tpl_vars['mainItem']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==$_smarty_tpl->tpl_vars['mainItem']->value['id']){?>selected<?php }?>>
                     <?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

                     <?php } ?>
               </select>
            </div>
         </td>
         <td>
            <input type="checkbox" id="catStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="updateCatStatus(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
         </td>
         <td>
            <input class="main-button" type="button" value="Сохранить" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
         </td>
      </tr>
      <?php } ?>
   </table>
</div><?php }} ?>