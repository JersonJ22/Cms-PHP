<div class="ui grid stackable container" style="margin-top: 1em;">
	<div class="sixteen wide column">
		<h2>Todas las Publicaciones</h2>
	</div>
	<?php foreach ($posts as $post): ?>		
		<a href="http://localhost/web/cms_avanzado/post/<?php echo $post["id_posts"]; ?>" class="four wide column">
			<div class="post_container">
				<img src="../res/img/img_post/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post['name']; ?>">
				<h2 class="post_tittle"><?php echo $post["name"]; ?></h2>
				<p class="post_date"><?php echo date("d-m-Y", $post["created_at"]) ?> </p>			
			</div>		
		</a>			
	<?php endforeach; ?>		
</div>