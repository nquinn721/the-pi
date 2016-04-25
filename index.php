<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CollabKings</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<?php include 'lib/nav.php';?>
<div class="container">
	<?php
	if($_SERVER['HTTP_HOST'] === 'localhost')
		include 'development.php';
	else include 'production.php';
	?>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
