<?php
class Database{
    private $host = "localhost";
    private $db_name = "clinic_web_app";
    private $username = "root";
    private $password = "";
    public $con;
    
    public function getConnection(){
 
        $this->con = null;
 
        try{
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->con;
    }
 
}
?>