<div class="ui grid stackeable container" style="margin-top: 1em; margin-bottom: 2em; background: #fff;">
	<div class="sixteen wide column">
		<h2>Todos los Cursos</h2>
	</div>
	<div class="ui grid" style="margin-bottom: 2em; margin-top: 2em;">
		<div class="ui link cards">
	    	<?php foreach ($curso as $curso): ?>			
				<div class="card card-cursos" style="width: 32%;">
			   		<div class="image">
			      		<img class="imagen" src="../res/img/img_post/<?php echo $curso["img_curso"]; ?>.png" class="post_img" alt="<?php echo $curso['nombre_curso']; ?>">
			    	</div>
				    <div class="content">
				    	<div class="header"><h2 class="post_tittle"><?php echo $curso["nombre_curso"]; ?></h2></div>
				    	<div class="meta">
				       		<a>Amigos</a>
				    	</div>
				      	<div class="description"><?php echo $curso["descripcion_curso"]; ?></div>
				      	<div class="description"><?php echo $curso["precio_curso"]; ?></div>
				    </div>
				    <div class="extra content">
				    	<div class="profesor-container">
				      		<img src="../res/img/img_post/<?php echo $curso["img_curso"]; ?>.png" alt="<?php echo $curso['nombre_curso']; ?>">
				      		<p><?php echo $curso["nombre_curso"]; ?></p>
				      	</div>
				     	<span class="right floated"><p class="post_date"><?php echo date("d-m-Y", $curso["created_at"]); ?> </p></span>
				      	<a href="post/<?php echo $curso["id_curso"]; ?>">Ver mas</a>
				    </div>
			  	</div>	
	    	<?php endforeach; ?>     	    		
		</div>
    </div>
</div>