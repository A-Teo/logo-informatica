<?php
//include('lock.php');
include ('db_stuff/db.php');
include ('db_stuff/mapper.php');

if (isset($_SESSION['cuenta'])) {	
	$db = Database::getInstance();
   $dbStrong = new StrongDBMap($db);
 	$matrix = $dbStrong->ver($_SESSION['cuenta']); 	 	
}
?>