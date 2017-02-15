$(document).ready(function(){
	var Datos;
	$("#TextTel").keydown(function(event){
		if(event.shiftKey)
		   {
		        event.preventDefault();
		   }
		 
		   if (event.keyCode == 46 || event.keyCode == 8)    {
		   }
		   else {
		        if (event.keyCode < 95) {
		          if (event.keyCode < 48 || event.keyCode > 57) {
		                event.preventDefault();
		          }
		        } 
		        else {
		              if (event.keyCode < 96 || event.keyCode > 105) {
		                  event.preventDefault();
		              }
		        }
		      }
	});

	$("#Btn-Val").click(function(){
		if($("#nombre").val().length <1){
			$("#nombre").prop("required", true);
		}
		/*if ($("#CorreoElec").val().length <1) {
			$("#CorreoElec").prop("required", true);
		};*/

		if($("#apellido").val().length <1){
			$("#apellido").prop("required", true);
		}
	});

	$("#BtnGuardarCat").click(function(){
		if ($("#NuevaCat").val().length <1) {
			$("#NuevaCat").prop("required", true);
		};
	});


});