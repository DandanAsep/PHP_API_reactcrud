<?php 
//required header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

require 'connection.php';
echo "string";

$postdata = file_get_contents("php://input");
//print_r($postdata);
if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);

	print_r($request);

	//sanitize
	$title = $request->title;
	$rating = $request->rating;

	//STORE
	$sql = "INSERT INTO books (title, rating) VALUES ('$title','$rating')";

	echo $sql;
	if (mysqli_query($con, $sql)) {
		http_response_code(201);
	}else{
		http_response_code(422);
	}
}
?>