<?php /* Smarty version Smarty-3.1.6, created on 2021-01-30 19:40:32
         compiled from "../views/default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8516465245fe4c6ae3662d1-48787040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd60692b94da5eefc2a8473e97a897c0c933d9e' => 
    array (
      0 => '../views/default\\login.tpl',
      1 => 1612024740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8516465245fe4c6ae3662d1-48787040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fe4c6ae3923b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe4c6ae3923b')) {function content_5fe4c6ae3923b($_smarty_tpl) {?>
<div class="login__wrapper">
   <div id="loginBox" class="container">
      <div class="title">
         <h2>Войдите</h2>
      </div>
      <div class="form" id="form">
         <div class="form-control">
            <label>Email</label>
            <input type="email" id="loginEmail" name="loginEmail" value="" placeholder="text@gmail.com">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <div class="form-control">
            <label>Пароль</label>
            <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="Password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <input class="main-button" type="button" onclick="checkLoginParams(); login();" value="Войти">
      </div>
   </div>
</div><?php }} ?>