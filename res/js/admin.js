$(document).ready(menu);

var contador = 1;
function menu(){
	$(".sub-menu").on("click",function(){
		if (contador ==1) {
			$('.responsive').animate({
				left: '0'
			});	
			$('.sub-menu > i').removeClass('icon-bar');
			$('.sub-menu > i').addClass('icon-close');
			contador = 0;
		}else{
			contador = 1;
			$('.responsive').animate({
				left: '-100%'
			});	
			$('.sub-menu > i').removeClass('icon-close');
			$('.sub-menu > i').addClass('icon-bar');
		}
	});	
}

$(document).ready(function(){
	var root = "http://localhost/web/cms_cursos/";

	//Hacer funcionar menu dropwdown
	$('.ui.dropdown').dropdown();

	//Modal
	$('.ui.modal').modal('attach events', '.button.btnModal', 'show');

	try{
		 CKEDITOR.replace('txtDescription');
	}catch(e){
	}

	$(".btnAdminLogin").on("click",function(){
		var email = $(".txtEmailLogin").val().trim(),
			pass = $(".txtPassLogin").val().trim();	
		//$.post(); //como post	//$.get(); //con la url
		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/login.php",
			data: {
				email: email,
				pass: pass
			},
			success: function(data){
				//console.log(data);
				if(data == "true") {
					window.location.href = "http://localhost/web/cms_cursos/admin/";
				}else{
					$('.txtEmailLogin,.txtPassLogin').val("");
					swal("Sus credenciales no coinciden", "Por favor intente de nuevo", "info");
				}
			}
		});
	});

	$(".btnSaveCategory").on("click",function(){
		var category = $('.txtNameCategory').val().trim()
			self = this; //el self hace referencia al boton en si

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/sava_category.php",
			data: {
				category: category
			},
			beforeSend: function(){
				$(self).addClass("loading");				
			},
			success: function(data){
				$(self).removeClass("loading");	
				if (data > 0) {
					swal("Bien hecho!", "El registro ha sido guardado!", "success");
					$(".txtNameCategory").val("");

					$(".tblCategories tr:last").after('<tr><td>'+category+'</td><td><i class="trash alternate icon btnRemoveCategory" data-categoryId="'+data+'" style="color: red;"></i></td></tr>');
				}else{
					alert("Hubo un error");
				}				
				//console.log(data);
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});

	$(".btnSaveCapitulo").on("click",function(){
		var capitulo = $('.txtNameCapitulo').val().trim(),
			self = this; //el self hace referencia al boton en si
		if (capitulo != "") {
			$.ajax({
				type: "POST",
				url: root + "res/php/admin_action/save_capitulo.php",
				data: {
					nombre_capitulo: capitulo
				},
				beforeSend: function(){
					$(self).addClass("loading");				
				},
				success: function(data){
					$(self).removeClass("loading");	
					console.log(data);
					swal("Bien hecho!", "El registro ha sido guardado!", "success");
					$(".txtNameCapitulo").val("");
					//$(".tblCapitulos tr:last").after('<tr><td>'+capitulo+'</td><td><i class="trash alternate icon btnRemoveCapitulo" data-capituloId="'+data+'" style="color: red;"></i></td><td><i class="icon icon-add btnAddCapitulo" data-temarioId="'+data+'" style="color: red;"></i></td></tr>');					
				},
				error: function(){
					alert("Se ha producido un error");
				}
			})			
		}else{
			swal("Hubo un error","Todos los campos deben ser llenados","error");
		}
	});

	$(".btnSaveTemario").on("click",function(){
		var tema = $('.txtNameTemario').val().trim(),			
			self = this; //el self hace referencia al boton en si

		$.ajax({
			type: "POST",
			url: root + "../../res/php/admin_action/save_temas.php",
			data: {
				nombre_tema: tema,
				id_capitulos: capitulos_id
			},
			beforeSend: function(){
				$(self).addClass("loading");				
			},
			success: function(data){
				$(self).removeClass("loading");	
				if (data > 0) {
					swal("Bien hecho!", "El registro ha sido guardado!", "success");
					$(".txtNameTemario").val("");

					//$(".tblCapitulos tr:last").after('<tr><td>'+capitulo+'</td><td><i class="icon icon-delete btnRemoveCapitulo" data-capituloId="'+data+'" style="color: red;"></i></td></tr>');
				}else{
					swal("Algo salio", "El registro no se guardo", "error");
					$(".txtNameTemario").val("");
				}				
				//console.log(data);
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});

	$(".btnSaveCapituloEvento").on("click",function(){
		var capitulo = $('.txtNameCapitulo').val().trim()
			self = this; //el self hace referencia al boton en si

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/save_capitulo_evento.php",
			data: {
				nombre_capitulo: capitulo
			},
			beforeSend: function(){
				$(self).addClass("loading");				
			},
			success: function(data){
				$(self).removeClass("loading");	
				if (data > 0) {
					swal("Bien hecho!", "El registro ha sido guardado!", "success");
					$(".txtNameCapitulo").val("");
					$(".tblCapitulosEvento tr:last").after('<tr><td>'+capitulo+'</td><td><i class="trash alternate icon btnRemoveCapitulosEvento" data-capituloId="'+data+'" style="color: red;"></i></td><td><i class="icon icon-add btnAddCapitulo" data-capituloId="'+data+'" style="color: red;"></i></td></tr>');	
				}else{
					swal("Hubo un error","Algo debio Salir mal","error");
					$(".txtNameCapitulo").val("");
				}				
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});

	$(".btnSaveTemarioEvento").on("click",function(){
		var tema = $('.txtNameTemario').val().trim(),			
			self = this; //el self hace referencia al boton en si

		$.ajax({
			type: "POST",
			url: root + "../../res/php/admin_action/save_temas_evento.php",
			data: {
				nombre_tema: tema,
				id_capitulos: capitulos_id
			},
			beforeSend: function(){
				$(self).addClass("loading");				
			},
			success: function(data){
				$(self).removeClass("loading");	
				if (data > 0) {
					swal("Bien hecho!", "El registro ha sido guardado!", "success");
					$(".txtNameTemario").val("");

					//$(".tblCapitulos tr:last").after('<tr><td>'+capitulo+'</td><td><i class="icon icon-delete btnRemoveCapitulo" data-capituloId="'+data+'" style="color: red;"></i></td></tr>');
				}else{
					swal("Algo salio", "El registro no se guardo", "error");
					$(".txtNameTemario").val("");
				}				
				//console.log(data);
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});

	$(".btnSaveCurso").on("click",function(e){
		e.preventDefault();
		var curso = $('.txtNameCurso').val().trim(),
			category = $('.txtCategory').val().trim(),
			descripcion = $('.txtDescripcionCurso').val().trim(),
			precio = $('.txtPrecioCurso').val().trim(),
			profesor = $('.txtProfesorCurso').val().trim(),
			self = this; //el self hace referencia al boton en si

		if (curso !== "" && category !== "" && descripcion !== "" && precio !== "" && profesor !== "") {
			var formData = new FormData($("#posts_container")[0]);
			$.ajax({
				xhr: function(){
					var xhr = new window.XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(evt){
						if (evt.lengthComputable) { //nos devuelve un true o false, verdadero cuando podemos establecer
							//cuanto pesa el archivo							
							var precentComplete = evt.loaded / evt.total;
							precentComplete = parseInt(precentComplete * 100);

							console.log(precentComplete);
						}
					},false);
					return xhr;
				},
				type: "POST",
				url: root + "res/php/admin_action/save_curso.php",
				data: formData,/*{
					nombre_curso : curso,
					categoria_curso : category,
					descripcion_curso : descripcion,
					precio_curso : precio
				},*/
				processData: false,
				contentType: false,
				beforeSend: function(){
					$(self).addClass("loading");				
				},
				success: function(data){
					$(self).removeClass("loading");	
					console.log(data);
					$(".txtNameCurso, .txtCategory,.txtDescripcionCurso, .txtPrecioCurso , .image_file , .txtProfesorCurso").val("");
					swal("Bien hecho!", "El curso se guardo correctamente", "success");
				},
				error: function(data){
					console.log(data);
					$(".txtNameCurso, .txtCategory,.txtDescripcionCurso, .txtPrecioCurso , .image_file , .txtProfesorCurso").val("");
					swal("Algo salio mal!","El curso no se guardo", "error");
				}
			});
		}else{
			alert("Todos los campos se deben de llenar");
		}
		
	});

	$(".btnSaveEvento").on("click",function(e){
		e.preventDefault();
		var evento = $('.txtNameEvento').val().trim(),
			descripcion = $('.txtDescripcionEvento').val().trim(),
			profesor = $('.txtProfesorEvento').val().trim(),
			self = this; //el self hace referencia al boton en si

		if (evento !== "" && descripcion !== "" && profesor !== "") {
			var formData = new FormData($("#posts_container")[0]);
			$.ajax({
				xhr: function(){
					var xhr = new window.XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(evt){
						if (evt.lengthComputable) { //nos devuelve un true o false, verdadero cuando podemos establecer
							//cuanto pesa el archivo							
							var precentComplete = evt.loaded / evt.total;
							precentComplete = parseInt(precentComplete * 100);

							console.log(precentComplete);
						}
					},false);
					return xhr;
				},
				type: "POST",
				url: root + "res/php/admin_action/save_evento.php",
				data: formData,/*{
					nombre_curso : curso,
					categoria_curso : category,
					descripcion_curso : descripcion,
					precio_curso : precio
				},*/
				processData: false,
				contentType: false,
				beforeSend: function(){
					$(self).addClass("loading");				
				},
				success: function(data){
					$(self).removeClass("loading");	
					console.log(data);
					$(".txtNameEvento, .txtDescripcionEvento, .image_file , .txtProfesorEvento").val("");
					swal("Bien hecho!", "El evento se guardo correctamente", "success");
				},
				error: function(data){
					console.log(data);
					$(".txtNameEvento, .txtDescripcionEvento, .image_file , .txtProfesorEvento").val("");
					swal("Algo salio mal!", "El evento no se guardo", "error");					
				}
			});
		}else{
			alert("Todos los campos se deben de llenar");
		}		
	});

	$(".btnSaveProfesor").on("click",function(e){
		e.preventDefault();
		var profesor = $('.txtNameProfesor').val().trim(),
			descripcion = $('.txtDescripcionProfesor').val().trim(),
			especialidad = $('.txtEspecialidadProfesor').val().trim(),
			self = this; //el self hace referencia al boton en si

		if (profesor !== "" && descripcion !== "" && especialidad !== "") {
			var formData = new FormData($("#posts_container")[0]);
			$.ajax({
				xhr: function(){
					var xhr = new window.XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(evt){
						if (evt.lengthComputable) { //nos devuelve un true o false, verdadero cuando podemos establecer
							//cuanto pesa el archivo							
							var precentComplete = evt.loaded / evt.total;
							precentComplete = parseInt(precentComplete * 100);

							console.log(precentComplete);
						}
					},false);
					return xhr;
				},
				type: "POST",
				url: root + "res/php/admin_action/save_profesor.php",
				data: formData,/*{
					nombre_curso : curso,
					categoria_curso : category,
					descripcion_curso : descripcion,
					precio_curso : precio
				},*/
				processData: false,
				contentType: false,
				beforeSend: function(){
					$(self).addClass("loading");				
				},
				success: function(data){
					$(self).removeClass("loading");	
					console.log(data);
					$(".txtNameProfesor, .txtDescripcionProfesor, .txtEspecialidadProfesor,.image_file").val("");
					swal("Bien hecho!", "Profesor se guardo correctamente", "success");
				},
				error: function(data){
					console.log(data);
					$(".txtNameProfesor, .txtDescripcionProfesor, .txtEspecialidadProfesor,.image_file").val("");
					swal("Algo salio mal!", "Profesor no se guardo", "error");					
				}
			});
		}else{
			alert("Todos los campos se deben de llenar");
		}		
	});

	$(".tblCategories").on("click", ".btnRemoveCategory", function(){
		var category_id = $(this).attr("data-categoryId"),
			self 		= this;

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/delete_category.php",
			data: {
				id_category: category_id
			},			
			success: function(data){
				console.log(data);
				if (data > 0) {
					/*swal({
						title: "Estas seguro de eliminar la categoria",
						text: "Si eliminas, el registro, ya no podras recuperarlo",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})*/
					$(self).parent().parent().remove();									
					swal("Bien hecho!", "El registro ha sido eliminado!", "success");
				}else{
					alert("Hubo un error");
				}
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})			
	});

	$(".tblCapitulos").on("click", ".btnRemoveCapitulo", function(){
		var capitulo_id = $(this).attr("data-capituloId"),
			self 		= this;

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/delete_capitulo.php",
			data: {
				id_capitulo: capitulo_id
			},			
			success: function(data){
				console.log(data);
				if (data > 0) {
					$(self).parent().parent().remove();									
					swal("Bien hecho!", "El registro ha sido eliminado!", "success");
				}else{
					alert("Hubo un error");
				}
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});

	$(".tblCapitulosEvento").on("click", ".btnRemoveCapitulosEvento", function(){
		var capitulo_id = $(this).attr("data-capituloId"),
			self 		= this;

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/delete_capitulo_evento.php",
			data: {
				id_capitulo: capitulo_id
			},			
			success: function(data){
				console.log(data);
				if (data > 0) {
					$(self).parent().parent().remove();									
					swal("Bien hecho!", "El registro ha sido eliminado!", "success");
				}else{
					alert("Hubo un error");
				}
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});


	$('.btnSavePost').on("click", function(e){
		e.preventDefault();
		var description = CKEDITOR.instances.txtDescription.getData(),
			name 		= $(".txtNamePost").val().trim();		
			category_id 		= $(".txtCategory").val().trim();		

		if (description != "" && name !== "" && category_id > 0) {
			//Ajax para subir la publicacion
			var formData = new FormData($("#posts_container")[0]);
			formData.append("txtDescription", description);

			$.ajax({
				xhr: function(){
					var xhr = new window.XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(evt){
						if (evt.lengthComputable) { //nos devuelve un true o false, verdadero cuando podemos establecer
							//cuanto pesa el archivo							
							var precentComplete = evt.loaded / evt.total;
							precentComplete = parseInt(precentComplete * 100);

							console.log(precentComplete);
						}
					},false);
					return xhr;

				}, //xhr es una peticion, un request de http
				type: "POST",
				url: root + "res/php/admin_action/new_post.php",
				data: formData,
				processData: false,
				contentType: false,
				beforeSend: function(){

				},
				success: function(data){
					console.log(data);
					$(".txtNamePost, .image_file").val("");
					CKEDITOR.instances["txtDescription"].setData("");
					alert("Se subio la publicacion");
				},
				error: function(){
					alert("Error al agregar valor");
				}
			});

		}else{
			alert("Llena todos los campos");			
		}
	});

	$(".btnUpdateProfesor").on("click",function(){
		var nombre = $('.txtNombreProfesor').val(),
			descripcion = $('.txtDescripcionProfesor').val(),
			especialidad = $('.txtEspecialidadProfesor').val(),
			self = this; //el self hace referencia al boton en si

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_action/update_profesor.php",
			data: {
				nombre_profesor: nombre,
				descripcion_profesor: descripcion,
				especialidad_profesor: especialidad
			},
			beforeSend: function(){
				$(self).addClass("loading");				
			},
			success: function(data){
				$(self).removeClass("loading");	
				console.log(data);
				$('.ui.modal').modal('hide');
				swal("Bien hecho!", "El registro ha sido modificado!", "success");
			},
			error: function(){
				alert("Se ha producido un error");
			}
		})
	});
});



