<form enctype="multipart/form-data" id="post_perfil" class="ui grid stackable container" style="margin-top: 1em;">
	<div class="sixteen wide column">
		<h2>Mi Perfil</h2>		
		<div class="ui top attached tabular menu">
  			<input type="radio" name="radio" id="uno">
  			<label for="uno" class="item active">Uno</label>
  			<input type="radio" name="radio" id="dos">
  			<label for="dos" class="item">Dos</label>
  			<input type="radio" name="radio" id="tres">
  			<label for="tres" class="item">Tres</label>
		</div>		
		<div class="ui bottom attached tab segment active">
			<div class="container-img">				
	  			<img class="ui medium circular image" src="res/img/img_post/<?php echo $perfil['imagen']; ?>.png" alt="<?php echo $perfil['name']; ?>"></img>
			</div>
			<input type="file" class="perfil_file" name="perfil_file">
			<div class="ui basic blue button btnSaveProfile">Guardar</div>
		</div>
		<div class="ui bottom attached tab segment">
  			<p>Hoa</p>
  			<p>Hla</p>
		</div>
		<div class="ui bottom attached tab segment">
  			<p>Hoa</p>
  			<p>Hoa</p>
		</div>
	</div>			
</form>