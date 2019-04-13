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
                    <ul class="nav navbar-nav">

                        <li><a href="monitor1.php">Home &nbsp<span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="contact.php">Contact &nbsp<span class="glyphicon glyphicon-envelope"></span></a></li> 
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="glyphicon glyphicon-th-list"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="monitor1.php"><span class="glyphicon glyphicon-eye-open"></span> &nbsp Monitor OBD</a></li>
                            <li><a href="devDetails.php"> <span class="glyphicon glyphicon-tasks"></span> &nbsp Device Details</a> </li>
                            <li class="active"><a href="dtcSearch.php"><span class="glyphicon glyphicon-map-marker"></span> &nbsp Search DTC </a> </li>
                            <li><a href="graph.php"><span class="glyphicon glyphicon-stats"></span> &nbsp Graphical Analysis </a> </li>
                            <li><a href="complaint.php"><span class="glyphicon glyphicon-edit"></span> &nbsp Register Malfunction</a></li
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
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">YOU CAN VIEW YOU TANKS HERE </marquee>
	
	</div>
	
	<div class="container">
	<br>
	<?php
		require 'connect.php';
		$sqlS = "SELECT * from `dtc`";
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
	<div id="dtcDetails">

        <center>
            <h1>Search DTCs from our database!</h1>
        </center>
        
    </div>
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