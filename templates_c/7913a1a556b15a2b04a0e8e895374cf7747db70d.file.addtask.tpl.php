<?php /* Smarty version Smarty-3.1.13, created on 2014-11-03 00:06:59
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addtask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11675027515456b913316b22-40362065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7913a1a556b15a2b04a0e8e895374cf7747db70d' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addtask.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11675027515456b913316b22-40362065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lists' => 0,
    'project' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'assignable_users' => 0,
    'userid' => 0,
    'tasklist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5456b9133c0058_89910770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456b9133c0058_89910770')) {function content_5456b9133c0058_89910770($_smarty_tpl) {?><div class="block_in_wrapper">

	<h2><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</h2>

	<form novalidate name="addtaskform<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" id="addtaskform<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="main" method="post" action="managetask.php?action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this,'input_error');  ">
		<fieldset>

			<div class="row">
				<label for="title"><?php echo $_smarty_tpl->getConfigVariable('title');?>
:</label>
				<input type="text" class="text" name="title" id="title" realname="<?php echo $_smarty_tpl->getConfigVariable('title');?>
" required="1" />
			</div>

			<div class="row">
				<label for="text"><?php echo $_smarty_tpl->getConfigVariable('text');?>
:</label>
				<div class="editor">
					<textarea name="text" id="text<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" rows="3" cols="1"></textarea>
				</div>
			</div>


			<div class="row">
				<label for="start_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
"><?php echo $_smarty_tpl->getConfigVariable('start');?>
:</label>
				<input type="text" class="text" name="start" realname="<?php echo $_smarty_tpl->getConfigVariable('start');?>
" id="start_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" required="0" />
			</div>

			<div class="datepick">
				<div id="datepicker_start_task<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="picker" style="display:none;"></div>
			</div>

			<script type="text/javascript">
			  	theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
				theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
				theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
","<?php echo $_smarty_tpl->getConfigVariable('february');?>
","<?php echo $_smarty_tpl->getConfigVariable('march');?>
","<?php echo $_smarty_tpl->getConfigVariable('april');?>
","<?php echo $_smarty_tpl->getConfigVariable('may');?>
","<?php echo $_smarty_tpl->getConfigVariable('june');?>
","<?php echo $_smarty_tpl->getConfigVariable('july');?>
","<?php echo $_smarty_tpl->getConfigVariable('august');?>
","<?php echo $_smarty_tpl->getConfigVariable('september');?>
","<?php echo $_smarty_tpl->getConfigVariable('october');?>
","<?php echo $_smarty_tpl->getConfigVariable('november');?>
","<?php echo $_smarty_tpl->getConfigVariable('december');?>
"];
				theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "start_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
";
				theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_start_task<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
");
			</script>


			<div class="row">
				<label for="end_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
"><?php echo $_smarty_tpl->getConfigVariable('due');?>
:</label>
				<input type="text" class="text" name="end" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
" id="end_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" required="1" />
			</div>

			<div class="datepick">
				<div id="datepicker_end_task<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="picker" style="display:none;"></div>
			</div>

			<script type="text/javascript">
			  	theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
				theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
				theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
","<?php echo $_smarty_tpl->getConfigVariable('february');?>
","<?php echo $_smarty_tpl->getConfigVariable('march');?>
","<?php echo $_smarty_tpl->getConfigVariable('april');?>
","<?php echo $_smarty_tpl->getConfigVariable('may');?>
","<?php echo $_smarty_tpl->getConfigVariable('june');?>
","<?php echo $_smarty_tpl->getConfigVariable('july');?>
","<?php echo $_smarty_tpl->getConfigVariable('august');?>
","<?php echo $_smarty_tpl->getConfigVariable('september');?>
","<?php echo $_smarty_tpl->getConfigVariable('october');?>
","<?php echo $_smarty_tpl->getConfigVariable('november');?>
","<?php echo $_smarty_tpl->getConfigVariable('december');?>
"];
				theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "end_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
";
				theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_end_task<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
");
			</script>


			<div class="row">
				<label for="assigned"><?php echo $_smarty_tpl->getConfigVariable('assignto');?>
:</label>
				<select name="assigned[]" multiple="multiple" style="height:80px;" id="assigned" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('assignto');?>
">
					<option value="-1"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['assignable_users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID']==$_smarty_tpl->tpl_vars['userid']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID']!=''){?>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" name="tasklist" />
			<?php }else{ ?>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
" name="tasklist" />
			<?php }?>

			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				<button type="reset" onclick="blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');toggleClass('add_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','add-active','add');toggleClass('add_butn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>

		</fieldset>
	</form>

</div> 
<?php }} ?>