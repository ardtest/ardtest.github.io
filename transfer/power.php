<?php 
$myFile = "../txt/power.txt";
$fh = fopen($myFile, 'r');
$theData2 = fread($fh, filesize($myFile));
fclose($fh);
echo $theData2;
?>