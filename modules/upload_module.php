<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location:./index.php');
    exit();
}

include_once './includes/dbh.php';
$fullname = "";
$img = "";
$user = "";
$theme="";
$email="";
if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];
	}

	$sql = "SELECT * FROM users WHERE userid = ?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "Statement Error!";
	}
	else
	{
	mysqli_stmt_bind_param($stmt,"s",$user);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
	$fullname = $row['fname'];
	$userid = $row['userid'];
	
	}
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
    






//check is upload button is clicked
if (isset($_POST['upload'])) {
	
//get another data
	$title=$_POST['title'];
	$personName = userName();
	$uid = userid();
	$file = $_FILES['file'];
	$image_info = getimagesize($_FILES["file"]["tmp_name"]);
    $image_width = $image_info[0];
    $image_height = $image_info[1];
    $res=$image_width." x ".$image_height;
	//echo $title;
	//echo $desc;
	//echo $personName;
	//print_r($file);
	$filename = $file['name'];
	
	
	$fileType = $file['type'];
	$fileTempName = $file['tmp_name'];
	//echo $fileTempName;
	$fileError = $file['error'];
	$fileSize = $file['size'];
	$fileSize = round($fileSize / 1024 / 1024, 1);
	//echo $fileSize;
	$fileExtension = explode(".",$filename);
	$fileActualExt = strtolower(end($fileExtension));
	$allowedExt = array("jpg","jpeg","png");
	if($_FILES["file"]["error"] != 0) {
		//stands for any kind of errors happen during the uploading
		header('location:upload.php?error=Choose an Image');
		exit();
		}
	else if($title=="")
	{
		header('location:upload.php?error=Please add Atleast one tag!');
		exit();
	}
	else
	{
	
	if (in_array($fileActualExt, $allowedExt)) {
		if ($fileError == 0) {
			# code...
			if ($fileSize < 20000000000) {
				//echo "Good size";
				$imageFullName = "TrueWalls".$filename . ".".uniqid("",true).".".$fileActualExt;
				//echo $imageFullName;
				$directory = "includes/walls/".$imageFullName;
				//echo $directory;
				include_once 'includes/dbh.php';
//check for empty fields
				
					$sql = "SELECT * FROM galleryExamp";
					$stmt = mysqli_stmt_init($conn);
					//check for any statement error
					if (!mysqli_stmt_prepare($stmt,$sql)) {
						echo "Statement error!1";
						exit();
					}
					else
					{
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						$rowCount = mysqli_num_rows($result);
						$setImageOrder = $rowCount + 1;
						$sql = "INSERT INTO galleryExamp(personGallery,imgFullName,orderGallery,userid,Res,size,title)VALUES(?,?,?,?,?,?,?);";
						if (!mysqli_stmt_prepare($stmt,$sql)) {
							echo "Statement Error2";
							exit();
						}
						else
						{
							
							mysqli_stmt_bind_param($stmt,"sssssss",$personName,$imageFullName,$setImageOrder,$uid,$res,$fileSize,$title);
							mysqli_stmt_execute($stmt);
							move_uploaded_file($fileTempName,$directory);
							header("location:upload.php?success='Photo Added Go Back!'");
						}
					}
				
				
			}
			else
			{
				echo "There is an error!";
			}
		}
		else
		{
			echo "upload error!";
			exit();
		}
		
	}
	else
	{
		header('location:upload.php?error=Wrong Type File or You forget to Add Image');
		exit();
	}
}
	
	
}





?>