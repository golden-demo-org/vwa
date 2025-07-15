<?php

header ("X-XSS-Protection: 0");

include_once("../utils.php");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Feedback for end user
	$target = clean_web($_GET[ 'name' ]);
	$html .= '<pre>Hello ' . $target . '</pre>';
	//$html .= '<pre>Hello ' . $_GET[ 'name' ] . '</pre>'; // comment for fix
}

?>
