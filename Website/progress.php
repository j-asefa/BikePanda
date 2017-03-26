<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Progress</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- MD BOOTSTRAP -->  
	
    <style>
        body {
			background-color: AliceBlue;
        }
		.navbar {
			margin-bottom:0;
			border-radius:0;
        } 
        .panel {
			border-radius:0;
		}
        .panel-heading {
			border-radius:0;
		}
        .panel-body {
			border-radius:0;
		}
        .list-group {
			border-radius:0;
		}
    </style>
    
    <script src="./js/chart.js/dist/Chart.js"></script>
    
  </head>
    
  <body>
    <!-- NAV BAR -->
	<nav class="navbar navbar-inverse">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="./index.php">Bike Panda</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="./index.php">Home<span class="sr-only">(current)</span></a></li>
		  </ul>
          <ul class="nav navbar-nav navbar-right">  
                    <li><a href="./logout.php">Log out<span class="sr-only">(current)</span></a></li>
		  </ul> 
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="./about.php">About Us</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
	</nav>
    
    <!-- GRID CONTAINING THE GRAPH AND RELEVANT INFORMATION -->
    <div class="container-fluid text-center" >
        <div class="row" >
            <div class="col-md-2 col-sm-2">
            <br>
                <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Live Feed</h2>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-info active" role="button">Real-time Graph</a>
                    <hr>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info"><b>Past Trips</b></li>
                        <a href="#" class="list-group-item">Date 1</a>
                        <a href="#" class="list-group-item">Date 2</a>
                        <a href="#" class="list-group-item">Date 3</a>
                        <a href="#" class="list-group-item">Date 4</a>
                    </ul>
                </div>
                </div>
            </div>
            
            <!-- PLACE GRAPH HERE -->
            <div class="col-md-8 col-sm-8" style="margin-top:20px">    
            <canvas id="SpeedTimeChart" width="400" height="200"></canvas>
            <script>
            var ctx = document.getElementById("SpeedTimeChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    datasets: [{
                        borderColor: "rgb(28, 103, 3)",
                        pointBackgroundColor: "rgba(28, 103, 3)",
                        fill: false,
                        data: [{
                            x: 2,
                            y: 10
                        }, {
                            x: 3,
                            y: 8
                        }, {
                            x: 4,
                            y: 9
                        }, {
                            x: 5,
                            y: 7
                        },{
                            x: 6,
                            y: 10
                        }, {
                            x: 7,
                            y: 13
                        },{
                            x: 8,
                            y: 15
                        }, {
                            x: 9,
                            y: 17
                        },{
                            x: 10,
                            y: 19
                        }]
                    }]
                },
                options: {
                    title:{
                         display: true,
                        text: "Speed(km/h) vs. Time(min)"
                    },
                    legend:{
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            type: 'linear',
                            position: 'bottom',
                            scaleLabel: {
                                display: true,
                                labelString: "something in here"
                            },
                            ticks: {
                                display: true,
                                min: 0,
                                max: 20
                            }
                        }],
                        yAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: "something else in here"
                            },
                            ticks: {
                                min: 0,
                                max: 20
                            }
                        }]

                    },
                    animation: {

                    }
                }
            });
            </script>
            <hr>   
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-info active">Graph1</button>
                  <button type="button" class="btn btn-info">Graph2</button>    
                  <button type="button" class="btn btn-info">Graph3</button>
                  <button type="button" class="btn btn-info">Graph4</button>
                </div>     
            </div>
            
            <!-- LIVE DATA UPDATE -->
            <div class="col-md-2 col-sm-2">
            <h2>Data Gauges</h2>
            <hr>
               
                    <!-- PANELS -->  
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data 1</h3>
                        </div>
                        <div class="panel-body">
                        Val 1
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data 2</h3>
                        </div>
                        <div class="panel-body">
                        Val 2
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data 3</h3>
                        </div>
                        <div class="panel-body">
                        Val 3
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data 4</h3>
                        </div>
                        <div class="panel-body">
                        Val 4
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    
</body>    
