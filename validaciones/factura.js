$(document).ready(function() {
	//ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
	$(".bt_plus").each(function (e){
		$(this).bind("click",addField);
	});

	/**
	 * Validacion formulario de inscripcion
	 */	
    $("#formSatis").validate({
        rules: {
            numDocumento: { required: true, number: true, minlength: 6, maxlength: 10 },
			nombre: { required: true, minlength: 3, maxlength: 50 },
			email: { required: true, email: true},
			fechaConsulta: { required: true, date: true},
			departamento: { required: true},
			municipio: { required: true}
        },
		errorPlacement: function(error, element) {
			$( element )
				.closest( "form" )
					.find( "label[for='" + element.attr( "name" ) + "']" )
						.append( error );
		},
		errorElement: "span",		
        messages: {
			confirmarPassword: {
				confirmar: "La contrase\u00F1a y su confirmaci\u00f3n, no coinciden"
			},
			confirmarCorreo: {
				confirmar: "El correo principal y su confirmaci\u00f3n, no coinciden"
			}
        },		
		submitHandler: function(form) {
			return true;
		}
    });	
	$("#btnGuardar").click(function(){		
		if ($("#formSatis").valid() == true){
			var form = document.getElementById('formSatis');
			form.submit();	
		}else
		{
			alert('Campos del formulario con errores. Revise y corrija.');
			
		}
	});	
});




	$(function() { 
		$('select#municipio').attr('disabled',true);
	});
	function buscarMunicipio(){
		var tnmt_id = $('select#departamento').val(); 
		$.ajax({
			type: 'POST',
			url: '../list_dropdown',
			data: 'tnmnt='+tnmt_id, 
			success: function(resp) { 
				//Activar y Rellenar el select
				$('select#municipio').attr('disabled',false).html(resp); //Con el método ".html()" incluimos el código html devuelto por AJAX en la lista
			}
		});
	};
	
	
		if (top.location != location) {
			top.location.href = document.location.href ;
		}
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#fecha').datepicker({
				format: 'yyyy-mm-dd'
			});
			// disabling dates
			var nowTemp = new Date();
			var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
			var checkin = $('#dpd1').datepicker({
				onRender: function(date) {
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			}).on('changeDate', function(ev) {
				if (ev.date.valueOf() > checkout.date.valueOf()) {
					var newDate = new Date(ev.date)
					newDate.setDate(newDate.getDate() + 1);
					checkout.setValue(newDate);
				}
				checkin.hide();
				$('#dpd2')[0].focus();
			}).data('datepicker');
		});	
		


function addField(){
	// ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número. Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest , así que dejo como seria por si a alguien le hace falta.
	var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
	// Genero el nuevo numero id
	var newID = (clickID+1);
	// Creo un clon del elemento div que contiene los campos de texto
	$newClone = $('#div_'+clickID).clone(true);
	//Le asigno el nuevo numero id
	$newClone.attr("id",'div_'+newID);
	
	$newClone.children("Control_1").attr("name",'tipoProductos'+newID);
	$newClone.children("Control_2").val('');


	//Asigno nuevo id al boton
	$newClone.children("input").eq(0).attr("id",newID)
	//Inserto el div clonado y modificado despues del div original
	$newClone.insertAfter($('#div_'+clickID));
	//Cambio el signo "+" por el signo "-" y le quito el evento addfield
	$("#"+clickID).val('-').unbind("click",addField);
	//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
	$("#"+clickID).bind("click",delRow);	
}


function delRow() {
	// Funcion que destruye el elemento actual una vez echo el click
	$(this).parent('div').remove();
};
