<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="acQuisor" />
<title>accQuisor OBD2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
<style type="text/css">

mark { 
    background-color: black;
}
form {
    border: "5px" solid #f1f1f1;
}
body {
  background-image: url(p2.jpg);
}
input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
}
.loginform{

	height: auto;
	width: auto;
	float: center;
	border: 5px solid black;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
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
.container {
	width: auto;
    min-width: 100px;
    margin: auto;
}

span.psw {
    float: right;
    padding-top: 16px;
}
#msg {
	width: 100%;
	float: left;
	background-color:black;

}

#contact {
	width: 100%;
	float: right;
	background-color:black;
	
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#scrolltext{
	width: 100%;
	height: auto;
	float: top;
	background-color: black;
	
}
.navbar{
    background-color: black;
}

footer {
    width: auto;
    height: auto;
    background-color:black;
    
}
</style>

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
            <a class="navbar-brand" href="index.html"><font color="cyan"><img src="images/acQuisorLogo.png"/></font></a>
              </div><br>
              <div class="collapse navbar-collapse" id="myNavbar">
                <center><font color="cyan">Last edit: APR 13, 3:21AM </font></center>
                <ul class="nav navbar-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="contactHome.php">Contact</a></li>  
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                
                </div>
            </div><!--/.container-->
      </nav><!--/nav-->
    </header>
	
	<div id="scrolltext">
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">Login to your console here. Register if you are new user.</marquee>
	
	</div>
	
<center><br>
<form action="script/login_reg_user.php" method="post">
  <div class="loginform">
    <img src="img_avatar2.png" alt="Avatar" class="avatar"/><br>
	<label><b>Username: &nbsp</b></label><input type="text" placeholder="Enter Username" name="uname" required><br>

    <label><b>Password: &nbsp</b></label><input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <button type="submit">Login</button><br><br>
   
    <a href="#"> Forgot password? </a> || 
	<a href="index.html"><font color="red"> Cancel </a></font><br><br>
    
  </div>
  </center>
  
</form>
<br>
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

