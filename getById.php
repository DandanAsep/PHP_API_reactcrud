<?php  
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

require 'connection.php';
$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE sId = '$id'";
//echo $sql;

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);
?>