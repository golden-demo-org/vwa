<?php

require_once("../utils.php"); // uncomment for fix

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
//	$target = $_REQUEST[ 'ip' ]; // function update
	$target = simple_sanitize($_REQUEST[ 'ip' ]);

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 4 ' . $target );
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
