<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Language" content="es-ES" />
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Test DvWA Jesus F.</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css" rel='stylesheet'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css">
  <link rel="stylesheet" type="text/css" href="//github.com/downloads/lafeber/world-flags-sprite/flags32.css"/>
	<script type='text/javascript' src='<?php echo URL; ?>public/js/jquery.min.js'></script>
	<script type='text/javascript' src='<?php echo URL; ?>public/js/bootstrap.bundle.min.js'></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/js/datatables.min.css"/>
  <link rel="stylesheet"  type="text/css" href="<?php echo URL; ?>public/js/DataTables-1.10.20/css/dataTables.bootstrap4.css">
	<script type="text/javascript" src="<?php echo URL; ?>public/js/script.js"></script>
</head>
<body oncontextmenu='return false' class='snippet-body pb-5'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo URL; ?>"><ul class="f32">
        <i class="flag <?php echo strtolower((!isset(code()["geoplugin_countryCode"])) ? $codehttp = "VE": $codehttp = code()["geoplugin_countryCode"]); ?>"></i>
      </ul></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL; ?>">Registrar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.linkedin.com/in/jesus-alberto-farias-ramos-a91b55159" target="_blank">Linkedin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://join.skype.com/invite/E3JkcMhLPbK3" target="_blank">Skype</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://api.whatsapp.com/send?phone=584168802310&text=Hola, me gustaría más información. (test-form-aprende-excel)" target="_blank">Whatsapp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL; ?>form/listForm">Listar registros</a>
      </li>
    </ul>
    <a href="<?php echo URL; ?>testform.zip" class="btn btn-outline-primary my-2 my-sm-0" download>Descargar</a>
  </div>
</nav>

  <div class="modal fade" id="politicas" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <div class="modal-header">
          <h1 class="modal-title text-primary">Politicas y Privacidad</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <div class="modal-body">
          <h3>Sus datos no seras usados..</h3>
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btn-pol-pri" data-dismiss="modal">Aceptar</button>
        </div>
        
      </div>
    </div>
  </div>
</div>