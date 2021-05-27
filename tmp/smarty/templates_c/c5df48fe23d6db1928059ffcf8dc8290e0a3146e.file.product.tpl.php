<?php /* Smarty version Smarty-3.1.6, created on 2021-03-13 17:30:08
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5719897655f9c34b707f236-49613022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1613291012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5719897655f9c34b707f236-49613022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9c34b70ec4c',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9c34b70ec4c')) {function content_5f9c34b70ec4c($_smarty_tpl) {?>
<div class="product__card">
   <h1 class="main-title"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h1>
   <div class="product__img">
      <img src="/php shop/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="575">
   </div>
   <div class="product__details">
      <div class="product__price">
         Цена: <span><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</span>
      </div>
      <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hide" <?php }?>
         href="/php%20shop/www/?controller=cart&action=removefromcart&id=<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
         onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины"
         class="main-button">Удалить из корзины</a>
      <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="/php%20shop/www/?controller=cart&action=addtocart&id=<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
         <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hide" <?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;"
         alt="Добавить в корзину" class="main-button">Добавить в корзину</a>
      <div class="product__description">
         <span class="description__title"> Описание </span><br>
         <p>
            <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

         </p>
      </div>
   </div>
</div><?php }} ?>