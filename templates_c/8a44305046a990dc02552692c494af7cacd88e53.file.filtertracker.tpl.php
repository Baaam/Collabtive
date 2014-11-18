<?php /* Smarty version Smarty-3.1.13, created on 2014-11-06 01:03:27
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/filtertracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641565756545abacfef14d2-30138629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a44305046a990dc02552692c494af7cacd88e53' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/filtertracker.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641565756545abacfef14d2-30138629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'start' => 0,
    'end' => 0,
    'userpermissions' => 0,
    'users' => 0,
    'usr' => 0,
    'ptasks' => 0,
    'task' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_545abad00637a9_94367380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545abad00637a9_94367380')) {function content_545abad00637a9_94367380($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
</h2>
	
	<form class="main" method="post" action="managetimetracker.php?action=showproject&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this);"  >
		<fieldset>
			
			<div class="row">
				<label for="start"><?php echo $_smarty_tpl->getConfigVariable('start');?>
:</label>
				<input type="text" class="text" name="start" id="start" realname="<?php echo $_smarty_tpl->getConfigVariable('start');?>
" onfocus="dpck.close();" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" />
			</div>
			
			<div class="datepick">
				<div id="datepicker_startfilter" class="picker" style="display:none;"></div>
			</div>
			
			<div class="row">
				<label for="end"><?php echo $_smarty_tpl->getConfigVariable('end');?>
:</label>
				<input type="text" class="text" name="end" id="end" realname="<?php echo $_smarty_tpl->getConfigVariable('end');?>
" onfocus="dpck2.close();" value="<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" />
			</div>
			
			<div class="datepick">
				<div id="datepicker_endfilter" class="picker" style="display:none;"></div>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
				<div class="row">
					<label for="usr"><?php echo $_smarty_tpl->getConfigVariable('user');?>
:</label>
					<select name="usr" id="usr" realname="<?php echo $_smarty_tpl->getConfigVariable('user');?>
">
						<option value=""><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['usi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['name'] = 'usi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total']);
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['ID']==$_smarty_tpl->tpl_vars['usr']->value){?> selected="selected" <?php }?> >
								<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['name'];?>

							</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			<?php }else{ ?>
				<input type="hidden" name="usr" id="usr" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
" />
			<?php }?>
			
			<div class="row">
				<label for="ttask"><?php echo $_smarty_tpl->getConfigVariable('task');?>
:</label>
				<select name="task[]" id="ttask" multiple>
			  		<option value=""><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
				  	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ptasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total']);
?>
				  		<?php if ($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title']!=''){?>
				  			<option value="<?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID']==$_smarty_tpl->tpl_vars['task']->value){?> selected="selected" <?php }?> >
				  				<?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>

				  			</option>
				  		<?php }else{ ?>
				  			<option value="<?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID']==$_smarty_tpl->tpl_vars['task']->value){?> selected="selected" <?php }?> >
				  				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'],30,"...",true);?>

				  			</option>
						<?php }?>
					<?php endfor; endif; ?>
			  	</select>
			</div>
			
			<input type="hidden" name="action" value="showproject" />
			
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
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
				<button onclick="javascript:blindtoggle('filter');toggleClass('filter_report','filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>
	
</div> 
<?php }} ?>