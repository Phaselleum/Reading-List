<?php
$json = file_get_contents("literature.json");
$json2 = json_decode($json);
$json2->notes = $_GET["notes"];
file_put_contents("literature.json", json_encode($json2));
header('Location: index.html');
?>