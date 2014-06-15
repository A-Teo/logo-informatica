<?php
	session_start();
	unset($_SESSION['cuenta']);
	header("Location: ../index.php");
?>