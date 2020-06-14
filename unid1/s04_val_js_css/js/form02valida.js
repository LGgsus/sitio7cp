function fnValidar02()
{
   var xValor = document.getElementById("lstPreferencias").value;
   if(xValor=="")
   {
       alert("seleccionar una preferencia...");
       return false;
   }

   /// caso contrario///
   return true;
}