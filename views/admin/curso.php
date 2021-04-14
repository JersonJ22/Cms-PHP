<h1 class="centrar">Curso</h1>
<div class="post_main_img">
	<img src="../../res/img/img_post/<?php echo $curso[0]["img_curso"]; ?>.png" alt="<?php echo $curso[0]["nombre_curso"]; ?>">	
<!--</div>-->

<!--<div class="post_main_body">-->
	<h1>
		<?php echo $curso[0]["nombre_curso"]; ?>		
	</h1>
	<p class="post_date"><?php echo date("d-m-Y", $curso[0]["created_at"]);?> - <?php echo $curso[0]["username"]; ?>

	</p>			
	<p><?php echo $curso[0]["descripcion_curso"]; ?></p>
</div>

<div class="post_main_img margin-bottom">
	<p><b>Capitulos</b></p>
	<div class="ui input">
		<input type="text" class="txtNameCapitulo" placeholder="Ingrese Capitulo">		
	</div>	
	<div class="ui basic blue button btnSaveCapitulo center hover">Registrar</div>
	<h3>Capitulos Existentes</h3>
	<table class="ui very basic collapsing celled table tblCapitulos">
		<thead class="bold">
			<tr>
				<td>Capitulos</td>
				<td>Eliminar</td>
				<td>Agregar</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($capicurso as $capicurso): ?>
			    <tr>
			    	<td><?php echo $capicurso['nombre_capitulo']; ?></td>
			    	<td><i class="icon icon-delete btnRemoveCapitulo" data-capituloId="<?php echo $capicurso['id_capitulo']?>" style="color: red;"></i></td>
			    	<td><i class="icon icon-add button btnAddCapitulo" data-temarioId="<?php echo $capicurso['id_capitulo']?>" style="color: blue;"></i></td>
			 	</tr>    	 				
			 <?php endforeach; ?>				
		</tbody>
	</table>
</div>

<div class="ui modal">
	  <i class="close icon"></i>
	  <div class="header">
	    Agregue Temario
	  </div>
	  <div class="image content">
	    <div class="ui medium image">
	    	<img src="../../res/img/img_post/<?php echo $curso[0]["img_curso"]; ?>.png" alt="<?php echo $curso[0]["nombre_curso"]; ?>">	
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
	</div>
