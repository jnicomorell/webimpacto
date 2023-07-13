<?php
/* Smarty version 4.3.1, created on 2023-07-11 20:22:21
  from '/var/www/html/adminpresta/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64adf23d2a2f56_03144212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62e508b0574638418b9533d6483ec8fc1036e28' => 
    array (
      0 => '/var/www/html/adminpresta/themes/new-theme/template/content.tpl',
      1 => 1687270889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64adf23d2a2f56_03144212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
