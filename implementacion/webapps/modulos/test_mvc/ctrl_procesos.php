<?php
require_once('modelo_user.php');

$username = !empty($_POST['username'])? $_POST['username']: NULL;
$password = !empty($_POST['password'])? $_POST['password']: NULL;
$proceso  = !empty($_POST['proceso'])? $_POST['proceso']: NULL;

echo $username." <-- username <br/>";
echo $password." <-- password <br/>";
echo $proceso." <-- proceso <br/>";

$objetoModelo = new ModeloUser;


if($proceso == 'guardar_form')
{
    if( $guardar = $objetoModelo->save($username, $password ) )
    {
       
        echo "<div align='center' style='color:#E2C103'><img width=178 height=178 src='../../includes/imagenes/ok.png'/>
         <h2>GUARDADO CORRECTAMENTE</h2>
         </div>";
    }
    else
    {
        
        echo "<div align='center' style='color:#E2C103'><img width=178 height=178 src='../../includes/imagenes/error.png'/>
         <h2>Error al guardar.</h2>
         </div>";
    }
}



?>