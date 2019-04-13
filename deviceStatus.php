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
</style>
</head>
<body>
<?php
if(($_SESSION["tank"]!=$tankName)&&$tankName!=NULL)
{
    $_SESSION["tank"]=$tankName;
    echo $_SESSION["tank"];
    
}
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
     <a class="navbar-brand" href="monitor1.php"><img src="images/acQuisorLogo.png"/></a>
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
                            
                            <li><a href="map.php"><span class="glyphicon glyphicon-globe"></span> &nbsp MAPS  </a></li> 
                        </ul>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="deviceStatus.php"><span class="glyphicon glyphicon-flash"></span> Device status</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
 
    </header>
    <div id="scrolltext">
    
    <marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">Real time parameters of product can be seen here</marquee>
    
    </div>
   <div class="col-lg-6 col-md-6 col-sm-6">


    <center>
        <h1>
            <p> <font color="black">Sensor node stats </font></p>
        </h1>
        <h2>
        <?php
           
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
                $battery=$row["battery"];
                $ipaddress=$row["ipaddress"];
                $Wssid=$row["Wssid"];
                $motorIP=$row["motorIP"];
                $AP_motor=$row["AP_motor"];
                $motor_btry=$row["motor_btry"];
                
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
                $battery=$row["battery"];
                $ipaddress=$row["ipaddress"];
                $Wssid=$row["Wssid"];
                
            }
        }

    }

?>
</h2>
        <center>
            <br>
            <table>
            
             <tr>
                <td><font size="5px">Node power: </td> <td><font size="5px">
                    <?php 
                    function pingIP($host)
                    {
                       exec(sprintf('ping -w 5 %s',escapeshellarg($host)),$res,$rval);
                        return $rval === 0;
                    }
                    if(pingIP($ipaddress))
                        echo "ON";
                    else
                        echo "OFF";
                    ?></td>
            </tr>   
             <tr>
                <td><font size="5px">Node name: </td> <td><font size="5px"><?php echo $_SESSION['tank']; ?></td>
            </tr>
            <tr>
                <td><font size="5px">Node IP Address: </td> <td><font size="5px"><a href="http://<?php echo $ipaddress; ?>"><?php echo $ipaddress; ?></a></td>
            </tr>
            <tr>
                <td><font size="5px">Battery level: </td> <td><font size="5px"><?php echo $battery; ?></td>
            </tr>
            <tr>
                <td><font size="5px">Access provider: </td> <td><font size="5px"><?php echo $Wssid;?></td>
            </tr>
        </table>
    </center>
    <br><br>
    </div>
   
   <div class="col-lg-6 col-md-6 col-sm-6">
    <center>
    <h1>
            <p> <font color="black">Motor node stats </font></p>
        </h1>
     <h2>
        <?php
           
            $sqlS = "SELECT `motorName` FROM `tank_details` WHERE `username`='".$_SESSION['username']."'";
            $result = $conn->query($sqlS);
            if ($result->num_rows > 0) 
            {
                $cnt=0;
                echo '<table>';
                while($row = $result->fetch_assoc()) 
                {   
                    $motorName=$row["motorName"];
                    if($cnt%2==0)
                        echo '<tr>';
                
                        echo '<td><input type="radio" name="tankName" value='.$motorName.'>'.$motorName.'</td>';
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
            </h2>
            <br>
            <table>
            
             <tr>
                <td><font size="5px">Node power: </td> <td><font size="5px">
                    <?php 
                    if(pingIP($motorIP))
                        echo "ON";
                    else
                        echo "OFF";
                    ?></td>
            </tr>   
             <tr>
                <td><font size="5px">Node name: </td> <td><font size="5px"><?php echo $motorName; ?></td>
            </tr>
            <tr>
                <td><font size="5px">Node IP Address: </td> <td><font size="5px"><a href="http://<?php echo $motorIP; ?>"><?php echo $motorIP; ?></a></td>
            </tr>
            <tr>
                <td><font size="5px">Battery level: </td> <td><font size="5px"><?php echo $motor_btry; ?></td>
            </tr>
            <tr>
                <td><font size="5px">Access provider: </td> <td><font size="5px"><?php echo $AP_motor;?></td>
            </tr>
        </table>
    </center>
    <br><br>
    </div>
   </div>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    <br>
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