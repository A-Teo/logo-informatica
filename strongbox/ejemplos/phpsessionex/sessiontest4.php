<?php
 session_start(  );					// always first line

 $timeWithoutActivity = 10; 		// in seconds
 
 if (!isset($_SESSION["count"]))	// check for  session
 {
  	$_SESSION['count'] = 0;
  	$_SESSION['time'] = time();
	echo time();
 } 
 else 
 {
 	if (time() - $_SESSION['time']> $timeWithoutActivity) {
 		session_destroy();
 		header("Location: /../testhtml/gracias.html");
 	} else {
 	};

	$_SESSION['count']++;
	$_SESSION['time'] = time();
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