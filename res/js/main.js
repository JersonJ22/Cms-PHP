//$('.ui.modal').modal('attach events', '.button.test', 'show');
//Menu Responsive
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

//Contador
//UIkit.countdown(element).start();

$(document).ready(function(){	

	var root = "http://localhost/web/cms_cursos/";

	//Hacer funcionar menu dropwdown
	$('.ui.dropdown').dropdown();

	//Hacer funcionar tab
	$('.menu .item').tab();


	$(".btnSaveProfile").on("click",function(e){
		e.preventDefault();
		var perfil = $('.perfil_file').val(),
			self = this;
			var formData = new FormData($("#post_perfil")[0]);
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
				url: root + "res/php/user_actions/img-profile.php",
				data: formData,
				processData: false,
				contentType: false,
				beforeSend: function(){
					$(self).addClass("loading");
				},
				success: function(data){
					$(self).removeClass("loading");
					console.log(data);
					swal("Bien", "Se guardo correctamente", "success");
				},
				error: function(data){
					$(self).removeClass("loading");
					console.log(data);
					alert("Se ha producido un error");					
				}
			});
	});

	$(".btnUserLogin").on("click",function(){
		var email = $(".txtEmailLoginUser").val().trim(),
			pass = $(".txtPassLoginUser").val().trim();	
		//$.post(); //como post	//$.get(); //con la url
		$.ajax({
			type: "POST",
			url: root + "res/php/user_actions/login.php",
			data: {
				email: email,
				pass: pass
			},
			beforeSend: function(data){
				$(self).addClass("loading");
			},
			success: function(data){
				console.log(data);
				if(data == "true") {
					window.location.href = "http://localhost/web/cms_cursos/";
				}else{
					alert("Sus credenciales no coinciden, por favor intente de nuevo")
				}
			}
		});
	});

	$('.btnRegisterUser').on("click",function(){
		var name = $('.txtNameRegister').val().trim(),
			last_name = $('.txtLastNameRegister').val().trim(),
			user_name = $('.txtUserNameRegister').val().trim(),
			email    = $('.txtEmailRegister').val().trim(),
			pass    = $('.txtPassRegister').val().trim(),
			self	= this; //this hace referencia al boton

		if (name !== "" && last_name !== "" && user_name !== ""  && email !== "" && pass !== "") {
			$.ajax({
				type: "POST",
				url: root + "res/php/user_actions/register.php",
				data: {
					name: name,
					lastname: last_name,
					username: user_name,
					email: email,
					password: pass
				},
				beforeSend: function(){
					$(self).addClass("loading");
				},
				success: function(data){
					$(self).removeClass("loading");
					if (data > 0) {
						$('.txtNameRegister, .txtLastNameRegister ,.txtUserNameRegister ,.txtEmailRegister ,.txtPassRegister').val("");
						swal("Registrado","Ahora puede iniciar sesion","success");

					}else{
						alert("Error no se puede registrar");
					}
				},
				error: function(){
					$(self).removeClass("loading");
					alert("Error");
				}
			});
		}else{
			swal("Error"," todos los campos deben llenarse", "info");
		}
	});

	$('.btnMarkFavorite').on("click",function(){
		var post_id = $(this).attr("data-postId");

		$(this).remove();

		$.ajax({
			type: "POST",
			url: root + "res/php/user_actions/favorite.php",
			data: {
				id_post: post_id
			},
			success: function(data){
				console.log(data);
				if (data == "true") {
					alert("Articulo agregado a favoritos");
				}else{
					alert("Error");
				}
			}
		});
	});
	$('.btnDeleteFavorite').on("click",function(){
		var favorite_id = $(this).attr("data-favoriteId");
		
		$.ajax({
			type: "POST",
			url: root + "res/php/user_actions/delete_favorite.php",
			data: {
				id_favorite: favorite_id
			},
			success: function(data){
				console.log(data);
				if (data == "true") {
					alert("Articulo eliminado");
				}else{
					alert("Error");
				}
			}
		});
	});
});


/*Contador
var getRemainingTime = function getRemainingTime(deadline) {
  var now = new Date(),
  remainTime = (new Date(deadline) - now + 1000) / 1000,
  remainSeconds = ("0" + Math.floor(remainTime % 60)).slice(-2),
  remainMinutes = ("0" + Math.floor(remainTime / 60 % 60)).slice(-2),
  remainHours = ("0" + Math.floor(remainTime / 3600 % 24)).slice(-2),
  remainDays = Math.floor(remainTime / (3600 * 24));

  return {
    remainSeconds: remainSeconds,
    remainMinutes: remainMinutes,
    remainHours: remainHours,
    remainDays: remainDays,
    remainTime: remainTime };

};

var countdown = function countdown(deadline, elem, finalMessage) {
  var el = document.getElementById(elem);

  var timerUpdate = setInterval(function () {
    var t = getRemainingTime(deadline);
    el.innerHTML = t.remainDays + " dias :" + t.remainHours + " horas :" + t.remainMinutes + "minutos :" +
    t.remainSeconds + "segundos ";


    if (t.remainTime <= 1) {
      clearInterval(timerUpdate);
      el.innerHTML = finalMessage;
    }
  }, 1000);
};

countdown("Dec 31 2019 21:34:40 GMT-0500", "clock", "¡Ya empezó!");*/
