<?php
$server = 'localhost';
$username = 'root';
$password = "";
$dbname = "gallery";

$conn = mysqli_connect($server,$username,$password,$dbname);
    $name=$_POST['name'];
    $pname=$_POST['personname'];
    
	
	$sql = "update galleryExamp set personGallery='$name' where personGallery='$pname'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);




?>