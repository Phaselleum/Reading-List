<?php
$json = file_get_contents("literature.json");
json_decode($json)->notes = $_GET["notes"];
file_put_contents("literature.json", $json);
header('Location: index.html');
?>