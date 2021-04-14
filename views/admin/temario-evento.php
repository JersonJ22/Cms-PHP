<div class="ui grid stackable header-temario" style="background: #0B66B3; margin-top: .05em;">	
	<div class="sub-container" style="color: #fff;">
		<h2><?php echo $evento[0]["nombre_evento"] ;?></h2>
		<p class="margin-top">
			<?php echo $evento[0]["descripcion_evento"];?>
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
			<button class="ui blue basic button btnSaveCapituloEvento">Guardar</button>
			<p class="clearfix"></p>
			<table class="ui very basic collapsing celled table tblCapitulosEvento">
				<thead>
					<tr>
						<th>Nombre de Capitulo</th>
		      			<th>Acciones</th>
					</tr>    		
		  		</thead>
		  		<tbody>
		    		<?php foreach($capitulo_evento as $capitulo_evento): ?>
		    			<tr>
		    				<td><i class="caret right icon"></i><?php echo $capitulo_evento['nombre_evento']; ?></td>
		    				<td><i class="trash alternate icon btnRemoveCapitulosEvento" data-capituloId="<?php echo $capitulo_evento['id_capitulo']?>" style="color: red;"></i></td>
		    			</tr>    			
		    		<?php endforeach; ?>
		  		</tbody>
			</table>
		</div>
		<div class="ui link cards">
			<div class="card card-curso">
			  	<div class="image">
			      	<img class="imagen" src="../../res/img/img_post/<?php echo $evento[0]["img_evento"]; ?>.png" class="post_img" alt="<?php echo $evento[0]['nombre_evento']; ?>">
				</div>
				<div class="content">
					<div class="header"><h2 class="post_tittle"><?php echo $evento[0]["nombre_evento"]; ?></h2></div>
				    <div class="meta">
				     	<a>Amigos</a>
				    </div>
				     <div class="description"><?php echo $evento[0]["descripcion_evento"]; ?></div>
				</div>
				<div class="extra content">
					<span class="right floated"><p class="post_date"><?php echo date("d-m-Y", $evento[0]["created_at"]) ?> </p></span>
					    	<a href="temario-curso/<?php echo $evento[0]["id_evento"]; ?>">Ver mas</a>
				</div>
			</div>	
		</div>
		
	</div>
</div>