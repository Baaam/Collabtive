<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:44
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/settings_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467669467544b9b3ccb8690-78507691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4781c81faba396349c76edb4451cedff1003d4' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/settings_email.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467669467544b9b3ccb8690-78507691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b3ccd81c0_04936291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b3ccd81c0_04936291')) {function content_544b9b3ccd81c0_04936291($_smarty_tpl) {?>				<div id="email">
				<div class="block_in_wrapper">

					<form class="main" method="post" action="admin.php?action=editmailsets" onsubmit="return validateCompleteForm(this);">
					<fieldset>

					<div class="row">
						<label for="mailstatus"><?php echo $_smarty_tpl->getConfigVariable('status');?>
:</label>
						<select name="mailstatus" id="mailstatus" >
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['mailnotify']==1){?>
						<option value = "1" selected>on</option>
						<option value = "0">off</option>
						<?php }else{ ?>
						<option value = "1">on</option>
						<option value = "0" selected>off</option>
						<?php }?>
						</select>
					</div>

					<div class="row"><label for="mailfrommail"><?php echo $_smarty_tpl->getConfigVariable('mailfrommail');?>
:</label><input type="text" class="text" name="mailfrommail" id="mailfrommail" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailfrom'];?>
" /></div>
					<div class="row"><label for="mailfromname"><?php echo $_smarty_tpl->getConfigVariable('mailfromname');?>
:</label><input type="text" class="text" name="mailfromname" id="mailfromname" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailfromname'];?>
" /></div>

					<div class="row"><label for="mailmethod"><?php echo $_smarty_tpl->getConfigVariable('mailmethod');?>
:</label><select name="mailmethod" id="mailmethod" >
					<?php if ($_smarty_tpl->tpl_vars['settings']->value['mailmethod']=="mail"){?>
					<option value = "mail" selected>PHP mail()</option>
					<option value = "smtp">SMTP</option>
					<?php }else{ ?>
					<option value = "mail">PHP mail()</option>
					<option value = "smtp" selected>SMTP</option>
					<?php }?>
					</select>
					</div>


					<div class="row"><label for="server"><?php echo $_smarty_tpl->getConfigVariable('mailserver');?>
:</label><input type="text" class="text" name="server" id="server" value = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settings']->value['mailhost'])===null||$tmp==='' ? '' : $tmp);?>
" /></div>
					<div class="row"><label for="mailuser"><?php echo $_smarty_tpl->getConfigVariable('mailusername');?>
:</label><input type="text" class="text" name="mailuser" id="mailuser" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailuser'];?>
" autocomplete = "off" /></div>
					<div class="row"><label for="mailpass"><?php echo $_smarty_tpl->getConfigVariable('mailpass');?>
:</label><input type="password" class="text" name="mailpass" id="mailpass" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailpass'];?>
" autocomplete = "off" /></div>


					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
					</div>


					</fieldset>
					</form>

				</div> 
				</div> <?php }} ?>