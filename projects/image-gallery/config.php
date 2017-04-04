<?php

$config = array(
	'host'     => 'localhost',
	'dbname'   => 'enterto6_gallery',
	'user'     => 'enterto6_fuckbht',
	'password' => 'Baltimore.7'
	);

$pdo = new PDO("mysql:host=$config[host];dbname=$config[dbname]", $config['user'], $config['password']);

function debug($var) {
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}  