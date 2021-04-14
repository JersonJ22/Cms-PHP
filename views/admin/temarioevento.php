<div class="temario_container">
	<h2 class="margin-bottom">Eventos / Agregar Temario</h2>		    
    <div class="ui grid" style="margin-bottom: 2em;">
		<div class="ui link cards">
	    	<?php foreach($evento as $evento): ?>		    	
				<div class="card card-cursos" style="width: 32%;">
			   		<div class="image">
			      		<img class="imagen" src="../res/img/img_post/<?php echo $evento["img_evento"]; ?>.png" alt="<?php echo $evento['nombre_evento']; ?>">
			    	</div>
				    <div class="content">
				    	<div class="header"><h2 class="post_tittle"><?php echo $evento["nombre_evento"]; ?></h2></div>
				    	<div class="meta">
				       		<a>Amigos</a>
				    	</div>
				      	<div class="description"><?php echo $evento["descripcion_evento"]; ?></div>
				    </div>
				    <div class="extra content">
				     	<span class="right floated"><p class="post_date"><?php echo date("d-m-Y", $evento["created_at"]); ?> </p>		 </span>
				      	<a href="temario-evento/<?php echo $evento["id_evento"]; ?>">Ver mas</a>
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