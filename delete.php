<?php  
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, PATCH, OPTIONS");
//header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id = '$id'";
//echo $sql;

if (mysqli_query($con, $sql)) {
	http_response_code(204);
}else{
	http_response_code(422);
}

?>