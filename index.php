<?php include 'includes/globals.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CollabKings</title>
	<link rel="stylesheet" href="public/css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/main.css">
</head>
<body>
<?php include 'includes/nav.php';?>
<div class="container">
	<?php
	if(!$server)
		include 'development.php';
	else include 'production.php';

 if ($handle = opendir('./repos')) {

	while (false !== ($entry = readdir($handle))) {
	     if(strpos($entry, '.') === false):
	     	$string = @file_get_contents("repos/$entry/package.json");
			$json = json_decode($string, true);
			if(isset($json))
				$name = $json['name'];
			else $name = 'Unknown';
			
	     	?>
         	<div class='col-md-6 site-container repo-list' >
         		<a href='repos/<?php echo $entry;?>' class='site-link' >
	         		<img class='img' src="img/repos/<?php echo $entry;?>.png" alt="">
	     			<span>
	     				<?php echo $entry;?>
	     				<div class="small-text">Created by: <?php echo $name?></div>
	     			</span>
         		</a>
         	</div>

        <?php endif;
	}


	closedir($handle);
}
?>
</div>
<?php include 'includes/scripts.php';?>
</body>
</html>
