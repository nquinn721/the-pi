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
	?>
</div>
<?php include 'includes/scripts.php';?>
</body>
</html>
