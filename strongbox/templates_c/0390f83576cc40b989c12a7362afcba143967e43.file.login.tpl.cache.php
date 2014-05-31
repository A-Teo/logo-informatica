<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 00:12:02
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22562538902323828c8-98307078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1401480419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22562538902323828c8-98307078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538902324238b4_90256026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538902324238b4_90256026')) {function content_538902324238b4_90256026($_smarty_tpl) {?><form>
	<input type="text" id="usuario" name="usuario" />
	<br />
	<input type="password" id="pass" name="pass" />
	<button type="submit">Log In</button>
</form><?php }} ?>
