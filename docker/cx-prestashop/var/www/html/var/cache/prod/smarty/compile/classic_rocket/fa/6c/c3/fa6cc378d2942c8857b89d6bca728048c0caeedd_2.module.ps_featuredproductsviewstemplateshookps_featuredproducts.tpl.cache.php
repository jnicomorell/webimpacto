<?php
/* Smarty version 4.3.1, created on 2023-07-12 22:33:02
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af625eb3d725_94544926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
      1 => 1689121044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_64af625eb3d725_94544926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '88035795464af625eb31ad9_26570322';
?>
<section class="featured-products clearfix">
  <p class="products-section-title">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </p>
  <?php $_smarty_tpl->_assignInScope('productscount', smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value));?>
  <div class="products products-slick spacing-md-top<?php if ($_smarty_tpl->tpl_vars['productscount']->value > 1) {?> products--slickmobile<?php }?>" data-slick='{"slidesToShow": 1,"slidesToScroll": 1,"mobileFirst":true,"arrows":true,"rows":0,"responsive": [{"breakpoint": 992,"settings":<?php if ($_smarty_tpl->tpl_vars['productscount']->value > 4) {?>{"arrows":true,"slidesToShow": 4,"slidesToScroll": 4,"arrows":true}<?php } else { ?>"unslick"<?php }?>},{"breakpoint": 720,"settings":<?php if ($_smarty_tpl->tpl_vars['productscount']->value > 3) {?>{"arrows":true,"slidesToShow": 3,"slidesToScroll": 3}<?php } else { ?>"unslick"<?php }?>},{"breakpoint": 540,"settings":<?php if ($_smarty_tpl->tpl_vars['productscount']->value > 2) {?>{"arrows":true,"slidesToShow": 2,"slidesToScroll": 2}<?php } else { ?>"unslick"<?php }?>}]}'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <a class="all-product-link float-left float-md-right" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>
<?php }
}
