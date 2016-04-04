<?php
require('../../dbconexion/conexion.php');


class ModeloPruebaMVC
{
    
    public function guardar_empleado($nombre,$apellidos,$correo,$telefono,$salario) 
    {
        $dbcon = new Conexion;
        $con = $dbcon->conected();
        $con->beginTransaction();
      
        try 
        {
            
           
            
            
            $vquery = $con->prepare("INSERT INTO test_usuario(nombre,
                                                                   apellidos,
                                                                   correo,
                                                                   telefono,
                                                                   salario)
                                          VALUES(:nombre,
                                                 :apellidos,
                                                 :correo,
                                                 :telefono,
                                                 :salario)"
                    );
            
            
            
            $vquery->bindparam(":nombre",$nombre,PDO::PARAM_STR);
            $vquery->bindparam(":apellidos",$apellidos,PDO::PARAM_STR);
            $vquery->bindparam(":correo",$correo,PDO::PARAM_STR);
            $vquery->bindparam(":telefono",$telefono,PDO::PARAM_STR);
            $vquery->bindparam(":salario",$salario,PDO::PARAM_INT);
            $exec = $vquery->execute();
            
            //$con->close();
            //$con->close();
            
            echo $exec;
            
            if($exec)
            {
                
                $con->commit();
                return TRUE;
            }
            else
            {
                $con->rollBack();
                return FALSE;
            }
            
            
            
        } 
        catch (Exception $exception) 
        {
            $con->rollBack();
            echo $exception->getMessage();
        }
    }
    
}