<div class="background_main">
	<div class="overlay">
		<h1 class="main_tittle">Mejor blog</h1>		
	</div>	
</div>
<div class="ui grid stackable container" style="background: #fff; margin-top: 2em;" >
	<div class="four wide column margin-top">
		<div class="ui search">
  			<div class="ui icon input buscar-curso">
    			<input class="prompt" type="text" placeholder="Buscar Curso">
    			<i class="search icon"></i>
  			</div>
  			<div class="results"></div>
		</div>		
		<div class="ui vertical pointing menu menu-cursos">
			<?php foreach ($curso as $cursos): ?>			
  				<a class="item" href="post/<?php echo $cursos['id_curso']; ?>"><?php echo $cursos["nombre_curso"];?></a>
			<?php endforeach; ?>
  		
		</div>
	</div>
  	<div class="twelve wide column margin-top">
  		<div class="ui top attached tabular menu">
			<a class="item active" data-tab="first">Cursos</a>
			<a class="item" data-tab="second">Eventos</a>
		</div>
		<div class="ui bottom attached tab segment active" data-tab="first">
			<div class="ui link cards">
				<?php foreach ($curso as $curso): ?>		
			  		<div class="card card-cursos" style="width: 31%;">
			    		<div class="image">
			      			<img class="imagen" src="res/img/img_post/<?php echo $curso["img_curso"]; ?>.png" alt="<?php echo $curso['nombre_curso']; ?>"></img>
			    		</div>
				    	<div class="content">
				      		<div class="header"><p class="post_tittle"><b><?php echo $curso["nombre_curso"]; ?></b></p></div>
				    	</div>
				    	<div class="extra content">				      		
				      		<div class="profesor-container">
				      			<img src="res/img/img_post/<?php echo $curso["img_profesor"]; ?>.png" alt="<?php echo $curso['nombre_profesor']; ?>">
				      			<p><?php echo $curso["nombre_profesor"]; ?></p>
				      		</div>
				      		<button class="ui red button boton-curso">S/ <?php echo $curso["precio_curso"];?> soles</button>
				    	</div>
			  		</div>	
				<?php endforeach; ?>		
			</div>
		</div>
		<div class="ui bottom attached tab segment" data-tab="second">
			<div class="ui link cards">
				<?php foreach($evento as $evento): ?>			   
			  		<a href="evento/<?php echo $evento["id_evento"];?>" class="card card-cursos" style="width: 31%;">
			    		<div class="image">
			      			<img class="imagen" src="res/img/img_post/<?php echo $evento["img_evento"]; ?>.png" alt="<?php echo $evento['nombre_evento']; ?>">					
			    		</div>
				    	<div class="content">
				      		<div class="header"><p class="post_tittle"><?php echo $evento["nombre_evento"]; ?></p></div>
				    	</div>
				    	<div class="extra content">
				      		<div class="profesor-container">
				      			<img src="res/img/img_post/<?php echo $evento["img_profesor"]; ?>.png" alt="<?php echo $evento['nombre_profesor']; ?>" style="border-radius: 50%; height: 40px; width: 40px;">
				      			<p style="margin-left: .5em;"><?php echo $evento['nombre_profesor']; ?></p>
				      		</div>
				      		<!--<p class="post_date"><?php echo date("d-m-Y", $evento["created_at"]) ?>-->
				      		<button class="ui red button boton-curso"><?php echo date("d-m-Y", $evento["created_at"]) ?></button>
				    	</div>
			  		</a>	
	    		<?php endforeach; ?>   	 		
			</div>
		</div>
  	</div>	
</div>