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
		Dir::read('./repos', function($entry) {

			if(strpos($entry, '.') === false):
				$json = Json::read("repos/$entry/package.json");
				?>
				<div class='repo'>
					<a href='<?php if($json->get('app-type') === 'node'){ echo 'http://' . $_SERVER['HTTP_HOST'] . ':' . $json->get('port'); }else { echo 'repos/' . $entry;}?>'>
						<div class="image-display">
			 				<img class='img' src="img/repos/<?php echo $entry;?>.png" alt="">
			 			</div>
						<div clsas='details'>
							<div class="title">
								<h3>
									<?php echo $entry;?>
									<div class="small-text">Created by: <?php echo str_replace('-', ' ', $json->get('name', 'Unknown'))?></div>
								</h3>
							
							</div>
							<div class="description">
								<?php echo $json->get('description', 'No description added');?>
							</div>
						</div>
					</a>
				</div>

			<?php endif;
		});
	?>
</div>
<?php include 'includes/scripts.php';?>
</body>
</html>
