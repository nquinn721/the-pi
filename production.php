<?php
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=collabkings', 'root', '');
}catch(PDOException $e){
 	echo 'PDO ERROR: ' . $e->getMessage();
}
 ?>


 