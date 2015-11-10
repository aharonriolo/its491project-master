<?php
$dsn = 'mysql:host=mysql2.000webhost.com;dbname=a6057948_ajr157';
$username = 'a6057948_ajr157';
$password = 'psycho1573141992';

try {
	$db = new PDO($dsn, $username, $password);
} 
catch (PDOException $e) {
	$error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>