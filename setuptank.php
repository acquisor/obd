<?php
session_start();
if(!isset($_SESSION["username"]))
    echo '<script language="javascript">alert("You have logged out. Please log in again.")
            window.location.href="login.php"</script>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server" >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	
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
	width: 100%;
    min-width: 100px;
    margin: auto;
}

footer {
    width: auto;
    height: auto;
    background-color:black;
    
}

#scrolltext{
	width: 100%;
	height: auto;
	float: top;
	background-color: black;
	
}

#map{
	height: 550px;

}
#data{
	display: none;
}
#content{
	width:250px;
	height: auto;
}

.navbar {
 
    background-color: black;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown-content {
    display: none;
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
                            <li class="active"><a href="setuptank.php"><span class="glyphicon glyphicon-map-marker"></span> &nbsp Setup New Tanks </a> </li>
                            <li><a href="consumption1.php"><span class="glyphicon glyphicon-stats"></span> &nbsp Consumption </a> </li>
                            <li><a href="complaint.php"><span class="glyphicon glyphicon-edit"></span> &nbsp Complaint</a></li>
                            
                            <li><a href="map.php"><span class="glyphicon glyphicon-globe"></span> &nbsp MAPS  </a></li> 
                        </ul>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="deviceStatus.php"><span class="glyphicon glyphicon-flash"></span> Device status</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
 
    </header>
	<div id="scrolltext">
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">YOU CAN VIEW YOU TANKS HERE </marquee>
	
	</div>
	
	<div class="container">
	<br>
	<?php
		require 'connect.php';
		$sqlS = "SELECT * from `tank_details`";
		$result = $conn->query($sqlS);
		$tanks = array();
		if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{	
					array_push($tanks,$row);
				}
		
			}
				$tanks = json_encode($tanks, true);
				echo '<div id = "data">'. $tanks . '</div>';
	?> 
	<div id="map"></div>
	<br>
	</div>
	
	<?php
		if(isset($_GET["save"]))
		{	
			$height = $_GET["height"];
			$name = $_GET["tankname"];
			$volume=$_GET["volume"];
			$power = $_GET["motor_power"];
			$lat = $_GET["lat"];
			$lng = $_GET["lng"];
            $motorName = $_GET["motorName"];
			
		$sqlI="INSERT INTO `tank_details` (`username`, `volume`, `height`, `motor_power`, `name`, `latitude`, `longitude`, `maxLevel`, `minLevel`, `motorName`) VALUES ('".$_SESSION['username']."','$volume', '$height', '$power', '$name', '$lat', '$lng', '90', '10', '$motorName');";
			
		$res = $conn->query($sqlI);
		//echo "<meta http-equiv='refresh' content='0'>";
		}
	?>
	
<script type="text/javascript" id="googlemap">
var map;
var i;
var marker;
var infowindow;
var messagewindow;
var lat;
var lng;
var contentStringMenu;

      function initMap() {
       var rit = {lat: 17.063576, lng: 74.281733};
        map = new google.maps.Map(document.getElementById('map'), {
          center: rit,
          zoom: 18
        });

        google.maps.event.addListener(map, 'click', function(event) {
		 var mylatlng = event.latLng;
		 lat = mylatlng.lat();
		 lng = mylatlng.lng();
		
		 var contentStringMenu = '<div id="content"><form method="get" action="#"><center><h4><b>Fill all the details</b></h4></center><table><tr><td>Tank Name:</td> <td>&nbsp &nbsp<input type="text" name="tankname" required="required"/> </td> </tr><tr><br><td>Motor Name:</td> <td><br>&nbsp &nbsp<input type="text" name="motorName"/> </td> </tr><tr><td><br>Height:</td> <td><br>&nbsp &nbsp<input type="text" name="height" required="required"/></td></tr><tr><td><br>Volume</td><td><br>&nbsp &nbsp<input type="text" name="volume" required="required"/></td></tr><tr><td><br>Motor power</td><td><br>&nbsp &nbsp<input type="text" name="motor_power" required="required"/></td></tr><tr><td><br>Latitude: </td><td><br>&nbsp &nbsp<input type="text" name="lat" value="'+lat+'"/></td></tr><tr><td><br>Longitude</td><td><br>&nbsp &nbsp<input type="text" name="lng" value="'+lng+'"/></td></tr></table><center><br><br><input type="submit" class="btn btn-success" name="save" value="save"/></center></form></div>';
		 
          infowindow = new google.maps.InfoWindow({
          content: contentStringMenu
        });
		
		  marker = new google.maps.Marker({
            position: event.latLng,
            map: map,
			draggable: true
          });

          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        });
      }
	
</script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDspQc_gy3I-y8RQ5OVkoRZX5YOnZ2cMa4&callback=initMap">
    </script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    
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
</body>

</html>