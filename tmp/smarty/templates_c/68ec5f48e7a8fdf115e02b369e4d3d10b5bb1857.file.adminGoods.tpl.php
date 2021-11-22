<?php /* Smarty version Smarty-3.1.6, created on 2021-11-19 18:44:31
         compiled from "../views/admin\adminGoods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205086716061968b870e7225-03583473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ec5f48e7a8fdf115e02b369e4d3d10b5bb1857' => 
    array (
      0 => '../views/admin\\adminGoods.tpl',
      1 => 1637336069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205086716061968b870e7225-03583473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61968b870e798',
  'variables' => 
  array (
    'goods' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61968b870e798')) {function content_61968b870e798($_smarty_tpl) {?><div class="aproduct" id="productAdminTable">
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
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['goods']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['goods']['iteration']++;
?>
      <tr>
         <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['goods']['iteration'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
         <td>
         <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

         </td>
         <td>
         <?php if ($_smarty_tpl->tpl_vars['item']->value['size']==1){?>черенок<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==2){?>кустик<?php }elseif($_smarty_tpl->tpl_vars['item']->value['size']==3){?>большой куст<?php }?>
         </td>
			<td>
            <input type="number" class="aproduct__price" id="goodsCount<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
">
         </td>
			<td>
            <input type="button" value="Сохранить" onclick="updateGoods(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
);">
         </td>
		</tr>
      <?php } ?>
   </table>
</div><?php }} ?>