<form enctype="multipart/form-data" id="posts_container" class="posts_container">
	<h1 class="centrar">Nuevo Profesor</h1>	
	<p><b>Nombre del Profesor</b></p>
	<div class="ui input">
		<input type="text" name="txtNameProfesor" class="txtNameProfesor" placeholder="Nombre del curso">		
	</div>
	<p><b>Descripcion</b></p>
	<div class="ui input">
		<input type="text" name="txtDescripcionProfesor"  class="txtDescripcionProfesor" placeholder="Descripcion del curso">		
	</div>	
	<p><b>Especialidad</b></p>
	<div class="ui input">
		<input type="text" name="txtEspecialidadProfesor"  class="txtEspecialidadProfesor" placeholder="Descripcion del curso">		
	</div>	
	<p><b>Portada del Profesor</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">		
	</div>

	<button class="ui blue basic button btnSaveProfesor">Guardar</button>
	<p class="clearfix"></p>
</form>