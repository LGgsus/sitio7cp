<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script>
	//var xColor=prompt("Cual es nombre?", "?");
	//document.write("Mi nombre es: "+xColor);
	
	//alert("Hola");
	/*
	var xValor=confirm("Desea continuar");
	
	if(xValor)
	{
		alert("Usted a aceptado...");
		
	}else{
		alert("Usted a CANCELADO...");
	}
	*/
	
	var xNumero=prompt("Cuantas imagenes desea ver?", 1);
	if(xNumero > 0)
	{
		
		for(i=0; i<xNumero; i++)
		{
			document("<img src='img/logo-small.jpg' width='50' /> <br>");
		}
		
	}else{
		alert("Usted a CANCELADO...");
	}	
	
</script>

</head>

<body>
	<h1> Ventanas de dialogo - JavaScript </h1>
</body>
</html>
