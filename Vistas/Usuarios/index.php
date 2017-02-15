<script>
$(document).ready(function(){
	
	var URLActual=window.location.pathname;
	if(URLActual=="/5ToCuatri/MiAppGestion/Usuarios/GuardarUsuario"){
		window.location="/5ToCuatri/MiAppGestion/Usuarios";
	}
});
</script>
<div class="container">
	<table class="table">
		<tr>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Correo Electronico</th>
			<th>Categoria</th>
			<th>Opciones</th>
		</tr>
		<?php foreach ($Data as $Value):?>
		<tr>
			
			<td><?php echo $Value->nombres; echo " "; echo $Value->apellidos;?></td>
			<td><?php echo $Value->telefono; ?></td>
			<td><?php echo $Value->correo_electronico; ?></td>
			<td><?php echo $Value->nombre?></td>
			<td><button data-id="<?php echo $Value->id; ?>" data-nombre="<?php echo $Value->nombres; ?>" data-modelo="<?php echo DIR; ?>/Usuarios/BorrarUsuario" class="BtnCltEliminar">Eliminar</button> 
				<button data-id="<?php echo $Value->id; ?>" data-modelo="<?php echo DIR; ?>/Usuarios/ModificarUsuario" class="BtnCltModificar">Modificar</button>
			</td>
			
		</tr>
		<?php endforeach; ?>
	</table>
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
							<p>El Usuario <b id="NombreUsr"></b> con clave <em id="ClaveUsr"></em> será eliminada permanentemente</p>
						</div>
						<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="eliminar">Eliminar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
						</div>
						</div>		
					</div>
				</div>