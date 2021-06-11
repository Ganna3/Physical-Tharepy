<?php
/*
 * PDO Database Class
 * Connect to database
 * Create prepared statements
 * Bind values
 * Return rows and results
 */
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        //DSN: The Data Source Name, contains the information required to connect to the database.
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        // Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Bind values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
/*
<?php
  require_once("config.php");
 
class DBh{
    private $_connection;
    private static $_instance; //The single instance
	
    private $servername;
    private $username;
    private $password;
    private $dbname;
    #trials start
    private $_count=0;
    private $_mysqli,$_query,$_results=array(); 
   #trial end
    function __construct() {
        #$this->_connection = new mysqli(
         $this->_mysqli = new mysqli(
        $this->servername = DB_SERVER,
        $this->username = DB_USER,
        $this->password = DB_PASS,
        $this->dbname = DB_DATABASE
        // $this->connect();
    );}
    public static function getInstance() {
        if(!self::$_instance) { 
            // If no instance then make one
          //  self::$_instance = new self();
          self::$_instance = new DBh();
        }
        return self::$_instance;
       
    
    // Error handling
    if(mysqli_connect_error()) {
        trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
             E_USER_ERROR);
    }
}
// Magic method clone is empty to prevent duplication of connection
private function __clone() { }
// Get mysqli connection
public function getConnection() {
    #return $this->_connection;
    return $this->_mysqli;

}
#trial start
public function query($sql){
    if($this->_query=$this->_mysqli->query($sql)){
        while($row=$this->_query->fetch_object()){
            $this->_results[] =$row;

        }
        $this->_count=$this->_query->num_rows;
    }
    return $this;
}
public function count(){
    return $this->_count;
}
public function results(){
    return $this->_results;
}
#trial end
}


?>
*/

