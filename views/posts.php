<div class="ui grid stackable container" style="margin-top: 1em;">
	<div class="sixteen wide column">
		<h2>Todas los Cursos</h2>
	</div>
	<?php foreach ($curso as $curso): ?>			
		<a href="posts/<?php echo $curso["id_curso"]; ?>" class="four wide column">
			<div class="post_container">
				<img src="res/img/img_post/<?php echo $curso["img_curso"]; ?>.png" class="post_img" alt="<?php echo $curso['nombre_curso']; ?>">
				<h2 class="post_tittle"><?php echo $curso["nombre_curso"]; ?></h2>
				<p class="post_precio"><?php echo $curso["precio_curso"]; ?></p>
				<p class="post_date"><?php echo date("d-m-Y", $curso["created_at"]) ?> </p>			
			</div>		
		</a>			
	<?php endforeach; ?>		
</div>