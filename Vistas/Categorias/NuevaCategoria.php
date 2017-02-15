<div class="container">
	
		<fieldset>
			<legend>Agregar Nueva Categoria</legend>
			<br>
			<div class="row">
				<div class="col-ls-12">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Categoria:</span>	
						<input type="text" id="NuevaCat" class="form-control" name="Categoria" placeholder="Nombre Categoria">
						<span class="input-group-btn"> <button type="button" data-modelo=" <?php echo DIR; ?>/Categorias/GuardarCategoria" id="BtnGuardarCat" class="btn btn-default">Agregar</button></span>
					</div>
				</div>
			</div>
			<br>
		</fieldset>
		<br><br>
		<fieldset>
			<legend>Lista de Categorias</legend>
			<br>
				<table class="table" id="TablaCat">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php  foreach($Data as $value):?>
							<tr>
								<td><?php echo $value->id; ?></td>
								<td><?php echo $value->nombre; ?></td>
								<td><button class="BtnEliminar" data-modelo=" <?php echo DIR; ?>/Categorias/BorrarCategoria" data-id="<?php echo $value->id; ?>" data-nombre="<?php echo $value->nombre; ?>">Eliminar</button>
									<button class="BtnEditar" data-modelo=" <?php echo DIR; ?>/Categorias/ActualizarCategoria" data-id="<?php echo $value->id; ?>">Modificar</button></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
		</fieldset>
	
</div>

				<div class="modal fade" role="dialog" id="ModalDel">
					<div class="modal-dialog">
						<!modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times</button>
						<h4 class="modal-title">¿Desea elminar la informacion?</h4>
						</div>
						<div class="modal-body">
							<p>La Categoria <b id="NombreCat"></b> con clave <em id="ClaveCat"></em> será eliminada permanentemente</p>
						</div>
						<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="eliminar">Eliminar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
						</div>
						</div>		
					</div>
				</div>

				<div class="modal fade" role="dialog" id="ModalEdit">
					<div class="modal-dialog">
						<!modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times</button>
						<h4 class="modal-title">Ingrese el nuevo nombre de la categoria</h4>
						</div>
						<div class="modal-body">
							<label for="NNombre">Nuevo Nombre:</label>
							<input name="NNombre" type="text" id="NNombreCat">
						</div>
						<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="Editar">Guardar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
						</div>
						</div>		
					</div>
				</div>

				<div class="modal fade" role="dialog" id="ModalError">
					<div class="modal-dialog">
						<!modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times</button>
						<h4 class="modal-title" id="TXTAlert"></h4>
						</div>
						<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="eliminar">Aceptar</button>
						</div>
						</div>		
					</div>
				</div>