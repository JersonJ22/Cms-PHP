<div class="ui grid stackable header-temario" style="background: #0B66B3; margin-top: .05em;">	
	<div class="sub-container" style="color: #fff;">
		<h2><?php echo $evento[0]["nombre_evento"] ;?></h2>
		<p class="margin-top">
			<?php echo $evento[0]["descripcion_evento"] ;?>
		</p>
	</div>
</div>
<div class="ui grid stackable sixteen wide column" style="margin-bottom: 2em; background: #fff">
	<div class="sub-container">
		<div class="ui link cards">
			<div class="card card-curso">
			  	<div class="image">
			      	<img class="imagen" src="../res/img/img_post/<?php echo $evento[0]["img_evento"]; ?>.png" class="post_img" alt="<?php echo $evento[0]['nombre_evento']; ?>">
			      	<img class="imagen-card-curso" src="http://localhost/web/cms_cursos/res/img/img_post/<?php echo $cursos[0]["img_curso"]; ?>.png" alt="">
				</div>
				<div class="content">
					<p class="post_tittle" style="margin-top: 2em;"><?php echo $evento[0]["nombre_evento"] ;?></p>
					<div class="header">
						<p class="post_tittle" style="margin-top: 0;"><?php echo $evento[0]["nombre_evento"]; ?></p>
						<p class="post_tittle" style="margin-top: 0;"><?php echo $evento[0]["nombre_evento"]; ?></p>
					</div>
					<h2 class="post_tittle"><?php echo $evento[0]["nombre_evento"]; ?></h2>
					<a class="ui primary button boton-curso">Inscribirse <i class="pencil icon"></i></a>      
				</div>
			</div>	
		</div>		
		<div class="conocimientos-container">
			<div class="conocimientos">
				<p class="titulo-conocimientos"><b>¿Qué aprenderás?</b></p>
				<p><i class="check circle outline icon"></i>Máquinas Virtuales</p>
				<p><i class="check circle outline icon"></i>Balanceador de Cargas</p>
				<p><i class="check circle outline icon"></i>Servicios de cómputo adicionales</p>
				<p><i class="check circle outline icon"></i>Autoescalamiento</p>
			</div>
			<div class="conocimientos">
				<p class="titulo-conocimientos"><b>¿Qué conocimientos necesitas?</b></p>
				<p><i class="check circle outline icon"></i>Máquinas Virtuales</p>
				<p><i class="check circle outline icon"></i>Balanceador de Cargas</p>
				<p><i class="check circle outline icon"></i>Servicios de cómputo adicionales</p>
				<p><i class="check circle outline icon"></i>Autoescalamiento</p>
			</div>
			<div class="conocimientos">
				<p><b>Nivel avanzado</b></p>
				<p><i class="time icon"></i>+4 horas</p>
				<p><i class="video icon"></i>Clases en vivo</p>
			</div>
		</div>		
		<h1 style="margin-top: 1em;">Temario</h1>
		<p>EDteam tiene los temarios más detallados en español</p>
		<div class="temario-container">
			<?php foreach($capitulo as $capitulo) : ?>
			<div class="temario">
				<p class="titulo-temario"><b>1. <?php echo $capitulo['nombre_capitulo'];?></b></p>
				<?php foreach($temario as $temario) : ?>
					<p><i class="caret right icon"></i>
						<?php echo $temario["nombre_tema"];?>
					</p>
				<?php endforeach; ?>
				<!--<p><i class="caret right icon"></i>Elastic Compute Cloud (EC2)</p>
				<p><i class="caret right icon"></i>Tipos de Instancias</p>
				<p><i class="caret right icon"></i>Opciones de Compra</p>
				<p><i class="caret right icon"></i>Elastic Ip’s</p>-->
			</div>
			<?php endforeach; ?>
			<!--<div class="temario">
				<p class="titulo-temario"><b>2. Maquinas Virtuales</b></p>
				<p><i class="caret right icon"></i>Introducción</p>
				<p><i class="caret right icon"></i>Elastic Compute Cloud (EC2)</p>
				<p><i class="caret right icon"></i>Tipos de Instancias</p>
				<p><i class="caret right icon"></i>Opciones de Compra</p>
				<p><i class="caret right icon"></i>Elastic Ip’s</p>
			</div>
			<div class="temario">
				<p class="titulo-temario"><b>3. Maquinas Virtuales</b></p>
				<p><i class="caret right icon"></i>Introducción</p>
				<p><i class="caret right icon"></i>Elastic Compute Cloud (EC2)</p>
				<p><i class="caret right icon"></i>Tipos de Instancias</p>
				<p><i class="caret right icon"></i>Opciones de Compra</p>
				<p><i class="caret right icon"></i>Elastic Ip’s</p>
			</div>
			<div class="temario">
				<p class="titulo-temario"><b>4. Maquinas Virtuales</b></p>
				<p><i class="caret right icon"></i>Introducción</p>
				<p><i class="caret right icon"></i>Elastic Compute Cloud (EC2)</p>
				<p><i class="caret right icon"></i>Tipos de Instancias</p>
				<p><i class="caret right icon"></i>Opciones de Compra</p>
				<p><i class="caret right icon"></i>Elastic Ip’s</p>
			</div>-->
		</div>
		<div class="recomendacion-container margin-top">
			<h1 class="centrar">¿Por qué estudiar en CREARQ?</h1>
			<div class="recomendacion">
				<div class="icon">
					<i class="users icon border-1"></i>
				</div>
				<p><b>Profesores reales</b></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores. Quis nesciunt modi reprehenderit natus tempora ratione expedita necessitatibus, quas ab.</p>
			</div>
			<div class="recomendacion">
				<div class="icon">
					<i class="computer icon border-2"></i>
				</div>
				<p><b>Clases en vivo</b></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores. Quis nesciunt modi reprehenderit natus tempora ratione expedita necessitatibus, quas ab.</p>
			</div>
			<div class="recomendacion">
				<div class="icon">
					<i class="users icon border-3"></i>
				</div>
				<p><b>Profesores reales</b></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores. Quis nesciunt modi reprehenderit natus tempora ratione expedita necessitatibus, quas ab.</p>
			</div>
		</div>				
	</div>
</div>