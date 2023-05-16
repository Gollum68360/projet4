<?php
/* Smarty version 3.1.47, created on 2023-05-16 05:19:38
  from 'C:\wamp64\www\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6462f64a5455c8_30877580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd388c9200d00af29f5679d0b50060a6cac6ace7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1681579745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6462f64a5455c8_30877580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop\\var\\cache\\dev\\smarty\\compile\\classic_childlayouts_layout_full_width_tpl\\cd\\38\\8c\\cd388c9200d00af29f5679d0b50060a6cac6ace7_2.file.helpers.tpl.php',
    'uid' => 'cd388c9200d00af29f5679d0b50060a6cac6ace7',
    'call_name' => 'smarty_template_function_renderLogo_2937439906462f64a4b5350_16394875',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2937439906462f64a4b5350_16394875 */
if (!function_exists('smarty_template_function_renderLogo_2937439906462f64a4b5350_16394875')) {
function smarty_template_function_renderLogo_2937439906462f64a4b5350_16394875(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2937439906462f64a4b5350_16394875 */
}
