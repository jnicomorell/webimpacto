<?php
/* Smarty version 4.3.1, created on 2023-07-13 17:26:31
  from '/var/www/html/modules/myweather/views/templates/hook/displayNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b06c07a82509_59766607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f08583f05a8ad9b78d2f5254b727b746b6a8a02' => 
    array (
      0 => '/var/www/html/modules/myweather/views/templates/hook/displayNav.tpl',
      1 => 1689227956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b06c07a82509_59766607 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['weather_location']->value) {?>
        <span class="location">Location: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['weather_location']->value, ENT_QUOTES, 'UTF-8');?>
</span> | 
        <span class="temperature">Temperature: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['weather_temp_c']->value, ENT_QUOTES, 'UTF-8');?>
°C</span> | 
        <span class="humidity">Humidity: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['weather_condition_text']->value, ENT_QUOTES, 'UTF-8');?>
 <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['weather_condition_icon']->value, ENT_QUOTES, 'UTF-8');?>
"/></span>        
    <?php } else { ?>
        <span>Unable to fetch weather data.</span>
    <?php }
}
}
