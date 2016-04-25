<?php
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=collabkings', 'root', '');
}catch(PDOException $e){
 	echo 'PDO ERROR: ' . $e->getMessage();
}
 ?>


 <?php
 if ($handle = opendir('.')) {

	while (false !== ($entry = readdir($handle))) {
	     if(strpos($entry, '.') === false && $entry !== 'public' && $entry !== 'lib'){
         	echo "<div class='col-md-6 site-container'><a href='$entry' class='site-link'>$entry</a></div>";
         }
	}


	closedir($handle);
}
?>