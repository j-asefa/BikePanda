<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Progress</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- JS BOOTSTRAP -->  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	
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

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="./js/chart.js/dist/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
 

   <!--  <script type="text/javascript">
        $(document).ready(function(){
          $('#testlink').text() = "ABC";
         });   
    </script> -->

    

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

                        <!-- <a href="#" class="list-group-item" id="date11"></a>
                        <a href="#" class="list-group-item" id="date2"></a>
                        <a href="#" class="list-group-item" id="date3"></a>
                        <a href="#" class="list-group-item" id="date4"></a> -->

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="date1">
                                  <!-- Collapsible Group Item #1 -->
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                test1
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="date2">
                                  Collapsible Group Item #2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                test2
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="date3">
                                  Collapsible Group Item #3
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                test3
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="date4">
                                  Collapsible Group Item #4
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">
                                test4
                              </div>
                            </div>
                          </div>
                        </div>

                        <script type="text/javascript">
                            var omarTime = "";
                            //var poll = function(){
                            $.ajax(
                            {
                                url:'./getdatefromdb.php',//php,
                                dataType:'json',
                                type: 'GET',
                                //async
                                success: function(data){
                                    var dateStrings = [];
                                    dateStrings = Object.keys(data);

                                    $('#date1').text(dateStrings[0]);
                                    $('#date2').text(dateStrings[1]);
                                    $('#date3').text(dateStrings[2]);
                                    $('#date4').text(dateStrings[3]);
                                },
                                error: function(){}
                                });
                            //};
                        </script>
                    </ul>
                </div>
                </div>
            </div>
            
            <!-- PLACE GRAPH HERE -->
            <div class="col-md-8 col-sm-8" style="margin-top:20px">    
                <canvas id="SpeedTimeChart" width="400" height="200"></canvas>
<script>
var myChart;
var Data = [];
var configuration;
var time;
var lastPlottedTime;
var speed;
var distance;
var calories;
var minTime;
var minTime;
var ctx = document.getElementById("SpeedTimeChart");
function reconfigure(newData, maxTime, minTime){
    configuration = {
            type: 'line',
            data: {
                datasets: [{
                    borderColor: "rgb(8, 96, 8)",
                    pointBackgroundColor: "rgb(8, 96, 8)",
                    fill: true,
                    backgroundColor: "rgba(8, 96, 8, 0.2)",
                    data: newData
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Name, Date, Start time",
                    fontColor: "rgb(0, 0, 0)"
                },
                legend:{
                    display: false
                },
                scales: {
                    xAxes: [{
                        type: "linear",
                        position: "bottom",
                        scaleLabel: {
                            display: true,
                            labelString: "Time in minutes",
                            fontColor: "rgb(0, 0, 0)"
                        },
                        ticks: {
                            min: minTime,
                            max: maxTime,
                            fontColor: "rgb(0, 0, 0)"
                        },
                    
                        gridLines: {
                            zeroLineColor: "rgb(0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        type: "linear",
                        position: "left",
                        scaleLabel: {
                            display: true,
                            labelString: "Speed in km/h",
                            fontColor: "rgb(0, 0, 0)"
                        },
                        ticks: {
                            min: 0,
                            max: 35,
                            fontColor: "rgb(0, 0, 0)"
                        },
                    
                        gridLines: {
                            zeroLineColor: "rgb(0, 0, 0)"
                        }
                    }]
                    
                },
                animation: {
                        duration: 0,
                        }
            }
        };
}
setInterval(function(){

    $.ajax(
                {
        url:'./livegraph.php',
        dataType:'json',
        async: 'false',
        type: 'get',
        // data: 
        success: function(data){
            $('.speed').text(speed=data.speed);
            $('.distance').text(speed=data.distance);
            $('.calories').text(calories=data.calories);   
		time = data.time;
          
            
        },
        error: function(){}
    });

    if ( time != lastPlottedTime){
    
        Data.push({
            x: time,
            y: speed
        });

        maxTime = time + 10;//10 + 5 * (time/10);
        minTime = time - 90;// 5 * (time/10);

        reconfigure(Data, maxTime, minTime);            
        myChart = new Chart(ctx, configuration);
        
        lastPlottedTime = time;
    }
},1000);
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
                            <h3 class="panel-title">Speed</h3>
                        </div>
                        <div class="panel-body">
                            <span class="speed"></span>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Distance</h3>
                        </div>
                        <div class="panel-body">
                            <span class="distance"></span>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Calories</h3>
                        </div>
                        <div class="panel-body">
                     		<span class="calories"></span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
</body>    
