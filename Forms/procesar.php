<?php
	$email = $_GET["email"];
	$manejadorCookies -> setCookies($email);
	
	class manejadorCookies {
		setCookies($email) {
			$emails = $_cookie["mailsAntonio"];
			if (isset($emails)) {
			if( $emails[$email]) {
					$emails[] ++ 
			} else {
					
			} else {
					setcookie(, $value = null, $expire = null, $path = null, $domain = null, $secure = null, $httponly = null);	
			}	
		}
	}
	
?>