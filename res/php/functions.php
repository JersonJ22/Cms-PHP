<?php
	require 'init.php';

	class User_Actions{		
		public function getProfile($session){
			global $database;

			$user = $database->select("users", [
				"id_users"
			],[
				"OR" => [
					"username" => $session,
					"email" => $session 
				]
			]);

			return $user;

		}

		public function getPerfil($session){
			global $database;

			$perfil = $database->select("users", [
				"id_users",
				"name",
				"lastname",
				"imagen"
			],[
				"id_users[>]" => $session
			]);

			return $perfil;

		}

		public function img_perfil($id, $imagen){
			global $database;

			$perfil = $database->update("users",[								
				"imagen" => $imagen
			],[
				"id_users[>]" => $id
			]);

			return $perfil->rowCount();

		}

		public function checkExistance($user_name, $email){
			global $database;

			$users = $database->count("users", [
				"OR" => [
					"username" => $user_name,
					"email" => $email
				]
			]);

			return $users;
		}

		public function register($name, $last_name, $user_name, $email, $pass){			
			global $database;

			if ($this->checkExistance($user_name, $email) == 0) {
				$register = $database->insert("users", [
					"name" => htmlentities($name), 
					"lastname" => htmlentities($last_name),
					"username" => htmlentities($user_name),				
					"email" => htmlentities($email),
					"password" => password_hash($pass, PASSWORD_BCRYPT),
					"created_at" => time()
				]);

				return $database->id();
			}else{
				return false;
			}

		}

		public function loginuser($user_name, $pass){			
			global $database;

			$data = $database->select("users", [
				"password"
			],[
				"OR" => [
					"username" => $user_name,
					"email" => $user_name
				]
			]);

			$password_db = $data[0]["password"];

			//if (password_verify($pass, $password_db)) {
			if ($pass == $password_db) {
				return true;
			}else{
				return false;
			}
		}

		public function getPosts(){
			global $database;

			$post = $database->select("posts", [
				"id_posts",
				"name",
				"img_post",				
				"created_at"
			], [
				"ORDER" => [
					"id_posts" => "DESC"
				]
			]);

			return $post;
		}

		public function getCursos(){
			global $database;

			$curso = $database->select("cursos", [
				"[>]profesores" => ["profesor_evento" => "id_profesor"]
			], [
				"cursos.id_curso",
				"cursos.nombre_curso",
				"cursos.descripcion_curso",
				"cursos.precio_curso",				
				"cursos.created_at",
				"cursos.img_curso",
				"profesores.id_profesor",
				"profesores.nombre_profesor",
				"profesores.img_profesor"
			], [
				"ORDER" => [
					"cursos.id_curso" => "DESC"
				]
			]);

			return $curso;
		}

		public function getRecentCurso(){
			global $database;

			$curso = $database->select("cursos", [
				"[>]profesores" => ["profesor_curso" => "id_profesor"]
			],[
				"cursos.id_curso",
				"cursos.nombre_curso",
				"cursos.descripcion_curso",
				"cursos.precio_curso",				
				"cursos.created_at",
				"cursos.img_curso",
				"profesores.nombre_profesor",
				"profesores.img_profesor"
			], [
				"ORDER" => [
					"id_curso" => "DESC"
				],
				"LIMIT" => "8" //Nos va a mostar las 8 primeras publicaciones
			]);

			return $curso;
		}

		public function getCapitulosCurso($curso_id){
			global $database;

			$capicurso = $database->select("capitulos", [
				"[>]cursos" => ["id_curso" => "id_curso"]
			], [
				"capitulos.id_capitulo",
				"capitulos.nombre_capitulo"				
			], [
				"capitulos.id_curso" => $curso_id
			]);

			return $capicurso;
		}

		public function getEventoInfo($evento_id){
			global $database;

			$curso = $database->select("eventos", [				
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"eventos.nombre_evento",
				"eventos.descripcion_evento",				
				"eventos.img_evento",				
				"eventos.created_at",
				"admin.username"
			], [
				"eventos.id_evento" => $evento_id								
			]);

			return $curso;
		}

		public function getCapitulosEventoId($evento_id){
			global $database;

			$capievento = $database->select("capitulos-evento", [
				"[>]eventos" => ["id_evento" => "id_evento"]
			], [
				"capitulos-evento.nombre_evento"				
			], [
				"capitulos-evento.id_evento" => $evento_id
			]);

			return $capievento;
		}

		public function getTemarioCapitulo($temario_id){
			global $database;

			$temacapi = $database->select("temas", [
				"[>]capitulos" => ["id_capitulos" => "id_capitulo"]
			], [	
				"temas.id_tema",
				"temas.nombre_tema"				
			], [
				"temas.id_capitulos" => $temario_id
			]);

			return $temacapi;
		}

		public function getEvento(){
			global $database;

			$categories = $database->select("eventos", [
				"[>]profesores" => ["profesor_evento" => "id_profesor"]
			], [
				"eventos.id_evento",
				"eventos.nombre_evento",
				"eventos.descripcion_evento",				
				"eventos.img_evento",
				"eventos.created_at",
				"profesores.nombre_profesor",
				"profesores.img_profesor"
			],[
				"ORDER" => [
					"eventos.id_evento" => "DESC"
				],
				"LIMIT" => "9"
			]);

			return $categories;

		}

		public function getCursoInfo($curso_id){
			global $database;

			$curso = $database->select("cursos", [
				"[>]categories" => ["categoria_curso" => "id_category"],
				"[>]profesores" => ["profesor_curso" => "id_profesor"],
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"cursos.id_curso",
				"cursos.nombre_curso",
				"cursos.descripcion_curso",				
				"cursos.precio_curso",
				"cursos.created_at",
				"cursos.img_curso",
				"categories.category",
				"profesores.nombre_profesor",
				"profesores.img_profesor",
				"admin.username"
			], [
				"cursos.id_curso" => $curso_id								
			]);

			return $curso;
		}

		public function getPostInfo($post_id){
			global $database;

			$post = $database->select("posts", [
				"[>]categories" => ["id_category" => "id_category"],
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"posts.name",
				"posts.body",				
				"posts.img_post",
				"posts.created_at",
				"categories.category",
				"admin.username"
			], [
				"posts.id_posts" => $post_id								
			]);

			return $post;
		}	

		public function markAsFavorite($post_id, $user_id){
			global $database;

			$database->insert("favorites", [
				"id_user" => $user_id, 
				"id_post" => $post_id
			]);

			return $database->id();
		}

		public function getMyfavorites($user_id){
			global $database;

			$post = $database->select("favorites", [
				"[>]posts" => ["id_post" => "id_posts"]
			],[
				"posts.id_posts",
				"posts.name",
				"posts.img_post",				
				"posts.created_at",
				"favorites.id_favorite"
			], [
				"favorites.id_user" => $user_id,
				"ORDER" => [
					"favorites.id_favorite" => "DESC"
				],				
			]);

			return $post;
		}

		public function checkFavorites($user_id, $post_id){
			global $database;

			$users = $database->count("favorites", [
				"AND" => [
					"id_user" => $user_id,
					"id_post" => $post_id
				]
			]);

			return $users;
		}

		public function deleteFavorite($favorite_id){
			global $database;

			$delete = $database->delete("favorites", [
				"id_favorite" => $favorite_id
			]);

			return $delete->rowCount();
		}
	}

	class Admin_Actions{
		public function login($username_email, $pass){
			global $database;

			$data = $database->select("admin", [				
				"password"
			],[
				"OR" => [
					"username" => $username_email,
					"email"=> $username_email
				]
			]);

			//return $data;
			$password_db = $data[0]["password"];
			//var_dump($password_db);
			//echo $password_db;

			//$hash = password_hash($password_db, PASSWORD_DEFAULT);

			/*if(password_verify($pass, $password_db)) {
				return true;				
			}else{
				return false;
			}*/
			if($pass == $password_db) {
				return true;				
			}else{
				return false;
			}
		}

		public function getProfile($email){
			global $database;

			$admin = $database->select("admin", [
				"id_admin",
				"username"
			],[
				"email" => $email 
			]);

			return $admin;

		}

		public function getCapitulos(){
			global $database;

			$capitulo = $database->select("capitulos", [
				"id_capitulo",
				"nombre_capitulo",
			]);

			return $capitulo;
		}

		public function getCapitulosEvento(){
			global $database;

			$capitulo = $database->select("capitulos-evento", [
				"id_capitulo",
				"nombre_evento",
			]);

			return $capitulo;
		}

		public function getCapitulosCurso($curso_id){
			global $database;

			$capicurso = $database->select("capitulos", [
				"[>]cursos" => ["id_curso" => "id_curso"]
			], [
				"capitulos.nombre_capitulo"				
			], [
				"capitulos.id_curso" => $curso_id
			]);

			return $capicurso;
		}

		public function getCapitulosEventoId($evento_id){
			global $database;

			$capievento = $database->select("capitulos-evento", [
				"[>]eventos" => ["id_evento" => "id_evento"]
			], [
				"capitulos-evento.nombre_evento"				
			], [
				"capitulos-evento.id_evento" => $evento_id
			]);

			return $capievento;
		}

		public function getTemarioCapitulo($temario_id){
			global $database;

			$temacapi = $database->select("capitulos", [
				"[>]cursos" => ["id_curso" => "id_curso"]
			], [
				"capitulos.nombre_capitulo"				
			], [
				"capitulos.id_curso" => $temario_id
			]);

			return $temacapi;
		}



		public function getPosts(){
			global $database;

			$post = $database->select("posts", [
				"id_posts",
				"name",
				"img_posts",				
				"created_at"
			], [
				"ORDER" => [
					"id_posts" => "DESC"
				]
			]);

			return $post;
		}

		public function getCursoInfo($curso_id){
			global $database;

			$curso = $database->select("cursos", [
				"[>]categories" => ["categoria_curso" => "id_category"],
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"cursos.id_curso",
				"cursos.nombre_curso",
				"cursos.descripcion_curso",				
				"cursos.precio_curso",
				"cursos.created_at",
				"cursos.img_curso",
				"categories.category",
				"admin.username"
			], [
				"cursos.id_curso" => $curso_id								
			]);

			return $curso;
		}

		public function getCategories(){
			global $database;

			$categories = $database->select("categories", [
				"id_category",
				"category"
			]);

			return $categories;

		}

		public function getProfesorInfo($profesor_id){
			global $database;

			$profesor = $database->select("profesores", [
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"profesores.nombre_profesor",
				"profesores.descripcion_profesor",				
				"profesores.especialidad_profesor",
				"profesores.img_profesor",
				"profesores.created_at",
				"admin.username"
			], [
				"profesores.id_profesor" => $profesor_id								
			]);

			return $profesor;
		}
		
		public function saveCurso($curso,$category,$description,$precio,$img_curso,$id_admin,$profesor){
			global $database;

			$database->insert("cursos", [
				"nombre_curso" => $curso, //htmlentities permite evitar la inyeccion de codigo				
				"categoria_curso" => $category, //htmlentities permite evitar la inyeccion de codigo				
				"descripcion_curso" => htmlentities($description), //htmlentities permite evitar la inyeccion de codigo				
				"precio_curso" => htmlentities($precio), //htmlentities permite evitar la inyeccion de codigo				
				"created_at" => time(),
				"img_curso" => $img_curso,
				"id_admin" => $id_admin,
				"profesor_curso" => $profesor,
			]);

			return $database->id();
		}

		public function getCursosId(){
			global $database;

			$curso = $database->select("cursos", [
				"id_curso"			
			]);

			return $curso;
		}

		public function getCursos(){
			global $database;

			$curso = $database->select("cursos", [
				"id_curso",
				"nombre_curso",
				"descripcion_curso",
				"precio_curso",				
				"created_at",
				"img_curso"				
			], [
				"ORDER" => [
					"id_curso" => "DESC"
				]
			]);

			return $curso;
		}

		public function saveEvento($evento,$description,$img_evento,$id_admin,$profesor){
			global $database;

			$database->insert("eventos", [
				"nombre_evento" => $evento, //htmlentities permite evitar la inyeccion de codigo				
				"descripcion_evento" => htmlentities($description), //htmlentities permite evitar la inyeccion de codigo				
				"img_evento" => $img_evento,
				"created_at" => time(),
				"id_admin" => $id_admin,
				"profesor_evento" => $profesor,
			]);

			return $database->id();
		}

		public function getEvento(){
			global $database;

			$categories = $database->select("eventos", [
				"id_evento",
				"nombre_evento",
				"descripcion_evento",				
				"img_evento",
				"created_at"
			],[
				"ORDER" => [
					"id_evento" => "DESC"
				] 
			]);

			return $categories;

		}

		public function getEventoInfo($evento_id){
			global $database;

			$curso = $database->select("eventos", [				
				"[>]admin" => ["id_admin" => "id_admin"]
			], [
				"eventos.nombre_evento",
				"eventos.descripcion_evento",				
				"eventos.img_evento",				
				"eventos.created_at",
				"admin.username"
			], [
				"eventos.id_evento" => $evento_id								
			]);

			return $curso;
		}

		public function saveProfesor($profesor,$description,$especialidad,$img_profesor,$id_admin){
			global $database;

			$database->insert("profesores", [
				"nombre_profesor" => $profesor, //htmlentities permite evitar la inyeccion de codigo				
				"descripcion_profesor" => htmlentities($description), //htmlentities permite evitar la inyeccion de codigo				
				"especialidad_profesor" => htmlentities($especialidad),			
				"img_profesor" => $img_profesor,
				"created_at" => time(),
				"id_admin" => $id_admin,
			]);

			return $database->id();
		}

		public function getProfesor(){
			global $database;

			$profesor = $database->select("profesores", [
				"id_profesor",
				"nombre_profesor",
				"descripcion_profesor",				
				"especialidad_profesor",				
				"img_profesor",
				"created_at"
			],[
				"ORDER" => [
					"id_profesor" => "DESC"
				]
			]);

			return $profesor;

		}

		public function saveCapitulo($capitulo,$id_curso){
			global $database;

			$database->insert("capitulos", [
				"nombre_capitulo" => $capitulo,
				"id_curso" => $id_curso
			]);

			return $database->id();
		}

		public function saveCapituloEvento($capitulo,$id_evento){
			global $database;

			$database->insert("capitulos-evento", [
				"nombre_capitulo" => htmlentities($capitulo),
				"id_evento" => $id_curso
			]);

			return $database->id();
		}

		public function deleteCapitulo($id_capitulo){
			global $database;

			$delete = $database->delete("capitulos", [
				"id_capitulo" => $id_capitulo
			]);

			return $delete->rowCount();
		}

		public function deleteCapituloEvento($id_capitulo){
			global $database;

			$delete = $database->delete("capitulos-evento", [
				"id_capitulo" => $id_capitulo
			]);

			return $delete->rowCount();
		}

		public function saveTema($tema,$id_capitulo){
			global $database;

			$database->insert("temas", [
				"nombre_tema" => htmlentities($tema),
				"id_capitulos" => $id_capitulo
			]);

			return $database->id();
		}


		public function deleteTema($id_tema){
			global $database;

			$delete = $database->delete("temas", [
				"id_tema" => $id_tema
			]);

			return $delete->rowCount();
		}

		public function deleteTemaEvento($id_tema){
			global $database;

			$delete = $database->delete("temas-evento", [
				"id_tema" => $id_tema
			]);

			return $delete->rowCount();
		}

		public function saveCategory($category){
			global $database;

			$database->insert("categories", [
				"category" => htmlentities($category) //htmlentities permite evitar la inyeccion de codigo				
			]);

			return $database->id();
		}

		public function deleteCategory($id_category){
			global $database;

			$delete = $database->delete("categories", [
				"id_category" => $id_category
			]);

			return $delete->rowCount();
		}

		public function savePost($name,$category_id,$description,$name_img,$admin_id){
			global $database;

			$database->insert("posts", [
				"name" => htmlentities($name),
				"body" => htmlentities($description),
				"img_post" => $name_img,				
				"id_category" => htmlentities($category_id),
				"id_admin" => $admin_id,
				"created_at" => time()
			]);

			return $database->id();
		}

		public function updateProfesor($id_profesor, $nombre_profesor ,$descripcion_profesor, $especialidad_profesor){
			global $database;

			$update_profesor = $database->update("profesores",[								
				"nombre_profesor" => $nombre_profesor,
				"descripcion_profesor" => $descripcion_profesor,
				"especialidad_profesor" => $especialidad_profesor
			],[
				"id_profesor" => $id_profesor
			]);

			return $update_profesor->rowCount();

		}		

		public function updateCurso($id_profesor, $nombre_profesor,$descripcion_profesor, $especialidad_profesor){
			global $database;

			$update_profesor = $database->update("cursos",[								
				"nombre_profesor" => $nombre_profesor,
				"descripcion_profesor" => $descripcion_profesor,
				"especialidad_profesor" => $especialidad_profesor
			],[
				"id_profesor[>]" => $id_profesor
			]);

			return $update_profesor->rowCount();

		}		

		public function updateEvento($id_profesor, $nombre_profesor,$descripcion_profesor, $especialidad_profesor){
			global $database;

			$update_profesor = $database->update("eventos",[								
				"nombre_profesor" => $nombre_profesor,
				"descripcion_profesor" => $descripcion_profesor,
				"especialidad_profesor" => $especialidad_profesor
			],[
				"id_profesor[>]" => $id_profesor
			]);

			return $update_profesor->rowCount();

		}		
	}
?>