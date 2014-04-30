/// <reference path="jquery-2.1.0.js" />
var calcular = function () {
    var form = $("#entrada");
    if (form.valid()) {		
		var salario = $("#salario").val(),
			saldo = $("#saldo").val(),
			sMin = 1200,
			dss,a,b,c,d,e,f,g;
		salario = Math.round(salario);
		saldo = Math.round(saldo);
		dss = Math.round(salario * 12.71 / 100);
		a = salario - dss;
		if (a<=sMin*4) {		
		    $("#sinImpuestos").show();
		    $("#salida").hide();
		} else {
		    $("#sinImpuestos").hide();
			b = sMin * 2;
			c = a - b;
			d = Math.round(c * 13 / 100);
			e = Math.round(b * 13 / 100);
			f = d - e - saldo;
			g = Math.round(f * 100 / 13);
			var salida = $("#salida");
			$("#dss").val(dss);
			$("#a").val(a);
			$("#b").val(b);
			$("#c").val(c);
			$("#d").val(d);
			$("#e").val(e);
			$("#f").val(f);
			$("#g").val(g);
			$("#salida").show();		
		}
	} else {
        $("#sinImpuestos").hide();
        $("#salida").hide();
	}
}