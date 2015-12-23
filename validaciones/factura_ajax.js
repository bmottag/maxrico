$(function(){

	$("#tipoProducto").change(function()
	{
		var valtipo= $("#tipoProducto").val();
		if (valtipo>0 || valtipo!="")
		{
			$.ajax
			({
				type: "POST",
				url: "http://thibot.com/maxricos/factura/buscarPrecio",
				data:{'tipoProducto' : valtipo},
				cache: false,
				success: function(data)
				{
					$("#precio").html(data);
				}
			});
		}
	});

});