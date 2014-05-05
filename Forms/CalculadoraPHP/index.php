<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Antonio Alurralde - David Zonneveld" />
	<title>Formulario Impuestos RC-IVA Sin jQuery</title>
	<script type="text/javascript" src="js/calculadora.js" ></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<form name="entrada" id="entrada">
		<fieldset>
			<legend>Datos Salario</legend>
			<label for="salario">Salario</label>
			<input id="salario" name="salario" type="number" min="0" required="required" autocomplete="autocomplete"/>
			<label for="saldo">Saldo a favor</label>
			<input id="saldo" name="saldo" type="number" min="0"/>			
		</fieldset>
		<button type="reset">Borrar</button>
		<button type="submit">Calcular</button>
	</form>
	<?php
		if(isset($_GET["salario"])) {
			$salario = $_GET["salario"];
			$saldo = isset($_GET["saldo"]) ? $_GET["saldo"] : 0;
			$formulario = new Formulario($salario, $saldo);
			$formulario -> calcular();
			echo $formulario;
			
		}
		class Formulario {
			 private $MENSAJE_SIN_IMPUESTOS = "<p>De acuerdo a la RESOLUCI&#211;N ADMINISTRATIVA N&#176; 05-0040-99, INSTRUCTIVO 1 - AGENTES DE RETENCI&#211;N DEL SECTOR PUBLICO Y PRIVADO PARA EL R&#201;GIMEN COMPLEMENTARIO AL IMPUESTO AL VALOR AGREGADO. Si su Sueldo Neto o L&#237;quido Pagable es menor o igual a cuatro Salarios M&#237;nimos, Usted no debe presentar el Formulario 87. </p>";
			 private $sueldo, $saldo, $sMin = 1200, $dss, $a, $b, $c, $d, $e, $f, $g, $pagaImpuestos;
			 function __construct ($sueldo, $saldo) {
			 		$this->sueldo = $sueldo;
			 		$this->saldo = $saldo;
					$this->sMin = 1200;
			 }
			public function calcular() {
					$this->sueldo = round($this->sueldo);
					$this->saldo = round($this->saldo);
					$this->dss = round($this->sueldo * 12.71 / 100);
					$this->a = $this->sueldo - $this->dss;		
					if ($this -> a > $this -> sMin * 4) {
						$this->pagaImpuestos = true;	
						$this->b = $this->sMin * 2;
						$this->c = $this->a - $this->b;
						$this->d = round($this->c * 13 / 100);
						$this->e = round($this->b * 13 / 100);
						$this->f = $this->d - $this->e - $this->saldo;
						$this->g = round($this->f * 100 / 13);
					}
				}
				public function __toString () {
					$res = $this->pagaImpuestos ? <<<FORM
					<form name="salida" id="salida">
						<fieldset>
							<legend>C&#225;lculo de RC-IVA</legend>
							<label for="dss">Descuento a la Seguridad Social (12.71%): </label>			
							<output id="dss" name="dss"></output>
							<label for="a">A. Ingreso Neto o Pagable: </label>			
							<output id="a" name="a">$this->a</output>
							<label for="b">B. 2 salarios m&#237;nimos nacionales (1200 x 2): </label>			
							<output id="b" name="b">$this->b</output>
							<label for="c">C. Diferencia (A - B): </label>			
							<output id="c" name="c">$this->c</output>
							<label for="d">D. Impuesto Determinado (13% de C): </label>			
							<output id="d" name="d">$this->d</output>
							<label for="e">E. 13% de 2 salarios m&#237;nimos: </label>			
							<output id="e" name="e">$this->e</output>
							<label for="f">F. Impuesto a Pagar (D - E - Saldo a favor): </label>			
							<output id="f" name="f">$this->f</output>
							<label for="g">Monto en facturas que puede presentar como pago a cuenta para cubrir el Impuesto a Pagar (Fx100/13): </label>			
							<output id="g" name="g">$this->g</output>
						</fieldset>
					</form>
FORM
					 : $this -> MENSAJE_SIN_IMPUESTOS;			
					return $res;			
				}
		}
	?>
</body>
</html>