<?php

$config = array(
	'host'     => 'localhost',
	'dbname'   => 'enterto6_inventory',
	'user'     => 'enterto6_fuckbht',
	'password' => 'Baltimore.7'
	);

$hostname = '127.0.0.1';
$username = $config['user'];
$password = $config['password'];

try{
   $pdo = new PDO("mysql:host=127.0.0.1;dbname=enterto6_inventory",'enterto6_fuckbht','Baltimore.7');
}catch(PDOException $e){
   echo '<pre>';
   print_r($e);
   echo '<pre>';
   die();
}


