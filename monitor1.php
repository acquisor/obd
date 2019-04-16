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
	<META HTTP-EQUIV="refresh" content="8" />

<title>acQuisor OBD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
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
#myNavbar{
	position: left;
}

#progressBar{
	background: green;
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

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style></head>
<body>

<?php
require 'connect.php';
?>
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
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">This page will automatilcally refresh in 8 seconds</marquee>
	
	</div>
	<div class="container">
		
		<div class="col-lg-6 col-md-6 col-sm-6">
		<section class="tank_details">

		
			<center><h2><font color="black"> Monitor OBD data </font></h2></center>
			<center>
			<h2>

			<?php
			
			$sqlS = "SELECT * FROM `obd_log` WHERE `user`='".$_SESSION['username']."' ORDER BY CONCAT(`date`,`time`) DESC LIMIT 1;";
			$result = $conn->query($sqlS);
			if ($result->num_rows > 0) 
			{	
				while($row = $result->fetch_assoc()) 
				{	
					$speed_kmph=$row["speed"];
					$rpm=$row["rpm"];
					$load_per=$row["engineload"];
					$throttle_per=$row["throttle"];
				}
				
			}
			else
			{
				echo '<br>Error-NoUserOrDataFound-Check the query being passed.';
			}
			
			?>		
		
			</h2>	

	
	<table>
	<tr>
	<td><font size="5px"> Engine RPM : </td> <td><font size="5px"><?php echo $rpm ?></td>
	</tr>
	
	<tr>
	<td><font size="5px"> Vehicle speed (kmph) : </td> <td><font size="5px"> <?php echo $speed_kmph ?> </td>
	</tr>
	
	<tr>
	<td><font size="5px"> Engine Load (%) : </td> <td><font size="5px"> <?php echo $load_per ?> </td>
	</tr>
	
	<tr>
	<td><font size="5px"> Throttle pos (%) : </td> <td><font size="5px"> <?php echo $throttle_per ?> </td>
	</tr>

	</table>
	<br>
	
	</center>
	<br>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6" >
	<center>

	<?php

	$sqlS = "SELECT * FROM `scanner_details` WHERE `user`='".$_SESSION['username']."';";
	$result = $conn->query($sqlS);
	if ($result->num_rows > 0) 
	{	
		while($row = $result->fetch_assoc()) 
		{	
			$scannerIP=$row["scannerIP"];
		}
		
	}

	if($_POST['clear'])
	{
		$dtcStatus = @file_get_contents('http://'.$scannerIP.'/dtcClear?clear=1');
		if($dtcStatus===FALSE)
		{
			echo '<script language="javascript">alert("Seems like scanner is disconnected.") </script>';
		}
		else if($dtcStatus=="ok")
		{
			$update_query="UPDATE `dtc_log` SET `status`='cleared' WHERE `user`='".$_SESSION['username']."';";
			$conn->query($update_query);

		}
		else
		{
			echo '<script language="javascript">alert("DTC not cleared due to hardware failure.") </script>';
		}
		
	}
	?>

	<h2><font color="black">Diagnostic Trouble Codes</h2></font>
	<font size=4px>History
	<?php
	$pending_counter=0;

	$sqlS = "SELECT * FROM `dtc_log` WHERE `user`='".$_SESSION['username']."' ORDER BY `status` DESC;";
	$result = $conn->query($sqlS);
	if ($result->num_rows > 0) 
	{	
		echo "<table>";
		echo "<tr><td>DTC</td><td>Status</td><td>timestamp</td></tr>";
		while($row = $result->fetch_assoc()) 
		{	

			$code=$row["code"];
			$status=$row["status"];
			$timestamp=$row["timestamp"];

			echo "<tr><td><a href='dtcsearch.php?code=$code'> $code </a></td> <td> $status</td> <td> $timestamp </td></tr>";
		}
		echo "</table>";
	}

	?>
	</font>
	<br>
	
	<input title="Click to clear selected DTC(s)" type="submit" class="btn btn-warning" name="clear" value="clear"/> 
	
	</center>

	</div>
	</div>
	<br><br>
	
    <!-- Jscript -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    </form>

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
