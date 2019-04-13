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
	<META HTTP-EQUIV="refresh" content="10" />

<title>Water acQuisor</title>
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
	background-image: url(p2.jpg);
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
           <center><font color="cyan">Last edit: SEP 27, 3:51 AM</center></font>
                    <ul class="nav navbar-nav">
                        <li><a href="monitor1.php">Home &nbsp<span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="contact.php">Contact &nbsp<span class="glyphicon glyphicon-envelope"></span></a></li> 
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="glyphicon glyphicon-th-list"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="monitor1.php"><span class="glyphicon glyphicon-eye-open"></span> &nbsp Monitor & Control</a></li>
                            <li><a href="tank1.php"> <span class="glyphicon glyphicon-tasks"></span> &nbsp Tank Details</a> </li>
                            <li><a href="setuptank.php"><span class="glyphicon glyphicon-map-marker"></span> &nbsp Setup New Tanks </a> </li>
                            <li class="active"><a href="consumption1.php"><span class="glyphicon glyphicon-stats"></span> &nbsp Consumption </a> </li>
                            <li><a href="complaint.php"><span class="glyphicon glyphicon-edit"></span> &nbsp Complaint</a></li>
                            
                            <li><a href="map.php"><span class="glyphicon glyphicon-globe"></span> &nbsp MAPS  </a></li> 
                        </ul>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html"><span class="glyphicon glyphicon-flash"></span> Device status</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
 
    </header>
	
	<div id="scrolltext">
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">This page will auto refresh in 8 seconds</marquee>
	
	</div>
	<div class="container">
		<section class="tank_details">
<?php
//index.php
$connect = mysqli_connect("172.22.25.3", "priyen", "priyen@312", "priyen@watertank");
$query = '
SELECT `used`, 
UNIX_TIMESTAMP(CONCAT_WS(" ", `date`)) AS `date` 
FROM `consumption`
ORDER BY `date` DESC
';
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
 array(
  'label' => 'Date', 
  'type' => 'date'
 ),
 array(
  'label' => 'Water Level (%)', 
  'type' => 'number'
 )

);

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $date = explode(".", $row["date"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $date[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row["used"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);

?>


 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var optionsWater = {
     title:'Water Consumption',
     legend:{position:'bottom'},
     chartArea:{width:'90%', height:'60%'}
    };

    var optionsElectricity = {
     title:'Electricity Consumption',
     legend:{position:'bottom'},
     chartArea:{width:'90%', height:'60%'}
    };

    var chartWater = new google.visualization.LineChart(document.getElementById('line_chart_water'));
    var chartElectricity = new google.visualization.LineChart(document.getElementById('line_chart_electricity'));

    chartWater.draw(data, optionsWater);
    chartElectricity.draw(data,optionsElectricity);
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
  <div class="col-lg-6 col-md-6 head-text">
   
   <h2 align="center">Water Level Consumption</h2>
    <center>
   <div id="line_chart_water" style="width: 100%; height: 500px"></div>
    </center>
  </div>

  <div class="col-lg-6 col-md-6">
   <h2 align="center">Electric energy Consumption</h2>
   <center>
   <div id="line_chart_electricity" style="width: 100%; height: 500px"></div>
 
</center>
</div>
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
