<?php
class User { 
	protected $cuenta; 
	protected $password; 

	public function __construct($arr) {
		$this->cuenta = htmlspecialchars($arr['cuenta']);
		$this->password = md5(htmlspecialchars($arr['password']));

	}
	
	public function setcuenta($id) { 
		if (!$this->cuenta) {
			$this->cuenta = $id; 
		}
	}
	
	public function getCuenta() {
		return $this->cuenta;
	}

	
	public function getPassword() {
		return $this->password;
	}

	public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

}




class UserDBMap {
	protected $conn;
	protected $map = array();
	
	const INSERT_SQL = "insert into users (cuenta, password) values ($1, $2)";
	const UPDATE_SQL = "update users set cuenta = $1, password = $2 where cuenta = $3";
	
    const SELECT_VAL = "select * from users where cuenta = $1 and password = $2";

	public function __construct($conn) {
		$this->conn = $conn; 
	}
	
	public function verificar($cuenta,$password) { 
		$row = $this->conn->getRow(self::SELECT_VAL, array("$cuenta","$password") );
		//print_r($row);
		//die($row);
		if (mysql_num_rows($row) == 1) {
			$user = new User(mysql_fetch_array($row,0));
			return $user; 
		} else {
			return NULL; 
		}
 	}		
	
	public function insertar($user) { 
		$rs = $this->conn->execute(self::INSERT_SQL ,array(
				$user->getCuenta() ,$user->getPassword() ) );
	
		if ($rs && $this->verificar($user->getCuenta(), $user->getPassword())) {
			return true;
		} else return false;
	}
	
	protected function actualizar($user) {
		$rs = $this->conn->execute(self::UPDATE_SQL ,array(
				$user->getCuenta() ,$user->getPassword(), $estudiante->getCuenta() ) );
	
		if ($rs && $this->verificar($user->getCuenta())) {
			return true;
		} else return false;
	}
	
}
?>