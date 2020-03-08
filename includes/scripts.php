<script src="js/jquery-3.4.1.min.js"></script>



<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/notify.min.js"></script>

<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<script>
	
$(document).ready(function(){


	//change top header bakground-image dynamically
	/*var backgroundList=["girls-portraits","portraits-boys","Animals-Tiger","Animals","Birds","Rainy","cloudy","kids","mountains"];
	var hero=document.getElementById('hero').style;
	hero.backgroundImage="https://source.unsplash.com/1600x900/?models-portraits";
	hero.backgroundSize="cover";
	hero.backgroundAttachment="fixed";*/

	


	//close or open a profile modal

	$('#profile').on('click',function()
	{	
$('#modal').addClass('is-active');
	});

	$('#close').on('click',function()
	{
$('#modal').removeClass('modal is-active');	
$('#modal').addClass('modal');
	});




  $('#first').tooltip();


  $('#edit').on('click',function()
  {

	  function message()
	  {
		$.notify("Profile Updated!","success",{position:'left'});
	  }

	  

	function update_user()
	{
		$.ajax({
			url: "modules/update.php",
			type: "POST",
			cache: false,
			data:{
				
				name: $('#name').html(),
				email: $('#email').html(),
				uname:$('#uname').val()
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					
					
					$('#profile').modal('toggle');
					
				    
										
				}
				else if(dataResult.statusCode==201)
				{
					console.log('Database Error!');
				}
			}
		});
	}



		function update_image()
		{

			
			$.ajax({
			url: "modules/update_images.php",
			type: "POST",
			cache: false,
			data:{
				
				personname: $('#personname').val(),
				name:$('#name').html()
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					
					
					$('#profile').modal('toggle');
					message();
					location.reload(true);
				   
										
				}
				else if(dataResult.statusCode==201)
				{
					console.log('Database Error!');
				}
			}
		});
		}

		update_user();
		update_image();



  });
  
});



</script>

<script type="text/javascript">
  	document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
  </script>