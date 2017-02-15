
<div class="container">
	<form action="<?php echo DIR?>/Usuarios/GuardarUsuario" class="form" method="POST">
	<fieldset>
		<legend>Ingrese los nuevos datos del cliente.</legend>
		<p>
			<input type="text" name="id" hidden value="<?php echo $Data[0]->id;?>">
		<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Nombre:</span>	
						<input type="text" class="form-control" name="Nombre" id="nombre" value="<?php echo $Data[0]->nombres;?>">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="input-group">		
						<span class="input-group-addon" id="basic-addon1">Apellidos:</span>	
						<input type="text" class="form-control" name="Apellidos" id="apellido" value="<?php echo $Data[0]->apellidos;?>">
					</div>
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Correo Electronico:</span> 	
						<input type="email" class="form-control" name="CorreoE" value="<?php echo $Data[0]->correo_electronico;?>">
					</div>
				</div>
			</div>
		</p>
		<p>
		<div class="row">
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Telefono:</span>	
					<input type="tel" class="form-control" name="Telefono" placeholder=" " value="<?php echo $Data[0]->telefono;?>">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Categoria:</span>	
					<select name="Categoria" class="form-control" id="">
						<?php foreach($Categorias as $Value): ?>
							<option value="<?php echo $Value->id; ?>"><?php echo $Value->nombre; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		</p>
		<div class="row">
			<div class="col-lg-12" style="margin:15px;">
				<button type="submit" class="btn btn-default">Guardar Cambios</button>
			</div> 
		</div>
		
	</fieldset>
	</form>
</div>