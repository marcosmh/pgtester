<?php
require_once('../../dbconexion/conexion.php');
require_once('IUser.php');

class User implements IUser
{
    private $con;
    private $id;
    private $username;
    private $password;
    
    
    public function __construct(Database $db) 
    {
        $this->con = new $db;
    }
    
    public function setId()
    {
        $this->id = $id;
        
    }
    
    public function setUsername()
    {
        $this->username = $username;
    }
    
    public function setPassword()
    {
        $this->password = $password;
    }
    
    
    public function save()
    {
        try 
        {
            $query = $this->con->prepare("INSERT INTO users(username,password)VALUES(?,?)");
            $query->bindparam(1,$this->username,PDO::PARAM_STR);
            $query->bindparam(2,$this->password,PDO::PARAM_STR);
            $query->execute();
            $this->con->close();
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
        }
    }
    
    public function update()
    {
        try 
        {
            $query = $this->con->prepare("UPDATE users SET username = ?, password = ? WHERE id = ? ");
            $query->bindparam(1,$this->username,PDO::PARAM_STR);
            $query->bindparam(2,$this->password,PDO::PARAM_STR);
            $query->bindparam(3,$this->id,PDO::PARAM_INT);
            $query->execute();
            $this->con->close();
            
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
        }
    }
    
    public function get()
    {
        try 
        {
            if(is_int($this->id))
            {
                $query = $this->con->prepare(" SELECT * FROM users WHERE = ? ");
                $query->bindparam(1,$this->id,PDO::PARAM_INT);
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
    
    public function delete()
    {
        try 
        {
            $query = $this->con->prepare(" DELETE FROM users where id = ? ");
            $query->bindparam(1,$this->id,PDO::PARAM_INT);
            $query->execute();
            $this->con->close();
            return true;
        } 
        catch (Exception $ex) {
            
        }
    }
    
    public static function baseurl()
    {
        
        return stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . "/pgtester_pg/";
    }
    
    public function checkUser($user)
    {
        if(!$user)
        {
            header('Location:'.User::baseurl().'pgtester/list.php');    
        }
        
    }
    
    
    
   
 
   
}
?>