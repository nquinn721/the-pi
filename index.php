<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=collabkings', 'root', '');
}catch(PDOException $e){
 echo 'PDO ERROR: ' . $e->getMessage();
 }
 ?>

 <link rel="stylesheet" href="public/css/bootstrap.min.css">
 <link rel="stylesheet" href="public/css/main.css">


 <?php

 if ($handle = opendir('.')) {

     /* This is the correct way to loop over the directory. */
         while (false !== ($entry = readdir($handle))) {
	         if(strpos($entry, '.') === false && $entry !== 'public'){
		                 echo "<div class='col-md-6 site-container'><a href='$entry' class='site-link'>$entry</a></div>";
				         }
					     }


					         closedir($handle);
						 }
						 ?>

