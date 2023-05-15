<?php
/* Smarty version 3.1.47, created on 2023-05-12 08:56:12
  from 'C:\wamp64\www\prestashop\admin271dhmzen\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645de30c6f7321_14287997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '687eb3a4eb66d3d76d3a0969f79896b221bf2407' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin271dhmzen\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1681579744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645de30c6f7321_14287997 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
