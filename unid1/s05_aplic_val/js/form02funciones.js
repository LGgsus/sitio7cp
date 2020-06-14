function fnValidar02()
{
    var xNombre = document.getElementById("txtNombres")value;
    if(xNombre=="" || /^\s$/.test(xNombre))
    {
        alert("Esacriba NOMBRES...");
        return false;
    }
    return true;
}