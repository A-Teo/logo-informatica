<?php /* Smarty version Smarty-3.1.18, created on 2014-06-15 22:24:35
         compiled from ".\templates\menu_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798539e0f1383e685-55398974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4244743674adabf45df2a12be16c68188ac16d2d' => 
    array (
      0 => '.\\templates\\menu_usuario.tpl',
      1 => 1402268706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798539e0f1383e685-55398974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuUsuario' => 0,
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539e0f13854fb2_33848364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e0f13854fb2_33848364')) {function content_539e0f13854fb2_33848364($_smarty_tpl) {?><nav>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuUsuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <a href="?page=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a> |
<?php } ?>
</nav>
<br /><?php }} ?>
