<?php /* Smarty version Smarty-3.1.6, created on 2021-02-04 16:12:31
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102596848601bf2654d03d6-21310602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1612444348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102596848601bf2654d03d6-21310602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_601bf26559c1f',
  'variables' => 
  array (
    'searchedProducts' => 0,
    'item' => 0,
    'cart' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_601bf26559c1f')) {function content_601bf26559c1f($_smarty_tpl) {?><div class="products__block">
   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchedProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
   <div class="elastic card">
      <a href="/php%20shop/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
         <img src="/php shop/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
      </a><br>
      <div class="content">
         <div class="row">
            <div class="details">
               <a href="/php%20shop/www/?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="main-link"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
               <div class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 рублей</div>
            </div>
         </div>
         <a class="main-button <?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>hide<?php }?>" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
            href="/php%20shop/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
            onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить</a>
         <a class="main-button <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['cart']->value)){?>hide<?php }?>" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
            href="/php%20shop/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hide" <?php }?>
            onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt="Добавить в корзину">В корзину</a>
      </div>
   </div>
   <?php } ?>
</div><?php }} ?>