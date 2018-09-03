<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
  
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>public/img/favicon.png">
    <link href="<?php echo BASE_URL; ?>public/css/alertify.bootstrap3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/alertify.core.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.structure.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/default_modal.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/component_modal.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo BASE_URL; ?>public/css/barcode-laser.css" rel="stylesheet" type="text/css" />
    
    
    <link href="<?php echo $_layoutParams['ruta_css']; ?>layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>botones.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>estilos_varios.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>formulario.css" rel="stylesheet" type="text/css" />
   
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link href="<?php echo $_layoutParams['css'][$i] ?>" rel="stylesheet" type="text/css" />
        <?php endfor; ?>
    <?php endif; ?> 
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            Brand and toggle get grouped for better mobile display
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo BASE_URL; ?>principal" class="navbar-brand">Inicio</a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="menu" class="nav navbar-nav">
                        <?php if(isset($_layoutParams['menu'])): ?>
                            <?php for($i = 0; $i < count($_layoutParams['menu']); $i++): ?>
                           

                            <li ><a class="enlace-menu" href="<?php echo BASE_URL.$_layoutParams['menu'][$i]['enlace']; ?>"><b><?php  echo $_layoutParams['menu'][$i]['titulo']; ?></b></a></li>

                            <?php endfor; ?>
                            <?php endif; ?>

                    </ul>
                    <?php if (session::get('autenticado')): ?>
                    <ul  class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo session::get('usuario'); ?><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo BASE_URL; ?>recuperar/cambiar">CAMBIAR CONTRASEÑA</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo BASE_URL; ?>login/cerrar">CERRAR SESIÓN</a></li>
                                </ul>
                         </li>
                    </ul>
                <?php endif; ?>

                  

                </div>
            </div>
    </nav>

    <div class="container-fluid fondo">

    <div id="logos" class="col-md-10 col-md-offset-1">
    <img src="<?php echo BASE_URL ?>public/img/formato.png" class="img img-responsive" >
    </div>
    <div id="linea" class="row"></div>

    <div class="row">
 -->
 <!--==========================
    New lyout - Nueva plantilla.
  ============================-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>COTEDEM - Consultores Tecnologicos </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo BASE_URL; ?>lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/alertify.bootstrap3.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_URL; ?>public/css/alertify.core.css" rel="stylesheet" type="text/css" /> 
  <link href="<?php echo BASE_URL; ?>public/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" /> 

  <!-- Libraries CSS Files -->
  <link href="<?php echo BASE_URL; ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
<?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link href="<?php echo $_layoutParams['css'][$i] ?>" rel="stylesheet" type="text/css" />
        <?php endfor; ?>
    <?php endif; ?> 

</head>

<body>
  <div class="loader"></div>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
       <!--  <h1><a href="<?php echo BASE_URL; ?>" class="scrollto">COTEDEM</a></h1>-->
        <!--  por Si prefieres usar un logo -->
        <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php if (!session::get('autenticado')): ?>
          <li class="menu-active"><a href="<?php echo BASE_URL; ?>#intro">Inicio</a></li>
          <li><a id="menu-scroll" href="<?php echo BASE_URL; ?>#about">Nosotros</a></li>
          <li><a id="menu-scroll" href="<?php echo BASE_URL; ?>#services">Servicios</a></li>
          <li><a id="menu-scroll" href="<?php echo BASE_URL; ?>#clientes">Clientes</a></li>
          <li><a id="menu-scroll" href="<?php echo BASE_URL; ?>#marcas">Marcas</a></li>
          <li><a id="menu-scroll" href="<?php echo BASE_URL; ?>#ubicacion">Ubicacion</a></li>
          
          
          <li><a id="menu-scroll" href="#contact">Contactos</a></li>
          <li class="menu-has-children"><a href="javascript:null()">Sistemas</a>
                      <ul>
                        <li><a href="https://cotedem.com/digidemo/web/">Sistema Digitalización</a></li>
                        
                      </ul>
                    </li>
                    <?php endif; ?>
                <?php if (session::get('autenticado')): ?>
                        <li class="menu-has-children"><a href="javascript:null()">Bienvenido, <?php echo session::get('usuario'); ?></a>
                      <ul>
                        <li><a href="<?php echo BASE_URL; ?>recuperar/cambiar">Cambiar Clave</a></li>
                        <li><a href="<?php echo BASE_URL; ?>login/cerrar">Cerrar Sessión</a></li>
                      </ul>
                    </li>
                <?php endif; ?>

                </ul>

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

</div class="container">
