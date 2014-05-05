var calcular = function () {
	var myForm = document.getElementById("entrada");	
	if (myForm.checkValidity()) {		
		var salario = document.entrada.salario.value,
			saldo = document.entrada.saldo.value,
			sMin = 1200,
			dss,a,b,c,d,e,f,g,h;
		salario = Math.round(salario);
		saldo = Math.round(saldo);
		dss = Math.round(salario * 12.71 / 100);
		a = salario - dss;
		if (a<=sMin*4) {		
			document.getElementById("sinImpuestos").style.display='block';
			document.getElementById("salida").style.display='none';
		}	else {
			document.getElementById("sinImpuestos").style.display='none';
			b = sMin * 2;
			c = a - b;
			d = Math.round(c * 13 / 100);
			e = Math.round(b * 13 / 100);
			f = d - e;
			g = Math.round(f * 100 / 13);
			h = g - saldo;
			var salida = document.salida;
			salida.dss.value = dss;
			salida.a.value = a;
			salida.b.value = b;
			salida.c.value = c;
			salida.d.value = d;
			salida.e.value = e;
			salida.f.value = f;
			salida.g.value = g;
			salida.saldoOut.value = saldo;
			salida.h.value = h;
			document.getElementById("salida").style.display='block';		
		}
	} else {
		document.getElementById("sinImpuestos").style.display='none';
		document.getElementById("salida").style.display='none';
	}
}