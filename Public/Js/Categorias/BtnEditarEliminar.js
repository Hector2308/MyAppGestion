$(document).ready(function(){

	$(".BtnEliminar").click(function(e){
		
		$("#NuevaCat").prop("required", false);

		var padre=$(this).closest("tr");
		var Id=$(this).data("id");
		var Modelo=$(this).data("modelo");
		var Nombre=$(this).data("nombre");
		e.preventDefault;
		$("#NombreCat").text(Nombre);
		$("#ClaveCat").text(Id);
		$("#ModalDel").modal({backdrop:'static', keyboard:'false'}).one('click',"#eliminar",function(e)
			{
				$.ajax({	
					url:Modelo+"/"+Id,
					success:function(){
						$(padre.fadeIn().remove());
					}
				})
			});
		return false;

	});

	$(".BtnEditar").click(function(e){
		$("#NuevaCat").prop("required", false);
		e.preventDefault;
		var NuevoNCategoria;
		var Id=$(this).data("id");
		var Modelo=$(this).data("modelo");

		$("#ModalEdit").modal({backdrop:'static', keyboard:'false'}).one('click',"#Editar",function(e)
			{
				NuevoNCategoria = $("#NNombreCat").val();
				$.post(Modelo,{NuevoNCategoria,Id});
			});
		
		return false;

	});

});