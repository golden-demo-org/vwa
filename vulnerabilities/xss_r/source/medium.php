<?php

header ("X-XSS-Protection: 0");

require_once("../utils.php");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '<script>', '', $_GET[ 'name' ] );
	$name = clean_html($_GET[ 'name' ] );
	// Feedback for end user
	$html .= "<pre>Hello {$name}</pre>";
}

?>
