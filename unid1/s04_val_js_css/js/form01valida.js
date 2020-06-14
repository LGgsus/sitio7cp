function fnValidar01()
{
   var xTexto =document.getElementById("txtTexto").value;
   if(xTexto==""||/^\s+$/.test(xTexto))
   {
       alert("Falta TEXTO...");
       return false;
   }
   
   var xNumero =document.getElementById("txtNumero").value;
   if(xNumero=="")
   {
       alert("Falta NUMERO...");
       return false;
   }
   /// caso contrario///
   return true;
}