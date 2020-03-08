<?php
if(isset($_SESSION['username']))
{
	echo '<!-- Modal -->
	<div class="modal" id="modal">
	<div class="modal-background"></div>
		<div class="modal-content" style="border-radius:5px;">
		  
		<div class="card">
		<!--Card Image-->
		
		<!--Card Image End-->
		<!--card content end here-->
		<div class="card-content">
		  <div class="media">
			<div class="media-left">
			  <figure class="image is-48x48">
				<img src="';echo userImage();echo'" alt="Placeholder image">
			  </figure>
			</div>
			<div class="media-content">
			  <p class="title is-4" contenteditable="true" id="name">';echo userName();echo'</p>
			  <p class="subtitle is-6" style="color:#1d1d1d;" contenteditable="true" id="email">';echo getEmail();echo'</p>
			  <input type="hidden" id="uname" value="';echo userid();echo '">
			  <input type="hidden" id="personname" value="';echo userName();echo '">
			</div>
		  </div>
	  
		  <div class="content">
			<a class="button is-primary is-rounded" href="login/logout.php">Logout</a>
			<a class="button is-info is-rounded" href="#" id="edit">Edit</a>
		  </div>
		</div>
		<!--card -content-->
		<button class="modal-close is-large" aria-label="close" id="close"></button>
	  </div>
		</div>
	</div>';
}

?><br>