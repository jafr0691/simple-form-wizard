<?php 
define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/');
include "./action/conection.php";
include "./action/function.php";
include "./public/header.php"; 

	if(!isset($_GET['ruta'])){
		include "public/form.php";
	}else if(!include "public/".$_GET['ruta'].".php"){
		include "public/error.php";
	} 

include "./public/footer.php"; 
?>