<?php 
$types = array("reward","punishment");
echo json_decode(file_get_contents("points.json"),true)["points"][$types[$_GET["type"]]];
?>