<?php
require_once './conection.php';
require_once './function.php';
$errors = array();
$name  = htmlentities($_POST['name']);
$tlf   = htmlentities($_POST['tlf']);
$code  = htmlentities($_POST['code']);
$email = htmlentities($_POST['email']);
$pais = htmlentities($_POST['pais']);

	if(isNull($name, $code, $tlf, $email))
	{
		$errors[] = "Debe llenar todos los campos";
	}

	if(!isEmail($email))
	{
	    $errors[] = "Dirección de correo inválida";
	}


if (empty($_POST['id'])) {
	if(emailExiste($email)){
	    $errors[] = "El correo electronico $email ya existe";
	}

	if(numeroExiste($code.$tlf))
	{
		$errors[] = "Numero ya exite";
	}
}else{
	if(emailExiste($email,$_POST['id'])){
	    $errors[] = "El correo electronico $email ya existe";
	}

	if(numeroExiste($code.$tlf,$_POST['id']))
	{
		$errors[] = "Numero ya exite";
	}
}
if(count($errors) == 0)
{
	if (empty($_POST['id'])) {
	    $stmt = $dbh->prepare("INSERT INTO formdatos (id_form,name,phone,email,pais,date_form) VALUES (:id,:nombre,:numero,:email,:pais,:datet)");

	    $stmt->execute(array(':id' => null, ':nombre' => $name, ':numero' => $code . $tlf, ':email' => $email,':pais'=> $pais, 'datet' => date('Y-d-m H:i:s')));

	} else {
	    $id_f = htmlentities($_POST['id']);
	    $stmt = $dbh->prepare("UPDATE formdatos SET name=:name,phone=:phone,email=:email where id_form=:id");
	    $stmt->execute(array(':id' => $id_f, ':name' => $name, ':phone' => $code . $tlf, ':email' => $email));
	}

	if ($stmt) {
    	exit(TRUE);
	} else {
		$errors[] = "Error con la base de datos";
	    exit(resultBlock($errors));
	}
}else{
	exit(resultBlock($errors));
}
