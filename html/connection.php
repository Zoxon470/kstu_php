<?php 

require_once 'dbconfig.php';

$dsn= "mysql:host=$host;dbname=$db";

try{
	$conn = new PDO($dsn, $username, $pass);

	// if($conn){
	// 	echo "Подключение к базе данных <strong>$db</strong> успешно прошла!";
 //        }
}catch (PDOException $e){
	echo $e->getMessage();
}

?>