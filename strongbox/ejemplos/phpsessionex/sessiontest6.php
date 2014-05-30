<?php
ini_set("session.use_cookies",0);
ini_set("session.use_trans_sid",1);


 session_start(  );					// always first line

 
 if (!isset($_SESSION["count"]))	// check for  session
 {
  	$_SESSION['count'] = 0;
  	$_SESSION['time'] = time();
 } 
 else 
 {
 	
	$_SESSION['count']++;
	$_SESSION['time'] = time();
 }
 
 $sessionId = session_id(  );
 $count = $_SESSION['count'];
 $time = $_SESSION['time'];
 $sid = session_id();
 $ids = htmlspecialchars($sid);
$doc = <<<EOH
<!DOCTYPE HTML>
<html>
	 <head><title>Session Example</title></head>
	 <body>
		 <p>This page points at a session ($sessionId)
		 <br>count = $count.
		 <br>time = $time.
		 </p>
		<p>
			To continue, <a href="sessiontest61.php?sid=$sid">click
			here</a>.
		</p> 
	 </body>
</html>
EOH;

echo $doc;

?>
