<div class="ui grid stackable header-temario" style="background: #0B66B3; margin-top: .05em;">	
	<div class="sub-container" style="color: #fff;">
		<h2><?php echo $cursos[0]["nombre_curso"] ;?></h2>
		<p class="margin-top">
			<?php echo $cursos[0]["descripcion_curso"] ;?>
		</p>
	</div>
</div>
<div class="ui grid stackable sixteen wide column" style="margin-bottom: 2em; background: #fff">
	<div class="sub-container">
		<div id="posts_container" class="posts_container" style="margin: 2em 0 2em 0;">
			<h1 class="centrar">Temario - Capitulo</h1>	
			<p><b>Nombre del Capitulo</b></p>
			<div class="ui input">
				<input type="text" name="txtNameCapitulo" class="txtNameCapitulo" placeholder="Nombre del capitulo" autofocus="autofocus">	
			</div>			
			<button class="ui blue basic button btnSaveCapitulo">Guardar</button>
			<p class="clearfix"></p>
			<table class="ui very basic collapsing celled table tblCapitulos">
				<thead>
					<tr>
						<th>Nombre de Capitulo</th>
		      			<th>Acciones</th>
					</tr>    		
		  		</thead>
		  		<tbody>
		    		<?php foreach($capitulo as $capitulo): ?>
		    			<tr>
		    				<td><i class="caret right icon"></i><?php echo $capitulo['nombre_capitulo']; ?></td>
		    				<td><i class="trash alternate icon btnRemoveCapitulo" data-capituloId="<?php echo $capitulo['id_capitulo']?>" style="color: red;"></i></td>
		    			</tr>    			
		    		<?php endforeach; ?>
		  		</tbody>
			</table>
		</div>
		<div class="ui link cards">
			<div class="card card-curso">
			  	<div class="image" style="position: relative;">
			      	<img class="imagen" src="../../res/img/img_post/<?php echo $cursos[0]["img_curso"]; ?>.png" class="post_img" alt="<?php echo $cursos[0]['nombre_curso']; ?>">
			      	<img src="http://localhost/web/cms_cursos/res/img/img_post/<?php echo $cursos[0]["img_curso"]; ?>.png" alt="" style="height: 80px;position: absolute; bottom: -40px; width: 40%; border-radius: 50%; margin-left: 30%;">
				</div>
				<div class="content">
					<p class="post_tittle" style="margin-top: 2em;"><?php echo $cursos[0]["nombre_curso"]; ?></p>
					<div class="header">
						<p class="post_tittle" style="margin-top: ;">Profesor</p>
						<p class="post_tittle" style="margin-top: 0;"><?php echo $cursos[0]["nombre_curso"]; ?></p>
					</div>
					<a class="ui primary button boton-curso">Anadir al carrito <i class="shopping cart icon"></i></a>      
				</div>
			</div>	
		</div>		
	</div>
</div>
