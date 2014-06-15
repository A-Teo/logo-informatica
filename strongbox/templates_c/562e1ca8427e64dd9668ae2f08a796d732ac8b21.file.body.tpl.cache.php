<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 21:59:11
         compiled from ".\templates\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21003539e091fb70ee3-78088041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562e1ca8427e64dd9668ae2f08a796d732ac8b21' => 
    array (
      0 => '.\\templates\\body.tpl',
      1 => 1402270742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21003539e091fb70ee3-78088041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539e091fb9db99_88990746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e091fb9db99_88990746')) {function content_539e091fb9db99_88990746($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['state']->value==0) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('archivo'=>"logincheck",'title'=>"Login"), 0);?>

<?php } else { ?>
   <?php echo $_smarty_tpl->getSubTemplate ("menu_usuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("user_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
	
<?php }?><?php }} ?>
