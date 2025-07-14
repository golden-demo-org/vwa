<?php
function clean_input($input) {
    // Replace any character that is NOT a-z, A-Z, or 0-9 with an empty string
    return preg_replace('/[^a-zA-Z0-9]/', '', $input);
}
?>
