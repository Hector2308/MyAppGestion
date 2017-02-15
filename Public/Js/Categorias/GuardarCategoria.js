$(document).ready(function(){
	/*$("#NuevaCat").keyup(function(){
		var Dato = $("#NuevaCat").val();
		$("#NomComp").val(Dato);
		var T=$("#TablaCat >tbody >tr").length;
		//var Dato1=$("#TablaCat >tbody >tr:nth-child("+i+") >td:nth-child(2)").html();
			//alert(T);
		for (var i = 1 ; i <= T; i++) {

			var Dato1=$("#TablaCat >tbody >tr:nth-child("+i+") >td:nth-child(2)").html();
			//alert(Dato1);
			if(Dato==Dato1){
				//alert("Son iguales");
			}

			//alert($("#TablaCat >tbody >tr:nth-child("+i+") >td:nth-child(2)").html());	
		}
	});*/



	$("#BtnGuardarCat").click(function(){
		var Modelo=$(this).data("modelo");
		var Categoria= $("#NuevaCat").val();
		var T = $("#TablaCat >tbody >tr").length;
		var Num=0;
		for (var i = 1 ; i <= T; i++) {

			var Dato1=$("#TablaCat >tbody >tr:nth-child("+i+") >td:nth-child(2)").html();
			//alert(Dato1);
			if(Categoria==Dato1){
				Num++;
			}
			//alert($("#TablaCat >tbody >tr:nth-child("+i+") >td:nth-child(2)").html());	
		}

		if ($("#NuevaCat").val().length <1) {
			$("#TXTAlert").text("El campo esta vacio, Intentelo de nuevo");
			$("#ModalError").modal({backdrop:'static', keyboard:'false'}).one('click',"#Editar",function(e)
			{
				
			});
		}else{
			if(Num>0){
				$("#TXTAlert").text("La Categoria Ya Existe");
				$("#ModalError").modal({backdrop:'static', keyboard:'false'}).one('click',"#Editar",function(e)
				{
					
				});
			}else{
				$.post(Modelo,{Categoria});
				location.reload();
			}
		}
	});
});
