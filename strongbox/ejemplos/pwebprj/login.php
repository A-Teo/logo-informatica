<!DOCTYPE html>
<?php
include('includes/lock.php');

include ('db_stuff/database.php');
include ('db_stuff/user.php');
include ('html_stuff/html.php');

if (isset($_SESSION['cuenta'])) {
   header("Location: ../pwebprj/new_user.php");
} else {
	$htmlTemp = new Html_template("Log in page");
    $title = "Log in";
    $action  = htmlentities('logincheck.php');


    $theFields = array('user','password');      
    $page = $htmlTemp->buildForm($title,$action, $theFields );

    echo $page;
	
echo md5("123"); 
    
}
?>