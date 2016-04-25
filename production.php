<?php
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=collabkings', 'root', '');
}catch(PDOException $e){
 	echo 'PDO ERROR: ' . $e->getMessage();
}
 ?>


 <?php
 if ($handle = opendir('./repos')) {

	while (false !== ($entry = readdir($handle))) {
	     if(strpos($entry, '.') === false){
         	echo "<div class='col-md-6 site-container'><a href='repos/$entry' class='site-link'>$entry</a></div>";
         }
	}


	closedir($handle);
}
?>