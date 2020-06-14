function validaForm()
{
	var xTexto = document.getElementById("txtValor").value;
	if(xTexto=="")
	{
		alert("Falta USUARIO...");
		return false;
	}
	
	
	var xClave = document.getElementById("txtClave").value;
	if(xClave=="")
	{
		alert("Falta contraseña...");
		return false;
	}
	
	
	
	///
	return true;
}