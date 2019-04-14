<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server" >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	

<title>acQuisor OBD</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
mark { 
    background-color: ;
    color: black;
}
body {
	background-image: url(images/bkgnd.jpg);
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #000000;
}
.container {
	width: auto;
    min-width: 100px;
    margin: auto;
}
.tank_details {
    width: auto;
    float: center;
    height: auto;
    
}
.update_tank {
	width: auto;
	float: center;
	height: auto;
	
}
footer {
    width: auto;
    height: auto;
    background-color:black;
    
}

#msg {
	width: 100%;
	float: left;
	background-color:black;
	color: cyan;
	position:bottom;;
	
}

#contact {
	width: 100%;
	float: right;
	background-color:black;
	
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: auto;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: skyblue;
}

tr:nth-child(odd) {
    background-color: cyan;
}

#scrolltext{
	width: 100%;
	height: auto;
	float: top;
	background-color: black;
	
}
.navbar {
 
    background-color: black;
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown-content {
  
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style></head>
<body>

    <form id="form1" runat="server" method="post">
		<header id="header">
			<nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
     <a class="navbar-brand" href="monitor1.php"><font color="cyan"><img src="images/acQuisorLogo.png"/></font></a>
              </div>
              <br>
        <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="monitor1.php">Home &nbsp<span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="contact.php">Contact &nbsp<span class="glyphicon glyphicon-envelope"></span></a></li> 
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="glyphicon glyphicon-th-list"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="monitor1.php"><span class="glyphicon glyphicon-eye-open"></span> &nbsp Monitor OBD</a></li>
                            <li><a href="dtcsearch.php"><span class="glyphicon glyphicon-search"></span> &nbsp Search DTC </a> </li>
                            <li><a href="graph.php"><span class="glyphicon glyphicon-stats"></span> &nbsp Graphical Analysis </a> </li>
                            <li><a href="complaint.php"><span class="glyphicon glyphicon-edit"></span> &nbsp Register Malfunction</a></li>
                        </ul>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
 
    </header>
	
	<div id="scrolltext">
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">This page will auto refresh in 8 seconds</marquee>
	
	</div>
	<div class="container">
		
<?php
//index.php
require 'connect.php';
$qry = "SELECT `time`, `rpm`, `speed`, `engineload`, `throttle` from `obd_log` WHERE `date`='2019-04-14' ORDER BY `time` ASC";
$result = $conn->query($qry);

if($result === FALSE) {
    echo mysqli_errno($result) .": ". mysqli_error($result) ."/n";
    die(mysqli_error());
}
    $i = 0; //iteration counter - start at 0

    $totalRows = mysqli_num_rows($result); // we need this to know when to change the output
    $targetRows = $totalRows - 1; //row indies start from 0, not 1.

    foreach ($result as $row){ 

        $comTime = str_replace(":",",",$row['time']); // for each row, remove the : and put , in its place
        if ($targetRows == $i) { // if the index is the same value as the target (ie, it's the last row)...

            $temp = "[[".$comTime."],".($row['rpm']/1000).",".($row['speed']).",".($row['engineload']).",".($row['throttle'])."]". PHP_EOL;
            } else {
            $temp = "[[".$comTime."],".($row['rpm']/1000).",".($row['speed']).",".($row['engineload']).",".($row['throttle'])."],". PHP_EOL;
            }
        $i = $i + 1; 
        $rows[] = $temp; 
    }

 $table = $rows;
 $data = implode($table); //format the table as a single string, with line returns

//echo $i;
//echo $data;
?>


 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart(){
        var data = new google.visualization.DataTable();
            data.addColumn('timeofday','Time'); 
            data.addColumn('number','RPM X 1000');
            data.addColumn('number','Speed(kmph)');
            data.addColumn('number','EngineLoad(%)');
            data.addColumn('number','Throttle(%)');

            data.addRows([              
                <?php echo $data; ?> //dump the result into here, as it's correctly formatted   
            ]);

        var options = {
            title: 'OBD data log plot',
            legend: { position: 'bottom' },
            width: 900,
            height: 500,
            hAxis: { format: 'hh:mm:ss' }
        }; 

    var chart = new google.visualization.LineChart(document.getElementById('chart'));
      chart.draw(data, options);    
      }
  </script>
  <style>
  .page-wrapper
  {
   width:1000px;
   margin:0 auto;
  }
  </style>
 </head>  
 <body>
  <div class="col-lg-12 col-md-12 head-text">
   
   <h2 align="center">OBD parameters plot</h2>
    <center>
   <div id="chart" style="width: 100%; height: 500px"></div>
    </center>
  </div>

 </body>
</html>
	
	<br>

	<footer>
	<div id="msg" width="100%">
		<center>
			<font color="cyan"> © Designed & Developed by acQuisor </font>
		</center>
	</div>
	<div id="contact" width="100%">
		<center>
			<font color="cyan"> +918379888900 </font>
		</center>
	</div>
	</footer>
	
	<script type="text/javascript">
	
	var timeleft = 9;
	var downloadTimer = setInterval(function()
	{
		document.getElementById("progressBar").value = 9 - --timeleft;
	
			
		if(timeleft <= 0)
		{	
		clearInterval(downloadTimer);
		
		}
	},1000);

</script>
    <!-- Jscript -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    </form>

</body>
</html>
