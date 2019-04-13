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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<style type="text/css">
mark { 
 
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
.modify {
	width: auto;
	float: center;
	height: auto;
	border: 5px solid black;
	
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

}
#myNavbar{
	position: left;

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
                            <li class="active"><a href="tank1.php"> <span class="glyphicon glyphicon-tasks"></span> &nbsp Tank Details</a> </li>
                            <li><a href="setuptank.php"><span class="glyphicon glyphicon-map-marker"></span> &nbsp Setup New Tanks </a> </li>
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
    
    <marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">Manage your tanks with MAPS</marquee>
    
    </div>
	
	<div class="container">
		<section class="tank_details">
		
			<center><h1><font color="black"> Tank Details </font></h1>
	<h2>
			<?php
			require 'connect.php';
			$sqlS = "SELECT `name` FROM `tank_details` WHERE `username`='".$_SESSION['username']."'";
			$result = $conn->query($sqlS);
			if ($result->num_rows > 0) 
			{
				$cnt=0;
				echo '<table>';
				while($row = $result->fetch_assoc()) 
				{	
					if($cnt%2==0)
						echo '<tr>';
				    echo '<td><input type="radio" name="tankName" value='.$row["name"].'>'.$row["name"].'</td>';
				    $cnt++;
				    if($cnt%2==0)
					 echo'</tr>';
				}
				echo '</table>';

			}
			else
			{
				echo '<br>Cant connect to server. Make sure that you have logged in. <br> If not,<a href="login.php"> CLICK HERE</a> to login';
			}
			?>		
			<br>
			<input type="submit" class="btn btn-success" name="select" value="Choose a tank"/>
			&nbsp &nbsp
			<input title="Click to delete a tank" type="submit" class="btn btn-warning" name="delete" value="Delete a tank"/>
			</h2>	
			</center>
	
	<?php

	$tankName=$_POST["tankName"];
	if(($_SESSION["tank"]!=$tankName)&&($tankName!=null))
		{
			$_SESSION["tank"]=$tankName;
		}
		$sql="SELECT * FROM `tank_details` WHERE `name`='".$_SESSION["tank"]."' AND `username`='".$_SESSION['username']."'";
	
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) 
		{
		
			while($row = $result->fetch_assoc()) 
			{	
				$tankName=$row["name"];
				$level=$row["curLevel"];
				$maxLevel=$row["maxLevel"];
				$minLevel=$row["minLevel"];
				$curStatus=$row["curStatus"];
			}
		} 
	if(isset($_POST['select']))
	{
		$sql="SELECT * FROM `tank_details` WHERE `name`='".$_SESSION["tank"]."' AND `username`='".$_SESSION['username']."'";
	
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) 
		{
		
			while($row = $result->fetch_assoc()) 
			{	
				$tankName=$row["name"];
				$capacity=$row["volume"];
				$height=$row["height"];
				$power=$row["motor_power"];
				$motorName=$row["motorName"];
				
			}
		} 
	}

	if(isset($_POST['delete']))
	{
		$sql="DELETE FROM `tank_details` WHERE `name`='".$_SESSION["tank"]."' AND `username`='".$_SESSION['username']."'";
		$result = $conn->query($sql);
		$pval=0;
	$maxi=7;
	echo "<center> Deleting : ".$_SESSION["tank"]." <br><br>";
	echo "<font size='5px'><progress value=".$pval." max=".$maxi." id="."progressBar"."></progress></center>";
	echo "<br><br><br><br><br><br><br><br>";
	$_SESSION['tank']="";
	}	
		
	if(isset($_POST['change']))
	{
				
				$update_query="UPDATE `tank_details` SET `volume`='".$_POST['cap']."', `height`='".$_POST['ht']."', `motorName`='".$_POST['motorName']."',  `motor_power`='".$_POST['pwr']."' WHERE `name`='".$_POST['tankName']."' AND `username`='".$_SESSION['username']."'";
				
				$new_details_update = $conn->query($update_query);
				
				echo "<h2><center><font color = "."yellow".">Tank updated successfully. </font></center></h2>";
				
				
				exit;
	}			

	//$conn->close();


?>
	</center><br><center>
	<table>
	
	<tr>
	<td><font color="black" size=5px> Tank Selected : </td> <td><font color="black" size=5px> <?php echo $_SESSION["tank"] ?></td>
	</tr>
	
	<tr>
	<td><font color="black" size=5px> Capacity ( Lit. ) : </td> <td><font color="black" size=5px> <?php echo $capacity ?></td>
	</tr>
	
	<tr>
	<td><font color="black" size=5px> Height ( metres ) : </td> <td><font color="black" size=5px> <?php echo $height ?></td>
	</tr>
	
	<tr>
	<td><font color="black" size=5px> Serving Motor: </td> <td><font color="black" size=5px> <?php echo $motorName ?></td>
	</tr>

	<tr>
	<td><font color="black" size=5px> Motor Power(hp): </td> <td><font color="black" size=5px> <?php echo $power ?></td>
	</tr>
	
	</table>
	

		
	<h4><input type="submit" class="btn btn-primary" name="modify_tank" value="modify_tank"/></h4>
	</center>
	
	</section>
		
	<section class="modify_tank">
	<?php
	
	
	if($_POST)
	{
		if(isset($_POST['modify_tank']))
		{
					
echo '<div class="modify" style="position:relative;background-color:black;color:black;width:auto;">';
echo '<center><h1><font color="cyan">Enter New Details</font></h1>';
echo '<form action="#" name="modify_tank" method="post" >';
echo '<input value = '.$_SESSION["tank"].' type="text" name="tankName" required />';
echo '<br>';
echo '<input placeholder="Capacity_(Litres)" type="text" name="cap" required />';
echo '<br>';
echo '<input placeholder="Height_of_Tank" type="text" name="ht" required />';
echo '<br>';
echo '<input placeholder="Motor_Name" type="text" name="motorName" required />';
echo '<br>';
echo '<input placeholder="Motor_Power" type="text" name="pwr" required />';
echo '<br>';
echo '<input type="submit" class="btn btn-success" name="change" value="change" /><br>';
echo '<br>';
echo '</form></div>';
echo '</center>';
		}			
}
?>
</section>
 </form>

	<br>
</div>
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
