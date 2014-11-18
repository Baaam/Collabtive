<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:33
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1744000510544b9b312b0703-53695127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e5b8425ed968fb89c5563713cf035f9d5a5c22c' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-user.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1744000510544b9b312b0703-53695127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userid' => 0,
    'usertab' => 0,
    'userpermissions' => 0,
    'edittab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b31303886_44933122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b31303886_44933122')) {function content_544b9b31303886_44933122($_smarty_tpl) {?><div class="tabswrapper">
	<ul class="tabs">
		<?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="f"){?>
			<?php if ($_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="user-female"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a></li>
			<?php }else{ ?>
				<li class="user-female"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href=""></a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']&&$_smarty_tpl->tpl_vars['userid']->value!=$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="edit-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['edittab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('edit');?>
</span></a></li>
			<?php }elseif($_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="edit-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['edittab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageuser.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('edit');?>
</span></a></li>
			<?php }?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="user-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a></li>
			<?php }else{ ?>
				<li class="user-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href=""></a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']&&$_smarty_tpl->tpl_vars['userid']->value!=$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="edit-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['edittab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('edit');?>
</span></a></li>
			<?php }elseif($_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['user']->value['ID']){?>
				<li class="edit-male"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['edittab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageuser.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('edit');?>
</span></a></li>
			<?php }?>
		<?php }?>
	</ul>
</div><?php }} ?>