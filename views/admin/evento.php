<form enctype="multipart/form-data" id="posts_container" class="posts_container">
	<h1 class="centrar">Nuevo Evento</h1>	
	<p><b>Nombre del Evento</b></p>
	<div class="ui input">
		<input type="text" name="txtNameEvento" class="txtNameEvento" placeholder="Nombre del curso">		
	</div>
	<p><b>Descripcion</b></p>
	<div class="ui input">
		<input type="text" name="txtDescripcionEvento"  class="txtDescripcionEvento" placeholder="Descripcion del curso">		
	</div>	
	<p><b>Portada del evento</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">		
	</div>
	<p><b>Profesor del evento</b></p>
	<div class="ui form margin-bottom"> 	
		<div class="field">
			<select name="txtProfesorEvento" class="txtProfesorEvento">
				<option value="0">Seleccionar un Profesor</option>	
				<?php foreach ($profesor as $profesor): ?>
					<option value="<?php echo $profesor['id_profesor']; ?>"><?php echo $profesor['nombre_profesor']; ?></option>
				<?php endforeach; ?>
			</select>			
		</div>
	</div>

	<button class="ui blue basic button btnSaveEvento">Guardar</button>
	<p class="clearfix"></p>
</form>