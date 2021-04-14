<div id="posts_container" class="posts_container">
	<h1 class="centrar">Categorias</h1>	
	<p><b>Nombre de la Categoria</b></p>
	<div class="ui input">
		<input type="text" class="txtNameCategory" placeholder="Nombre de la Categoria">		
	</div>

	<button class="ui blue basic button btnSaveCategory">Guardar Categoria</button>
	<p class="clearfix"></p>

	<h3>Categorias Existentes</h3>
	<table class="ui very basic collapsing celled table tblCategories">
		<thead>
			<tr>
				<th>Nombre de Categoria</th>
      			<th>Acciones</th>
			</tr>    		
  		</thead>
  		<tbody>
    		<?php foreach($categories as $category): ?>
    			<tr>
    				<td><?php echo $category['category']; ?></td>
    				<td><i class="trash alternate icon btnRemoveCategory" data-categoryId="<?php echo $category['id_category']?>" style="color: red;"></i></td>
    			</tr>    			
    		<?php endforeach; ?>
  		</tbody>
	</table>
</div>