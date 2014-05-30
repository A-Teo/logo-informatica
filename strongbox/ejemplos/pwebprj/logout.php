<!DOCTYPE html>
<?php
include('includes/lock.php');

include ('db_stuff/database.php');
include ('db_stuff/user.php');
include ('html_stuff/html.php');

if (isset($_SESSION['cuenta'])) {
   header("Location: /pwebprj/new_user.php");
} else {

    $htmlTemp = new Html_template("Not Logged  page");
    $title = "Log out";
    $body  = "<h1> Not logged</h1><p>Your session was expired or end up long time ago</p>";


         
    $page = $htmlTemp->makeSimpleHtml($title, $body );

    echo $page;
}
?>