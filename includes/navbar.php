<nav class="navbar is-fixed-top navbar-default" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
      <img src="./assets/icon.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
	<?php
	  if(isset($_SESSION['username']))
	  {
      echo '<a class="navbar-item" href="upload.php">
        Upload
	  </a>';

	  echo '<a class="navbar-item" id="profile">
        Your Profile
	  </a>';
	  }?>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
		<?php
	  if(!isset($_SESSION['username']))
	  {
          echo '<a class="button is-primary" href="reg/">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="login/">
            Log in
		  </a>';
		  
	  }
	  ?>
		</div>
		
    </div>
  </div>
</nav>