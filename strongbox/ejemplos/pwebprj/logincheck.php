<!DOCTYPE html>
<?php
include('includes/lock.php');
include ('db_stuff/database.php');
include ('db_stuff/user.php');

$url = "Location: ../pwebprj/login.php";
//echo "<script>alert('Hola');</script>"; 
if (!isset($_SESSION['cuenta'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['user'] != NULL ) {
    	    $db = Database::getInstance();
        	$dbUser = new UserDBMap($db);
			echo md5($_POST['password']);
            $user = $dbUser->verificar($_POST['user'],md5($_POST['password']));
        	if ($user != NULL ){
                $_SESSION['cuenta'] = $user->getCuenta();
                $url = "Location: ../pwebprj/new_user.php";
            }
        }
    }
}
?>