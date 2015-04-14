<?php
	$myfile = fopen("../controller/logged.txt", "w") or die("Unable to open file!");
	fwrite($myfile,"");
	fclose($myfile);
	header('Location: ../view/index.php');
?>