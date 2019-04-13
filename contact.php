
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<title>SpäterTech WaterTank</title>
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

}
.smallbox {
	width: auto;
    min-width: 10px;
    margin: auto;
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
#email{
	width: auto;
	background-color:black;
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
.navbar {
 
    background-color: black;
}

.grid-container {
  display: grid;
  width: auto;
  justify-content: center;
  grid-template-columns: auto auto auto;/*Make the grid smaller than the container*/
  grid-gap: 30px;
  border: 5px solid black;
  padding: 10px;
}
.grid-container > div {
    border: 5px dotted black;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
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
<form id="form1" runat="server" method="post" action="phpmailingfolder/enquiry.php">
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
                        <li class="active"><a href="contact.php">Contact &nbsp<span class="glyphicon glyphicon-envelope"></span></a></li> 
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
                        <li><a href="deviceStatus.php"><span class="glyphicon glyphicon-flash"></span> Device status</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
 
    </header>

   <div class="container">
        <div class="row ">

      <div class="col-lg-6 col-md-6 head-text">
   
      <center><br>
        <font size= 4px color="black">Please email us on these IDs.<br>We will get back to you shortly.<br>Fill the form for any enquiry</font>
        <br><br>
        <div id="email"> <a href="mailto:1505051@ritindia.edu"><font color="cyan" size=5px>1505051@ritindia.edu</font></a><br><br>
            <a href="mailto:1505001@ritindia.edu"><font color="cyan" size=5px>1505001@ritindia.edu</font></a>
        </div> 
       </center>
    
                </div>
            <div class="col-lg-6 col-md-6">
                        <div class="div-trans text-center">
                           
                                                  
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                               <h2 style="color:WHITE" align="center" ><b>Contact For Product Enquiry / purchase </b>
                          </h2> 
                                <form method="post" action="phpmailingfolder/enquiry.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Contact No" name="mobile">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email"  name="email">
                                </div>
                                <div class="form-group">
                                  <textarea cols="500" class="form-control" required="required" placeholder="Description" name="desc"></textarea>
                                </div>
                                <div class="form-group" >
                                    <button type="submit" class="btn btn-success btn-block btn-lg" >SUBMIT</button>
                                </div>
                                </form>
                            </div>

                        </div>
                  </div>
        </div>
    </div>
	</font>	
    
    <!-- Back To Top -->

    <!-- /top-link-block -->
    <!-- Jscript -->

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    </form>
	<footer>
	<div id="msg">
		<center>
			<font color="cyan"> © Designed & Developed by acQuisor </font>
		</center>
	</div>
	<div id="contact">
		<center>
			<font color="cyan"> +918379888900 </font>
		</center>
	</div>
	</footer>
</body>
</html>
