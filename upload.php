<?php include 'modules/upload_module.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrueWalls-uploads</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!-- <link rel="stylesheet" type="text/css" href="css/debug.css">-->
  <link rel="stylesheet" href="base_style/base.css">
  <link rel="stylesheet" href="css/jquery.tag-editor.css"/>
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="./">
      <i class="material-icons">arrow_backward</i>
    </a>
  </div>

  
  </div>
</nav>


<div class="main_upload">
    <?php if(isset($_GET['error']))
{

    echo '<div class="notification is-danger">
    <button class="delete"></button>';echo $_GET['error'];echo'
  </div>';
}
?>

<?php if(isset($_GET['success']))
{

    echo '<div class="notification is-success">
    <button class="delete"></button>';echo $_GET['success'];echo'
  </div>';
}
?>
    <form action="" method="POST" enctype="multipart/form-data">

   

    <div class="upload-btn-wrapper">
  <button class="btn1">Choose Photo <i class="material-icons">insert_photo</i></button>
  <input type="file" name="file" />
</div><br><br>

    

    <div class="field">
  <label class="label">Choose Tags:</label>
  <div class="control">
    <textarea class="input" type="text" placeholder="eg. flowers,cars" name="title" id="tags" style="width:80%;height:400px;"></textarea>
  </div>
</div>

   

    <p align="center"><button type="submit"  name="upload" class="update"><i class="material-icons">cloud_upload</i></button></p>



    </form><br>

</div>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.tag-editor.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
$(document).ready(function()
{
  $('textarea').tagEditor({placeholder:"Add some Tags and hit Enter Key"});
});
</script>



<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
    
</body>
</html>