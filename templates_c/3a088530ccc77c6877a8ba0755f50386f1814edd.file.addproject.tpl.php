<?php /* Smarty version Smarty-3.1.13, created on 2014-11-23 21:37:58
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addproject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628280296547245a63fdef1-28258344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a088530ccc77c6877a8ba0755f50386f1814edd' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/addproject.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628280296547245a63fdef1-28258344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'customers' => 0,
    'users' => 0,
    'userid' => 0,
    'myprojects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547245a64544c9_20646228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547245a64544c9_20646228')) {function content_547245a64544c9_20646228($_smarty_tpl) {?><div class="block_in_wrapper">

	<h2><?php echo $_smarty_tpl->getConfigVariable('addproject');?>
</h2>

	<form novalidate class="main" method="post" action="admin.php?action=addpro"  onsubmit="return validateCompleteForm(this);"  >
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

		    <div class="clear_both_b"></div>

			<div class="row">
				<label for="end"><?php echo $_smarty_tpl->getConfigVariable('due');?>
:</label>
				<input type="text" class="text" name="end" id="endP" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
" />
			</div>

			<div class="row">
				<label for="neverdue"></label>
				<input type="checkbox" class="checkbox" value="neverdue" name="neverdue" id="neverdue" onclick="$('endP').value='';$('endP').disabled=!$('endP').disabled;">
				<label><?php echo $_smarty_tpl->getConfigVariable('neverdue');?>
</label>
			</div>

			<div class="datepick">
				<div id="add_project" class="picker" style="display:none;"></div>
			</div>


			<script type="text/javascript">
			
			  Event.observe(window,'load', function(event) {

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
				theCal.relateTo = "endP";
				theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal.getDatepicker("add_project");
			
});
			  	

			</script>


			<div class="row">
				<label for="budget"><?php echo $_smarty_tpl->getConfigVariable('budget');?>
:</label>
				<input type="text" class="text" name="budget" id="budget" />
			</div>

			<div class = "row">
				<label><?php echo $_smarty_tpl->getConfigVariable('customer');?>
:</label>
				<select name="company" id="company" realname="<?php echo $_smarty_tpl->getConfigVariable('assignto');?>
">
					<option value="-1"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customers']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
						<option value = "<?php echo $_smarty_tpl->tpl_vars['customers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['customers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['company'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label><?php echo $_smarty_tpl->getConfigVariable('members');?>
:</label>
				<div style="float:left;">
			        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				        <div class="row">
					        <input type="checkbox" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" name="assignto[]" id="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID']==$_smarty_tpl->tpl_vars['userid']->value){?> checked="checked" <?php }?> />
					        <label for="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
</label><br />
				      	</div>
				    <?php endfor; endif; ?>
			    </div>
			</div>


			<input type="hidden" name="assignme" value="1" />

		    <div class="clear_both_b"></div>

			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>

				<?php if ($_smarty_tpl->tpl_vars['myprojects']->value=="1"){?>
				<button type="reset" onclick="blindtoggle('form_addmyproject');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
				<?php }else{ ?>
				<button type="reset" onclick="blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
');return false;"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
				<?php }?>

			</div>

		</fieldset>
	</form>

</div> 
<?php }} ?>