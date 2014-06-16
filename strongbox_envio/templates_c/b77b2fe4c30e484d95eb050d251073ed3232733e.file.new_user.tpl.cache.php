<?php /* Smarty version Smarty-3.1.18, created on 2014-06-16 00:58:53
         compiled from ".\templates\new_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22205539e333d5d9c86-91941016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77b2fe4c30e484d95eb050d251073ed3232733e' => 
    array (
      0 => '.\\templates\\new_user.tpl',
      1 => 1402875068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22205539e333d5d9c86-91941016',
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
  'unifunc' => 'content_539e333d5f5f07_99702134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e333d5f5f07_99702134')) {function content_539e333d5f5f07_99702134($_smarty_tpl) {?><form name="<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
" action="controllers/<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
.php" method="POST">
	<fieldset>
		<legend><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</legend>
		<label for="cuenta">Cuenta: </label>
		<input type="text" id="cuenta" name="cuenta" required="required" />
		<br />
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" required="required" />
		<input type="checkbox" name="show" value="show" onchange="passShow(<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
)"> Mostrar
		<br />
		<label for="passwordConf">Confirmar Password: </label>
		<input type="password" id="passwordConf" name="passwordConf" required="required" oninput="check(this, <?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
)" />
		<br />
		<button type="submit"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</button>
	</fieldset>	
</form><?php }} ?>
