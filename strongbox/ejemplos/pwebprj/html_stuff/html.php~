<?php
class Html_template {
	protected $titleDefault;
	
	const HTML = <<<EOF
	<html> 
		<head>
        	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        	<link rel="stylesheet" href="resources/styles.css" type="text/css" media="screen" />
 			<title> [@title] </title> 
 		</head>
 		<body>
 			[@body]
 		</body>
 	</html>
EOF;

//const FIELD = "[@field]";
const FIELD = <<<EOF
	<label for="[@field]">[@field]:</label><br/>
    <input name="[@field]" id="[@field]" type="text" maxlength="150" class="text"/><br/>
EOF;


const FORM = <<<EOF
	<form action="[@action]"  method="post" >
                        [@fields]
                        <input type="submit" value="OK"/>
                    </form>
EOF;
	
	public function __construct($title) {
		$this->titleDefault = $title; 
	}
	
	public function replace($tag, $val,$html) {
		$tagr = "[@$tag]";
		return str_replace($tagr,$val,$html);
	}


	public function makeSimpleHtml($title, $body) {
		$html = $this->replace("title",$title,self::HTML);
		$html = $this->replace("body" ,$body ,$html);
		
		return $html; 
 	}		
	

	public function buildForm($title, $action, $fields) {
		
		$html = $this->replace("title",$title,self::HTML);

		$form = $this->replace("action",$action,self::FORM);
		$formfields = "";

		foreach ($fields as $field) {
			$oneField = self::FIELD;
			$formFields = $formFields . $this->replace("field",$field,self::FIELD); 

		}

		$form = $this->replace("fields",$formFields,$form);

		$html = $this->replace("body" ,$form ,$html);
		
		return $html; 
 	}		
	
}














?>
