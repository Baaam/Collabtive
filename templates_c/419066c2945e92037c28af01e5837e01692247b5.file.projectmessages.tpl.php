<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:53:39
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/projectmessages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1296814604544b9d53087260-67526008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419066c2945e92037c28af01e5837e01692247b5' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/projectmessages.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296814604544b9d53087260-67526008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'mode' => 0,
    'projectname' => 0,
    'project' => 0,
    'userid' => 0,
    'userpermissions' => 0,
    'myprojects' => 0,
    'messages' => 0,
    'cl_config' => 0,
    'langfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9d531d87a7_12625464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9d531d87a7_12625464')) {function content_544b9d531d87a7_12625464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce",'jsload3'=>"lightbox"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('msgstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="msgs">

			<div class = "infowin_left">
				<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('messagewasdeleted');?>
</span>
			</div>

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
					<span class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('messagewasadded');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
					<span class="info_in_yellow"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('messagewasedited');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="replied"){?>
					<span class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('replywasadded');?>
</span>
				<?php }?>
			</div>

			
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			


			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('messages');?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_msgs_toggle" class="win_block" onclick = "toggleBlock('block_msgs');"></a>

				<div class="wintools">
					<div class="export-main">
						<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
						<div class="export-in"  style="width:46px;left: -46px;"> 
							<a class="pdf" href="managemessage.php?action=export-project&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
							<a class="rss" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('rssfeed');?>
</span></a>
						</div>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['add']){?>
						<a class="add" href="javascript:blindtoggle('addmsg<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
');" id="add" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_msgs','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addmessage');?>
</span></a>
					<?php }?>
				</div>

				<h2>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('messages');?>

				</h2>
			</div>

			<div id="block_msgs" class="block" >

				
				<div id = "addmsg" class="addmenue" style = "display:none;">
					<?php echo $_smarty_tpl->getSubTemplate ("addmessageform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>

				<div class="nosmooth" id="sm_msgs">

					<table id="acc_msgs" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $_smarty_tpl->getConfigVariable('message');?>
</th>
								<th class="ce" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('replies');?>
&nbsp;&nbsp;</th>
								<th class="de"><?php echo $_smarty_tpl->getConfigVariable('by');?>
</th>
								<th class="e"><?php echo $_smarty_tpl->getConfigVariable('on');?>
</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="6"></td>
							</tr>
						</tfoot>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['message'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['message']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['name'] = 'message';
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total']);
?>

						
						<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['message']['index']%2==0){?>
						<tbody class="color-a" id="msgs_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
">
						<?php }else{ ?>
						<tbody class="color-b" id="msgs_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
">
						<?php }?>
							<tr>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['close']){?>
											<a class="butn_reply" href="javascript:void(0);" onclick="change('managemessage.php?action=replyform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','addmsg');toggleClass(this,'butn_reply_active','butn_reply');blindtoggle('addmsg');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
									<?php }?>
								</td>
								<td>
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:accord_messages.activate($$('#block_msgs .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['message']['index'];?>
]);toggleAccordeon('accord_messages',this);"></span>
										<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'],35,"...",true);?>
</a>
									</div>
								</td>
								<td style="text-align:right">
									<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replies']>0){?>
										<a href = "managemessage.php?action=showmessage&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
#replies"><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replies'];?>
</a>
									<?php }else{ ?>
										<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replies'];?>

									<?php }?>
									&nbsp;
								</td>
								<td><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['user'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['username'],20,"...",true);?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['postdate'];?>
</td>
								<td class="tools">
									<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['edit']){?>
										<a class="tool_edit" href="javascript:void(0);" onclick="change('managemessage.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','addmsg');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('addmsg');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['del']){?>
										<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'msgs_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
\',\'managemessage.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
									<?php }?>
								</td>
							</tr>

							<tr class="acc">
								<td colspan="6">
									<div class="accordion_toggle"></div>
									<div class="accordion_content">
										<div class="acc-in">
											<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['avatar']!=''){?>
												<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['avatar'];?>
" alt="" /></div>
											<?php }else{ ?>
												<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['gender']=="f"){?>
													<div class="avatar"><img src = "thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-female.jpg&amp;width=80;" alt="" /></div>
												<?php }else{ ?>
													<div class="avatar"><img src = "thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-male.jpg&amp;width=80;" alt="" /></div>
												<?php }?>
											<?php }?>
											<div class="message">
												<div class="message-in">
													<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['text'];?>

												</div>

												
												<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagnum']>1||$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones'][0]!=''){?>
													<div class="content-spacer-b"></div>

													
													<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones'][0]!=''){?>
														<p>
															<strong><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
:</strong>
															<a href = "managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones']['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones']['name'];?>
</a>
														</p>
													<?php }?>

													
													<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagnum']>1){?>
														<p>
															<strong><?php echo $_smarty_tpl->getConfigVariable('tags');?>
:</strong>
															<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
																<a href = "managetags.php?action=gettag&tag=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
"><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
</a>,
															<?php endfor; endif; ?>
														</p>
													<?php }?>
												<?php }?>

												
												<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][0][0]>0){?>
													<p class="tags-miles">
														<strong><?php echo $_smarty_tpl->getConfigVariable('files');?>
:</strong>
													</p>

													<div class="inwrapper">
														<ul>
															<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
															<li id="fli_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
">
																<div class="itemwrapper">
																	<table cellpadding="0" cellspacing="0" border="0">
																		<tr>
																			<td class="leftmen" valign="top">
																				<div class="inmenue"></div>
																			</td>
																			<td class="thumb">
																				
																				<a href = "managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['project'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?> rel="lytebox[img<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
]"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
">
																					
																					<img src = "templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/files/<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['type'];?>
.png" alt="" />
																				</a>
																			</td>
																			<td class="rightmen" valign="top">
																				<div class="inmenue">
																				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['del']){?>
																					<a class="del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->tpl_vars['langfile']->value['confirmdel'];?>
','deleteElement(\'fli_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\',\'managefile.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a><?php }?>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td colspan="3"><span class="name">
																			<a href = "managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['project'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?> rel="lytebox[img<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
]"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'],15,"...",true);?>
</a></span>	</td>
																		<tr/>
																	</table>

																</div> 
															</li>
															<?php endfor; endif; ?>
														</ul>
													</div> 
													<div style="clear:both"></div>
												<?php }?>

											</div> 
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
							<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['add']){?>
							<a class="butn_link" href="javascript:blindtoggle('addmsg');"  id="add_butn" onclick="toggleClass('add','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_msgs','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addmessage');?>
</a>
							<?php }?>
						</div>
					</div>
				</div> 
			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 


	<script type = "text/javascript">
		var accord_messages = new accordion('block_msgs');
	</script>


<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>