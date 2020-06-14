<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="js/validarForm.js"></script>
</head>

<body>
	<h1> Funciones - JavaScript </h1>
    <form onSubmit="return validaForm();" name="form1" method="post" action="pagina07_form_recibe.php" >
    	<p>Usuario:<input type="text" name="txtValor" id="txtValor" /></p>
        <p>Contraseña:<input type="text" name="txtClave" id="txtClave" /></p>
    	<input name="btnEnviar" id="btnEnviar" type="submit" value="Enviar"/>
    </form>
    
</body>
</html>
