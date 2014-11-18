<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:33
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/filterreport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:422271957544b9b3130a231-98502831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299edb90b19c518b82ed34bec2d5fcb8c2967999' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/filterreport.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '422271957544b9b3130a231-98502831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start' => 0,
    'end' => 0,
    'opros' => 0,
    'fproject' => 0,
    'user' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b31363058_93883761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b31363058_93883761')) {function content_544b9b31363058_93883761($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
</h2>

	<form class="main" method="get" action="manageuser.php"  onsubmit="return validateCompleteForm(this);"  >
		<fieldset>
			
			<div class="row">
				<label for="start"><?php echo $_smarty_tpl->getConfigVariable('start');?>
:</label>
				<input type="text" name="start" id="start" onfocus="dpck.close();" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" />
			</div>
			
			<div class="datepick">
				<div id="datepicker_startfilter" class="picker" style="display:none;"></div>
			</div>
			
			<div class="row">
				<label for="end"><?php echo $_smarty_tpl->getConfigVariable('end');?>
:</label>
				<input type="text" name="end" id="end" onfocus="dpck2.close();" value="<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" />
			</div>
			
			<div class="datepick">
				<div id="datepicker_endfilter" class="picker" style="display:none;"></div>
			</div>
			
			<div class="row">
				<label for="fproject"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</label>
				<select name="project" id="fproject">
					<option value=""><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['proj'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['name'] = 'proj';
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['opros']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['proj']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['proj']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['proj']['index']]['ID']==$_smarty_tpl->tpl_vars['fproject']->value){?> selected="selected" <?php }?> >
							<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['proj']['index']]['name'];?>

						</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<input type="hidden" name="action" value="profile" />
			
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
" />
			
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
				theCal.relateTo = "start";
				theCal.keepEmpty = true;
				theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal.getDatepicker("datepicker_startfilter");
			</script>
			
			<script type="text/javascript">
				theCal2 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
				theCal2.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
				theCal2.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
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
				theCal2.relateTo = "end";
				theCal2.keepEmpty = true;
				theCal2.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal2.getDatepicker("datepicker_endfilter");
			</script>
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('filter');?>
</button>
				<button onclick= "javascript:blindtoggle('form_filter');toggleClass('filter_report','filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>

</div> 
<?php }} ?>