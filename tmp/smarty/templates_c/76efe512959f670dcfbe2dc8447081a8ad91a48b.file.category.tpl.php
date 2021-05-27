<?php /* Smarty version Smarty-3.1.6, created on 2021-02-10 21:01:35
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13010910405f9be4d2b35638-47136191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1612980089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13010910405f9be4d2b35638-47136191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9be4d2b86d6',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'cart' => 0,
    'itemInCart' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9be4d2b86d6')) {function content_5f9be4d2b86d6($_smarty_tpl) {?>
<h1 class="main-title"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['rsCategory']->value['id']>2){?>
<div class="search">
   <form id="searchForm" action="/php%20shop/www/?controller=index&action=search" method="POST">
      <input class="search__input" type="text" id="elastic" name="search" onclick="opacityTrue();">
      <div name="catId" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
</div>
      <div class="animation__box">
         <span class="animate"></span>
      </div>
      <button type="submit" class="search__button" onclick="cleanSearchValue();">
         <i class="fas fa-search"></i>
      </button>
   </form>
</div>
<?php }?>
<div class="products__block">
   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</div>

<div class="pagination">
   <div style="display: none;"><?php echo $_smarty_tpl->tpl_vars['paginator']->value['pageCnt'];?>
</div>
   <ul>

   </ul>
</div><?php }} ?>