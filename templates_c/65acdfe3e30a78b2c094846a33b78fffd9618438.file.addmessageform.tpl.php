<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:53:39
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addmessageform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:362464311544b9d533d4860-52351310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65acdfe3e30a78b2c094846a33b78fffd9618438' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addmessageform.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362464311544b9d533d4860-52351310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'files' => 0,
    'myprojects' => 0,
    'milestones' => 0,
    'members' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9d5340e6f6_51793258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9d5340e6f6_51793258')) {function content_544b9d5340e6f6_51793258($_smarty_tpl) {?><div class="block_in_wrapper">

	<h2><?php echo $_smarty_tpl->getConfigVariable('addmessage');?>
</h2>

	<form novalidate name="addmessageform" id="addmessageform" class="main" method="post" enctype="multipart/form-data" action="managemessage.php?action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this,'input_error');">
		<fieldset>

			<div class="row">
				<label for="title"><?php echo $_smarty_tpl->getConfigVariable('title');?>
:</label>
				<input type="text" class="text" name="title" id="title" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('title');?>
" />
			</div>

			<div class="row">
				<label for="text"><?php echo $_smarty_tpl->getConfigVariable('text');?>
:</label>
				<div class="editor">
					<textarea name="text" id="text" realname="<?php echo $_smarty_tpl->getConfigVariable('text');?>
" rows="3" cols="1"></textarea>
				</div>
			</div>

			
			<div class="row">
				<label for="thefiles"><?php echo $_smarty_tpl->getConfigVariable('attachfile');?>
:</label>
				<select name="thefiles" id="thefiles">
					<option value="0"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label for="milestone"><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
:</label>
				<select name="milestone" id="milestone" realname="<?php echo $_smarty_tpl->getConfigVariable('milestone');?>
">
					<option value="0" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['name'] = 'stone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label><?php echo $_smarty_tpl->getConfigVariable('notify');?>
:</label>
				<select name="sendto[]" multiple style="height:100px;">
					<option value="" disabled style="color:black;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('general');?>
</option>
					<option value="all" selected><?php echo $_smarty_tpl->getConfigVariable('all');?>
</option>
					<option value="none" ><?php echo $_smarty_tpl->getConfigVariable('none');?>
</option>
					<option value="" disabled style="color:black;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('members');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['members']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur()"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
				<button onclick="blindtoggle('addmsg');toggleClass('add','add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_msgs','smooth','nosmooth');return false;" onfocus="this.blur()"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>

		</fieldset>
	</form>

</div> 
<?php }} ?>