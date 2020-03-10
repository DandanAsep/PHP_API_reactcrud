<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

require 'connection.php';
error_reporting(E_ERROR);

$books = [];
$sql = "SELECT * FROM books";

if ($result = mysqli_query($con, $sql)) {
  	$cr = 0;
  	while ($row = mysqli_fetch_assoc($result)) {
  		$books[$cr]['id'] = $row['id'];
  		$books[$cr]['title'] = $row['title'];
  		$books[$cr]['rating'] = $row['rating'];
  		$cr++;
  	}

  	//print_r($books);
  	echo json_encode($books);
}else{
	http_response_code(404);
}  
?>