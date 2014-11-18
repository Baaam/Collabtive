<?php /* Smarty version Smarty-3.1.13, created on 2014-11-03 00:06:59
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addtasklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1021379035456b9132fb835-83266459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597c06c56dbfb5cfbc21ca7613e8012b099ead31' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addtasklist.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021379035456b9132fb835-83266459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'milestones' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5456b913312266_77703655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456b913312266_77703655')) {function content_5456b913312266_77703655($_smarty_tpl) {?><div class = "block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('addtasklist');?>
</h2>
	
	<form novalidate class="main" method="post" action="managetasklist.php?action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this);"  >
		<fieldset>
			<div class="row">
				<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
				<input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
			</div>
			
			<div class="row">
				<label for="desc"><?php echo $_smarty_tpl->getConfigVariable('description');?>
:</label>
				<div class="editor">
					<textarea name="desc" id="desc" rows="3" cols="1"></textarea>
				</div>
			</div>
			
			<div class="row">
				<label for="milestone"><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
:</label>
				<select name="milestone" id="milestone">
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
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				<button onclick="blindtoggle('addlist');toggleClass('addtasklists','add','add-active');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>
	
</div>

<div class="content-spacer"></div>
<?php }} ?>