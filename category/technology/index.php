<?php

include_once '../../includes/dbh.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $_GET['cat'];?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
      <link rel="stylesheet" href="../../base_style/base.css">
    
</head>
<body>

<div class="hero is-large is-black is-fixed-top" style="background-image: url(https://source.unsplash.com/1600x900/?<?php echo $_GET['cat'];?>);background-attachment:fixed;background-size:cover;">
<div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-size-1">
      <?php echo $_GET['cat'];?>
      </h1>
      <h2 class="subtitle">
       Total Photos: 


<?php

$cat="%{$_GET['cat']}%";
$sql = "SELECT * FROM galleryExamp WHERE title LIKE ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
echo "Statement Error!";
}
else
{
mysqli_stmt_bind_param($stmt,"s",$cat);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count =mysqli_num_rows($result);
}
echo $count;
?>
      </h2>
    </div>
  </div>
</div>

<div class="container"><br>
<div class="row">

<!--Grid column-->


<?php
        $keyword = "%{$_GET['cat']}%";
        $sql = "SELECT * FROM galleryExamp WHERE title LIKE ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
        echo "Statement Error!";
        }
        else
        {
        mysqli_stmt_bind_param($stmt,"s",$keyword);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
        
          while($row = mysqli_fetch_assoc($result))
          {
          echo '<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
          
          
          <div class="card">
          <div class="card-image">
          <figure class="image is-square">
            <img src="../../includes/walls/'. $row['imgFullName'].'" class="is-square">
            </figure>
            </div>
            <div class="card-content">
            
            <p class="subtitle">Size: ';echo $row['size'];echo'Mb</p>
            <p class="subtitle">Resolution: ';echo $row['Res'];echo'</p>
            <p class="subtitle">Uploaded by: ';echo $row['personGallery'];echo'</p>
            <a href="../../includes/walls/'. $row['imgFullName'].'" class="button is-primary is-rounded" download style="text-decoration:none;">Download</a>
          </div>
        </div>
            
            
            </div>
          
          ';
          }}
        else
        {
        header('location:../../404.php');
        exit();
        }
        }
        ?>

  


</div>
<!--Grid row-->
</div>



<script src="js/jquery-3.4.1.min.js"></script>

<script>
$(document).ready(function()
{
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 110) {
	    $(".nav").css("box-shadow" , "0px 2px 10px 0px rgba(0,0,0,0.65)");
      $('#title').html('TECHNOLOGY');
	  }
    

	  else{
		$(".nav").css("box-shadow" , "0px 0px 0px 0px rgba(0,0,0,0.65)"); 
    $('#title').html('');	
	  }
  });
});
</script>



<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>