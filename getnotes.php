<?php 
$json = file_get_contents("literature.json");
echo json_decode($json)->notes ?: "";
?>