
<?php
	    $S1 =  $_GET['voltage'];
	    $myFile1 = "txt/voltage.txt";
		$fh1 = fopen($myFile1, 'w') or die("can't open file");
		fwrite($fh1, $S1);
		fclose($fh1);
		
        $S3 =  $_GET['current'];
	    $myFile3 = "txt/current.txt";
		$fh3 = fopen($myFile3, 'w') or die("can't open file");
		fwrite($fh3, $S3);
		fclose($fh3);
		
		$S4 =  $_GET['power'];
	    $myFile4 = "txt/power.txt";
		$fh4= fopen($myFile4, 'w') or die("can't open file");
		fwrite($fh4, $S4);
		fclose($fh4);
		
		$S5 =  $_GET['energy'];
	    $myFile5 = "txt/energy.txt";
		$fh5= fopen($myFile5, 'w') or die("can't open file");
		fwrite($fh5, $S5);
		fclose($fh5);
      
        $myFile = "txt/out.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        echo $theData;


		
 
?>

