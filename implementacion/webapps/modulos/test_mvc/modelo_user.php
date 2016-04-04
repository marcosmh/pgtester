<?php
require_once('../../dbconexion/conexion.php');

class ModeloUser
{
   
    private $con;
    
    
    public function __construct()
    {
        $this->con = new Conexion();
       
    }
    
 
    public function save($username,$password)
    {
        
        
        try 
        {
            $query = $this->con->prepare("INSERT INTO users(username,password)VALUES(?,?)");
            $query->bindparam(1,$username,PDO::PARAM_STR);
            $query->bindparam(2,$password,PDO::PARAM_STR);
            $query->execute();
            $this->con->close();
            
            return TRUE;
            
            
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
        }
    }
    
    public function update($id,$username,$password)
    {
        try 
        {
            $query = $this->con->prepare("UPDATE users SET username = ?, password = ? WHERE id = ? ");
            $query->bindparam(1,$username,PDO::PARAM_STR);
            $query->bindparam(2,$password,PDO::PARAM_STR);
            $query->bindparam(3,$id,PDO::PARAM_INT);
            $query->execute();
            $this->con->close();
            
            return TRUE;
            
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
        }
    }
    
    public function get($id,$username,$password)
    {
        try 
        {
            if(is_int($qid))
            {
                $query = $this->con->prepare(" SELECT * FROM users WHERE id = ? ");
                $query->bindparam(1,$id,PDO::PARAM_INT);
                $query->execute();
                $this->con->close();
                return $query->fetchAll(PDO::FETCH_OBJ);
                
            }
            else
            {
                $query = $this->con->prepare(" SELECT * FROM users ");
                $query->execute();
                $this->con->close();
                return $query->fetchAll(PDO::FETCH_OBJ);
            }
            
            
        } 
        catch (Exception $exception) 
        {
          echo $exception->getMessage();   
        }
    }
    
    public function get_all()
    {
        try 
        {
            
                $query = $this->con->prepare(" SELECT * FROM users ");
                $query->execute();
                //$this->con->close();
                return $query->fetchAll(PDO::FETCH_OBJ);
                //return $query->fetchAll();
            
            
            
        } 
        catch (Exception $exception) 
        {
          echo $exception->getMessage();   
        }
    }
    
}
?>