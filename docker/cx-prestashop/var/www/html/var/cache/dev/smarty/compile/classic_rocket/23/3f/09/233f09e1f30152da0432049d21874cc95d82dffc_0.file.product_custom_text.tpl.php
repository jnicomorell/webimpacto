<?php
/* Smarty version 4.3.1, created on 2023-07-13 17:28:31
  from '/var/www/html/modules/customproducttext/views/templates/admin/product_custom_text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b06c7f05e0e0_40357891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233f09e1f30152da0432049d21874cc95d82dffc' => 
    array (
      0 => '/var/www/html/modules/customproducttext/views/templates/admin/product_custom_text.tpl',
      1 => 1689228388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b06c7f05e0e0_40357891 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label class="control-label col-lg-3">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Text','d'=>'Modules.Customtext.Admin'),$_smarty_tpl ) );?>

    </label>
    <div class="col-lg-9">
        <textarea class="form-control" name="custom_text"><?php echo $_smarty_tpl->tpl_vars['custom_text']->value;?>
</textarea>
    </div>
</div>
<?php }
}
