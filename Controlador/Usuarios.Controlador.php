<?php 
	include_once("Modelo/Usuarios.php");

	class UsuariosControlador 
	{
		private $Modelo;
		function __construct()
		{
			$this->Modelo= new Usuario;
		}

		public function index(){
			$Data=$this->Modelo->ObtenerDatos();
			include_once("Vistas/Default/header.php");
			include_once("Vistas/Usuarios/index.php");
			include_once("Vistas/Default/footer.php");			
		}
		public function NuevoUsuario(){			
			$Categorias=$this->Modelo->ObtenerCategorias();
			include_once("Vistas/Default/header.php");
			include_once("Vistas/Usuarios/NuevoUsuario.php");
			include_once("Vistas/Default/footer.php");
		}

		public function GuardarUsuario(){
				$this->Modelo->id=@$_POST['id'];
				$this->Modelo->Nombres=$_POST['Nombre'];
				$this->Modelo->Apellidos=$_POST['Apellidos'];
				$this->Modelo->Telefono=$_POST['Telefono'];
				$this->Modelo->CorreoElectronico=$_POST['CorreoE'];
				$this->Modelo->Categoria=$_POST['Categoria'];
				$this->Modelo->GuardarUsuario();
				
			$Data=$this->Modelo->ObtenerDatos();
			include_once("Vistas/Default/header.php");
			include_once("Vistas/Usuarios/index.php");
			include_once("Vistas/Default/footer.php");
		}

		public function ModificarUsuario($Id){
			$Data=$this->Modelo->BuscarUsuario($Id);			
			$Categorias=$this->Modelo->ObtenerCategorias();
			include_once("Vistas/Default/header.php");
			include_once("Vistas/Usuarios/Modificar.php");
			include_once("Vistas/Default/footer.php");
		}

		public function BorrarUsuario($Id){
			
			$this->Modelo->EliminarUsr($Id);
		}

		
	}
 ?>