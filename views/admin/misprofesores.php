<div class="temario_container">
	<h2 class="margin-bottom">Profesores</h2>		
    <div class="ui grid" style="margin-bottom: 2em;">
		<div class="ui link cards">
	    	<?php foreach($profesor as $profesor): ?>		    	
				<div class="card card-cursos">
			   		<div class="image">
			      		<img class="imagen" src="../res/img/img_post/<?php echo $profesor["img_profesor"]; ?>.png" class="post_img" alt="<?php echo $profesor['nombre_profesor']; ?>">
			    	</div>
				    <div class="content">
				    	<div class="header"><h2 class="post_tittle"><?php echo $profesor["nombre_profesor"]; ?></h2></div>
				    	<div class="meta">
				       		<a>Amigos</a>
				    	</div>
				      	<div class="description"><?php echo $profesor["descripcion_profesor"]; ?></div>
				    </div>
				    <div class="extra content">
				     	<span class="right floated"><p class="post_date"><?php echo date("d-m-Y", $profesor["created_at"]) ?> </p></span>
					    <a href="update-profesor/<?php echo $profesor["id_profesor"]; ?>">Ver mas</a>
					</div>
				</div>	
	    	<?php endforeach; ?>     	    		
		</div>
    </div>
	<!--<div class="ui modal">
	  <i class="close icon"></i>
	  <div class="header">
	    Agregue Temario
	  </div>
	  <div class="image content">
	    <div class="ui medium image">
	    	<img src="../res/img/imagen.jpg" alt="">
	    </div>
	    <div class="description">
	      <div class="ui header">Tema</div>
	      <div class="ui input">
	      	<input type="text" class="txtNameTemario" placeholder="Ingrese tema">	      	
	      </div>
	    </div>
	  </div>
	  <div class="actions">
	    <div class="ui black deny button">
	      Cancelar
	    </div>
	    <div class="ui positive right labeled icon button">
	      Agregar
	      <i class="checkmark icon btnSaveTemario"></i>
	    </div>
	  </div>
	</div>-->
</div>