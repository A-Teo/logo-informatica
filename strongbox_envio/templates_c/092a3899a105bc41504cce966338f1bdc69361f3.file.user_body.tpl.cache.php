<?php /* Smarty version Smarty-3.1.18, created on 2014-06-16 01:16:25
         compiled from ".\templates\user_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12536539e37596c0c18-72174744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '092a3899a105bc41504cce966338f1bdc69361f3' => 
    array (
      0 => '.\\templates\\user_body.tpl',
      1 => 1402877016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12536539e37596c0c18-72174744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'pages' => 0,
    'row' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539e375970ec25_12773254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e375970ec25_12773254')) {function content_539e375970ec25_12773254($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page']->value==0) {?>
	Bienvenido
	<?php echo $_SESSION['cuenta'];?>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value==1) {?>
	<form name="nueva_entrada" action="controllers/insert_page.php" method="POST">
		<fieldset>
			<legend>Nueva Entrada</legend>
			<label for="titulo">T&iacute;tulo: </label>
			<input type="text" id="titulo" name="titulo" required="required" />
			<br />
			<label for="url">URL: </label>
			<input type="url" id="url" name="url" required="required" onblur="http(nueva_entrada)" />
			<br />
			<label for="username">Username: </label>
			<input type="text" id="username" name="username" required="required" />
			<br />
			<label for="password">Password: </label>
			<input type="password" id="password" name="password" required="required" />
			<input type="checkbox" name="show" value="show" onchange="passShow(nueva_entrada)"> Mostrar
			<br />
			<label for="passwordConf">Confirmar Password: </label>
			<input type="password" id="passwordConf" name="passwordConf" required="required" oninput="check(this, nueva_entrada)" />
			<br />
			<input type="submit"/>
		</fieldset>
	</form>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value==2) {?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
	   	<?php echo $_smarty_tpl->tpl_vars['col']->value;?>

	   <?php } ?>
	   <br />
	<?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value==3) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("new_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('archivo'=>"new_user",'title'=>"Nuevo Usuario"), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value==4) {?>
	<form action="controllers/logout.php" method="POST">
			<input type="submit" value="Confirmar Logout"/>
	</form>	
<?php }?><?php }} ?>
