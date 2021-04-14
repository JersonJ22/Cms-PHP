<div class="ui grid stackable container" style="margin-top: 1em;">
	<div class="sixteen wide column">
		<h2>Cursos Recientes</h2>
	</div>
	<?php foreach ($post as $post): ?>		
		<a href="post/<?php echo $post["id_posts"]; ?>" class="four wide column">
			<div class="post_container">
				<img src="res/img/img_post/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post['name']; ?>">
				<h2 class="post_tittle"><?php echo $post["name"]; ?></h2>
				<p class="post_date"><?php echo date("d-m-Y", $post["created_at"]) ?> </p>			
				<p class="ui red button btnDeleteFavorite" data-favoriteId="<?php echo $post["id_favorite"]; ?>" style="width: 100%;">Eliminar</p>
			</div>		
		</a>			
	<?php endforeach; ?>		
</div>