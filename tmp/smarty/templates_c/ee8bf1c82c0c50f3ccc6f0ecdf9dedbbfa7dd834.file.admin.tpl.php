<?php /* Smarty version Smarty-3.1.6, created on 2021-11-13 18:54:50
         compiled from "../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6144140175fbbabb64a3fb2-45340413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8bf1c82c0c50f3ccc6f0ecdf9dedbbfa7dd834' => 
    array (
      0 => '../views/admin\\admin.tpl',
      1 => 1636818875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6144140175fbbabb64a3fb2-45340413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fbbabb64a452',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbbabb64a452')) {function content_5fbbabb64a452($_smarty_tpl) {?><head>
   <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/admin.css">
   <script src=" https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="/petunia/www/templates/admin/js/admin.js"></script>
</head>
<form action="/petunia/www/?controller=admin" method="post" class="admin__container">
   <div id="loginBox" class="admin">
      <div class="admin__title">
         Панель админа
      </div>
      <div class="admin__wrapper">	
         <div class="admin__form">
            <label>Логин</label>
            <input type="text" id="login" name="login">
         </div>

         <div class="admin__form">
            <label>Пароль</label>
            <input type="password" id="password" name="password">
         </div>

         <input class="admin__button" type="submit" onclick="loginAdmin();" value="Войти">
      </div>
   </div>
</form><?php }} ?>