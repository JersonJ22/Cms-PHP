<form enctype="multipart/form-data" id="posts_container" class="posts_container">
	<h1 class="centrar">Nuevo Curso	</h1>	
	<p><b>Nombre del curso</b></p>
	<div class="ui input">
		<input type="text" name="txtNameCurso" class="txtNameCurso" placeholder="Nombre del curso">		
	</div>
	<p><b>Categoria</b></p>
	<div class="ui form">	
		<div class="field">
			<select name="txtCategory" class="txtCategory">
				<option value="0">Seleccionar una Categoria</option>	
				<?php foreach ($categories as $category): ?>
					<option value="<?php echo $category['id_category']; ?>"><?php echo $category['category']; ?></option>
				<?php endforeach; ?>
			</select>			
		</div>
	</div>
	<p><b>Descripcion</b></p>
	<div class="ui input">
		<input type="text" name="txtDescripcionCurso"  class="txtDescripcionCurso" placeholder="Descripcion del curso">		
	</div>
	<p><b>Precio curso</b></p>
	<div class="ui input">
		<input type="text" name="txtPrecioCurso" class="txtPrecioCurso" placeholder="Precio del curso">		
	</div>
	<p><b>Portada del curso</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name="image_file">		
	</div>
	<p><b>Profesor del curso</b></p>
	<div class="ui form margin-bottom">	
		<div class="field">
			<select name="txtProfesorCurso" class="txtProfesorCurso">
				<option value="0">Seleccionar un Profesor</option>	
				<?php foreach ($profesor as $profesor): ?>
					<option value="<?php echo $profesor['id_profesor']; ?>"><?php echo $profesor['nombre_profesor']; ?></option>
				<?php endforeach; ?>
			</select>			
		</div>
	</div>
	<button class="ui blue basic button btnSaveCurso">Guardar Categoria</button>
	<p class="clearfix"></p>
</form>