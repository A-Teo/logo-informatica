<?php /* Smarty version Smarty-3.1.18, created on 2014-06-03 14:25:57
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30314538dcce56e91f7-41256426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1399949582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30314538dcce56e91f7-41256426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538dcce56edde4_87773655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538dcce56edde4_87773655')) {function content_538dcce56edde4_87773655($_smarty_tpl) {?><form>
	<input type="text" id="usuario" name="usuario" />
	<br />
	<input type="password" id="pass" name="pass" />
	<button type="submit">Log In</button>
</form><?php }} ?>
