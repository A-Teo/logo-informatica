<?php /*%%SmartyHeaderCode:9791538dcce54a26d9-07041540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1399948612,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1399948198,
      2 => 'file',
    ),
    '562e1ca8427e64dd9668ae2f08a796d732ac8b21' => 
    array (
      0 => '.\\templates\\body.tpl',
      1 => 1399950542,
      2 => 'file',
    ),
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1399949582,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1396884734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9791538dcce54a26d9-07041540',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538dcce57188d1_31867799',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538dcce57188d1_31867799')) {function content_538dcce57188d1_31867799($_smarty_tpl) {?><!DOCTYPE html>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">

	<form>
	<input type="text" id="usuario" name="usuario" />
	<br />
	<input type="password" id="pass" name="pass" />
	<button type="submit">Log In</button>
</form>

</BODY>
</HTML>
<?php }} ?>
