function habilitar(){
	if(document.form.tipoIdentificacion.value ==  2){
		document.form.digito.disabled = false;
	}else{
		document.form.digito.disabled = true;
		document.form.digito.value = "";	
	}
}