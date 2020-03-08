<?php include '../modules/login_module.php'?>

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
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="../">
      <i class="material-icons">arrow_backward</i>
    </a>
  </div>

  
  </div>
</nav>
<section class="hero is-primary is-fullheight">
<?php if(isset($_GET['error']))
{

    echo '<div class="notification is-danger">
    <button class="delete"></button>';echo $_GET['error'];echo'
  </div>';
}
?>
 

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Login
      </h1>
      <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="" class="box" method="POST">
            <div class="field">
              <label for="" class="label">Username</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="e.g. bobsmith@gmail.com" class="input" autocomplete="off" name="userid">
                <span class="icon is-small is-left">
                  <i class="fa fa-user"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" class="input" autocomplete="off" name="password">
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <button class="button is-success" type="submit" name="login">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
     
    </div>
    
  </div>
  
  
</section>













<script src="js/jquery-3.4.1.min.js"></script>



<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});</script>



	
</body>
</html>