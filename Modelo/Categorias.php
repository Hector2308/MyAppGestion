<?php 
	include("DataBase.php");
	
	class Categoria
	{
		private $PDO;
		public $NombreCategoria;
		public $Id;

		function __construct()
		{
			$this->PDO=DataBase::Open();
		}

		public function ObtenerCategorias(){
			try {
				$sql="select * from categoria";
				$stm=$this->PDO->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				
			}
		}

		public function GuardarCategoria(){
			try {

				
					$sql="insert into categoria(nombre) 
						values('".$this->NombreCategoria."')";
					$stm=$this->PDO->prepare($sql);
					$stm->execute();
			} catch (Exception $e) {
				
			}
		}

		public function ActualizarCategoria(){
			try {
				$sql="UPDATE appgestion.categoria SET nombre = ? WHERE categoria.id = ?";
				$stm=$this->PDO->prepare($sql);
				$stm->execute(array(
						$this->NombreCategoria,
						$this->Id
					));
			} catch (Exception $e) {
				
			}
		}
		public function BorrarCategoria($Id){
			try {
					$sql="DELETE FROM appgestion.categoria WHERE categoria.id=".$Id;
					$stm=$this->PDO->prepare($sql);
					$stm->execute();
			} catch (Exception $e) {
				
			}
		}
	}
 ?>