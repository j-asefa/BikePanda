<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>About Bike Panda</title>
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
			background-color: aliceblue;
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
			max-width: 220px;
			max-height: 220px;
		}
		.bgimage{
			background-image: url('./images/treetops.jpg');
			background-size:100%;
			background-repeat: no-repeat;
			height: auto;
		}
		.jumbotron {
		  margin-bottom: 0px;
		  color: white;
		  text-shadow: black 0.3em 0.3em 0.3em;
		}
		.lettherebewhite {
			background-color: #F0F0F0;
		}
		.headshot {
			width: 8vw;
			height: auto;
		}
		img.displayed {
			display: block;
			margin-left: auto;
			margin-right: auto;
			max-height: 50vh;
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
                        <a href="./logout.php">Log out<span class="sr-only">(current)</span></a>
                        <?php else: ?>
                        <a href="./login.html">Log in<span class="sr-only">(current)</span></a>
                        <?php endif;?>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- JUMBOTRON -->
	<div class="jumbotron text-center bgimage">
	  <div class="container">
		<h1>About Bike Panda</h1>
	  </div>
	</div>

	<!-- Info -->
	<div class="container lettherebewhite">
		<h1 align="center">Our Product</h1>
		<hr>
		<div class="col-md-1"></div>
		<div class="col-md-10"><img class="displayed" src="./images/bicycle.jpg" alt="Bicycle"></div>
		<div class="col-md-1"></div>
	</div>
	<div class="container lettherebewhite">
		<br>
		<div class="col-md-1"></div>
		<div class="col-md-10"><p align="center">This is a bike.  Neat right?</p></div>
		<div class="col-md-1"></div>
	</div>
	<div class="container lettherebewhite">
		<br>
		<div class="col-md-1"></div>
		<div class="col-md-5"><img class="img-thumbnail" src="./images/forest.jpg" alt="Forest"></div>
		<div class="col-md-5"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div>
		<div class="col-md-1"></div>
	</div>
	<div class="container lettherebewhite">
		<br>
		<div class="col-md-1"></div>
		<div class="col-md-5"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div>
		<div class="col-md-5"><img class="img-thumbnail" src="./images/forest.jpg" alt="Forest"></div>
		<div class="col-md-1"></div>
	</div>
	<div class="container lettherebewhite">
		<br>
		<div class="col-md-1"></div>
		<div class="col-md-5"><img class="img-thumbnail" src="./images/forest.jpg" alt="Forest"></div>
		<div class="col-md-5"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div>
		<div class="col-md-1"></div>
	</div>
	<div class="container lettherebewhite">
		<br>
		<div class="col-md-1"></div>
		<div class="col-md-5"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div>
		<div class="col-md-5"><img class="img-thumbnail" src="./images/forest.jpg" alt="Forest"></div>
		<div class="col-md-1"></div>
	</div>

	<div class="container lettherebewhite"><br><br></div>

	<!-- TEAM INFO -->
	<div class="container lettherebewhite">
		<hr>
		<h1 align="center">Our Team</h1>
		<hr><br>

		<!-- Team Row 1 -->
		<div class="col-md-2"></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>CEO</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>CFO</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>CTO</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>CBO</p></div>
		<div class="col-md-2"></div>
	</div>
	<div class="container lettherebewhite">
		<br><br>
		<!-- Team Row 2 -->
		<div class="col-md-2"></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>COO</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>CO2</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>C3P0</p></div>
		<div class="col-md-2 text-center"><img class="headshot" src="./images/franklin.jpg" alt="Franklin"><h3>Franklin</h3><p>COW</p></div>
		<div class="col-md-2"></div>

	</div>

	<!-- MINI FOOTER -->
	<div class="container lettherebewhite">
		<br><hr><br>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
