<?php 
	session_start();
	// session_destroy();
	$dbh = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
	$dbh->query("set names utf8");


?>