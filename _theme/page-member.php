<?php
/*
Template Name: Member
<iframe src="https://trinitytrainingcamp1.trainerize.com" title="" style="border: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>

*/
?>


<?php
$json = file_get_contents("https://trinitytrainingcamp1.trainerize.com");
echo json_encode(json_decode($json, true);

?>
