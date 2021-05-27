<?php /* Smarty version Smarty-3.1.6, created on 2021-02-12 11:51:45
         compiled from "../views/default\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10499459455fb65cf1d895a9-49863916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666b6bc8023c125a090718b73de3d72f4408aabe' => 
    array (
      0 => '../views/default\\order.tpl',
      1 => 1613119902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10499459455fb65cf1d895a9-49863916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5fb65cf1df529',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'sum' => 0,
    'arUser' => 0,
    'buttonClass' => 0,
    'name' => 0,
    'phone' => 0,
    'adress' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb65cf1df529')) {function content_5fb65cf1df529($_smarty_tpl) {?>

<h2 class="main-title">Данные заказа</h2>
<form id="frmOrder" action="/php%20shop/www/?controller=cart&action=saveorder" method="POST">
   <div class="table__body" id="orderTable">
      <table class="table__table">
         <tr class="table__header">
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за еденицу</td>
            <td>Стоимость</td>
         </tr>

         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
         <tr>
            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
            <td><a href="/php%20shop/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="main-link"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
            </td>
            <td>
               <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                  <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

               </span>
            </td>
            <td>
               <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                  <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

               </span>
            </td>
            <td>
               <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                  <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

               </span>
            </td>
         </tr>
         <?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum']->value+$_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['cnt'], null, 0);?>;
         <?php } ?>
      </table>
   </div>
   <div class="cart__sum">
      <br>Итог: <span id="sumPrice"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</span> рублей
   </div>

   <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
   <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable('', null, 0);?>
   <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 class="container">
      <div class="title">
         <h2>Данные заказчика</h2>
      </div>
      <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['name'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['phone'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['adress'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['adress'], null, 0);?>
      <div class="form" id="form2">
         <div class="form-control">
            <label>Имя</label>
            <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="Simon">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>
         <div class="form-control">
            <label>Телефон</label>
            <input type="phone" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" placeholder="+7 (995) 656-51-37">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>
         <div class="form-control">
            <label>Адрес</label>
            <input type="text" id="adress" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
" placeholder="Лесная 3">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
         </div>

         <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 class="main-button" type="button" id="btnSaveOrder" value="Оформить заказ"
            onclick="checkOrderParams(); saveOrder();">
      </div>

      <?php }else{ ?>
      <div id="loginBox" class="container">
         <div class="title">
            <h2>Авторизация</h2>
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

            <input id="orderBtn" class="main-button" type="button" onclick="checkLoginParams(); login();" value="Войти">
         </div>
      </div>

      <br><br><span class="or">или</span><br><br>
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

            <input type="button" class="main-button" onclick="checkRegisterParams(); registerNewUser(0);"
               value="Зарегистрироваться">
         </div>
      </div>
      <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable("class='hide'", null, 0);?>
      <?php }?>



</form><?php }} ?>