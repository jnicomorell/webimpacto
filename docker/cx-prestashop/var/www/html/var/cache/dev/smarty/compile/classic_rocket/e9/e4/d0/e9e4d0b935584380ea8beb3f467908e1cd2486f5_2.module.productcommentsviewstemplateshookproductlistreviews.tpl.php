<?php
/* Smarty version 4.3.1, created on 2023-07-13 17:26:32
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b06c0818ab82_47405092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1689121044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b06c0818ab82_47405092 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic-rocket/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->


<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
<div>
  <div id="product-list-reviews-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-list-reviews">
    <div class="grade-stars small-stars">
              <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_17_iteration <= 5; $__section_i_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="star"><i class="material-icons"><?php if ($_smarty_tpl->tpl_vars['average_grade']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>&#xE83A;<?php } elseif ($_smarty_tpl->tpl_vars['average_grade']->value > (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) && $_smarty_tpl->tpl_vars['average_grade']->value < ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1)) {?>&#xE839;<?php } else { ?>&#xE838;<?php }?></i></div>
        <?php
}
}
?>
    </div>
  </div>
    </div>
<?php }?>
<!-- end /var/www/html/themes/classic-rocket/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
