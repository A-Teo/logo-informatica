<?php
	require_once '../ejemplos/pwebprj/db_stuff/database.php';
	class TestDatabase extends PHPUnit_Framework_TestCase{
		public function testReplace() {
			$database = new Database();
			$result = $database -> replace ("select $1 from $2", array("primero", "segundo"));
			$expectedResult = "select primero from segundo";
			$this -> assertEquals($expectedResult, $result);
		}
}

?>