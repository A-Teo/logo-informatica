<!DOCTYPE html>
<?php
include('lock.php');
include ('../db_stuff/db.php');
include ('../db_stuff/mapper.php');

$url = "Location: ../index.php";
//echo "<script>alert('Hola');</script>"; 
if (isset($_SESSION['cuenta'])) {	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$db = Database::getInstance();
      $dbStrong = new StrongDBMap($db);
		//echo md5($_POST['password']);
		//print_r($_SESSION);
		//die($_SESSION['cuenta']);
		foreach($_POST as $clave => $valor){
			$input[$clave] = htmlspecialchars($valor);
		}
		
    	$dbStrong->insertar($input, $_SESSION['cuenta']);       
    }
}
header($url);
?>

