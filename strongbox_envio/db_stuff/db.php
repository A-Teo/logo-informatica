<?php
class Database
{
 
   private static $Instance;
   private $connection;
   private $dbHost;
   private $dbPort;
   private $dbName;
   private $dbUser;
   private $dbPassword; 
 
   private function __construct()
   {
       $this->dbHost = 'localhost';
       $this->dbPort = '3306';
       $this->dbName = 'strongbox';
       $this->dbUser = 'root';
       $this->dbPassword = 'root';
       
       
       $this->connection = mysql_connect($this->dbHost, $this->dbUser, $this->dbPassword)
                              or die ("No es posible alcanzar el servidor\n");
		 mysql_select_db($this->dbName, $this->connection) or die ("No es posible alcanzar la BD\n");;
 
   }    
 
 	public function query($sql) {
		return mysql_query($sql, $this->connection);
	}

 	public function getRow($sql,$fields) {
		$sql = $this -> replace($sql, $fields);
		//die($sql." ".$this->connection);		
		$result = mysql_query($sql, $this->connection);
		//die($sql . $result);
		//$row = mysql_fetch_row($result);
		$row = $result;
		return $row;
	}

	public function replace($sql, $fields) {
		$i = 1;
		foreach ($fields as $index => $field ) {
			$var = "$" . ($i++);
			$sql = str_replace($var, "'".$field."'", $sql);
		}		
		return $sql;		
	}
	
 	public function execute($sql,$fields) {
 		$sql = $this -> replace($sql, $fields);
 		//print_r($fields);
		//die($sql." Hola "); 		
		return mysql_query($sql,$this->connection);
	}
	
   protected function __clone()
   {
 
   }
 
   public static function getInstance()
  {
    if(empty(self::$Instance))
    {
    try
     {
       self::$Instance = new Database();
     } 
     catch (Exception $e) 
     {
       echo 'Excepcion DB: ' . $e->getMessage();
     }
    }  
    return self::$Instance;
  }
 

 
  public function __destruct()
  {
  	self::$Instance = NULL;
  	unset($conn);
    $Instance = self::$Instance;
     unset($Instance	); 
  }
 
}

?>