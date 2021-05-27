<?php /* Smarty version Smarty-3.1.6, created on 2020-12-24 22:02:15
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13977287445f99a91701b764-74465381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1608836419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13977287445f99a91701b764-74465381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f99a9170261f',
  'variables' => 
  array (
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f99a9170261f')) {function content_5f99a9170261f($_smarty_tpl) {?>
<div id="leftColumn">


   <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
   <div id="userBox">
      <a href="/php%20shop/www/?controller=user" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br>
      <a href="/php%20shop/www/?controller=user&action=logout" onclick="logout();">Выход</a>
   </div>

   <?php }else{ ?>
   <div id="userBox" class="hideme">
      <a href="#" id="userLink"></a><br>
      <a href="/php%20shop/www/?controller=user&action=logout" onclick="logout();">Выход</a>
   </div>

   <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)){?>

   <div id="registerBox">
      <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
      <div id="registerBoxHidden">
         email:<br>
         <input type="text" id="email" name="email" value=""><br>
         пароль:<br>
         <input type="password" id="pwd1" name="pwd1" value=""><br>
         повторить пароль:<br>
         <input type="password" id="pwd2" name="pwd2" value=""><br>
         <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
      </div>
   </div>
   <?php }?>
   <?php }?>

</div><?php }} ?>