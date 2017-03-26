<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bike Panda</title>
   
    <title>Bike Panda - Home</title>
	<link rel="icon" href="http://example.com/favicon.png">

	<!-- Tab icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="./images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
	<link rel="manifest" href="./images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
		
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Style -->
	<style>
		body {
			background-color: black;
		}
		.navbar {
			margin-bottom:0;
			border-radius:0;
		}
		.navlogo {
			width: auto;
			height: 100%;
		}
		.coverlogo {
			height: 40vh;
			width: auto;
		}
		.bgimage{
			background-image: url('./images/naturepath.jpg');
			background-size:100% 100%;
			background-repeat: no-repeat;
				height: auto;
		}
		.jumbotron {
		  margin-bottom: 0px;
		  height: 90vh;
		  text-shadow: black 0.3em 0.3em 0.3em;
		  color: white;
		}
		.btn-lg {
			padding: 10px 20px;
			font-size: 2.5vh;
			border-radius: 5vh;
			text-shadow: gray 0.3em 0.3em 0.3em;
		}
		.vertical-center {
			min-height: 90%;  /* Fallback for browsers do NOT support vh unit */
			min-height: 90vh; /* These two lines are counted as one :-)       */
			display: flex;
			align-items: center;
		}
		h1 {
			font-weight: bold;
			color: #fff;
			font-size: 5vh;
		}
		
	</style>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <!-- BODY -->
  <body>
  
	<!-- NAV BAR -->
	<nav class="navbar navbar-inverse">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="./index.php"><img class="navlogo" src="./images/BikePandaLogo.png"></a> 
		  <a class="navbar-brand" href="./index.php">Bike Panda</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li>
			<?php if(isset($_SESSION["id"])): ?>
			<a href="./progress.php">Track Progress<span class="sr-only">(current)</span></a>
			<?php else: ?>
			<a href="./login.html">Track Progress<span class="sr-only">(current)</span></a>
			<?php endif;?>
			</li>
		  </ul>
          <ul class="nav navbar-nav navbar-right">
			<li><a href="./login.html">Log in<span class="sr-only">(current)</span></a></li>
		  </ul> 
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="./about.html">About Us</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
	<!-- JUMBOTRON -->
	<div class="jumbotron text-center vertical-center bgimage">
	  <div class="container">
		<h1>Bike Panda</h1>
		<br>
		<img class="img-circle coverlogo" src="./images/BikePandaLogo.png" alt="Bike Panda Logo">
		<br><br><br>
		<a href="./login.html" class="btn btn-lg btn-default">Log In / Sign Up</a>
	  </div>
	</div>      
    
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
