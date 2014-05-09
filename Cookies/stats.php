<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="author" content="Antonio Alurralde & David Zonneveld" />
	<title>Cookies</title>
</head>
<body>	
	<?php
	/**
	* Crea un reporte tomando datos de cookies.
	*
	* @return Cadena que contiene la tabla de email y entradas en HTML.
	* @param nada.
	*/
	function reporte() {
		if(count($_COOKIE)!=0) {
			$tabla = "<table>
			<tr>
  				<th>email</th>
  				<th>entradas</th>
			</tr>";
			foreach($_COOKIE as $email => $valor){
				$email = str_replace('*', '.', $email);
				$fila = "<tr> <td> $email </td> <td> $valor </td></tr>";
				$tabla .= $fila;
			}
			$tabla .= "</table>";
		} else {
			$tabla = "No hay datos";
		}
		return $tabla;
	}
	echo reporte();
	?>	
</body>