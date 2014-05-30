<?php

require 'libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("title","StrongBox",true);

if(!isset($_GET['usuario'])) {
	$smarty->assign("state",0);
} else {
	$smarty->assign("state",1);	
}
$smarty->display('index.tpl');