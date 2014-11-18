<?php /* Smarty version Smarty-3.1.13, created on 2014-11-06 01:03:27
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tracker_project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232877268545abacfb7c658-22299563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f2f4421c9144de82870a18bc1159c5f28eeb9e' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tracker_project.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232877268545abacfb7c658-22299563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'settings' => 0,
    'projectname' => 0,
    'project' => 0,
    'start' => 0,
    'end' => 0,
    'usr' => 0,
    'task' => 0,
    'fproject' => 0,
    'tracker' => 0,
    'userpermissions' => 0,
    'totaltime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_545abacfcbda76_74276430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545abacfcbda76_74276430')) {function content_545abacfcbda76_74276430($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/function.paginate_next.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('timetab'=>"active"), 0);?>


<div id="content-left">
<div id="content-left-in">
<div class="timetrack">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
			<span class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/timetracker.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
 <?php echo $_smarty_tpl->getConfigVariable('was');?>
 <?php echo $_smarty_tpl->getConfigVariable('added');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
			<span class="info_in_yellow"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/timetracker.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
 <?php echo $_smarty_tpl->getConfigVariable('was');?>
 <?php echo $_smarty_tpl->getConfigVariable('edited');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
			<span class="info_in_red"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/timetracker.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
 <?php echo $_smarty_tpl->getConfigVariable('was');?>
 <?php echo $_smarty_tpl->getConfigVariable('deleted');?>
</span>
		<?php }?>
	</div>

	
		<script type = "text/javascript">
			systemMsg('systemmsg');
		</script>
	

	<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
</span></h1>

	<div class="timetrack">
		<div class="headline">
			<a href="javascript:void(0);" id="acc-tracker_toggle" class="win_block" onclick = "toggleBlock('acc-tracker');"></a>

			<div class="wintools">
				<div class="export-main">
					<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
					<div class="export-in"  style="width:46px;left: -46px;"> 
						<a class="pdf" href="managetimetracker.php?action=projectpdf&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
<?php if ($_smarty_tpl->tpl_vars['start']->value!=''&&$_smarty_tpl->tpl_vars['end']->value!=''){?>&amp;start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&amp;end=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['usr']->value>0){?>&amp;usr=<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['task']->value>0){?>&amp;task=<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['fproject']->value)===null||$tmp==='' ? '' : $tmp)>0){?>&amp;project=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['fproject']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }?>"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
						<a class="excel" href="managetimetracker.php?action=projectxls&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
<?php if ($_smarty_tpl->tpl_vars['start']->value!=''&&$_smarty_tpl->tpl_vars['end']->value!=''){?>&amp;start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&amp;end=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['usr']->value>0){?>&amp;usr=<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['task']->value>0){?>&amp;task=<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['fproject']->value)===null||$tmp==='' ? '' : $tmp)>0){?>&amp;project=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['fproject']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }?>"><span><?php echo $_smarty_tpl->getConfigVariable('excelexport');?>
</span></a>
					</div>
				</div>

				<div class="toolwrapper">
					<a class="filter" href="javascript:blindtoggle('filter');" id="filter_report" onclick="toggleClass(this,'filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
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

		<div id = "filter" class="addmenue" style = "display:none;"> 
			<?php echo $_smarty_tpl->getSubTemplate ("filtertracker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div> 

		<div class="nosmooth" id="sm_report">

			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $_smarty_tpl->getConfigVariable('user');?>
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
									<a href = "manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['user'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['pname'];?>
">
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker']->value[$_smarty_tpl->getVariable('smarty')->value['section']['track']['index']]['uname'],16,"...",true);?>

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
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
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
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
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
						<td style="text-align:right"><strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['totaltime']->value)===null||$tmp==='' ? '' : $tmp);?>
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
				<a class="butn_link" href="javascript:blindtoggle('filter');" id="filter_butn" onclick="toggleClass('filter_report','filter-active','filter');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('filterreport');?>
</a>
			</div>
		</div>
	</div> 

</div> 

<div class="content-spacer"></div>


	<script type = "text/javascript">
		var accord_tracker = new accordion('acc-tracker');
	</script>


</div> 
</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>