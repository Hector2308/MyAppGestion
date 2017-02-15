<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Usuarios v1.1</title>
	<link rel="stylesheet" href="<?php echo DIR; ?>/Public/Assets/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo DIR; ?>/Public/Js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo DIR; ?>/Public/Assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">			 
				      <a class="navbar-brand" href="<?php echo DIR; ?>/Usuarios">MyAppGestion</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="<?php echo DIR; ?>/Usuarios">Lista Clientes <span class="sr-only">(current)</span></a></li>

				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agregar <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo DIR; ?>/Usuarios/NuevoUsuario">Cliente</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="<?php echo DIR; ?>/Categorias/NuevaCategoria">Categoria</a></li>
				          </ul>
				        </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Hola</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</div>
	



