<?php
/* Smarty version 3.1.47, created on 2023-05-16 05:35:14
  from 'C:\wamp64\www\prestashop\modules\lb_affichagecat\views\templates\hook\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6462f9f242d186_25144520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843df6f6ff3379fe2492216ebe4f5c78ba9101fa' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\lb_affichagecat\\views\\templates\\hook\\home.tpl',
      1 => 1684208090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6462f9f242d186_25144520 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- nofilter pour qu'il prenne en compte les balise html et qu'il ne le considère pas comme du text -->
<div><?php echo $_smarty_tpl->tpl_vars['lb_titre']->value;?>
 </div>
<div class='row'>
	<div class="col-md-4">


		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie1']->value->getLink(), ENT_QUOTES, 'UTF-8');?>
">
			<p><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chemin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image1']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-responsive"></p>
			<p><?php echo $_smarty_tpl->tpl_vars['categorie1']->value->description;?>
</p>
			<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie1']->value->name, ENT_QUOTES, 'UTF-8');?>
</h3>

		</a>
	</div>
	<div class="col-md-4">

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie2']->value->getLink(), ENT_QUOTES, 'UTF-8');?>
">
			<p><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chemin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image2']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-responsive"></p>
			<p><?php echo $_smarty_tpl->tpl_vars['categorie2']->value->description;?>
</p>
			<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie2']->value->name, ENT_QUOTES, 'UTF-8');?>
</h3>
		</a>

	</div>
	<div class="col-md-4">

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie3']->value->getLink(), ENT_QUOTES, 'UTF-8');?>
">
			<p><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chemin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image3']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-responsive"></p>
			<p><?php echo $_smarty_tpl->tpl_vars['categorie3']->value->description;?>
</p>
			<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie3']->value->name, ENT_QUOTES, 'UTF-8');?>
</h3>

		</a>
	</div>
</div><?php }
}
