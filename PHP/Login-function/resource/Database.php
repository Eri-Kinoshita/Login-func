<?php
$dsn = 'mysql:host=localhost; dbname=register';
$username = 'root';
$password = 'root';


try{
	$db = new PDO($dsn, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connection to the register database";
}
catch(PDOException $ex){
	echo "Connextion filed".$ex->getMessage();
}