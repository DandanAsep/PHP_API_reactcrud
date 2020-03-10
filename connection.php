<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'books-app');

function connect()
{

	// $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	// if (mysqli_connect_errno($connect)) {
	// 	die("Failed to connect: " mysqli_connect_errorr());
	// }

	// mysqli_set_charset($connect,"utf8");

	$connect = new mysqli("localhost","root","","books-app");

	// Check connection
	if ($connect -> connect_errno) {
	  die("Failed to connect to MySQL: " . $mysqli -> connect_error);
	}

	return $connect;
}

$con = connect();
?>