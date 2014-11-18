<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:38
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/admincustomers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820602336544b9b364075c8-31337244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca9c11130d16f7adde4c248cf1c045832dba170' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/admincustomers.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820602336544b9b364075c8-31337244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'settings' => 0,
    'userpermissions' => 0,
    'allcust' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b364d8ac8_78312726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b364d8ac8_78312726')) {function content_544b9b364d8ac8_78312726($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('customertab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style="display:none;" id="systemmsg">

				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
				<span class="info_in_yellow">
					<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/customers.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('customerwasedited');?>

				</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
				<span class="info_in_red">
					<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/customers.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('customerwasdeleted');?>

				</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
				<span class="info_in_green">
					<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/customers.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('customerwasadded');?>

				</span>
				<?php }?>

			</div>

			
				<script type="text/javascript">
					systemMsg('systemmsg');
				</script>
			

			<h1><?php echo $_smarty_tpl->getConfigVariable('administration');?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-customers_toggle" class="win_none" onclick="toggleBlock('acc-customers');"></a>

				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['userpermissions']->value['customers']['add'])===null||$tmp==='' ? '' : $tmp)){?>
				<div class="wintools">
					<a class="add" href="javascript:blindtoggle('form_addcustomer');" id="add_customers" onclick="Effect.BlindUp('form_editcustomer');toggleClass(this,'add-active','add');toggleClass('add_butn_customers','butn_link_active','butn_link');toggleClass('sm_customers','smooth','nosmooth');">
						<span><?php echo $_smarty_tpl->getConfigVariable('addcustomer');?>
</span>
					</a>
				</div>
				<?php }?>

				<h2>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/customers.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('customerlist');?>

				</h2>
			</div>

			<div class="block" id="acc-customers"> 
				<div id="form_addcustomer" class="addmenue" style="display:none;">
					<?php echo $_smarty_tpl->getSubTemplate ("addcustomer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('customers'=>"1"), 0);?>

				</div>

				<div id="form_editcustomer" class="addmenue" style="display:none;"></div>

				<div class="nosmooth" id="sm_customers">

					<table id="admincustomers" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $_smarty_tpl->getConfigVariable('customer');?>
</th>
								<th class="c"><?php echo $_smarty_tpl->getConfigVariable('phone');?>
</th>
								<th class="d"><?php echo $_smarty_tpl->getConfigVariable('email');?>
</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="5"></td>
							</tr>
						</tfoot>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cust'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['name'] = 'cust';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allcust']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total']);
?>

							
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']%2==0){?>
							<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
">
							<?php }else{ ?>
							<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
">
							<?php }?>

								<tr>
									<td>&nbsp;</td>
									<td>
										<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_customers.activate($$('#acc-customers .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cust']['index'];?>
]);toggleAccordeon('acc-customers',this);"></span>
											<a href="#" onclick="javascript:accord_customers.activate($$('#acc-customers .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cust']['index'];?>
]);toggleAccordeon('acc-customers',this);" title="<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['company'];?>
">
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['company'],30,"...",true);?>

											</a>
										</div>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['phone'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['email'];?>
</td>
									<td class="tools">

										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['customers']['edit']){?>
										<a id="edit_butn<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
" class="tool_edit" href="javascript:void(0);" onclick = "change('managecustomer.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
','form_editcustomer');Effect.BlindUp('form_addcustomer');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_editcustomer');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['customers']['del']){?>
										<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'proj_<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
\',\'managecustomer.php?action=del&amp;id=<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
										<?php }?>
									</td>
								</tr>

								<tr class="acc">
									<td colspan="5">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">

												<table id="admincustomers" cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td><?php echo $_smarty_tpl->getConfigVariable('contactperson');?>
:</td>
														<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['contact'];?>
</td>
														<td rowspan="3" style="vertical-align:top;"><?php echo $_smarty_tpl->getConfigVariable('address');?>
:</td>
														<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['address'];?>
</td>
													</tr>
													<tr>
														<td><?php echo $_smarty_tpl->getConfigVariable('cellphone');?>
:</td>
														<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['mobile'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['zip'];?>
 <?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['city'];?>
</td>
													</tr>
													<tr>
														<td><?php echo $_smarty_tpl->getConfigVariable('url');?>
:</td>
														<td><a href="<?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['url'];?>
</a></td>
														<td><?php echo $_smarty_tpl->tpl_vars['allcust']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']]['country'];?>
</td>
													</tr>
												</table>

											</div>
										</div>
									</td>
								</tr>
							</tbody>

						<?php endfor; endif; ?>

					</table> 

				</div> 

				<div class="tablemenue">
					<div class="tablemenue-in">

						<?php if ((($tmp = @$_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add'])===null||$tmp==='' ? '' : $tmp)){?>
							<a class="butn_link" href="javascript:blindtoggle('form_addcustomer');" id="add_butn_customers" onclick="Effect.BlindUp('form_editcustomer');toggleClass('add_customers','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_customers','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addcustomer');?>
</a>
						<?php }?>
					</div>
				</div>
			</div>  

			
				<script type="text/javascript">
					var accord_customers = new accordion('acc-customers');
				</script>
			

			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>