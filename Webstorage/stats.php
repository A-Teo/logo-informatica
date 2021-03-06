<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="author" content="Antonio Alurralde & David Zonneveld" />
	<title>Cookies</title>
</head>
<body>
	<script>
	/**
	* Función anónima que crea un reporte tomando datos de cookies.
	* @return Cadena que contiene la tabla de email y entradas en HTML.
	*/
	(function() {
		/**
			funcion que crea la estructura basica de mi tabla.m
		*/
		var createTable = function() {
			var cuerpo = document.getElementsByTagName("body");
			var tabla = document.createElement("table"),
			tr = document.createElement("tr"),
			thE = document.createElement("th"),
			thC = document.createElement("th"),
			txtE = document.createTextNode("email"),
			txtC = document.createTextNode("Entradas");
			thE.appendChild(txtE);
			thC.appendChild(txtC);
			tr.appendChild(thE);
			tr.appendChild(thC);
			tabla.appendChild(tr);
			cuerpo[0].appendChild(tabla);
			return tabla;		
		};
		/**
			Funcion que aumenta una fila a la tabla de emails, conteos.
		*/
		var crearFila = function(tabla, columna1, columna2) {
			var tr = document.createElement("tr"),
			tdE = document.createElement("td"),
			tdC = document.createElement("td"),
			txtE = document.createTextNode(columna1),
			txtC = document.createTextNode(columna2);
			tdE.appendChild(txtE);
			tdC.appendChild(txtC);
			tabla.appendChild(tdE);
			tabla.appendChild(tdC);
			tr.appendChild(tdE);
			tr.appendChild(tdC);
			tabla.appendChild(tr);
		};
		/**
			Funcion que llena la tabla con los valores de mi localStorage.
		*/
		var llenarTabla = function(tabla) {
			var emails = JSON.parse(localStorage.getItem("webStorageMail"));
			for (email in emails) {
				crearFila(tabla, email, emails[email]);			
			}
		};
		var generarOutput = function() {
			if (localStorage) {
				if (localStorage.webStorageMail && localStorage.webStorageMail.length > 0) {
					var tabla = createTable();
					llenarTabla(tabla);
				} else {
					var parrafo = document.createElement("p"),
					txt = document.createTextNode("No hay datos");
					parrafo.appendChild(txt);
					cuerpo[0].appendChild(parrafo);
				}			
			}
		}
		generarOutput();
	}
	)();
	</script>	
	
</body>