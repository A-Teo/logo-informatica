<?php /* Smarty version Smarty-3.1.18, created on 2014-05-30 20:29:53
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317685388dc31531256-99107045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1399949580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317685388dc31531256-99107045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5388dc315353d5_50066505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5388dc315353d5_50066505')) {function content_5388dc315353d5_50066505($_smarty_tpl) {?><form>
	<input type="text" id="usuario" name="usuario" />
	<br />
	<input type="password" id="pass" name="pass" />
	<button type="submit">Log In</button>
</form><?php }} ?>
