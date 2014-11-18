<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:32
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/userprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1568553853544b9b30e90c10-05115179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1ee62d8d0152d50b7baf48cb8de817516a62b6' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/userprofile.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1568553853544b9b30e90c10-05115179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cl_config' => 0,
    'settings' => 0,
    'userpermissions' => 0,
    'opros' => 0,
    'projectstyle' => 0,
    'adminstate' => 0,
    'userid' => 0,
    'tracker' => 0,
    'project' => 0,
    'start' => 0,
    'end' => 0,
    'usr' => 0,
    'task' => 0,
    'fproject' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b3110eb83_93474760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b3110eb83_93474760')) {function content_544b9b3110eb83_93474760($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_next.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('usertab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="user">

			<h1><?php echo $_smarty_tpl->getConfigVariable('userprofile');?>
<span>/ <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span></h1>

			<div class="export-main">
				<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
				<div class="export-in"  style="width:32px;left: -32px;"> 
					<?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="f"){?>
						<a class="vcardfemale" href="manageuser.php?action=vcard&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('vcardexport');?>
</span></a>
					<?php }else{ ?>
						<a class="vcardmale" href="manageuser.php?action=vcard&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('vcardexport');?>
</span></a>
					<?php }?>
				</div>
			</div>

			<div class="userwrapper">

				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td class="avatarcell" valign="top">
							<?php if ($_smarty_tpl->tpl_vars['user']->value['avatar']!=''){?>
								<a href="#avatarbig" id="ausloeser">
									<div class="avatar-profile"><img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
&amp;width=122;" alt="" /></div>
								</a>
							<?php }else{ ?>
								<?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="f"){?>
									<div class="avatar-profile"><img src = "thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-female.jpg&amp;width=122;" alt="" /></div>
								<?php }else{ ?>
									<div class="avatar-profile">
										<img src = "thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-male.jpg&amp;width=122;" alt="" />
									</div>
								<?php }?>
							<?php }?>
							<div id="avatarbig" style="display:none;">
								<a href="javascript:Control.Modal.close();"><img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
&amp;width=480&amp;height=480;" alt="" /></a>
							</div>
						</td>
						<td>
							<div class="message">
								<div class="block">

									<table cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="a" />
											<col class="b" />
										</colgroup>

										<thead><tr><th colspan="2"></th></tr></thead>
										<tfoot><tr><td colspan="2"></td></tr></tfoot>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('company');?>
:</strong></td>
												<td class="right"><?php if ($_smarty_tpl->tpl_vars['user']->value['company']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
<?php }?></td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</strong></td>
												<td class="right"><a href = "mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</a></td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('url');?>
:</strong></td>
												<td class="right"><a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
</a></td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('phone');?>
:</strong></td>
												<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['tel1'];?>
</td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('cellphone');?>
:</strong></td>
												<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['tel2'];?>
</td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('address');?>
:</strong></td>
												<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['adress'];?>
</td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('zip');?>
 / <?php echo $_smarty_tpl->getConfigVariable('city');?>
:</strong></td>
												<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['zip'];?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['zip']&&$_smarty_tpl->tpl_vars['user']->value['adress2']){?> <?php }?><?php echo $_smarty_tpl->tpl_vars['user']->value['adress2'];?>
 </td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<?php if ($_smarty_tpl->tpl_vars['user']->value['state']==''){?>
													<td><strong><?php echo $_smarty_tpl->getConfigVariable('country');?>
:</strong></td>
													<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
</td>
												<?php }elseif($_smarty_tpl->tpl_vars['user']->value['country']==''){?>
													<td><strong><?php echo $_smarty_tpl->getConfigVariable('state');?>
:</strong></td>
													<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['state'];?>
</td>
												<?php }else{ ?>
													<td><strong><?php echo $_smarty_tpl->getConfigVariable('country');?>
 (<?php echo $_smarty_tpl->getConfigVariable('state');?>
):</strong></td>
													<td class="right"><?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['state'];?>
)</td>
												<?php }?>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $_smarty_tpl->getConfigVariable('tags');?>
:</strong></td>
												<td class="right">
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user']->value['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total']);
?>
														<a href = "managetags.php?action=gettag&tag=<?php echo $_smarty_tpl->tpl_vars['user']->value['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
&amp;id=0"><?php echo $_smarty_tpl->tpl_vars['user']->value['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
</a>
													<?php endfor; endif; ?>
												</td>
											</tr>
										</tbody>
									</table>

								</div> 
							</div> 
						</td>
					</tr>
				</table>
			</div> 
		</div> 
		<div class="content-spacer"></div>

		<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['opros']->value)===null||$tmp==='' ? '' : $tmp)){?>
			<div class="projects">
				<div class="headline">
					<a href="javascript:void(0);" id="projecthead_toggle" class="win_block" onclick = "toggleBlock('projecthead');"></a>

					<h2>
						<a href="myprojects.php" title="<?php echo $_smarty_tpl->getConfigVariable('myprojects');?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('projects');?>
</a>
					</h2>
				</div>

				<div class="block" id="projecthead" style = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['projectstyle']->value)===null||$tmp==='' ? '' : $tmp);?>
">

					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
								<th class="c"></th>
								<th class="d" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="5"></td>
							</tr>
						</tfoot>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['opro'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['name'] = 'opro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['opros']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['opro']['total']);
?>
							
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']%2==0){?>
							<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
">
							<?php }else{ ?>
							<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
">
							<?php }?>
								<tr <?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
									<td>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['adminstate']->value)===null||$tmp==='' ? '' : $tmp)>4){?>
											<a class="butn_check" href="javascript:closeElement('proj_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
','manageproject.php?action=close&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
										<?php }?>
									</td>
									<td>
										<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#projecthead .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['opro']['index'];?>
]);toggleAccordeon('projecthead',this);"></span>
											<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['name'];?>
">
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['name'],30,"...",true);?>

											</a>
										</div>
									</td>
									<td></td>
									<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
									<td class="tools">

									</td>
								</tr>

								<tr class="acc">
									<td colspan="5">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">
												<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['desc'];?>

												<p class="tags-miles">
													<strong><?php echo $_smarty_tpl->getConfigVariable('user');?>
:</strong>
												</p>

												<div class="inwrapper">
													<ul>
														<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
															<li>
																<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
">

																	<table cellpadding="0" cellspacing="0" border="0">
																		<tr>
																			<td class="leftmen" valign="top">
																				<div class="inmenue">
																					<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
																						<a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>
																					<?php }?>
																				</div>
																			</td>
																			<td class="thumb">
																				<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
">
																					<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['gender']=="f"){?>
																						<img src = "./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/user-icon-female.png" alt="" />
																					<?php }else{ ?>
																						<img src = "./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/user-icon-male.png" alt="" />
																					<?php }?>
																				</a>
																			</td>
																			<td class="rightmen" valign="top">
																				<div class="inmenue">
																					<a class="del" href="manageproject.php?action=deassign&amp;user=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
&amp;redir=admin.php?action=projects" title="<?php echo $_smarty_tpl->getConfigVariable('deassignuser');?>
" onclick="fadeToggle('iw_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>
																					<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edituser');?>
"></a>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td colspan="3">
																				<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],15,"...",true);?>
</a></span>
																			</td>
																		<tr/>
																	</table>

																	<?php if ($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
																		<div class="moreinfo-wrapper">
																			<div class="moreinfo" id="info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" style="display:none">
																				<img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar'];?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');" />
																				<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['opros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opro']['index']]['members'][$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],15,"...",true);?>
</a></span>
																			</div>
																		</div>
																	<?php }?>
																</div> 

															</li>
														<?php endfor; endif; ?>
													</ul>
												</div> 

											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>

					<div class="tablemenue"></div>
				</div> 
			</div> 
			<div class="content-spacer"></div> 


			
				<script type = "text/javascript">
					var accord_projects = new accordion('projecthead');
					new Control.Modal('ausloeser',{
					opacity: 0.8,
					position: 'absolute',
					width: 480,
					height: 480,
					fade:true,
					containerClassName: 'pics',
					overlayClassName: 'useroverlay'
					});
				</script>
			
		<?php }?><?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']||$_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['user']->value['ID']){?><?php if ($_smarty_tpl->tpl_vars['tracker']->value){?> 
			<div class="timetrack">
				<div class="headline">
					<a href="javascript:void(0);" id="acc-tracker_toggle" class="win_block" onclick = "toggleBlock('acc-tracker');"></a>
					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
							<div class="export-in"  style="width:46px;left: -46px;"> 
								<a class="pdf" href="managetimetracker.php?action=userpdf&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
<?php if ($_smarty_tpl->tpl_vars['start']->value!=''&&$_smarty_tpl->tpl_vars['end']->value!=''){?>&amp;start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&amp;end=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['usr']->value>0){?>&amp;usr=<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['task']->value>0){?>&amp;task=<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['fproject']->value>0){?>&amp;project=<?php echo $_smarty_tpl->tpl_vars['fproject']->value;?>
<?php }?>"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
								<a class="excel" href="managetimetracker.php?action=userxls&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
<?php if ($_smarty_tpl->tpl_vars['start']->value!=''&&$_smarty_tpl->tpl_vars['end']->value!=''){?>&amp;start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&amp;end=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['usr']->value>0){?>&amp;usr=<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['task']->value>0){?>&amp;task=<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['fproject']->value>0){?>&amp;project=<?php echo $_smarty_tpl->tpl_vars['fproject']->value;?>
<?php }?>"><span><?php echo $_smarty_tpl->getConfigVariable('excelexport');?>
</span></a>
							</div>
						</div>

						<div class="toolwrapper">
							<a class="filter" href="javascript:blindtoggle('form_filter');" id="filter_report" onclick="toggleClass(this,'filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
</span></a>
						</div>
					</div>

					<h2>
						<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/timetracker.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('report');?>

					</h2>
				</div>

				<div class="block" id="acc-tracker"> 
					<div id = "form_filter" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("filterreport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>

					<div class="nosmooth" id="sm_report">

						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
									<th class="cf"><?php echo $_smarty_tpl->getConfigVariable('day');?>
</th>
									<th class="cf"><?php echo $_smarty_tpl->getConfigVariable('started');?>
</th>
									<th class="cf"><?php echo $_smarty_tpl->getConfigVariable('ended');?>
</th>
									<th class="e" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('hours');?>
&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="6"></td>
								</tr>
							</tfoot>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['track'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['track']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['name'] = 'track';
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tracker']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['track']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['track']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['track']['total']);
?>

								
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['track']['index']%2==0){?>
								<tbody class="color-a" id="track_<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="track_<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['ID'];?>
">
								<?php }?>
									<tr>
										<td></td>
										<td>
											<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_tracker.activate($$('#acc-tracker .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['track']['index'];?>
]);toggleAccordeon('acc-tracker',this);"></span>
												<a href = "managetimetracker.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['pname'];?>
">
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['pname'],30,"...",true);?>

												</a>
											</div>
										</td>
										<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['daystring'],12,"...",true);?>
</td>
										<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['startstring'],12,"...",true);?>
</td>
										<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['endstring'],12,"...",true);?>
</td>
										<td style="text-align:right"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['hours'],12,"...",true);?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['timetracker']['edit']){?>
												<a class="tool_edit" href="managetimetracker.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['timetracker']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'track_<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['ID'];?>
\',\'managetimetracker.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="7">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<?php if ($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['comment']!=''){?>
														<strong><?php echo $_smarty_tpl->getConfigVariable('comment');?>
:</strong><br /><?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['comment'];?>

													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['task']>0){?>
														<p class="tags-miles">
															<strong><?php echo $_smarty_tpl->getConfigVariable('task');?>
:</strong><br />
															<a href = "managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['task'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['project'];?>
"><?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['tname'];?>
</a>
														</p>
													<?php }?>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>

							<tbody class="tableend">
								<tr>
									<td></td>
									<td colspan="4"><strong><?php echo $_smarty_tpl->getConfigVariable('totalhours');?>
:</strong></td>
									<td style="text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['totaltime']->value;?>
</strong>&nbsp;&nbsp;</td>
									<td class="tools"></td>
								</tr>
							</tbody>

						<tbody class="color-a">
					<tr>
						<td colspan="7">
							<div id="paging" style = "float:right;" >
								<?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>

							</div>
						</td>

					</tr>
				</tbody>
						</table>

					</div> 

					<div class="tablemenue">
						<div class="tablemenue-in">
							<a class="butn_link" href="javascript:blindtoggle('form_filter');" id="filter_butn" onclick="toggleClass('filter_report','filter-active','filter');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
</a>
						</div>
					</div>
				</div> 
			</div> 
		<?php }?><?php }?>
		<div class="content-spacer"></div>

		
			<script type = "text/javascript">
				var accord_tracker = new accordion('acc-tracker');
			</script>
		

	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>