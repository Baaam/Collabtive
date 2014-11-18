<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:47
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:450901011544b9b3fb57af3-09586884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fae3fb0c51cfdab2d8f3a7334f7a4202659806' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-admin.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450901011544b9b3fb57af3-09586884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projecttab' => 0,
    'customertab' => 0,
    'usertab' => 0,
    'settingstab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b3fb6a8f1_93295043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b3fb6a8f1_93295043')) {function content_544b9b3fb6a8f1_93295043($_smarty_tpl) {?><div class="tabswrapper">
	<ul class="tabs">
		<li class="projects"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['projecttab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
		<li class="customers"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['customertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>
		<li class="user"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
		<li class="system-settings"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settingstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
	</ul>
</div><?php }} ?>