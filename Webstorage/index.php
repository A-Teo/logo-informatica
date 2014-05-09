<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="author" content="Antonio Alurralde & David Zonneveld" />
	<title>Cookies</title>
</head>
<body>
	<form onsubmit="storage()">
		<fieldset>
			<legend>Formulario</legend>
			<label for="nombre">Nombre: </label>		
			<input id="nombre" name="nombre" type="text" required="required">
			<br/>
			<label for="email">e-mail: </label>
			<input id="email" name="email" type="email" required="required">
			<br/>
			<button type="submit">OK</button>
			<button type="reset">Cancel</button>		
		</fieldset>		
	</form>	
	<script>
	/**
	* Crea o actualiza una Cookie usando como llave la dirección de correo.
	*
	* @return nada.
	* @param nada.
	*/
		function storage() {
			if(localStorage){
				if (!localStorage.webStorageMail) {
					localStorage.setItem("webStorageMail", JSON.stringify(new Object())); //creamos nuestro propio namespace para no meternos con la basura de otros sitios.
				}
				insertarEmail();			
			} else {
				alert("Su navegador no soporta Webstorage :(");
			}
		}
		function insertarEmail () {
			var email = document.getElementById("email").value;
			var emails = JSON.parse(localStorage.getItem("webStorageMail"));
			if (emails[email]) {
				emails[email]++;
			} else {
				emails[email] = 1;
			}
			emails = JSON.stringify(emails);
			localStorage.setItem("webStorageMail", emails);
		}
	</script>
</body>