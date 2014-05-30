<?php
 session_start(  );					// always first line

 $timeWithoutActivity = 20; 		// in seconds
 ini_set("session.gc_maxlifetime", $timeWithoutActivity);
 ini_set("session.cookie_lifetime", $timeWithoutActivity);
 
 if (!isset($_SESSION["count"]))	// check for  session
 {
  	$_SESSION['count'] = 0;
  	$_SESSION['time'] = time();
 } 
 else 
 {
 	
	$_SESSION['count']++;

 }
 
 $sessionId = session_id(  );
 $count = $_SESSION['count'];
 $time = $_SESSION['time'];

$doc = <<<EOH
<!DOCTYPE HTML>
<html>
	 <head><title>Session Example</title></head>
	 <body>
		 <p>This page points at a session ($sessionId)
		 <br>count = $count.
		 <br>time = $time.
		 
	 </body>
</html>
EOH;

echo $doc;

?>