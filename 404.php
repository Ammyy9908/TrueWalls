<?php

if(isset($_SESSION['username']))
{
    header('location:../index.php');
    exit();
}

else
{
    if (isset($_POST['login'])) {
        require '../includes/dbh.php';
    
        $mailid = $_POST['userid'];
        $pass = $_POST['password'];
        $hashedPass=md5($pass);
        echo $mailid;
    
        //check for empty fields
    
        if (empty($mailid) ||  empty($pass)) {
            echo 'Empty Fields';
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE userid = ? AND upass= ?;";
    
            $stmt = mysqli_stmt_init($conn);
    
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                echo 'statement error!';
                exit();
            }
    
            else
            {
                mysqli_stmt_bind_param($stmt,"ss",$mailid,$hashedPass);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
    
                if ($resultCheck > 0) {
    
                    session_start();
                    $_SESSION['username']=$mailid;
                    
                    header('location:../index.php?login=success');
    
                    
                }
                else
                {
    
                    header('location:../home.php?login=Wrong Cerdidentials!Try Again');
                    exit();
    
                }
            }
    
        }
    
    
    }


}


    





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TrueWalls-Home</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>



<div class="_404" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center;">
  <h1 class="title is-size-1">No Photo Avialable</h1><br>
  <a href="index.php" class="button is-primary is-rounded">Go Back</a>
</div>






<script src="js/jquery-3.4.1.min.js"></script>



<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

<!--<script>


$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 20) {
	    $(".nav").css("box-shadow" , "0px 2px 10px 0px rgba(0,0,0,0.65)");
	  }

	  else{
		$(".nav").css("box-shadow" , "0px 0px 0px 0px rgba(0,0,0,0.65)"); 	
	  }
  });

  $("input:text").val("");

  $('#first').tooltip();
  
});



</script>-->

	
</body>
</html>