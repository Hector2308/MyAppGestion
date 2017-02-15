<?php 
	include_once("Modelo/Categorias.php");

	class CategoriasControlador
	{
		private $Modelo;

		function __construct()
		{
			$this->Modelo= new Categoria;
		}

		public function Index(){

		}

		public function NuevaCategoria(){
			$Data=$this->Modelo->ObtenerCategorias();
			include_once("Vistas/Default/header.php");
			include_once("Vistas/Categorias/NuevaCategoria.php");
			include_once("Vistas/Default/footer.php");
		} 

		public function GuardarCategoria(){

				$this->Modelo->NombreCategoria=$_POST['Categoria'];
				$this->Modelo->GuardarCategoria();
			
		}

		public function ActualizarCategoria(){
				if (empty($_POST)) {
					
				}else{
					
					$this->Modelo->NombreCategoria=$_POST['NuevoNCategoria'];
					$this->Modelo->Id=$_POST["Id"];
					$this->Modelo->ActualizarCategoria();
				}
		}

		public function BorrarCategoria($Id){
				$this->Modelo->BorrarCategoria($Id);
		}
	}
 ?>