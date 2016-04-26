<?php
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=coolhax', 'root', '');
}catch(PDOException $e){
 	echo 'PDO ERROR: ' . $e->getMessage();
}
 ?> 
<div class='col-md-6 site-container'>
	<a href='donze-site' class='site-link'>donze-site</a>
</div>
<div class='col-md-6 site-container'>
	<a href='BRiley' class='site-link'>BRiley</a>
</div>
  