<?php
/* Smarty version 3.1.47, created on 2023-05-12 08:56:53
  from 'C:\wamp64\www\prestashop\admin271dhmzen\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645de3350e4304_99783467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '291b2149abad27d86f4bd0e15c75fe67e56c40d4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin271dhmzen\\themes\\default\\template\\content.tpl',
      1 => 1681579744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645de3350e4304_99783467 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}