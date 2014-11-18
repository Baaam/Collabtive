<?php /* Smarty version Smarty-3.1.13, created on 2014-11-07 00:04:19
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addmytask_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122062825545bfe733eb3b1-61675132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b96983559e8ba05d7f5b1983c2371fe197e881' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addmytask_index.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122062825545bfe733eb3b1-61675132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myprojects' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_545bfe73438874_57889410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545bfe73438874_57889410')) {function content_545bfe73438874_57889410($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</h2>
	
	<form novalidate id="addtaskform" class="main" method="post" action="managetask.php?action=add&amp;id="  onsubmit="return validateCompleteForm(this,'input_error');  ">
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
					<textarea name="text" id="text" rows="3" cols="1"></textarea>
				</div>
			</div>
			
			<div class="row">
				<label for="end<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
"><?php echo $_smarty_tpl->getConfigVariable('end');?>
:</label>
				<input type="text" class="text" name="end" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
" id="end<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" required="1" />
			</div>
			
			<div class="datepick">
				<div id="datepicker_task<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" class="picker" style="display:none;"></div>
			</div>
			
			<script type="text/javascript">
			  	theCal = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
				theCal.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
				theCal.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
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
				theCal.relateTo = "end<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
";
				theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal.getDatepicker("datepicker_task<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
");
			</script>
		    
		    <div class="row">
		    	<label for="tasklist"><?php echo $_smarty_tpl->getConfigVariable('project');?>
:</label>
				<select name="project" id="projectTask" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('project');?>
" onchange="change('manageproject.php?action=tasklists&amp;id='+this.value,'tasklist');$('addtaskform').action += this.value;">
				    <option value="-1" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
				    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['project'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['project']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['name'] = 'project';
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['myprojects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total']);
?>
				    	<option value="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'];?>
</option>
				    <?php endfor; endif; ?>
			    </select>
		    </div>
		    
		    <div class="row">
		    	<label for="tasklist"><?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
:</label>
			    <select name="tasklist" id="tasklist" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
">
			    	<option value="-1" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
			    </select>
		    </div>
			
		    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" name="assigned[]" />
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				<button onclick="blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
');toggleClass('add_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','add-active','add');toggleClass('add_butn_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>
	
</div> 
<?php }} ?>