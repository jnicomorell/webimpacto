<?php
/* Smarty version 4.3.1, created on 2023-07-12 22:33:02
  from '/var/www/html/themes/classic-rocket/templates/_partials/pagination-seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af625ed54c65_02099566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397313ffa7a5bcf70dfc97e9c6f1ebdb576105b4' => 
    array (
      0 => '/var/www/html/themes/classic-rocket/templates/_partials/pagination-seo.tpl',
      1 => 1689121044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64af625ed54c65_02099566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
    <?php $_smarty_tpl->_assignInScope('page_nb', 1);?>
    <?php if ((isset($_GET['page']))) {?>
        <?php $_smarty_tpl->_assignInScope('page_nb', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_GET['page'] )));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('queryPage', ('?page=').($_smarty_tpl->tpl_vars['page_nb']->value));?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['canonical'] = smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value['canonical'],$_smarty_tpl->tpl_vars['queryPage']->value,'');
$_smarty_tpl->_assignInScope('page', $_tmp_array);?>


    <?php $_smarty_tpl->_assignInScope('prev', false);?>
        <?php $_smarty_tpl->_assignInScope('next', false);?>
    <?php if (($_smarty_tpl->tpl_vars['page_nb']->value-1) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('prev', $_smarty_tpl->tpl_vars['page']->value['canonical']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page_nb']->value > 2) {?>
        <?php $_smarty_tpl->_assignInScope('prev', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value-1))));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to']) {?>
        <?php $_smarty_tpl->_assignInScope('next', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value+1))));?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
            <link rel="prev" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
            <link rel="next" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php }
}
}
}
