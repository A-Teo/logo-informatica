<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 23:46:28
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28048539e224461fd92-99077331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1402277100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28048539e224461fd92-99077331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archivo' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539e224462f539_47088420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e224462f539_47088420')) {function content_539e224462f539_47088420($_smarty_tpl) {?><form action="controllers/<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
.php" method="POST">
	<fieldset>
		<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>
		<label for="cuenta">Cuenta: </label>
		<input type="text" id="cuenta" name="cuenta" />
		<br />
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" />
		<br />
		<button type="submit"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</button>
	</fieldset>	
</form><?php }} ?>
