<div class="container">
	<form action="<?php echo DIR?>/Usuarios/GuardarUsuario" class="form" method="POST">
	<fieldset>
		<legend>Agregar Nuevo Cliente.</legend>
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Nombre:</span>	
						<input type="text" class="form-control" name="Nombre" id="nombre">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="input-group">		
						<span class="input-group-addon" id="basic-addon1">Apellidos:</span>	
						<input type="text" class="form-control" name="Apellidos" id="apellido">
					</div>
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Correo Electronico:</span>	
						<input type="email" id="CorreoElec"class="form-control" name="CorreoE">
					</div>
				</div>
			</div>
		</p>
		<p>
		<div class="row">
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">Telefono:</span>	
					<input type="tel" id="TextTel" class="form-control" name="Telefono" placeholder="0000000000" maxlength="10">
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
				<button type="submit" class="btn btn-default" id="Btn-Val">Agregar Cliente</button><br>
			</div>
		</div>
		
	</fieldset>
	</form>
</div>