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
       $this->dbPort = '5432';
       $this->dbName = 'test';
       $this->dbUser = 'vladimir';
       $this->dbPassword = 'secreto';
       
       
       $this->connection = pg_connect("host={$this->dbHost} port={$this->dbPort} 
                                       dbname={$this->dbName} user={$this->dbUser} 
                                       password={$this->dbPassword}")
                              or die ("No es posible alcanzar el servidor\n");
 
   }    
 
 	public function query($sql) {
		return pg_query($this->connection,$sql);
	}

 	public function getRow($sql,$fields) {
		$r = pg_prepare($this->connection,"sel",$sql);
		return pg_execute($this->connection,"sel",$fields);
	}

 	public function execute($sql,$fields) {
 		$r = pg_prepare($this->connection,"ins",$sql);
		return pg_execute($this->connection,"ins",$fields);
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