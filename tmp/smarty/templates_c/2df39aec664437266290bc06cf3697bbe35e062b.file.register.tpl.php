<?php /* Smarty version Smarty-3.1.6, created on 2021-01-30 19:30:04
         compiled from "../views/default\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5913120705fe4c612c39df5-58789851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df39aec664437266290bc06cf3697bbe35e062b' => 
    array (
      0 => '../views/default\\register.tpl',
      1 => 1612024201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5913120705fe4c612c39df5-58789851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fe4c612cbda8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe4c612cbda8')) {function content_5fe4c612cbda8($_smarty_tpl) {?>
<div class="reg__wrapper">
   <div class="container" id="registerBox">
      <div class="title">
         <h2>Зарегистрируйтесь</h2>
      </div>
      <div class="form">
         <div class="form-control">
            <label>Имя</label>
            <input type="text" id="username" name="username" value="" placeholder="Simon">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <div class="form-control">
            <label>Email</label>
            <input type="email" id="registerEmail" name="registerEmail" value="" placeholder="text@gmail.com">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <div class="form-control">
            <label>Пароль</label>
            <input type="password" id="registerPwd1" name="registerPwd1" value="" placeholder="Password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <div class="form-control">
            <label>Повтор пароля</label>
            <input type="password" id="registerPwd2" name="registerPwd2" value="" placeholder="Password two">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <input type="button" class="main-button" onclick="checkRegisterParams(); registerNewUser(1);"
            value="Зарегистрироваться">
      </div>
   </div>
</div><?php }} ?>