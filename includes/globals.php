<?php
session_start();

if($_SERVER['HTTP_HOST'] === 'localhost')
	$server = false;
else $server = true;

spl_autoload_register(function ($class_name) {
    include 'classes/' . strtolower($class_name) . '.php';
});
?>