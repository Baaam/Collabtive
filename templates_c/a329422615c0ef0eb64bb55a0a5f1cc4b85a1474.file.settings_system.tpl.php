<?php /* Smarty version Smarty-3.1.13, created on 2014-10-25 14:44:44
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/settings_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:581325961544b9b3cc59214-62680865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a329422615c0ef0eb64bb55a0a5f1cc4b85a1474' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/settings_system.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581325961544b9b3cc59214-62680865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'languages_fin' => 0,
    'timezones' => 0,
    'templates' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_544b9b3cca6ee6_80337950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b9b3cca6ee6_80337950')) {function content_544b9b3cca6ee6_80337950($_smarty_tpl) {?>
<div class="block_in_wrapper">

	<form class="main" method="post" action="admin.php?action=editsets" enctype="multipart/form-data" onsubmit="return validateCompleteForm(this);">
		<fieldset>

			<div class="row">
				<label for = "name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
				<input type = "text" class="text" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
" name = "name" id="name" required = "1" realname = "<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
			</div>

			<div class="row">
				<label for = "subtitle"><?php echo $_smarty_tpl->getConfigVariable('subtitle');?>
:</label>
				<input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['subtitle'];?>
" name="subtitle" id="subtitle" />
			</div>

			<div class="row">
				<label for = "locale"><?php echo $_smarty_tpl->getConfigVariable('locale');?>
:</label>
				<select name = "locale" id="locale" required="1" realname = "<?php echo $_smarty_tpl->getConfigVariable('locale');?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lang'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['name'] = 'lang';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages_fin']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total']);
?>
						<option value = "<?php echo $_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['val'];?>
" <?php if ($_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['val']==$_smarty_tpl->tpl_vars['settings']->value['locale']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['str'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label for="timezone"><?php echo $_smarty_tpl->getConfigVariable('timezone');?>
:</label>
				<select name="timezone" id="timezone" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('timezone');?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['name'] = 'timezone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['timezones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['timezone']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['timezones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['timezone']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['timezones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['timezone']['index']]==$_smarty_tpl->tpl_vars['settings']->value['timezone']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['timezones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['timezone']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $_smarty_tpl->getConfigVariable('rssuser');?>
:</label>
				<input type = "text" name = "rssuser" id = "rssuser" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['rssuser'];?>
" autocomplete = "off"/>
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $_smarty_tpl->getConfigVariable('rsspass');?>
:</label>
				<input type = "password" name = "rsspass" id = "rsspass" value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['rsspass'];?>
" autocomplete = "off" />
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $_smarty_tpl->getConfigVariable('dateformat');?>
:</label>
				<select name = "dateformat" id = "dateformat">
				<option value = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
</option>
				<option value = "d.m.Y">day.month.Year</option>
				<option value = "m/d/Y">month/day/Year</option>
				</select>
			</div>

			<div class="row">
				<label for = "template"><?php echo $_smarty_tpl->getConfigVariable('template');?>
:</label>
				<select name="template" id="template" required = "1" realname = "<?php echo $_smarty_tpl->getConfigVariable('template');?>
" >
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tem'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['name'] = 'tem';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tem']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tem']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['template']==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tem']['index']]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tem']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			<div class="row">
				<label for = "template">Theme:</label>
				<select name="theme" id="theme" required = "1" realname = "<?php echo $_smarty_tpl->getConfigVariable('template');?>
" >
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['theme'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['name'] = 'theme';
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['themes']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['theme']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['theme']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['theme']==$_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['theme']['index']]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['theme']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>


			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
			</div>

		</fieldset>
	</form>

</div> <?php }} ?>