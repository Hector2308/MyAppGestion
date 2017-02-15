<?php 
	$url=explode('/',@$_GET['url']);
	$seccion=(!empty($url[0])?$url[0]:'Usuarios');
	$a=(!empty($url[1])?$url[1]:'index');
	$argumentos=(!empty($url[2])?$url[2]:null);

	if(file_exists("Controlador/".$seccion.".Controlador.php")) {

		include_once("Controlador/".$seccion.".Controlador.php");
		$controlador=ucwords($seccion)."Controlador";
		$controlador= new $controlador;
		if (method_exists($controlador, $a)) {
			if ($argumentos==null) {
				$controlador->{$a}();
			}else{
				$controlador->{$a}($argumentos);
			}
			
		}else{
			echo "<h1>Error: Acceso a un metodo inexistente</h1>";
		}
		
	}else{
		echo "<h1>Error: Acceso a la ruta inexistente</h1>";
	}

 ?>