<?php
	define("hostname", "localhost");
	define("username", "root");
	define("password", "");
	define("database", "tp_connexion");
	$dns='mysql:dbname='.database.';host='.hostname.';charset=utf8';
	$bdd=new PDO($dns, username, password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>