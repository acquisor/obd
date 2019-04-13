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
	<!--<META HTTP-EQUIV=refresh content=3; URL='#' />-->
<title>Water acQuisor</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
 
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
	
}

#contact {
	width: 100%;
	float: right;
	background-color:black;
	
}

#scrolltext{
	width: 100%;
	height: auto;
	float: top;
	background-color: black;
	
}
#myNavbar{
	position: left;
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

#map{
	height: 520px;
}
#data{
	display: none;
}
#content{
	
    line-height: 1;
    width: auto;

}
.navbar {
    background-color: black;
}

</style>
</head>
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
                            <li><a href="setuptank.php"><span class="glyphicon glyphicon-map-marker"></span> &nbsp Setup New Tanks </a> </li>
                            <li><a href="consumption1.php"><span class="glyphicon glyphicon-stats"></span> &nbsp Consumption </a> </li>
                            <li><a href="complaint.php"><span class="glyphicon glyphicon-edit"></span> &nbsp Complaint</a></li>
                            
                            <li class="active"><a href="map.php"><span class="glyphicon glyphicon-globe"></span> &nbsp MAPS  </a></li> 
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
    
    <marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">Manage your tanks with MAPS</marquee>
    
    </div>

	<div class="container">
	<br>
	<?php
		require 'connect.php';
		$sqlS = "SELECT * from `tank_details` WHERE `username`='".$_SESSION['username']."' ";
		$result = $conn->query($sqlS);
		$tanks = array();
		if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{	
                    $motorIP=$row['motorIP'];
					array_push($tanks,$row);
				}
		
			}
				$tanks = json_encode($tanks, true);
				echo '<div id = "data">'. $tanks . '</div>';
	?> 
	<div id="map"><br><br><br><h1><font color="yellow">Connecting to internet</font></h1><br><br><br><p>Try reconnecting to internet</div>
	</div>
	
	<?php
		if($_POST)
		{	
			$status;
			$maxlvl = $_POST["maxlevel"];
			$minlvl = $_POST["minlevel"];
			$name = $_POST["tankname"];
			
            if(isset($_POST["start"]))
			{
				$status="on";
                $motorStatus = @file_get_contents('http://'.$motorIP.'/switch?stat=on');
                if($motorStatus===FALSE)
                {
                    echo '<script language="javascript">alert("Seems like motor is disconnected.") </script>';
                    $motorStatus='-';
                }
			}
			else if(isset($_POST["stop"]))
			{
				$status="off";
                $motorStatus = @file_get_contents('http://'.$motorIP.'/switch?stat=off');
                if($motorStatus===FALSE)
                {
                    echo '<script language="javascript">alert("Seems like motor is disconnected.") </script>';
                    $motorStatus='-';
                }
			}
            else if(isset($_POST["delete"]))
            {
                $sql="DELETE FROM `tank_details` WHERE `name`='$name';";
                $result = $conn->query($sql);
            }

            $sqlU = "UPDATE `tank_details` SET `motorStatus`='$motorStatus', `curStatus`='$status', `maxLevel`='$maxlvl', `minLevel`='$minlvl' WHERE `name`='$name';";
		
		$res = $conn->query($sqlU);
		echo "<meta http-equiv='refresh' content='0'>";
		}
	?>

<br>
	
<script type="text/javascript" id="googlemap">
var map;
var i;
var geocoder;
var level;
var icons = ['tank0.jpg','tank10.jpg','tank20.jpg','tank30.jpg','tank40.jpg','tank50.jpg','tank60.jpg','tank70.jpg','tank80.jpg','tank90.jpg','tank100.jpg'];
function initMap() {
    var rit = {lat: 17.063576, lng: 74.281733};
    map = new google.maps.Map(document.getElementById('map'), {
		zoom: 18,
        center: rit,
		gestureHandling: 'cooperative'
    });
	
	var tdata = JSON.parse(document.getElementById('data').innerHTML);
	
	plotTMarkers(tdata);
	
	function plotTMarkers(tdata){
		
		var infowind = new google.maps.InfoWindow({ maxHeight: 700 });
		
		Array.prototype.forEach.call(tdata,function(data){
			i=0;
		if(data.curLevel>10&&data.curLevel<=20)
			i=1;
		if(data.curLevel>20&&data.curLevel<=30)
			i=2;
		if(data.curLevel>30&&data.curLevel<=40)
			i=3;
		if(data.curLevel>40&&data.curLevel<=50)
			i=4;
		if(data.curLevel>50&&data.curLevel<=60)
			i=5;
		if(data.curLevel>60&&data.curLevel<=70)
			i=6;
		if(data.curLevel>70&&data.curLevel<=80)
			i=7;
		if(data.curLevel>80&&data.curLevel<=90)
			i=8;
		if(data.curLevel>90&&data.curLevel<=100)
			i=9;
		if(data.curLevel==100)
			i=10;

		var contentString = '<div id="content"><center><font size=4px><b>'+ data.name +'</b></font><br><br></center><font size=3px> Water level: <b>'+ data.curLevel+'</b><br><br>Current Status: <b>'+ data.curStatus+' </b></font><br><br><form method="post" action="#"><input type="hidden" name="tankname" value='+data.name+'><table><tr><td> Max. Level: </td><td> <input type="text" class="form-control" required="required" value=' + data.maxLevel +' size="1" name="maxlevel"></td></tr><tr><td> &nbsp </td></tr><tr><td>Min. Level: </td><td> <input type="text" class="form-control" required="required" value='+data.minLevel+' size="1" name="minlevel"></td></tr></table><button title="Click to start filling tank" type="submit" name="start" class="btn btn-primary"><span style="padding:4px" class="glyphicon glyphicon-play"></span></button> &nbsp <button title="Click to stop filling this tank" class="btn btn-primary" type="submit" name="stop"><span style="padding:4px;" class="glyphicon glyphicon-stop"></span></button> &nbsp <button title="Click to delete this tank" type="submit" name="delete" class="btn btn-primary"><span style="padding:4px" class="glyphicon glyphicon-trash"></span></button></form></div>';
		
		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(data.latitude, data.longitude),
		map:map,
		icon: icons[i]
		});
		
		marker.addListener('click',function(){
			infowind.setContent(contentString);
			infowind.open(map,marker);
		});
		});
	}
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