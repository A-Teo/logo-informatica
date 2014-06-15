<!DOCTYPE html>
<?php
include('lock.php');

include ('../db_stuff/db.php');
include ('../db_stuff/mapper.php');

if (isset($_SESSION['cuenta'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['cuenta'] != NULL) {
    	    $db = Database::getInstance();
        	$dbUser = new UserDBMap($db);
        	$user = new User($_POST);
    	    $dbUser->insertar($user);
        } else {}
    } else {}


    //$htmlTemp = new Html_template("User Insertion");
    //$title = "New User";
    //$action  = htmlentities($_SERVER['PHP_SELF']);

    
    //$theFields = array('cuenta','password');      
    //$page = $htmlTemp->buildForm($title,$action, $theFields );

    //echo $page;
}
header("Location: ../index.php");


?>