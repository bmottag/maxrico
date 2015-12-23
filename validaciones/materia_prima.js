function habilitar(){

	var form = document.getElementById('formMateria');

	if(form.tipoMovimiento.value ==  1){
		document.formMateria.valorUnitario.disabled = false;
		document.formMateria.proveedor.disabled = false;
		document.formMateria.fechaCaducidad.disabled = false;
	}else{
		document.formMateria.valorUnitario.disabled = true;
		document.formMateria.valorUnitario.value = "";
		document.formMateria.proveedor.disabled = true;
		document.formMateria.proveedor.value = "";			
		document.formMateria.fechaCaducidad.disabled = true;
		document.formMateria.fechaCaducidad.value = "";	
	}
}


function validarFrmMateria(){
	var form = document.getElementById('formMateria');
	var ok = 1;

	if(form.tipoProducto.value == '' && ok == 1){
		alert('Seleccione producto');
		form.tipoProducto.focus();
		ok = 0;
	}

	if(form.tipoMovimiento.value == '' && ok == 1){
		alert('Seleccione tipo de movimiento');
		form.tipoMovimiento.focus();
		ok = 0;
	}
	
	if(form.cantidad.value == '' && ok == 1){
		alert('Seleccione cantidad');
		form.cantidad.focus();
		ok = 0;
	}
	
	if(form.estado.value == 4 && form.tipoObservacion.value == '' && ok == 1){
		alert('Si no cumple con el perfil, debe seleccionar el tipo de observación');
		form.tipoObservacion.focus();
		ok = 0;
	}
	
	if(form.estado.value == 7 && form.tipoObservacion.value == '' && ok == 1){
		alert('Si no es admitido, debe seleccionar el tipo de observación');
		form.tipoObservacion.focus();
		ok = 0;
	}
	
	if(form.tipoObservacion.value == 13 && form.observaciones.value == '' && ok == 1){
		alert('Indicar Otra observación');
		form.observaciones.focus();
		ok = 0;
	}
	
	if(form.estado.value == 3 && form.fecha_fin.value == '' && ok == 1){
		alert('Si es contratado, debe indicar la fecha final del contrato');
		form.fecha_fin.focus();
		ok = 0;
	}
	
	if(form.estado.value == 8 && form.fecha_fin.value == '' && ok == 1){
		alert('Si tiene contrato vigente, debe indicar la fecha final del contrato');
		form.fecha_fin.focus();
		ok = 0;
	}
	
	if(form.verificar.value == '' && ok == 1){
		alert('Verifique si coincide, el número de cédula con la fotocopia de la cédula');
		form.verificar.focus();
		ok = 0;
	}	
	
	if(ok == 1){
			//alert(formato)
			form.submit();
	}
}
