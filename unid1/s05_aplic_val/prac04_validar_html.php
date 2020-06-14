<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script>
function mensaje()
{
	alert("Funcion QUE VALE NADA...");
}

var xValor=100;

function mensajeConValor()
{
	//alert("Funcion QUE VALE ALGO...");
	return 10;
}
</script>

</head>

<body>
	<h1> Funciones - JavaScript </h1>
    <form name="form1" method="post" action="pagina07_form_recibe.php" >
    	<input onClick="mensaje();" type="button" value="Ver1"/>
        <input onClick="alert(mensajeConValor());" type="button" value="Ver2"/>
    </form>
    
</body>
</html>
