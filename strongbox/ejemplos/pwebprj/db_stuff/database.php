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
       $this->dbPassword = '';
       
       
       $this->connection = mysql_connect($this->dbHost, $this->dbUser, $this->dbPassword)
                              or die ("No es posible alcanzar el servidor\n");
			$this->connection = mysql_select_db($this->dbName, $this->connection) or die ("No es posible alcanzar la BD\n");;
 
   }    
 
 	public function query($sql) {
		return mysql_query($sql, $this->connection);
	}

 	public function getRow($sql,$fields) {
		$this -> replace($sql, $fields);
		die($sql);		
		return mysql_query($sql, $this->connection);
	}

	public function replace($sql, $fields) {
		foreach ($fields as $index => $field ) {
			die($sql.$index.$field);
			str_replace($index, $field, $sql);
		}
	}
	
 	public function execute($sql,$fields) { 		
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