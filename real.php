<?php
$header = file_get_contents("header.html");
$footer = file_get_contents("footer.html");
$contents = file_get_contents("real.html");

echo $header;
echo $contents;
echo $footer;
 ?>
