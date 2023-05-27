<?php
file_put_contents("literature.json", urldecode($_POST["json"]));
echo urldecode($_POST["json"]);
?>