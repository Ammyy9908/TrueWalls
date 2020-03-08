<?php
$server = 'localhost';
$username = 'root';
$password = "";
$dbname = "gallery";

$conn = mysqli_connect($server,$username,$password,$dbname);
	$name=$_POST['name'];
    $uname=$_POST['uname'];
	$email=$_POST['email'];
	$imgUrl="https://avatars.dicebear.com/v2/avataaars/.svg".$name.".svg?options[mood][]=happy";
	
	$sql = "update users set fname='$name', email='$email',avatar='$imgUrl' where userid='$uname'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);




?>