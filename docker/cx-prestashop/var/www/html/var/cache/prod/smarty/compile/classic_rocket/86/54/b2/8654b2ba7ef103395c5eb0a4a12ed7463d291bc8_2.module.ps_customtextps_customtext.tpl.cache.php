<?php
/* Smarty version 4.3.1, created on 2023-07-12 22:33:02
  from 'module:ps_customtextps_customtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af625ecb0838_78851602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtextps_customtext.tpl',
      1 => 1689121044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64af625ecb0838_78851602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '144422414064af625ecafb13_86865728';
?>

<div id="custom-text" class="card">
  <div class="card-body">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

  </div>
</div>
<?php }
}
