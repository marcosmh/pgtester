<?php
require_once('modelo_user.php');



$objetoControl = new ModeloUser;

$users = $objetoControl->get_all();

//print_r($users);

//var_dump($users);



require('vista_user.php');

?>