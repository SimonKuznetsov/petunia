<?php /* Smarty version Smarty-3.1.6, created on 2021-01-30 19:42:00
         compiled from "../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6144140175fbbabb64a3fb2-45340413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8bf1c82c0c50f3ccc6f0ecdf9dedbbfa7dd834' => 
    array (
      0 => '../views/admin\\admin.tpl',
      1 => 1612024915,
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
css/main.css">
   <script src=" https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="/php%20shop/www/templates/admin/js/admin.js"></script>
</head>
<form style="text-align: center; margin-top: 10%;" action="/php%20shop/www/?controller=admin" method="post">
   <div id="loginBox" class="container">
      <div class="title">
         <h2>Панель админа</h2>
      </div>
      <div class="form" id="form">
         <div class="form-control">
            <label>Логин</label>
            <input type="text" id="login" name="login" value="" placeholder="simon">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <div class="form-control">
            <label>Пароль</label>
            <input type="password" id="password" name="password" value="" placeholder="Password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <input class="main-button" type="submit" onclick="checkAdminParams(); loginAdmin();" value="Войти">
      </div>
   </div>
</form><?php }} ?>