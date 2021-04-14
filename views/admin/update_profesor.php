<div class="ui grid stackable header-temario" style="background: #0B66B3; margin-top: .05em;">	
	<div class="sub-container" style="color: #fff;">
		<h2><?php echo $profesor[0]["nombre_profesor"] ;?></h2>
		<p class="margin-top">
			<?php echo $profesor[0]["descripcion_profesor"] ;?>
		</p>
	</div>
</div>
<div class="ui grid stackable sixteen wide column" style="margin-bottom: 2em; background: #fff">
	<div class="sub-container">
		<div id="posts_container" class="posts_container" style="margin: 2em 0 2em 0;">
      <h1 class="centrar">Datos - Profesor</h1> 
			<p><b>Imagen: </b></p>
			<img src="../../res/img/img_post/<?php echo $profesor[0]["img_profesor"]; ?>.png" class="post_img" alt="<?php echo $profesor[0]['nombre_profesor']; ?>"></img>
      <p><b>Nombre: </b></p>
      <p><i class="caret right icon"></i><?php echo $profesor[0]["nombre_profesor"] ;?></p>
      <p><b>Descripcion: </b></p>
      <p><i class="caret right icon"></i><?php echo $profesor[0]["descripcion_profesor"] ;?></p>
      <p><b>Especialidad: </b></p>
      <p><i class="caret right icon"></i><?php echo $profesor[0]["especialidad_profesor"] ;?></p>
			<p><b>Fecha: </b></p>
			<p><i class="caret right icon"></i><?php echo date("d-m-Y", $profesor[0]["created_at"]);?></p>
			<a class="ui primary button boton-curso btnModal">Modificar <i class="pencil icon"></i></a>      
		</div> 
	</div>		
</div>

<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Perfil del Profesor / Modificar
  </div>
  <div class="image content">
    <div class="ui medium image">
    	<img class="imagen" src="../../res/img/img_post/<?php echo $profesor[0]["img_profesor"]; ?>.png" class="post_img" alt="<?php echo $profesor[0]['nombre_profesor'];?>"></img> 
    </div>
    <div class="description">
      <div class="ui header">CURSO</div>
      <div class="ui input">
      	<input type="text" class="txtNombreProfesor" name="txtNombreProfesor" value="<?php echo $profesor[0]["nombre_profesor"]; ?>"></input>
      </div>
      <div class="ui input">
      	<input type="text" class="txtDescripcionProfesor" name="txtDescripcionProfesor" value="<?php echo $profesor[0]["descripcion_profesor"]; ?>"></input>
      </div>
      <div class="ui input">
      	<input type="text" class="txtEspecialidadProfesor" name="txtEspecialidadProfesor" value="<?php echo $profesor[0]["especialidad_profesor"]; ?>"></input>
      </div>
    </div>
  </div>
  <div class="actions">
    <div class="ui red deny button">
      Cancelar  
    </div>
    <div class="ui blue right labeled icon button btnUpdateProfesor">
      Modificar
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>
