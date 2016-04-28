<?php include 'includes/globals.php'; ?>
<!DOCTYPE html>
<html lang="en" ng-app="collabKings">
<head>
	<meta charset="UTF-8">
	<title>CollabKings</title>
	<link rel="stylesheet" href="public/css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/main.css">
</head>
<body>
<?php include 'includes/nav.php';?>
<div class="container" ng-controller="names as name">
	<div class="jumbotron">
		<h1>List of Sites</h1>
		{{name.name}}
	</div>
	<?php
	if(!$server)
		include 'development.php';
	else include 'production.php';

Dir::read('./repos', function($entry) {

	if(strpos($entry, '.') === false):
		$json = Json::read("repos/$entry/package.json");
		$name = Json::get('name', 'Unknown');
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
});
?>
</div>
<?php include 'includes/scripts.php';?>
</body>
</html>
