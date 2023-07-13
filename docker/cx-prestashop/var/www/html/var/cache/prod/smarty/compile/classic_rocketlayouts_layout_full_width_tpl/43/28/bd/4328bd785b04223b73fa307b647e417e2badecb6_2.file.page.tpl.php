<?php
/* Smarty version 4.3.1, created on 2023-07-12 22:33:02
  from '/var/www/html/themes/classic-rocket/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af625ecc2d28_02067762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4328bd785b04223b73fa307b647e417e2badecb6' => 
    array (
      0 => '/var/www/html/themes/classic-rocket/templates/page.tpl',
      1 => 1689121044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64af625ecc2d28_02067762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174046733064af625ecbb833_77574829', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'pageWrapperClass'} */
class Block_125812340764af625ecbbc39_57157919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-wrapper <?php
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'pageHeaderClass'} */
class Block_189830660664af625ecbd828_43948726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-header <?php
}
}
/* {/block 'pageHeaderClass'} */
/* {block 'page_title'} */
class Block_210420813464af625ecbd2c1_46501421 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189830660664af625ecbd828_43948726', 'pageHeaderClass', $this->tplIndex);
?>
page-header--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_178561492364af625ecbcbb8_15592142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210420813464af625ecbd2c1_46501421', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'pageContentClass'} */
class Block_87743903764af625ecbf6c0_01207185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-content <?php
}
}
/* {/block 'pageContentClass'} */
/* {block 'page_content_top'} */
class Block_94241057664af625ecc0495_07569549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_55175617864af625ecc0bc2_84934760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_168643212464af625ecbf2e0_10380722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87743903764af625ecbf6c0_01207185', 'pageContentClass', $this->tplIndex);
?>
page-content--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94241057664af625ecc0495_07569549', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55175617864af625ecc0bc2_84934760', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'pageFooterClass'} */
class Block_175428553164af625ecc1812_91163210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-footer <?php
}
}
/* {/block 'pageFooterClass'} */
/* {block 'page_footer'} */
class Block_23202242864af625ecc22d9_58650245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_81997486964af625ecc1473_13375162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175428553164af625ecc1812_91163210', 'pageFooterClass', $this->tplIndex);
?>
page-footer--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23202242864af625ecc22d9_58650245', 'page_footer', $this->tplIndex);
?>
</footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_174046733064af625ecbb833_77574829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174046733064af625ecbb833_77574829',
  ),
  'pageWrapperClass' => 
  array (
    0 => 'Block_125812340764af625ecbbc39_57157919',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_178561492364af625ecbcbb8_15592142',
  ),
  'page_title' => 
  array (
    0 => 'Block_210420813464af625ecbd2c1_46501421',
  ),
  'pageHeaderClass' => 
  array (
    0 => 'Block_189830660664af625ecbd828_43948726',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_168643212464af625ecbf2e0_10380722',
  ),
  'pageContentClass' => 
  array (
    0 => 'Block_87743903764af625ecbf6c0_01207185',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_94241057664af625ecc0495_07569549',
  ),
  'page_content' => 
  array (
    0 => 'Block_55175617864af625ecc0bc2_84934760',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_81997486964af625ecc1473_13375162',
  ),
  'pageFooterClass' => 
  array (
    0 => 'Block_175428553164af625ecc1812_91163210',
  ),
  'page_footer' => 
  array (
    0 => 'Block_23202242864af625ecc22d9_58650245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125812340764af625ecbbc39_57157919', 'pageWrapperClass', $this->tplIndex);
?>
page-wrapper--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178561492364af625ecbcbb8_15592142', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168643212464af625ecbf2e0_10380722', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81997486964af625ecc1473_13375162', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
