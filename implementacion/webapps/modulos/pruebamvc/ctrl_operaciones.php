<?php

require_once('modelo_pruebamvc.php');

$nombre    = !empty($_POST['nombre'])? $_POST['nombre']: NULL;
$apellidos = !empty($_POST['apellidos'])? $_POST['apellidos']: NULL;
$correo    = !empty($_POST['correo'])? $_POST['correo']: NULL;
$telefono  = !empty($_POST['telefono'])? $_POST['telefono']: NULL;
$salario   = !empty($_POST['salario'])? $_POST['salario']: NULL;
$proceso   = !empty($_POST['proceso'])? $_POST['proceso']: NULL;
$respuesta = '';


$objetoModelo = new ModeloPruebaMVC;

/*
echo $nombre."<--- nombre <br/>";
echo $apellidos."<--- apellidos <br/>";
echo $correo."<--- correo <br/>";
echo $telefono."<--- telefono <br/>";
echo $salario."<--- salario <br/>";
*/

$respuesta = new stdClass();



if($proceso == 'guardar')
{
                                  
    if( $guardar = $objetoModelo->guardar_empleado($nombre,$apellidos,$correo,$telefono,$salario) )
    {
        
       
        /*
         echo $respuesta = "<div align='center' style='color:#E2C103'><img width=178 height=178 src='../../includes/imagenes/ok.png'/>
         <h2>GUARDADO CORRECTAMENTE</h2>
         </div>";*/
         
         $respuesta->mensaje = "GUARDADO CORRECTAMENTE";
    }
    else
    {
        
        
        /* echo $respuesta = "<div align='center' style='color:#E2C103'><img width=178 height=178 src='../../includes/imagenes/error.png'/>
         <h2>Error al guardar.</h2>
         </div>";*/
         
         $respuesta->mensaje = "ERROR AL GUARDAR";
    }
    
   echo json_encode($respuesta);
    
    
    
    
}




/*
if(isset($nombre))
{
    $respuesta = 'correcto';
}
else 
{
    $respuesta = 'error';
}
*/


//echo json_encode($respuesta);
 




?>