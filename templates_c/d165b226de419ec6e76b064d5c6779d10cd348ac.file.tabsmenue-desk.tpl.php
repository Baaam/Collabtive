<?php /* Smarty version Smarty-3.1.13, created on 2014-11-23 21:37:58
         compiled from "/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-desk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136738344547245a63f5f28-69230839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd165b226de419ec6e76b064d5c6779d10cd348ac' => 
    array (
      0 => '/Users/meligaletiko/Projects/Baaam/Collabtive/templates/standard/tabsmenue-desk.tpl',
      1 => 1414108517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2136738344547245a63f5f28-69230839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desktab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547245a63fb339_85427241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547245a63fb339_85427241')) {function content_547245a63fb339_85427241($_smarty_tpl) {?><div class="tabswrapper">
<ul class="tabs">
		<li class="desk"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['desktab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="index.php"></a></li>
	</ul>
</div><?php }} ?>