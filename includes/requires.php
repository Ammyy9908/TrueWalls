<?php
session_start();
include_once 'includes/dbh.php';
$fullname = "";
$img = "";
$user = "";
$email="";
if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];
	}

	$sql = "SELECT * FROM users WHERE userid = ? OR email=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "Statement Error!";
	}
	else
	{
	mysqli_stmt_bind_param($stmt,"ss",$user,$user);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
	$fullname = $row['fname'];
	$img = $row['avatar'];
	$userid = $row['userid'];
	$email=$row['email'];
	}
	}


function getEmail()
{
	return $GLOBALS['email'];
}


function theme()
{
$userTheme = $GLOBALS['theme'];
return $userTheme;
}
function userImage()
{
$image = $GLOBALS['img'];
return $image;
}
function userName()
{
$name = $GLOBALS['fullname'];
return $name;
}
function userid()
{
$uid = $GLOBALS['userid'];
return $uid;
}
	
?>