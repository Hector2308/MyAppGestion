$(document).ready(function(){
	$(".BtnCltEliminar").click(function(e){

		var padre=$(this).closest("tr");
		var Id=$(this).data("id");
		var Modelo=$(this).data("modelo");
		var Nombre=$(this).data("nombre");
		e.preventDefault;

		$("#NombreUsr").text(Nombre);
		$("#ClaveUsr").text(Id);

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

	$(".BtnCltModificar").click(function(){
		var Id=$(this).data("id");
		var Modelo=$(this).data("modelo");
		window.location.href=Modelo+"/"+Id;
	});

});