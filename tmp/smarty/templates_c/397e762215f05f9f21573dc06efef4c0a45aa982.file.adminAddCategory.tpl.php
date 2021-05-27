<?php /* Smarty version Smarty-3.1.6, created on 2021-02-07 10:32:25
         compiled from "../views/admin\adminAddCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4343959595fc0832d3bccc4-00973841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e762215f05f9f21573dc06efef4c0a45aa982' => 
    array (
      0 => '../views/admin\\adminAddCategory.tpl',
      1 => 1612683141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4343959595fc0832d3bccc4-00973841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fc0832d42c6e',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fc0832d42c6e')) {function content_5fc0832d42c6e($_smarty_tpl) {?><div id="blockNewCategory">
   <div>
      Новая категория:
      <input class="main-input" type="text" name="newCategoryName" id="newCategoryName" value="">
      <br>

      Является подкатегорией для
      <select class="select" name="generalCatId">
         <option value="0">Главная Категория</option>
         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            <?php } ?>
      </select>


      <br>
      <input type="button" onclick="newCategory();" class="main-button" value="Добавить категорию">
   </div>
</div><?php }} ?>