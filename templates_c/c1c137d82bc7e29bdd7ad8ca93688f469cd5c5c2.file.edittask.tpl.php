<?php /* Smarty version Smarty-3.1.13, created on 2014-11-02 23:34:14
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/edittask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18220013965456b166682834-18281966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c137d82bc7e29bdd7ad8ca93688f469cd5c5c2' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/edittask.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18220013965456b166682834-18281966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'projectname' => 0,
    'settings' => 0,
    'task' => 0,
    'async' => 0,
    'locale' => 0,
    'langfile' => 0,
    'pid' => 0,
    'lists' => 0,
    'theM' => 0,
    'theY' => 0,
    'tasklists' => 0,
    'members' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5456b1667a7680_85527213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456b1667a7680_85527213')) {function content_5456b1667a7680_85527213($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/meligaletiko/Projects/Baaam/Collabtive/include/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="tasks">

			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['projectname']->value;?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,25,"...",true);?>

				</a>
				<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('tasklists');?>

				</a>
				<a href="managetasklist.php?action=showtasklist&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&tlid=<?php echo $_smarty_tpl->tpl_vars['task']->value['liste'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value['list'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['list'],25,"...",true);?>

				</a>
				<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('task');?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['title'],50,"...",true);?>

				</a>
				<span>&nbsp;/...</span>
			</div>

			<h1 class="second">
				<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/task.png" alt="" />
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['title'],30,"...",true);?>

			</h1>

<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['async']->value=="yes"){?>

				
					<script type="text/javascript">
						//	theme_advanced_statusbar_location : "bottom",
						tinyMCE.init({
							mode : "textareas",
							theme : "advanced",
							language: "<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
",
							width: "400px",
							height: "250px",
							plugins : "inlinepopups,style,advimage,advlink,xhtmlxtras,safari,template",
							theme_advanced_buttons1 : "bold,italic,underline,|,fontsizeselect,forecolor,|,bullist,numlist,|,link,unlink,image",
							theme_advanced_buttons2 : "",
							theme_advanced_buttons3 : "",
							theme_advanced_toolbar_location : "top",
							theme_advanced_toolbar_align : "left",
							theme_advanced_path : false,
							extended_valid_elements : "a[name|href|target|title],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|name],font[face|size|color|style],span[class|align|style]",
						    theme_advanced_statusbar_location: "bottom",
						    theme_advanced_resizing : true,
							theme_advanced_resizing_use_cookie : false,
							theme_advanced_resizing_min_width : "400px",
							theme_advanced_resizing_max_width : "600px",
							theme_advanced_resize_horizontal : false,
							force_br_newlines : true,
							cleanup: true,
							cleanup_on_startup: true,
							force_p_newlines : false,
							convert_newlines_to_brs : false,
							forced_root_block : false,
							external_image_list_url: 'manageajax.php?action=jsonfiles&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
'
						});
					</script>
				

			<?php }?>

			<div class="block_in_wrapper">

				<h2><?php echo $_smarty_tpl->tpl_vars['langfile']->value['edittask'];?>
</h2>

				<form novalidate class="main" method="post" action="managetask.php?action=edit&amp;tid=<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"  onsubmit="return validateCompleteForm(this);"  >
					<fieldset>

						<div class="row">
							<label for="title"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['title'];?>
:</label>
							<input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
" name="title" id="title" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['title'];?>
" required="1" />
						</div>

						<div class="row">
							<label for="text"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['text'];?>
:</label>
							<div class="editor">
								<textarea name="text" id="text" rows="3" cols="0"><?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>
</textarea>
							</div>
						</div>


						<div class="row">
							<label for="start"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['start'];?>
:</label>
							<input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['startstring'];?>
" name="start" id="start_task<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
" />
						</div>

						<div class="datepick">
							<div id="datepicker_task_start" class="picker" style="display:none;"></div>
						</div>

						<script type="text/javascript">
						  	theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
							theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['monday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['tuesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['wednesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['thursday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['friday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['saturday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['sunday'];?>
"];
							theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['january'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['february'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['march'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['april'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['may'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['june'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['july'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['august'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['september'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['october'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['november'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['december'];?>
"];
							theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "start_task<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
";
							theCalStart<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_task_start");
						</script>


						<div class="row">
							<label for="end"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['end'];?>
:</label>
							<input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['endstring'];?>
" name="end" id="end_task<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
" />
						</div>

						<div class="datepick">
							<div id="datepicker_task_end" class="picker" style="display:none;"></div>
						</div>

						<script type="text/javascript">
						  	theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
							theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['monday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['tuesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['wednesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['thursday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['friday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['saturday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['sunday'];?>
"];
							theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['january'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['february'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['march'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['april'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['may'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['june'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['july'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['august'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['september'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['october'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['november'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['december'];?>
"];
							theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "end_task<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
";
							theCalEnd<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_task_end");
						</script>


						<div class="row">
							<label for="tasklist"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['tasklist'];?>
:</label>
							<select name="tasklist" class="select" id="tasklist" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['tasklist'];?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['name'] = 'tasklist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasklists']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['tasklists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tasklist']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['task']->value['listid']==$_smarty_tpl->tpl_vars['tasklists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tasklist']['index']]['ID']){?> selected="selected" <?php }?> >
										<?php echo $_smarty_tpl->tpl_vars['tasklists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tasklist']['index']]['name'];?>

									</option>
								<?php endfor; endif; ?>
							</select>
						</div>

		                <div class="row">
		                    <label for="assigned"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['assignto'];?>
:</label>
		                    <select name="assigned[]" multiple="multiple" style="height:80px;" id="assigned" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['assignto'];?>
">
		                        <option value="-1"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['chooseone'];?>
</option>
		                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['members']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		                          	<option value="<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'],$_smarty_tpl->tpl_vars['task']->value['users'])){?> selected="selected" <?php }?> >
		                          		<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>

		                          	</option>
		                        <?php endfor; endif; ?>
		                    </select>
		                </div>

						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['send'];?>
</button>
							<button type="reset" onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_task','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langfile']->value['cancel'];?>
</button>
						</div>

					</fieldset>
				</form>

			</div> 

<?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>

			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?><?php }} ?>