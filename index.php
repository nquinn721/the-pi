<?php
if($_SERVER['HTTP_HOST'] === 'localhost')
	include 'development.php';
else include 'production.php';
