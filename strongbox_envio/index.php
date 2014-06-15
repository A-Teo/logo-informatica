<?php

include('controllers/lock.php');
require 'libs/Smarty.class.php';
$smarty = new Smarty;

$menuUsuario = Array("Inicio", "Nueva Entrada", "Ver Entradas", "Nuevo Usuario", "Logout");
$smarty -> assign("menuUsuario", $menuUsuario);

$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("title","StrongBox",true);

if (!isset($_SESSION['cuenta'])){
	$smarty->assign("state",0);
} else {
	$smarty->assign("state",1);	
}

if (isset($_GET['page'])){
	if($_GET['page'] == 2) {
		include('controllers/display_pages.php');
		//print_r($matrix);
		$smarty->assign("pages",$matrix);	
	}
	$smarty->assign("page",$_GET['page']);
} else {
	$smarty->assign("page",0);	
}

$smarty->display('index.tpl');