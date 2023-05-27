<?php
file_put_contents("literature.json", urldecode($_GET["json"]));
echo urldecode($_GET["json"]);
?>