<?php
/* Smarty version 4.3.1, created on 2023-07-12 22:33:02
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af625ee329c8_09033367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1689121044,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_64af625ee329c8_09033367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-lg-3 links wrapper">
    <p class="footer__title footer__title--desktop">Su cuenta</p>
    <a href="#footer_account_list" class="footer__title--mobile footer__title" data-toggle="collapse">Su cuenta</a>
  <ul class="account-list collapse show" data-collapse-hide-mobile id="footer_account_list">
            <li>
          <a href="http://localhost:8080/index.php?controller=identity" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=history" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=order-slip" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="http://localhost:8080/index.php?controller=addresses" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
        <li>
  <a href="//localhost:8080/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=1" title="Mis alertas">
    Mis alertas
  </a>
</li>

	</ul>
</div>
<?php }
}
