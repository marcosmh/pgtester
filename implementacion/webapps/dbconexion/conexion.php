<?php
Class Conexion extends PDO
{
    
    private $dbname      = 'hr';
    private $host        = '127.0.0.1';
    private $usuario     = 'hr';
    private $contrasenia = 'hr';
    private $puerto      = 5432;
    private $dbh;
    
    public function __construct() 
    {
        
        
        try
        {
            $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->puerto;dbname=$this->dbname;user=$this->usuario;password=$this->contrasenia");
        } 
        catch (Exception $exception) 
        {
           echo $exception->getMessage();
        }
    }
    
    
    
    public function conectar() 
    {
        
        
        try
        {
            $this->dbh = parent::__construct("pgsql:host=$this->host;
                                                    puerto=$this->puerto;
                                                    dbname=$this->dbname;
                                                    usario=$this->usuario;
                                                    contrasenia=$this->contrasenia");
        } 
        catch (Exception $exception) 
        {
           echo $exception->getMessage();
        }
    }
    
    public function conected()
    {
        try 
        {
            
            $dbh = new PDO("pgsql:host=$this->host;
                            port=$this->puerto;
                            dbname=$this->dbname;
                            user=$this->usuario;
                            password=$this->contrasenia");
            
            return $dbh;

        

        }
        catch(PDOException $ex) 
        {
            echo $ex->getMessage();
            
        }
    }
    
    
    public function cerrar()
    {
        $dbh = NULL;
        
        return $dbh;
    }
    
    
    
    
}

?>