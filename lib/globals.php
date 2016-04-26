<?php
$server = !$_SERVER['HTTP_HOST'] === 'localhost';
echo $server;
?>