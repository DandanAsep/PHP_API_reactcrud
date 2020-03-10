<?php
//required header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, PATCH, OPTIONS");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'connection.php';
echo "string";

$postdata = file_get_contents("php://input");
//print_r($postdata);
if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);

	print_r($request);

	//sanitize
	$id = $_GET['id'];
	$title = $request->title;
	$rating = $request->rating;
	//$email = $request->email;

	//STORE
	//$sql = "INSERT INTO student (fName,lName,email) VALUES ('$first_name','$last_name','$email')";

	//update
	$sql = "UPDATE books 
		SET title = '$title',
		rating = '$rating'
		WHERE id = '$id'";

	echo $sql;
	if (mysqli_query($con, $sql)) {
		http_response_code(201);
	}else{
		return http_response_code(422);
	}
}  
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// require 'connection.php';
// echo "string";
// $postdata = file_get_contents("php://input");

// if (isset($postdata) && !empty($postdata)) {
// 	echo "aa";
// 	$request = json_decode($postdata);

// 	print_r($request);
// 	//sanitize
// 	// $id = mysqli_real_escape_string($con, (int)$_GET['id']);
// 	// $fName = mysqli_real_escape_string($con, trim($request->fName));
// 	// $lname = mysqli_real_escape_string($con, trim($request->lName));
// 	// $email = mysqli_real_escape_string($con, trim($request->email));

// 	// $id 	= $request->id;
// 	$id 	= $_GET['id'];
// 	$fName 	= $request->last_name;
// 	$lname 	= $request->first_name;
// 	$email 	= $request->email;

// 	$sql = "UPDATE student 
// 			SET fName = '$fName',
// 			fName = '$fName',
// 			fName = '$fName'
// 			WHERE sId = '$id'";

// 	if (mysqli_query($con, $sql)) {
// 		http_response_code(204);
// 	}else{
// 		return http_response_code(422);
// 	}
// }

?>