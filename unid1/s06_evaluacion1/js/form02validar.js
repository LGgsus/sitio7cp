function fnValidar02()
{
    var p1 = document.getElementById("txtTexto").value;
    if(p1==""){
        alert("escriba texto sin espacios");
        return false;
    }
    var noValido = /\s/;

    if(noValido.test(p1)){ 
        alert ("sin espacios porfavor"); 
        return false; 
    }

    
    var rad = document.getElementsByName("rdGenero");
    var s= false;
    for( var i = 0 ; i < rad.length; i++){
        if(rad[i].checked){
            s=true;
        }
    }
    if(!s){
        alert("Selecciona tu genero de preferencia");
        return false;
    }
    
    var chk = document.getElementsByName("chkPref");
    var cont = 0;
    
     for( var i = 0 ; i < chk.length; i++){
        if(chk[i].checked){
            cont = cont + 1;
        }
    }
    if(cont != 2) {
        alert("no seleccione "+cont+ " solo 2 porfavor");
        return false;
    }
    return true;
    
}