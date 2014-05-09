<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="author" content="Antonio Alurralde & David Zonneveld" />
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
	/**
	* Crea o actualiza una Cookie usando como llave la dirección de correo.
	*
	* @return nada.
	* @param nada.
	*/
	function cookie() {
		if(isset($_GET["email"])) {
			$nombre = $_GET["nombre"];
			$email = $_GET["email"];
			$email = str_replace(".", "*", $email);
			if(isset($_COOKIE[$email])) {
				$cookie = $_COOKIE[$email];
				$cookie++;
				setcookie($email, $cookie, time()+3600, '/web/cookies/','localhost', NULL, true);			
			} else {			
				setcookie($email, 1, time()+3600, '/web/cookies/','localhost', null, true);
			}
		}
	}
	cookie();
	?>
</body>