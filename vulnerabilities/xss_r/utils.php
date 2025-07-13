<?php
function clean_web($input) {
    // Characters to remove
    $charsToRemove = ['<', '>', "&", "'", '"'];
    // Replace each with an empty string
    return str_replace($charsToRemove, '', $input);
}
?>
