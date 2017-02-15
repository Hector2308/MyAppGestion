<?php 
	include("DataBase.php");
	class Usuario
	{
		public $id;
		public $Nombres;
		public $Apellidos;
		public $Telefono;
		public $CorreoElectronico;
		public $Categoria;

		private $PDO;
		function __construct()
		{
			$this->PDO=DataBase::Open();
		}

		public function ObtenerDatos(){
			try {
				$Sql="SELECT e.id,nombres,apellidos,telefono,correo_electronico,c.nombre FROM cliente as e,categoria as c WHERE e.categoria_id=c.id";
				$Stm=$this->PDO->prepare($Sql);
				$Stm->execute();
				return $Stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
			return $this->row;
		}

		public function BuscarUsuario($Id){
			try {
				$Sql="SELECT * FROM cliente  WHERE id=".$Id;
				$Stm=$this->PDO->prepare($Sql);
				$Stm->execute();
				return $Stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
			return $this->row;
		}
		public function ObtenerCategorias(){
			try {
				$Sql="select * from categoria";
				$Stm=$this->PDO->prepare($Sql);
				$Stm->execute();
				return $Stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				
			}
		}
		
		public function GuardarUsuario(){
			try {
				if ($this->id==null) {
					$Sql="insert into cliente(nombres,apellidos,telefono,correo_electronico,categoria_id) 
						values(?,?,?,?,?)";
					$Stm=$this->PDO->prepare($Sql);
					$Stm->execute(array(
							$this->Nombres,
							$this->Apellidos,
							$this->Telefono,
							$this->CorreoElectronico,
							$this->Categoria
						));
					//$Stm->fetch(PDO::FETCH_OBJ);
				}else{
					$Sql="update  cliente set 
					nombres=?,
					apellidos=?,
					telefono=?,
					correo_electronico=?,
					categoria_id=? where id=?";
					$Stm=$this->PDO->prepare($Sql);
					$Stm->execute(array(
							$this->Nombres,
							$this->Apellidos,
							$this->Telefono,
							$this->CorreoElectronico,
							$this->Categoria,
							$this->id
						));
				}
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function EliminarUsr($Id){
			try {
				$Sql="DELETE FROM appgestion.cliente WHERE cliente.id=".$Id;
				$Stm=$this->PDO->prepare($Sql);
				$Stm->execute();
			} catch (Exception $e) {
				
			}
		}

	}
 ?>