<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="author" content="http://www.PubliAciertos.net/" />
	<title>Cookies</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Formulario</legend>
			<label for="nombre">Nombre: </label>		
			<input id="nombre" name="nombre" type="text" required="required">
			<br/>
			<label for="email">e-mail: </label>
			<input id="email" name="email" type="email" required="required">
			<br/>
			<button type="submit" >OK</button>
			<button type="reset">Cancel</button>		
		</fieldset>		
	</form>
	<?php
	if(isset($_GET["email"])) {
		$nombre = $_GET["nombre"];
		$email = $_GET["email"];
		print_r($_COOKIE);
		echo "<br>";
		echo $email;
		echo $_COOKIE[$email];
		if(isset($_COOKIE[$email])) {
			$cookie = $_COOKIE[$email];
			$cookie++;
			echo $cookie." ya sabe";
		} else {
			setcookie($email, 0, time()+3600, '/web/cookies/','localhost');
			echo "No sabe";
		}
	}
	?>
</body>