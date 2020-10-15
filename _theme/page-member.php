<?php
/*
Template Name: Member
<iframe src="https://trinitytrainingcamp1.trainerize.com" title="" style="border: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>

*/
?>


<?php
$json = file_get_contents("https://trinitytrainingcamp1.trainerize.com");
// echo json_encode( json_decode( $json, true ) );

echo "<h1>Title</h1>";

?>




<?php
/*

file_get_contents
The file_get_contents() reads a file into a string.
'https://www.w3schools.com/php/func_filesystem_file_get_contents.asp'

json_encode
The json_encode() function is used to encode a value to JSON format.

json_decode
The json_decode() function is used to decode or convert a JSON object to a PHP object.


HTML <iframe> Tag
https://www.w3schools.com/tags/tag_iframe.ASP

*/
?>
