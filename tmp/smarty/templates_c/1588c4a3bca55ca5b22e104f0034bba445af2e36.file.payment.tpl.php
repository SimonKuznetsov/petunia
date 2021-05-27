<?php /* Smarty version Smarty-3.1.6, created on 2021-04-02 18:32:51
         compiled from "../views/default\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17180700345fd83875a32e01-78343195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1588c4a3bca55ca5b22e104f0034bba445af2e36' => 
    array (
      0 => '../views/default\\payment.tpl',
      1 => 1617377501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17180700345fd83875a32e01-78343195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fd83875aaa68',
  'variables' => 
  array (
    'paymentData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd83875aaa68')) {function content_5fd83875aaa68($_smarty_tpl) {?>
<p>Через несколько секунд вы будете перенаправлены на страницу оплаты. Нажмите кнопку, если не хотите ждать ...</p>

<?php if ($_smarty_tpl->tpl_vars['paymentData']->value){?>
<form id="payment" name="payment" method="POST" enctype="utf-8" action="http://sci.interkassa.com">
   <input type="hidden" id="ik_co_id" name="ik_co_id" value="6028f08e0567d9470c5f5019">
   <input type="hidden" id="ik_pm_no" name="ik_pm_no" value="<?php echo $_smarty_tpl->tpl_vars['paymentData']->value[0];?>
">
   <input type="hidden" id="ik_am" name="ik_am" value="<?php echo $_smarty_tpl->tpl_vars['paymentData']->value[1];?>
">
   <input type="hidden" id="ik_cur" name="ik_cur" value="RUB">
   <input type="hidden" id="ik_desc" name="ik_desc" value="Оплата за товар">
   <input type="submit" value="Оплатить">
</form>
<?php }?><?php }} ?>