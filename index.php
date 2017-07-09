<!DOCTYPE-html>
<html>

  <?php
    if(!empty($_POST["login"])){
      include "loginDetail.php";
    }
  ?>

  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"></link>
    <link rel="stylesheet" href="css/style.css" type="text/css"></link>
    <link rel="stylesheet" href="css/main.css" type="text/css"></link>
    <script src="js/jquery.min.js"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
-->	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Welcome to Dance Academy</title>
  </head>

  <body>
    <?php
		include 'header.php';
	?>

    <nav class="navbar navbar-default navbar-sticky" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="concert.html">Concert Dance</a></li>
            <li><a href="classical.html">Classical Indian Dance</a></li>
            <li><a href="jazz.html">Traditional Jazz</a></li>
            <li><a href="ballroom.html">Ballroom Dance</a></li>
            <li><a href="freestyle.html">Freestyle</a></li>
            <li><a href="street.html">Street Dance</a></li>
            <li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div id="pageModal"></div>
    		<!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
    				<li data-target="#myCarousel" data-slide-to="3"></li>
    				<li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="images/img/12549011_1234357693246650_6749268242761687334_n.jpg" alt="First slide">
            </div>
            <div class="item">
              <img class="second-slide" src="images/img/9593625850_3f17e87199_c.jpg" alt="Second slide">
            </div>
            <div class="item">
              <img class="third-slide" src="images/img/IMAG2711.jpg" alt="Third slide">
            </div>
    				<div class="item">
              <img class="fourth-slide" src="images/img/DSCN6382.JPG" alt="Fourth slide">
            </div>
    				<div class="item">
              <img class="fifth-slide" src="images/img/img_0086.jpg" alt="Fifth slide">
            </div>
          </div>
        </div><!-- /.carousel -->

        <div class="container">
          <div class="row">
            <?php
				include 'footer.php';
			?>
          </div>
        </div>
  </body>

<script>
  function loggedIn(){
    $('.beforeLogin').toggle();
    $('.afterLogin').toggle();
  }

  $(document).ready(function(){
    //alert('hello!');
    $('.afterLogin').hide();

    $('#registerPage').click(function(){
      //alert('hello');
      $.post('register.html', function(xx){
        //alert(xx);
        $('#pageModal').html(xx);
        $('#registerModal').modal('show');
      });
    });

    $('#loginPage').click(function(){
      //alert('hello');
      $.post('login.html', function(xx){
        //alert(xx);
        $('#pageModal').html(xx);
        $('#loginModal').modal('show');
      });
    });
  })
</script>

<?php
  if(!empty($_POST["register"])){
    include "registerDetail.php";
  }
?>
</html>
