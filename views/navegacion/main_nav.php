<div class="sub-menu">
  <img src="http://localhost/web/cms_cursos/res/img/ed.svg" alt="CREARQ" class="img">       
  <i class="icon icon-bar"></i>       
</div>
<div class="ui stackable menu responsive" style="margin-bottom: 0; margin-top: 0 !important;">
  <div class="item img-menu" style="width: 20%;">
    <img src="http://localhost/web/cms_cursos/res/img/ed.svg" alt="" style="width: 50%; height: 100%;">
  </div>
  <div class="right menu items-menu">
    <a href="http://localhost/web/cms_cursos/" class="active item" style="text-align: center;">
      Inicio
    </a>
    <a href="http://localhost/web/cms_cursos/posts" class="item">
      Cursos
    </a>  
    <?php if(isset($_SESSION['user'])): ?>
      <a href="http://localhost/web/cms_cursos/my_favorites" class="item">
        Mis Cursos Favoritos
      </a>  
    <?php endif; ?>      
    <?php if(!isset($_SESSION['user'])): ?>
      <div class="item">
        <a href="http://localhost/web/cms_cursos/log_in" class="ui primary button">Iniciar Sesion</a>      
      </div>
      <div class="item">
        <a href="http://localhost/web/cms_cursos/register" class="ui teal button">Registrarme</a>
      </div>
    <?php endif; ?>
    <?php if(isset($_SESSION['user'])): ?>
      <div class="ui dropdown item">
        <i class="dropdown icon"></i> 
        <div class="menu">
          <a href="http://localhost/web/cms_cursos/my_perfil" class="item">Mi Perfil <i class="user icon"></i></a>  
          <a href="http://localhost/web/cms_cursos/log_out" class="item">Salir <i class="power off icon"></i></a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>