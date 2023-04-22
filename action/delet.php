<?php 
require_once './conection.php';

$deleag = $dbh->prepare("DELETE FROM formdatos where id_form=:id");
$deleag->execute([':id' => $_POST['id']]);

 ?>