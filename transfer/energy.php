<?php 
$myFile = "../txt/power.txt";
$fh = fopen($myFile, 'r');
$theData3 = fread($fh, filesize($myFile));
fclose($fh);
echo $theData3;
?>