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
	
	<marquee behavior="scroll" direction="left" style="color:cyan;font-size:40;font-family:times new roman">YOU CAN VIEW GENERIC DTCs HERE</marquee>
	
	</div>
	
	<div class="container">
		<br>
		<div id="dtcDetails">

	        <center>
	            <h1>Search DTCs from our database!</h1>
	        </center>
	        <div class="row">
			    <div class="col-xs-12 col-sm-6">
			        <div class="panel-group launch" id="accordion-one" role="tablist" aria-multiselectable="true">
			          <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingPCodes">
			              <h4 class="panel-title">
			                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePCodes" aria-expanded="true" aria-controls="collapsePCodes">
			                  P-Codes
			                </a>
			              </h4>
			            </div>
			            <div id="collapsePCodes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPCodes">
			              <div class="panel-body">
			                <p>P0010 A camshaft position actuator circuit (bank 1)</p>
			                <p>P0011 A camshaft position - timing over advanced or system performance (Bank 1)</p>
			                <p>P0012 A camshaft position - timing over retarded (Bank 1)</p>
			                <p>P0013 B camshaft position - actuator circuit (Bank 1)</p>
			                <p>P0014 B camshaft position - timing over advanced or system performance (Bank 1)</p>
			                <p>P0015 B camshaft position - timing over retarded (Bank 1)</p>
			                <p>P0016 - Crankshaft Position Camshaft Position Correlation Bank 1 Sensor A</p>
			                <p>P0020 A camshaft position actuator circuit (Bank 2)</p>
			                <p>P0021 A camshaft postion - timing over-advanced or system performance (Bank 2)</p>
			                <p>P0022 A camshaft position - timing over retarded (Bank 2)</p>
			                <p>P0023 B camshaft position - actuator circuit (Bank 2)</p>
			                <p>P0024 B camshaft position - timing over advanced or system performance (Bank 2)</p>
			                <p>P0025 B camshaft position - timing over retaded (Bank 2)</p>
			                <p>P0030 H02S heater control circuit (Bank 1 sensor 1)</p>
			                <p>P0031 H02S heater control circuit low (Bank 1 sensor 1)</p>
			                <p>P0032 H02S heater control circuit high (Bank 1 sensor 1)</p>
			                <p>P0033 Turbo charger bypass valve control circuit</p>
			                <p>P0034 Turbo charger bypass valve control circuit low</p>
			                <p>P0035 Turbo charger bypass valve control circuit high</p>
			                <p>P0036 H02S heater control circuit (Bank 1 sensor 2)</p>
			                <p>P0037 H02S heater control circuit low (Bank 1 sensor 2)</p>
			                <p>P0038 H02S heater control circuit high (Bank 1 sensor 2)</p>
			                <p>P0042 H02S heater control circuit (Bank 1 sensor 3)</p>
			                <p>P0043 H02S heater control circuit Low (Bank 1 sensor 3)</p>
			                <p>P0044 H02S heater control circuit High (Bank 1 sensor 3)</p>
			                <p>P0050 H02S heater control circuit (Bank 2 sensor 1)</p>
			                <p>P0051 H02S heater control circuit Low (Bank 2 sensor 1)</p>
			                <p>P0052 H02S heater control circuit High (Bank 2 sensor 1)</p>
			                <p>P0056 H02S heater control circuit (Bank 2 sensor 2)</p>
			                <p>P0057 H02S heater control circuit Low (Bank 2 sensor 2)</p>
			                <p>P0058 H02S heater control circuit High (Bank 2 sensor 2)</p>
			                <p>P0062 H02S heater control circuit (Bank 2 sensor 3)</p>
			                <p>P0063 H02S heater control circuit Low (Bank 2 sensor 3)</p>
			                <p>P0064 H02S heater control circuit High (Bank 2 sensor 3)</p>
			                <p>P0065 Air assisted injector control range / performance</p>
			                <p>P0066 Air assisted injector control circuit or circuit low</p>
			                <p>P0067 Air assisted injector control circuit high</p>
			                <p>P0070 Ambient air temperature sensor circuit</p>
			                <p>P0071 Ambient air temperature sensor range/performance</p>
			                <p>P0072 Ambient air temperature sensor circuit low input</p>
			                <p>P0073 Ambient air temperature sensor circuit high input</p>
			                <p>P0074 Ambient air temperature sensor circuit intermittent</p>
			                <p>P0075 Intake valve control solenoid circuit (Bank 1)</p>
			                <p>P0076 Intake valve control solenoid circuit low (Bank 1)</p>
			                <p>P0077 Intake valve control solenoid circuit high (Bank 1)</p>
			                <p>P0078 Exhaust valve control solenoid circuit (Bank 1)</p>
			                <p>P0079 Exhaust valve control solenoid circuit low (Bank 1)</p>
			                <p>P0080 Exhaust valve control solenoid circuit high (Bank 1)</p>
			                <p>P0081 Intake valve control solenoid circuit (Bank 2)</p>
			                <p>P0082 Intake valve control solenoid circuit low (Bank 2)</p>
			                <p>P0083 Intake valve control solenoid circuit high (Bank 2)</p>
			                <p>P0084 Exhaust valve control solenoid circuit (Bank 2)</p>
			                <p>P0085 Exhaust valve control solenoid circuit low (Bank 2)</p>
			                <p>P0086 Exhaust valve control solenoid circuit high (Bank 2)</p>
			                <p>P0030 - Heated Oxygen Sensor (H02S) Heater Control Circuit Bank 1 Sensor 1</p>
			                <p>P0031 - Heated Oxygen Sensor (HO2S) Heater Circuit Low Voltage Bank 1 Sensor 1</p>
			                <p>P0032 - Heated Oxygen Sensor (HO2S) Heater Circuit High Voltage Bank 1 Sensor 1</p>
			                <p>P0036 - Heated Oxygen Sensor (HO2S) Heater Control Circuit Bank 1 Sensor 2</p>
			                <p>P0037 - Heated Oxygen Sensor (HO2S) Heater Circuit Low Voltage Bank 1 Sensor 2</p>
			                <p>P0038 - Heated Oxygen Sensor (HO2S) Heater Circuit High Voltage Bank 1 Sensor 2</p>
			                <p>P0056 - Heated Oxygen Sensor (HO2S) Heater Circuit Bank 2 Sensor 2</p>
			                <p>P0057 - Heated Oxygen Sensor (HO2S) Heater Circuit Low Voltage Bank 2 Sensor 2</p>
			                <p>P0058 - Heated Oxygen Sensor (HO2S) Heater Circuit High Voltage Bank 2 Sensor 2</p>
			                <p>P0068 - Throttle Body Airflow Performance (PCM)</p>
			                <p>P0100 - MAF Sensor Circuit Insufficient Activity</p>
			                <p>P0101 - Mass Air Flow (MAF) Sensor Performance</p>
			                <p>P0102 - Mass Air Flow (MAF) Sensor Circuit Low Frequency</p>
			                <p>P0103 - Mass Air Flow (MAF) Sensor Circuit High Frequency</p>
			                <p>P0104 - Mass Air Flow Circuit Intermittent</p>
			                <p>P0105 - MAP Sensor Circuit Insufficient Activity</p>
			                <p>P0106 - Manifold Absolute Pressure (MAP) System Performance</p>
			                <p>P0107 - Manifold Absolute Pressure (MAP) Sensor Circuit Low Voltage</p>
			                <p>P0108 - Manifold Absolute Pressure (MAP) Sensor Circuit High Voltage</p>
			                <p>P0109 - Manifold Absolute Pressure Circuit Intermittent</p>
			                <p>P0110 - Intake Air Temperature (IAT) Sensor Circuit</p>
			                <p>P0111 - Intake Air Temperature (IAT) Sensor Performance</p>
			                <p>P0112 - Intake Air Temperature (IAT) Sensor Circuit Low Voltage</p>
			                <p>P0113 - Intake Air Temperature (IAT) Sensor Circuit High Voltage</p>
			                <p>P0114 - Intake Air Temperature Circuit Intermittent</p>
			                <p>P0115 - Engine Coolant Temperature (ECT) Sensor Circuit</p>
			                <p>P0116 - Engine Coolant Temperature (ECT) Sensor Performance</p>
			                <p>P0117 - Engine Coolant Temperature (ECT) Sensor Circuit Low Voltage</p>
			                <p>P0118 - Engine Coolant Temperature (ECT) Sensor Circuit High Voltage</p>
			                <p>P0119 - Engine Coolant Temperature Circuit Intermittent</p>
			                <p>P0120 - TP System Performance</p>
			                <p>P0121 - TP Sensor Circuit Insufficient Activity</p>
			                <p>P0122 - Throttle Position (TP) Sensor Circuit Low Voltage</p>
			                <p>P0123 - Throttle Position (TP) Sensor Circuit High Voltage</p>
			                <p>P0124 - Throttle Position Sensor 1 Circuit Intermittent</p>
			                <p>P0125 - Engine Coolant Temperature (ECT) Insufficient for Closed Loop Fuel Control</p>
			                <p>P0126 - Insufficient ECT for Stable Operation</p>
			                <p>P0128 - Coolant Thermostat Below Thermostat Regulating Temperature</p>
			                <p>P0130 - Heated Oxygen Sensor (HO2S) Circuit Closed Loop (CL) Performance Bank 1 Sensor 1</p>
			                <p>P0131 - Heated Oxygen Sensor (HO2S) Circuit Low Voltage Bank 1 Sensor 1</p>
			                <p>P0132 - Heated Oxygen Sensor (HO2S) Circuit High Voltage Bank 1 Sensor 1</p>
			                <p>P0133 - Heated Oxygen Sensor (HO2S) Slow Response Bank 1 Sensor 1</p>
			                <p>P0134 - Heated Oxygen Sensor (HO2S) Circuit Insufficient Activity Bank 1 Sensor 1</p>
			                <p>P0135 - Heated Oxygen Sensor (HO2S) Heater Performance Bank 1 Sensor 1</p>
			                <p>P0136 - Heated Oxygen Sensor (HO2S) Circuit Bank 1 Sensor 2</p>
			                <p>P0137 - Heated Oxygen Sensor (HO2S) Circuit Low Voltage Bank 1 Sensor 2</p>
			                <p>P0138 - Heated Oxygen Sensor (HO2S) Circuit High Voltage Bank 1 Sensor 2</p>
			                <p>P0139 - Heated Oxygen Sensor (HO2S) Slow Response Bank 1 Sensor 2</p>
			                <p>P0140 - Heated Oxygen Sensor (HO2S) Circuit Insufficient Activity Bank 1 Sensor 2</p>
			                <p>P0141 - Heated Oxygen Sensor (HO2S) Heater Performance Bank 1 Sensor 2</p>
			                <p>P0142 - Heated Oxygen Sensor (HO2S) Circuit Bank 1 Sensor 3</p>
			                <p>P0143 - Heated Oxygen Sensor (HO2S) Circuit Low Voltage Bank 1 Sensor 3</p>
			                <p>P0144 - Heated Oxygen Sensor (HO2S) Circuit High Voltage Bank 1 Sensor 3</p>
			                <p>P0145 - Heated Oxygen Sensor (HO2S) Circuit Bank 1 Sensor 2 Slow Response</p>
			                <p>P0146 - Heated Oxygen Sensor (HO2S) Circuit Insufficient Activity Bank 1 Sensor 3</p>
			                <p>P0147 - Heated Oxygen Sensor (HO2S) Heater Performance Bank 1 Sensor 3</p>
			                <p>P0150 - Heated Oxygen Sensor (HO2S) Circuit Closed Loop (CL) Performance Bank 2 Sensor 1</p>
			                <p>P0151 - Heated Oxygen Sensor (HO2S) Circuit Low Voltage Bank 2 Sensor 1</p>
			                <p>P0152 - Heated Oxygen Sensor (HO2S) Circuit High Voltage Bank 2 Sensor 1</p>
			                <p>P0153 - Heated Oxygen Sensor (HO2S) Slow Response Bank 2 Sensor 1</p>
			                <p>P0154 - Heated Oxygen Sensor (HO2S) Circuit Insufficient Activity Bank 2 Sensor 1</p>
			                <p>P0155 - Heated Oxygen Sensor (HO2S) Heater Performance Bank 2 Sensor 1</p>
			                <p>P0156 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 2</p>
			                <p>P0157 - Heated Oxygen Sensor (HO2S) Circuit Low Voltage Bank 2 Sensor 2</p>
			                <p>P0158 - Heated Oxygen Sensor (HO2S) Circuit High Voltage Bank 2 Sensor 2</p>
			                <p>P0159 - Heated Oxygen Sensor (HO2S) Slow Response Bank 2 Sensor 2</p>
			                <p>P0160 - Heated Oxygen Sensor (HO2S) Circuit Insufficient Activity Bank 2 Sensor 2</p>
			                <p>P0161 - Heated Oxygen Sensor (HO2S) Heater Performance Bank 2 Sensor 2</p>
			                <p>P0162 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 3</p>
			                <p>P0163 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 3 Low Voltage</p>
			                <p>P0164 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 3 High Voltage</p>
			                <p>P0165 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 3 Slow Response</p>
			                <p>P0166 - Heated Oxygen Sensor (HO2S) Circuit Bank 2 Sensor 3 No Activity Detected</p>
			                <p>P0167 - Heated Oxygen Sensor (HO2S) Heater Circuit Bank 2 Sensor 3</p>
			                <p>P0169 - Fuel Composition Sensor</p>
			                <p>P0170 - Fuel Trim Bank 1</p>
			                <p>P0171 - Fuel Trim System Lean Bank 1</p>
			                <p>P0172 - Fuel Trim System Rich Bank 1</p>
			                <p>P0173 - Fuel Trim Bank 2</p>
			                <p>P0174 - Fuel Trim System Lean Bank 2</p>
			                <p>P0175 - Fuel Trim System Rich Bank 2</p>
			                <p>P0176 - Fuel Composition Sensor Circuit</p>
			                <p>P0177 - Fuel Composition Sensor Circuit Performance</p>
			                <p>P0178 - Fuel Composition Sensor Circuit Low Voltage</p>
			                <p>P0179 - Fuel Composition Sensor Circuit High Voltage</p>
			                <p>P0180 - Fuel Temperature Sensor 1 Circuit</p>
			                <p>P0181 - Fuel Temp. Sensor 1 Circuit Performance</p>
			                <p>P0182 - Fuel Temperature Sensor Circuit Low Voltage</p>
			                <p>P0183 - Fuel Temperature Sensor Circuit High Voltage</p>
			                <p>P0184 - Fuel Temperature Sensor 1 Circuit Intermittent</p>
			                <p>P0185 - Fuel Temperature Sensor 2 Circuit</p>
			                <p>P0186 - Fuel Temp. Sensor 2 Circuit Performance</p>
			                <p>P0187 - Fuel Temperature Sensor 2 Circuit Low Voltage</p>
			                <p>P0188 - Fuel Temperature Sensor 2 Circuit High Voltage</p>
			                <p>P0189 - Fuel Temperature Sensor 2 Circuit Intermittent</p>
			                <p>P0190 - Fuel Rail Pressure Sensor Circuit</p>
			                <p>P0191 - Fuel Rail Pressure Sensor Circuit Performance</p>
			                <p>P0192 - Fuel Rail Pressure Sensor Circuit Low Voltage</p>
			                <p>P0193 - Fuel Rail Pressure Sensor Circuit High Voltage</p>
			                <p>P0194 - Fuel Rail Pressure Sensor Circuit Intermittent</p>
			                <p>P0195 - Engine Oil Temperature Sensor</p>
			                <p>P0196 - Engine Oil Temperature Sensor Performance</p>
			                <p>P0197 - Engine Oil Temperature Sensor Low Voltage</p>
			                <p>P0198 - Engine Oil Temperature Sensor High Voltage</p>
			                <p>P0199 - Engine Oil Temperature Sensor Intermittent</p>
			                <p>P0200 - Injector Control Circuit</p>
			                <p>P0201 - Injector 1 Control Circuit</p>
			                <p>P0202 - Injector 2 Control Circuit</p>
			                <p>P0203 - Injector 3 Control Circuit</p>
			                <p>P0204 - Injector 4 Control Circuit</p>
			                <p>P0205 - Injector 5 Control Circuit</p>
			                <p>P0206 - Injector 6 Control Circuit</p>
			                <p>P0207 - Injector 7 Control Circuit</p>
			                <p>P0208 - Injector 8 Control Circuit</p>
			                <p>P0209 - Injector 9 Control Circuit</p>
			                <p>P0210 - Injector 10 Control Circuit</p>
			                <p>P0211 - Injector 11 Control Circuit</p>
			                <p>P0212 - Injector 12 Control Circuit</p>
			                <p>P0213 - Cold Start Injector 1</p>
			                <p>P0214 - Cold Start Injector 2</p>
			                <p>P0215 - Engine Shutoff Control Circuit</p>
			                <p>P0216 - Injection Timing Control Circuit</p>
			                <p>P0217 - Engine Overtemp Condition</p>
			                <p>P0218 - Transmission Fluid Overtemperature</p>
			                <p>P0219 - Engine Overspeed Condition</p>
			                <p>P0220 - APP Sensor 2 Circuit</p>
			                <p>P0221 - APP (Throttle Position) Sensor 2 Circuit Performance</p>
			                <p>P0222 - APP (Throttle Position) Sensor 2 Circuit Low Voltage</p>
			                <p>P0223 - APP (Throttle Position) Sensor 2 Circuit High Voltage</p>
			                <p>P0224 - Throttle Position Sensor 2 Intermittent</p>
			                <p>P0225 - APP Sensor 3 Circuit</p>
			                <p>P0226 - APP Sensor 3 Circuit Performance</p>
			                <p>P0227 - APP Sensor 3 Circuit Low Voltage</p>
			                <p>P0228 - APP Sensor 3 Circuit High Voltage</p>
			                <p>P0229 - Throttle Position Sensor 3 Intermittent</p>
			                <p>P0230 - Fuel Pump Relay Control Circuit</p>
			                <p>P0231 - Fuel Pump Feedback Circuit Low Voltage</p>
			                <p>P0232 - Fuel Pump Feedback Circuit High Voltage</p>
			                <p>P0233 - Fuel Pump Secondary Circuit Intermittent</p>
			                <p>P0234 - Turbocharger Engine Overboost Condition</p>
			                <p>P0235 - Turbocharger Boost Sensor 1 Circuit</p>
			                <p>P0236 - Turbocharger Boost System</p>
			                <p>P0237 - Turbocharger Boost Sensor Circuit Low Voltage</p>
			                <p>P0238 - Turbocharger Boost Sensor Circuit High Voltage</p>
			                <p>P0239 - Turbocharger Boost Sensor 2 Circuit</p>
			                <p>P0240 - Turbocharger Boost Sensor 2 Performance</p>
			                <p>P0241 - Turbocharger Boost Sensor 2 Circuit Low Voltage</p>
			                <p>P0242 - Turbocharger Boost Sensor 2 Circuit High Voltage</p>
			                <p>P0243 - Turbocharger Wastegate Solenoid 1</p>
			                <p>P0244 - Turbocharger Wastegate Solenoid 1 Performance</p>
			                <p>P0245 - Turbocharger Wastegate Solenoid 1 Low Voltage</p>
			                <p>P0246 - Turbocharger Wastegate Solenoid 1 High Voltage</p>
			                <p>P0247 - Turbocharger Wastegate Solenoid 2</p>
			                <p>P0248 - Turbocharger Wastegate Solenoid 2 Performance</p>
			                <p>P0249 - Turbocharger Wastegate Solenoid 2 Low Voltage</p>
			                <p>P0250 - Turbocharger Wastegate Solenoid 2 High Voltage</p>
			                <p>P0251 - Injection Pump Fuel Metering Control "A" Malfunction (Cam/Rotor/Injector)</p>
			                <p>P0252 - Injection Pump Fuel Metering Control "A" Range/Performance (Cam/Rotor/Injector)</p>
			                <p>P0253 - Injection Pump Fuel Metering Control "A" Low (Cam/Rotor/Injector)</p>
			                <p>P0254 - Injection Pump Fuel Metering Control "A" High (Cam/Rotor/Injector)</p>
			                <p>P0255 - Injection Pump Fuel Metering Control "A" Intermittent (Cam/Rotor/Injector)</p>
			                <p>P0256 - Injection Pump Fuel Metering Control "B" Malfunction (Cam/Rotor/Injector)</p>
			                <p>P0257 - Injection Pump Fuel Metering Control "B" Range/Performance (Cam/Rotor/Injector)</p>
			                <p>P0258 - Injection Pump Fuel Metering Control "B" Low (Cam/Rotor/Injector)</p>
			                <p>P0259 - Injection Pump Fuel Metering Control "B" High (Cam/Rotor/Injector)</p>
			                <p>P0260 - Injection Pump Fuel Metering Control "B" Intermittent (Cam/Rotor/Injector)</p>
			                <p>P0261 - Cylinder 1 Injector Circuit Low</p>
			                <p>P0262 - Cylinder 1 Injector Circuit High</p>
			                <p>P0263 - Cylinder 1 Contribution/Balance Fault</p>
			                <p>P0264 - Cylinder 2 Injector Circuit Low</p>
			                <p>P0265 - Cylinder 2 Injector Circuit High</p>
			                <p>P0266 - Cylinder 2 Contribution/Balance Fault</p>
			                <p>P0267 - Cylinder 3 Injector Circuit Low</p>
			                <p>P0268 - Cylinder 3 Injector Circuit High</p>
			                <p>P0269 - Cylinder 3 Contribution/Balance Fault</p>
			                <p>P0270 - Cylinder 4 Injector Circuit Low</p>
			                <p>P0271 - Cylinder 4 Injector Circuit High</p>
			                <p>P0272 - Cylinder 4 Contribution/Balance Fault</p>
			                <p>P0273 - Cylinder 5 Injector Circuit Low</p>
			                <p>P0274 - Cylinder 5 Injector Circuit High</p>
			                <p>P0275 - Cylinder 5 Contribution/Balance Fault</p>
			                <p>P0276 - Cylinder 6 Injector Circuit Low</p>
			                <p>P0277 - Cylinder 6 Injector Circuit High</p>
			                <p>P0278 - Cylinder 6 Contribution/Balance Fault</p>
			                <p>P0279 - Cylinder 7 Injector Circuit Low</p>
			                <p>P0280 - Cylinder 7 Injector Circuit High</p>
			                <p>P0281 - Cylinder 7 Contribution/Balance Fault</p>
			                <p>P0282 - Cylinder 8 Injector Circuit Low</p>
			                <p>P0283 - Cylinder 8 Injector Circuit High</p>
			                <p>P0284 - Cylinder 8 Contribution/Balance Fault</p>
			                <p>P0285 - Cylinder 9 Injector Circuit Low</p>
			                <p>P0286 - Cylinder 9 Injector Circuit High</p>
			                <p>P0287 - Cylinder 9 Contribution/Balance Fault</p>
			                <p>P0288 - Cylinder 10 Injector Circuit Low</p>
			                <p>P0289 - Cylinder 10 Injector Circuit High</p>
			                <p>P0290 - Cylinder 10 Contribution/Balance Fault</p>
			                <p>P0291 - Cylinder 11 Injector Circuit Low</p>
			                <p>P0292 - Cylinder 11 Injector Circuit High</p>
			                <p>P0293 - Cylinder 11 Contribution/Balance Fault</p>
			                <p>P0294 - Cylinder 12 Injector Circuit Low</p>
			                <p>P0295 - Cylinder 12 Injector Circuit High</p>
			                <p>P0296 - Cylinder 12 Contribution/Range Fault</p>
			                <p>P0300 - Engine Misfire Detected</p>
			                <p>P0301 - Cylinder 1 Misfire Detected</p>
			                <p>P0302 - Cylinder 2 Misfire Detected</p>
			                <p>P0303 - Cylinder 3 Misfire Detected</p>
			                <p>P0304 - Cylinder 4 Misfire Detected</p>
			                <p>P0305 - Cylinder 5 Misfire Detected</p>
			                <p>P0306 - Cylinder 6 Misfire Detected</p>
			                <p>P0307 - Cylinder 7 Misfire Detected</p>
			                <p>P0308 - Cylinder 8 Misfire Detected</p>
			                <p>P0309 - Cylinder 9 Misfire Detected</p>
			                <p>P0310 - Cylinder 10 Misfire Detected</p>
			                <p>P0311 - Cylinder 11 Misfire Detected</p>
			                <p>P0312 - Cylinder 12 Misfire Detected</p>
			                <p>P0313 - Misfire Detected With Low Fuel Level</p>
			                <p>P0315 - Crankshaft position (CKP) system variation values are not stored in the PCM memory</p>
			                <p>P0318 - Rough Road Sensor Circuit</p>
			                <p>P0320 - Ignition/Distributor Engine Speed Input Circuit Malfunction</p>
			                <p>P0321 - Ignition/Distributor Engine Speed Input Circuit Range/Performance</p>
			                <p>P0322 - IC Module 4X Reference Circuit No Frequency</p>
			                <p>P0323 - Ignition/Distributor Engine Speed Input Circuit Intermittent</p>
			                <p>P0324 - Knock Sensor (KS) Module Performance</p>
			                <p>P0325 - PCM Knock Sensor Circuit</p>
			                <p>P0326 - Knock Sensor Circuit Excessive Spark Retard</p>
			                <p>P0327 - Knock Sensor Circuit Low Voltage</p>
			                <p>P0328 - Knock Sensor 1 Circuit High Input (Bank 1 or Single Sensor)</p>
			                <p>P0329 - Knock Sensor 1 Circuit Intermittent (Bank 1 or Single Sensor)</p>
			                <p>P0330 - Knock Sensor (KS) Circuit Bank 2</p>
			                <p>P0331 - Knock Sensor 2 Circuit Range/Performance (Bank 2)</p>
			                <p>P0332 - Knock Sensor 2 Circuit Low Input (Bank 2)</p>
			                <p>P0333 - Knock Sensor 2 Circuit High Input (Bank 2)</p>
			                <p>P0334 - Knock Sensor 2 Circuit Intermittent (Bank 2)</p>
			                <p>P0335 - CKP Sensor A Circuit Performance</p>
			                <p>P0336 - Crankshaft Position (CKP) Sensor A Performance</p>
			                <p>P0337 - Crankshaft Position (CKP) Sensor Circuit Low Duty Cycle</p>
			                <p>P0338 - Crankshaft Position (CKP) Sensor Circuit High Duty Cycle</p>
			                <p>P0339 - Crankshaft Position (CKP) Sensor Circuit Intermittent</p>
			                <p>P0340 - Camshaft Position (CMP) Sensor Circuit</p>
			                <p>P0341 - Camshaft Position (CMP) Sensor Performance</p>
			                <p>P0342 - Camshaft Position Sensor Circuit Low Input</p>
			                <p>P0343 - Camshaft Position Sensor Circuit High Input</p>
			                <p>P0344 - Camshaft Position Sensor Circuit Intermittent</p>
			                <p>P0350 - Ignition Coil Primary/Secondary Circuit Malfunction</p>
			                <p>P0351 - Ignition Coil 1 Control Circuit</p>
			                <p>P0352 - Ignition Coil 2 Control Circuit</p>
			                <p>P0353 - Ignition Coil 3 Control Circuit</p>
			                <p>P0354 - Ignition Coil 4 Control Circuit</p>
			                <p>P0355 - Ignition Coil 5 Control Circuit</p>
			                <p>P0356 - Ignition Coil 6 Control Circuit</p>
			                <p>P0357 - Ignition Coil 7 Control Circuit</p>
			                <p>P0358 - Ignition Coil 8 Control Circuit</p>
			                <p>P0359 - Ignition Coil I Primary/Secondary Circuit Malfunction</p>
			                <p>P0360 - Ignition Coil J Primary/Secondary Circuit Malfunction</p>
			                <p>P0361 - Ignition Coil K Primary/Secondary Circuit Malfunction</p>
			                <p>P0362 - Ignition Coil L Primary/Secondary Circuit Malfunction</p>
			                <p>P0370 - Timing Reference High Resolution Signal A Malfunction</p>
			                <p>P0371 - IC 24X Reference Circuit Too Many Pulses</p>
			                <p>P0372 - IC 24X Reference Circuit Missing Pulses</p>
			                <p>P0373 - Timing Reference High Resolution Signal A Intermittent/Erratic Pulses</p>
			                <p>P0374 - Timing Reference High Resolution Signal A No Pulses</p>
			                <p>P0375 - Timing Reference High Resolution Signal B Malfunction</p>
			                <p>P0376 - Timing Reference High Resolution Signal B Too Many Pulses</p>
			                <p>P0377 - Timing Reference High Resolution Signal B Too Few Pulses</p>
			                <p>P0378 - Timing Reference High Resolution Signal B Intermittent/Erratic Pulses</p>
			                <p>P0379 - Timing Reference High Resolution Signal B No Pulses</p>
			                <p>P0380 - Glow Plug/Heater Circuit "A" Malfunction</p>
			                <p>P0381 - Glow Plug/Heater Indicator Circuit Malfunction</p>
			                <p>P0382 - Exhaust Gas Recirculation Flow Malfunction</p>
			                <p>P0385 - Crankshaft Position (CKP) Sensor B Circuit</p>
			                <p>P0386 - Crankshaft Position (CKP) Sensor B Performance</p>
			                <p>P0387 - Crankshaft Position Sensor B Circuit Low Input</p>
			                <p>P0388 - Crankshaft Position Sensor B Circuit High Input</p>
			                <p>P0389 - Crankshaft Position Sensor B Circuit Intermittent</p>
			                <p>P0400 - Exhaust Gas Recirculation Flow Malfunction</p>
			                <p>P0401 - Exhaust Gas Recirculation (EGR) Flow Insufficient</p>
			                <p>P0402 - Exhaust Gas Recirculation Flow Excessive Detected</p>
			                <p>P0403 - Exhaust Gas Recirculation (EGR) Solenoid Control Circuit</p>
			                <p>P0404 - Exhaust Gas Recirculation (EGR) Open Position Performance</p>
			                <p>P0405 - Exhaust Gas Recirculation (EGR) Position Sensor Circuit Low Voltage</p>
			                <p>P0406 - Exhaust Gas Recirculation Sensor A Circuit High</p>
			                <p>P0407 - Exhaust Gas Recirculation Sensor B Circuit Low</p>
			                <p>P0408 - Exhaust Gas Recirculation Sensor B Circuit High</p>
			                <p>P0410 - Secondary Air Injection (AIR) System</p>
			                <p>P0411 - Secondary Air Injection (AIR) System</p>
			                <p>P0412 - Secondary Air Injection (AIR) Solenoid Relay Control Circuit Bank 1</p>
			                <p>P0413 - Secondary Air Injection System Switching Valve A Circuit Open</p>
			                <p>P0414 - Secondary Air Injection System Switching Valve A Circuit Shorted</p>
			                <p>P0415 - Secondary Air Injection System Switching Valve B Circuit Malfunction</p>
			                <p>P0416 - Secondary Air Injection System Switching Valve B Circuit Open</p>
			                <p>P0417 - Secondary Air Injection System Switching Valve B Circuit Shorted</p>
			                <p>P0418 - Secondary Air Injection (AIR) Pump Relay Control Circuit Bank 1</p>
			                <p>P0419 - Secondary Air Injection (AIR) Pump Relay Control Circuit Bank 2</p>
			                <p>P0420 - Catalyst System Low Efficiency</p>
			                <p>P0421 - Warm Up Catalyst Efficiency Below Threshold (Bank 1)</p>
			                <p>P0422 - Catalyst System Low Efficiency Bank 1</p>
			                <p>P0423 - Heated Catalyst Efficiency Below Threshold (Bank 1)</p>
			                <p>P0424 - Heated Catalyst Temperature Below Threshold (Bank 1)</p>
			                <p>P0430 - Catalyst System Low Efficiency Bank 2</p>
			                <p>P0431 - Warm Up Catalyst Efficiency Below Threshold (Bank 2)</p>
			                <p>P0432 - Catalyst System Low Efficiency Bank 2</p>
			                <p>P0433 - Heated Catalyst Efficiency Below Threshold (Bank 2)</p>
			                <p>P0434 - Heated Catalyst Temperature Below Threshold (Bank 2)</p>
			                <p>P0440 - Evaporative Emission (EVAP) System</p>
			                <p>P0441 - Evaporative Emission Control System Incorrect Purge Flow</p>
			                <p>P0442 - Evaporative Emission (EVAP) System Small Leak Detected</p>
			                <p>P0443 - EVAP Purge Solenoid Valve 1 Control Circuit</p>
			                <p>P0444 - Evaporative Emission Control System Purge Control Valve Circuit Open</p>
			                <p>P0445 - Evaporative Emission Control System Purge Control Valve Circuit Shorted</p>
			                <p>P0446 - EVAP Vent Solenoid Valve Control System</p>
			                <p>P0447 - Evaporative Emission Control System Vent Control Circuit Open</p>
			                <p>P0448 - Evaporative Emission Control System Vent Control Circuit Shorted</p>
			                <p>P0449 - Evaporative Emission (EVAP) Vent Solenoid Control Circuit</p>
			                <p>P0450 - Fuel Tank Pressure Sensor Circuit</p>
			                <p>P0451 - Evaporative Emission Control System Pressure Sensor Range/Performance</p>
			                <p>P0452 - Fuel Tank Pressure Sensor Circuit Low Voltage</p>
			                <p>P0453 - Fuel Tank Pressure Sensor Circuit High Voltage</p>
			                <p>P0454 - Evaporative Emission Control System Pressure Sensor Intermittent</p>
			                <p>P0455 - Evaporative Emission (EVAP) System Leak Detected</p>
			                <p>P0460 - Fuel Level Sensor Circuit</p>
			                <p>P0461 - Fuel Level Sensor Performance</p>
			                <p>P0462 - Fuel Level Sensor Circuit Low Voltage</p>
			                <p>P0463 - Fuel Level Sensor Circuit High Voltage</p>
			                <p>P0464 - Fuel Level Sensor Circuit Intermittent</p>
			                <p>P0465 - Purge Flow Sensor Circuit Malfunction</p>
			                <p>P0466 - Purge Flow Sensor Circuit Range/Performance</p>
			                <p>P0467 - Purge Flow Sensor Circuit Low Input</p>
			                <p>P0468 - Purge Flow Sensor Circuit High Input</p>
			                <p>P0469 - Purge Flow Sensor Circuit Intermittent</p>
			                <p>P0470 - Exhaust Pressure Sensor Malfunction</p>
			                <p>P0471 - Exhaust Pressure Sensor Range/Performance</p>
			                <p>P0472 - Exhaust Pressure Sensor Low</p>
			                <p>P0473 - Exhaust Pressure Sensor High</p>
			                <p>P0474 - Exhaust Pressure Sensor Intermittent</p>
			                <p>P0475 - Exhaust Pressure Control Valve Malfunction</p>
			                <p>P0476 - Exhaust Pressure Control Valve Range/Performance</p>
			                <p>P0477 - Exhaust Pressure Control Valve Low</p>
			                <p>P0478 - Exhaust Pressure Control Valve High</p>
			                <p>P0479 - Exhaust Pressure Control Valve Intermittent</p>
			                <p>P0480 - Cooling Fan Relay 1 Control Circuit</p>
			                <p>P0481 - Cooling Fan Relay 2 Control Circuit</p>
			                <p>P0482 - Cooling Fan 3 Control Circuit Malfunction</p>
			                <p>P0483 - Cooling Fan Rationality Check Malfunction</p>
			                <p>P0484 - Cooling Fan Circuit Over Current</p>
			                <p>P0485 - Cooling Fan Power/Ground Circuit Malfunction</p>
			                <p>P0496 - Evaporative Emission (EVAP) System Flow During Non-Purge</p>
			                <p>P0500 - Vehicle Speed Sensor (VSS) Circuit</p>
			                <p>P0501 - Vehicle Speed Sensor Range/Performance</p>
			                <p>P0502 - Vehicle Speed Sensor (VSS) Circuit Low Input</p>
			                <p>P0503 - Vehicle Speed Sensor (VSS) Circuit Intermittent</p>
			                <p>P0505 - Idle Control System Malfunction</p>
			                <p>P0506 - Idle Speed Low</p>
			                <p>P0507 - Idle Speed High</p>
			                <p>P0510 - Closed Throttle Position Switch Malfunction</p>
			                <p>P0512 - Start Switch Circuit</p>
			                <p>P0520 - Engine Oil Pressure Sensor/Switch Circuit Malfunction</p>
			                <p>P0521 - Engine Oil Pressure Sensor/Switch Circuit Range/Performance</p>
			                <p>P0522 - Engine Oil Pressure Sensor/Switch Circuit Low Voltage</p>
			                <p>P0523 - Engine Oil Pressure Sensor/Switch Circuit High Voltage</p>
			                <p>P0526 - Cooling Fan Speed Sensor Circuit</p>
			                <p>P0530 - A/C Refrigerant Pressure Sensor Circuit Malfunction</p>
			                <p>P0531 - A/C Refrigerant Pressure Sensor Circuit Range/Performance</p>
			                <p>P0532 - Air Conditioning (A/C) Refrigerant Pressure Sensor Circuit Low Voltage</p>
			                <p>P0533 - Air Conditioning (A/C) Refrigerant Pressure Sensor Circuit High Voltage</p>
			                <p>P0534 - Air Conditioner Refrigerant Charge Loss</p>
			                <p>P0550 - Power Steering Pressure (PSP) Switch Circuit</p>
			                <p>P0551 - Power Steering Pressure Sensor Circuit Range/Performance</p>
			                <p>P0552 - Power Steering Pressure Sensor Circuit Low Input</p>
			                <p>P0553 - Power Steering Pressure Sensor Circuit High Input</p>
			                <p>P0554 - Power Steering Pressure Sensor Circuit Intermittent</p>
			                <p>P0560 - System Voltage</p>
			                <p>P0561 - System Voltage Unstable</p>
			                <p>P0562 - System Voltage Low (TCM)</p>
			                <p>P0563 - System Voltage High (TCM)</p>
			                <p>P0564 - Cruise Control Multi-Function Switch Circuit (PCM)</p>
			                <p>P0565 - Cruise Control On Signal Malfunction</p>
			                <p>P0566 - Cruise Control Off Signal Malfunction</p>
			                <p>P0567 - Cruise Control Resume Signal Malfunction</p>
			                <p>P0568 - Cruise Control Set Signal Malfunction</p>
			                <p>P0569 - Cruise Control Coast Signal Malfunction</p>
			                <p>P0570 - Cruise Control Accel Signal Malfunction</p>
			                <p>P0571 - Cruise Control Brake Switch Circuit</p>
			                <p>P0573 - Cruise Control/Brake Switch A Circuit High</p>
			                <p>P0574 - Vehicle Speed Too High - above 110 mph - Cruise Control Disabled</p>
			                <p>P0575 - Cruise Control Related Malfunction</p>
			                <p>P0576 - Cruise Control Related Malfunction</p>
			                <p>P0576 - Cruise Control Related Malfunction</p>
			                <p>P0578 - Cruise Control Related Malfunction</p>
			                <p>P0579 - Cruise Control Related Malfunction</p>
			                <p>P0580 - Cruise Control Related Malfunction</p>
			                <p>P0600 - Serial Communication Link Malfunction</p>
			                <p>P0601 - Control Module Read Only Memory (ROM)</p>
			                <p>P0602 - Control Module Not Programmed</p>
			                <p>P0603 - Control Module Long Term Memory Reset</p>
			                <p>P0604 - Control Module Random Access Memory (RAM)</p>
			                <p>P0605 - Control Module Programming Read Only Memory (ROM)</p>
			                <p>P0606 - Control Module Internal Performance</p>
			                <p>P0607 - ECU Malfunction</p>
			                <p>P0608 - Control Module VSS Output "A" Malfunction</p>
			                <p>P0609 - Control Module VSS Output "B" Malfunction</p>
			                <p>P0610 - Control Module Vehicle Options Incorrect</p>
			                <p>P0615 - Starter Relay Control Circuit</p>
			                <p>P0616 - Starter Relay Control Circuit Low Voltage</p>
			                <p>P0617 - Starter Relay Control Circuit High Voltage</p>
			                <p>P0620 - Generator Control Circuit Malfunction</p>
			                <p>P0621 - Generator L-Terminal Circuit</p>
			                <p>P0622 - Generator F-Terminal Circuit</p>
			                <p>P0625 - Generator F-Terminal Circuit Low Voltage</p>
			                <p>P0626 - Generator F-Terminal Circuit High Voltage</p>
			                <p>P0628 - Fuel Pump Relay Control Circuit Low Voltage</p>
			                <p>P0629 - Fuel Pump Relay Control Circuit High Voltage</p>
			                <p>P0638 - Throttle Actuator Control (TAC) Command Performance</p>
			                <p>P0641 - PCM voltage out of tolerance condition on the 5-volt reference circuit</p>
			                <p>P0645 - Air Conditioning (A/C) Clutch Relay Control Circuit</p>
			                <p>P0646 - Air Conditioning (A/C) Clutch Relay Control Circuit</p>
			                <p>P0647 - Air Conditioning (A/C) Clutch Relay Control Circuit</p>
			                <p>P0650 - Malfunction Indicator Lamp (MIL) Control Circuit</p>
			                <p>P0651 - PCM voltage out of tolerance condition on the 5-volt reference circuit</p>
			                <p>P0654 - Engine RPM Output Circuit Malfunction</p>
			                <p>P0655 - Engine Hot Lamp Output Control Circuit Malfucntion</p>
			                <p>P0656 - Fuel Level Output Circuit Malfunction</p>
			                <p>P0660 - Intake Manifold Tuning (IMT) Valve Solenoid Control Circuit</p>
			                <p>P0661 - Intake Manifold Tuning (IMT) Valve Solenoid Control Circuit Low Voltage</p>
			                <p>P0662 - Intake Manifold Tuning (IMT) Valve Solenoid Control Circuit High Voltage</p>
			                <p>P0685 - Engine Controls Ignition Relay Control Circuit (PCM)</p>
			                <p>P0691 - Cooling Fan Relay Control Circuit Low Voltage</p>
			                <p>P0693 - Cooling Fan Relay Control Circuit Low Voltage</p>
			                <p>P0692 - Cooling Fan Relay Control Circuit High Voltage</p>
			                <p>P0694 - Cooling Fan Relay Control Circuit High Voltage</p>
			                <p>P0700 - Transmission Control System Malfunction</p>
			                <p>P0701 - Transmission Control System Range/Performance</p>
			                <p>P0702 - Transmission Control System Electrical</p>
			                <p>P0703 - Brake Switch Circuit Malfunction</p>
			                <p>P0704 - Clutch Switch Input Circuit Malfunction</p>
			                <p>P0705 - Trans Range Switch Circuit</p>
			                <p>P0706 - Trans Range Switch Performance</p>
			                <p>P0707 - Transmission Range Sensor Circuit Low Input</p>
			                <p>P0708 - Transmission Range Sensor Circuit High Input</p>
			                <p>P0709 - Transmission Range Sensor Circuit Intermittent</p>
			                <p>P0710 - Transmission Fluid Temperature Sensor Circuit Malfunction</p>
			                <p>P0711 - TFT Sensor Circuit Range/Performance</p>
			                <p>P0712 - Transmission Fluid Temperature (TFT) Sensor Circuit Low Input</p>
			                <p>P0713 - Transmission Fluid Temperature (TFT) Sensor Circuit High Input</p>
			                <p>P0714 - Transmission Fluid Temperature Sensor Circuit Intermittent</p>
			                <p>P0715 - Input/Turbine Speed Sensor Circuit Malfunction</p>
			                <p>P0716 - Input Speed Sensor Circuit Intermittent</p>
			                <p>P0717 - Input Speed Sensor Circuit Low Input</p>
			                <p>P0718 - Input/Turbine Speed Sensor Circuit Intermittent</p>
			                <p>P0719 - Brake Switch Circuit Low Input</p>
			                <p>P0720 - Output Speed Sensor Circuit Malfunction</p>
			                <p>P0721 - Output Speed Sensor Range/Performance</p>
			                <p>P0722 - Output Speed Sensor Circuit Low Input</p>
			                <p>P0723 - Output Speed Sensor Intermittent</p>
			                <p>P0724 - Brake Switch Circuit High Input</p>
			                <p>P0725 - Engine Speed Input Circuit</p>
			                <p>P0726 - Engine Speed Input Circuit Range/Performance</p>
			                <p>P0727 - Engine Speed Circuit No Signal</p>
			                <p>P0728 - Engine Speed Input Circuit Intermittent</p>
			                <p>P0730 - Incorrect Gear Ratio</p>
			                <p>P0731 - Incorrect 1st Gear Ratio</p>
			                <p>P0732 - Incorrect 2nd Gear Ratio</p>
			                <p>P0733 - Incorrect 3rd Gear Ratio</p>
			                <p>P0734 - Incorrect 4th Gear Ratio</p>
			                <p>P0735 - Gear 5 Incorrect ratio</p>
			                <p>P0736 - Reverse incorrect gear ratio</p>
			                <p>P0740 - TCC Enable Solenoid Circuit Electrical</p>
			                <p>P0741 - TCC System Stuck Off</p>
			                <p>P0742 - TCC System Stuck On</p>
			                <p>P0743 - TCC Enable Solenoid Circuit Electrical</p>
			                <p>P0744 - Torque Converter Clutch Circuit Intermittent</p>
			                <p>P0745 - Pressure Control Solenoid Malfunction</p>
			                <p>P0746 - Pressure Control Solenoid Performance or Stuck Off</p>
			                <p>P0747 - Pressure Control Solenoid Stuck On</p>
			                <p>P0748 - Pressure Control Solenoid Circuit Electrical</p>
			                <p>P0749 - Pressure Control Solenoid Intermittent</p>
			                <p>P0750 - Shift Solenoid A Malfunction</p>
			                <p>P0751 - 1-2 Shift Solenoid Valve Performance - No First or Fourth Gear</p>
			                <p>P0752 - 1-2 Shift Solenoid Valve Performance - No Second or Third Gear</p>
			                <p>P0753 - 1-2 Shift Solenoid Circuit Electrical</p>
			                <p>P0754 - Shift Solenoid A Intermittent</p>
			                <p>P0755 - Shift Solenoid B Malfunction</p>
			                <p>P0756 - 2-3 Shift Solenoid Valve Performance - No First or Second Gear</p>
			                <p>P0757 - 2-3 Shift Solenoid Valve Performance - No Third or Fourth Gear</p>
			                <p>P0758 - 2-3 Shift Solenoid Circuit Electrical</p>
			                <p>P0759 - Shift Solenoid B Intermittent</p>
			                <p>P0760 - Shift Solenoid C Malfunction</p>
			                <p>P0761 - Shift Solenoid C Performance or Stuck Off</p>
			                <p>P0762 - Shift Solenoid C Stuck On</p>
			                <p>P0763 - Shift Solenoid C Electrical</p>
			                <p>P0764 - Shift Solenoid C Intermittent</p>
			                <p>P0765 - Shift Solenoid D Malfunction</p>
			                <p>P0766 - Shift Solenoid D Performance or Stuck Off</p>
			                <p>P0767 - Shift Solenoid D Stuck On</p>
			                <p>P0768 - Shift Solenoid D Electrical</p>
			                <p>P0769 - Shift Solenoid D Intermittent</p>
			                <p>P0770 - Shift Solenoid E Malfunction</p>
			                <p>P0771 - Shift Solenoid E Performance or Stuck Off</p>
			                <p>P0772 - Shift Solenoid E Stuck On</p>
			                <p>P0773 - Shift Solenoid E Electrical</p>
			                <p>P0774 - Shift Solenoid E Intermittent</p>
			                <p>P0780 - Shift Malfunction</p>
			                <p>P0781 - 1-2 Shift Malfunction</p>
			                <p>P0782 - 2-3 Shift Malfunction</p>
			                <p>P0783 - 3-4 Shift Malfunction</p>
			                <p>P0784 - 4-5 Shift Malfunction</p>
			                <p>P0785 - 3-2 Shift Solenoid Circuit Electrical</p>
			                <p>P0786 - Shift/Timing Solenoid Range/Performance</p>
			                <p>P0787 - Shift/Timing Solenoid Low</p>
			                <p>P0788 - Shift/Timing Solenoid High</p>
			                <p>P0789 - Shift/Timing Solenoid Intermittent</p>
			                <p>P0790 - Normal/Performance Switch Circuit Malfunction</p>
			                <p>P0801 - Reverse Inhibit Control Circuit Malfunction</p>
			                <p>P0803 - 1-4 Upshift (Skip Shift) Solenoid Control Circuit Malfunction</p>
			                <p>P0804 - 1-4 Upshift (Skip Shift) Lamp Control Circuit Malfunction</p>
			                <p>P0850 - Park/Neutral Position (PNP) Switch Circuit</p>
			                <p>P0856 - Powertrain Indicated Traction Control Malfunction</p>
			                <p>P0894 - Transmission Component Slipping</p>
			                <p>P0897 - PCM detects a calculated transmission fluid life of 10 percent or less</p>
			                <p>P0962 - Line Pressure Control (PC) Solenoid Control Circuit Low Voltage (TCM)</p>
			                <p>P0963 - Line Pressure Control (PC) Solenoid Control Circuit High Voltage (TCM)</p>
			                <p>P0966 - Clutch Pressure Control (PC) Solenoid Control Circuit Low Voltage (TCM)</p>
			                <p>P0967 - Clutch Pressure Control (PC) Solenoid Control Circuit High Voltage (TCM)</p>
			                <p>P0970 - Shift Pressure control (PC) Solenoid Control Circuit Low Voltage (TCM)</p>
			                <p>P0971 - Shift Pressure Control (PC) Solenoid Control High Voltage (TCM)</p>
			                <p>P0973 - PCM detects an open or short to ground in the 1-2 SS valve circuit</p>
			                <p>P0974 - PCM detects a continuous short to voltage in the 1-2 SS valve circuit</p>
			                <p>P0976 - PCM detects a continuous open or short to ground in the 2-3 SS valve circuit</p>
			                <p>P0977 - PCM detects a continuous short to voltage in the 2-3 SS valve circuit</p>
			                <p>P0979 - Shift Solenoid (SS) 3 Control Circuit Low Voltage (TCM)</p>
			                <p>P0980 - Shift Solenoid (SS) 3 Control Circuit High Voltage (TCM)</p>
			                <p>P0982 - Shift Solenoid (SS) 4 Control Circuit High Voltage (TCM)</p>
			                <p>P0983 - Shift Solenoid (SS) 4 Control Circuit High Voltage (TCM)</p>
			                <p>P0985 - Shift Solenoid (SS) 5 Control Circuit Low Voltage (TCM)</p>
			                <p>P0986 - Shift Solenoid (SS) 5 Control Circuit High Voltage (TCM)</p>
			                <p>P1031 - Heated Oxygen Sensor (HO2S) Heater Current Monitor Control Circuit Banks 1 and 2 Sensor 1</p>
			                <p>P1032 - Heated Oxygen Sensor (HO2S) Heater Warm Up Control Circuit Banks 1 and 2 Sensor 1</p>
			                <p>P1101 - Actual measured airflow from MAF, MAP, EGR, and TP is not within range of the calculated airflow</p>
			                <p>P1105 - Secondary Vacuum Sensor Circuit</p>
			                <p>P1106 - Manifold Absolute Pressure (MAP) Sensor Circuit Intermittent High Voltage</p>
			                <p>P1107 - Manifold Absolute Pressure (MAP) Sensor Circuit Intermittent Low Voltage</p>
			                <p>P1108 - BARO to MAP Sensor Comparison Too High</p>
			                <p>P1109 - Secondary Port Throttle System</p>
			                <p>P1111 - Intake Air Temperature (IAT) Sensor Circuit Intermittent High Voltage</p>
			                <p>P1112 - Intake Air Temperature (IAT) Sensor Circuit Intermittent Low Voltage</p>
			                <p>P1113 - Intake Resonance Switchover Solenoid Control Circuit</p>
			                <p>P1114 - Engine Coolant Temperature (ECT) Sensor Circuit Intermittent Low Voltage</p>
			                <p>P1115 - Engine Coolant Temperature (ECT) Sensor Circuit Intermittent High Voltage</p>
			                <p>P1116 - ECT Signal Unstable or Intermittent</p>
			                <p>P1117 - Engine Coolant Temp. Signal Out-Of-Range Low</p>
			                <p>P1118 - Engine Coolant Temp. Signal Out-Of-Range High</p>
			                <p>P1119 - ECT Signal Out-Of-Range With TFT Sensor</p>
			                <p>P1120 - Throttle Position (TP) Sensor 1 Circuit</p>
			                <p>P1121 - Throttle Position (TP) Sensor Circuit Intermittent High Voltage</p>
			                <p>P1122 - Throttle Position (TP) Sensor Circuit Intermittent Low Voltage</p>
			                <p>P1125 - Accelerator Pedal Position (APP) System</p>
			                <p>P1130 - Heated Oxygen Sensor (HO2S) Circuit Low Variance Bank 1 Sensor 1</p>
			                <p>P1131 - Heated Oxygen Sensor (HO2S) Circuit Low Variance Bank 1 Sensor 2</p>
			                <p>P1132 - Heated Oxygen Sensor (HO2S) Circuit Low Variance Bank 2 Sensor 1</p>
			                <p>P1133 - Heated Oxygen Sensor (HO2S) Insufficient Switching Bank 1 Sensor 1</p>
			                <p>P1134 - Heated Oxygen Sensor (HO2S) Transition Time Ratio Bank 1 Sensor 1</p>
			                <p>P1135 - Heated Oxygen Sensor (HO2S) Lean Mean Bank 1 Sensor 1</p>
			                <p>P1136 - Heated Oxygen Sensor (HO2S) Rich Mean Bank 1 Sensor 1</p>
			                <p>P1137 - Heated Oxygen Sensor (HO2S) Bank 1 Sensor 2 Lean System or Low Voltage</p>
			                <p>P1138 - Heated Oxygen Sensor (HO2S) Bank 1 Sensor 2 Rich or High Voltage</p>
			                <p>P1139 - Heated Oxygen Sensor (HO2S) Insuff. Switching Bank 1 Sensor 2</p>
			                <p>P1140 - Heated Oxygen Sensor (HO2S) Transition Time Ratio Bank 1 Sensor 2</p>
			                <p>P1141 - Heated Oxygen Sensor (HO2S) Heater Control Circuit Bank 1 Sensor 2</p>
			                <p>P1143 - Heated Oxygen Sensor (HO2S) Bank 1 Sensor 3 Lean System or Low Voltage</p>
			                <p>P1144 - Heated Oxygen Sensor (HO2S) Bank 1 Sensor 3 Rich or High Voltage</p>
			                <p>P1145 - Heated Oxygen Sensor (HO2S) Cross Counts Bank 1 Sensor 3</p>
			                <p>P1153 - Heated Oxygen Sensor (HO2S) Insufficient Switching Bank 2 Sensor 1</p>
			                <p>P1154 - Heated Oxygen Sensor (HO2S) Transition Time Ratio Bank 2 Sensor 1</p>
			                <p>P1155 - Heated Oxygen Sensor (HO2S) Lean Mean Bank 2 Sensor 1</p>
			                <p>P1156 - Heated Oxygen Sensor (HO2S) Rich Mean Bank 2 Sensor 1</p>
			                <p>P1157 - Heated Oxygen Sensor (HO2S) Bank 2 Sensor 2 Lean System or Low Voltage</p>
			                <p>P1158 - Heated Oxygen Sensor (HO2S) Bank 2 Sensor 2 Rich or High Voltage</p>
			                <p>P1159 - Heated Oxygen Sensor (HO2S) Cross Counts Bank 2 Sensor 2</p>
			                <p>P1161 - Heated Oxygen Sensor (HO2S) Heater Control Circuit Bank 2 Sensor 2</p>
			                <p>P1163 - Heated Oxygen Sensor (HO2S) Bank 2 Sensor 3 Lean System or Low Voltage</p>
			                <p>P1164 - Heated Oxygen Sensor (HO2S) Bank 2 Sensor 3 Rich or High Voltage</p>
			                <p>P1165 - Heated Oxygen Sensor (HO2S) Cross Counts Bank 2 Sensor 3</p>
			                <p>P1170 - Bank to Bank Fuel Trim Offset</p>
			                <p>P1171 - Fuel System Lean During Acceleration</p>
			                <p>P1172 - Fuel Transfer Pump Flow Insufficient</p>
			                <p>P1185 - Engine Oil Temperature Circuit</p>
			                <p>P1186 - EOT Circuit Performance</p>
			                <p>P1187 - EOT Sensor Circuit Low Voltage</p>
			                <p>P1188 - EOT Sensor Circuit High Voltage</p>
			                <p>P1189 - Engine Oil Pressure (EOP) Switch Circuit</p>
			                <p>P1190 - Engine Vacuum Leak</p>
			                <p>P1191 - Intake Air Duct Air Leak</p>
			                <p>P1200 - Injector Control Circuit</p>
			                <p>P1201 - (Alt. Fuel) Gas Mass Sensor Circuit Range/Performance</p>
			                <p>P1202 - (Alt. Fuel) Gas Mass Sensor Circuit Low Frequency</p>
			                <p>P1203 - (Alt. Fuel) Gas Mass Sensor Circuit High Frequency</p>
			                <p>P1211 - Mass Air Flow Circuit Intermittent High</p>
			                <p>P1212 - Mass Air Flow Circuit Intermittent Low</p>
			                <p>P1214 - Injection Pump Timing Offset</p>
			                <p>P1215 - Ground Fault Detection Indicated</p>
			                <p>P1216 - Fuel Solenoid Response Time Too Short</p>
			                <p>P1217 - Fuel Solenoid Response Time Too Long</p>
			                <p>P1218 - Injection Pump Calibration Circuit</p>
			                <p>P1219 - Throttle Position Sensor Reference Voltage</p>
			                <p>P1220 - Throttle Position (TP) Sensor 2 Circuit</p>
			                <p>P1221 - Fuel Pump Secondary Circuit Low</p>
			                <p>P1222 - Injector Control Circuit Intermittent</p>
			                <p>P1225 - Injector Circuit Cylinder 2 Intermittent</p>
			                <p>P1228 - Injector Circuit Cylinder 3 Intermittent</p>
			                <p>P1231 - Injector Circuit Cylinder 4 Intermittent</p>
			                <p>P1234 - Injector Circuit Cylinder 5 Intermittent</p>
			                <p>P1237 - Injector Circuit Cylinder 6 Intermittent</p>
			                <p>P1240 - Injector Circuit Cylinder 7 Intermittent</p>
			                <p>P1243 - Injector Circuit Cylinder 8 Intermittent</p>
			                <p>P1245 - Intake Plenum Switchover Valve</p>
			                <p>P1250 - Early Fuel Evaporation Heater Circuit</p>
			                <p>P1257 - Supercharger System Overboost</p>
			                <p>P1258 - Engine Coolant Overtemperature - above 268&deg;F - Protection Mode Active</p>
			                <p>P1260 - Last Test Failed Failed SCC ENTER:More Info.</p>
			                <p>P1270 - Accelerator Pedal Position Sensor A/D Converter Error</p>
			                <p>P1271 - Accelerator Pedal Position (APP) Sensor 1-2 Correlation</p>
			                <p>P1272 - Accelerator Pedal Position Sensor 2</p>
			                <p>P1273 - "Accelerator Pedal Position Sensor 1</p>
			                <p>P1274 - Injectors Wired Incorrectly</p>
			                <p>P1275 - Accelerator Pedal Position (APP) Sensor 1 Circuit</p>
			                <p>P1276 - Accelerator Pedal Position Sensor 1 Circuit Performance</p>
			                <p>P1277 - Accelerator Pedal Position Sensor 1 Circuit Low Voltage</p>
			                <p>P1278 - Accelerator Pedal Position Sensor 1 Circuit High Voltage</p>
			                <p>P1280 - Accelerator Pedal Position (APP) Sensor 2 Circuit</p>
			                <p>P1281 - Accelerator Pedal Position Sensor 2 Circuit Performance</p>
			                <p>P1282 - Accelerator Pedal Position Sensor 2 Circuit Low Voltage</p>
			                <p>P1283 - Accelerator Pedal Position Sensor 2 Circuit High Voltage</p>
			                <p>P1285 - Accelerator Pedal Position Sensor 3 Circuit</p>
			                <p>P1286 - Accelerator Pedal Position Sensor 3 Circuit Performance</p>
			                <p>P1287 - Accelerator Pedal Position Sensor 3 Circuit Low Voltage</p>
			                <p>P1288 - Accelerator Pedal Position Sensor 3 Circuit High Voltage</p>
			                <p>P1300 - Ignitor Circuit</p>
			                <p>P1305 - Ignition Coil 2 Primary Feedback Circuit</p>
			                <p>P1310 - Ignition Coil 3 Primary Feedback Circuit</p>
			                <p>P1315 - Ignition Coil 4 Primary Feedback Circuit</p>
			                <p>P1320 - IC 4X Reference Circuit Intermittent</p>
			                <p>P1321 - Electronic Ignition System Fault Line</p>
			                <p>P1322 - EI System or Ignition Control Extra or Missing</p>
			                <p>P1323 - IC 24X Reference Circuit Low Frequency</p>
			                <p>P1324 - Crank RPM Too Low</p>
			                <p>P1335 - CKP Circuit</p>
			                <p>P1336 - Crankshaft Position (CKP) System Variation Not Learned</p>
			                <p>P1345 - Crankshaft Position (CKP)-Camshaft Position (CMP) Correlation</p>
			                <p>P1346 - Intake Camshaft Position [CMP] Sensor System Performance</p>
			                <p>P1350 - Ignition Control System</p>
			                <p>P1351 - Ignition Coil Control Circuit High Voltage</p>
			                <p>P1352 - IC Output High/Pulse Detected when GND_Cyl. 2</p>
			                <p>P1353 - IC Output High/Pulse Detected when GND_Cyl. 3</p>
			                <p>P1354 - IC Output High/Pulse Detected when GND_Cyl. 4</p>
			                <p>P1355 - IC Output High/Pulse Detected when GND_Cyl. 5</p>
			                <p>P1356 - IC Output High/Pulse Detected when GND_Cyl. 6</p>
			                <p>P1357 - IC Output High/Pulse Detected when GND_Cyl. 7</p>
			                <p>P1358 - IC Output High/Pulse Detected when GND_Cyl. 8</p>
			                <p>P1359 - Ignition Coil Group 1 Control Circuit</p>
			                <p>P1360 - Ignition Coil Group 2 Control Circuit</p>
			                <p>P1361 - Ignition Coil Control Circuit Low Voltage</p>
			                <p>P1362 - IC Cylinder 2 Not Toggling After Enable</p>
			                <p>P1363 - IC Cylinder 3 Not Toggling After Enable</p>
			                <p>P1364 - IC Cylinder 4 Not Toggling After Enable</p>
			                <p>P1365 - IC Cylinder 5 Not Toggling After Enable</p>
			                <p>P1366 - IC Cylinder 6 Not Toggling After Enable</p>
			                <p>P1367 - IC Cylinder 7 Not Toggling After Enable</p>
			                <p>P1368 - IC Cylinder 8 Not Toggling After Enable</p>
			                <p>P1370 - IC 4X Reference Circuit Too Many Pulses</p>
			                <p>P1371 - IC 4X Reference Circuit Too Few Pulses</p>
			                <p>P1372 - Crankshaft Position (CKP) Sensor A-B Correlation</p>
			                <p>P1374 - 3X Reference Circuit</p>
			                <p>P1375 - IC 24X Reference Circuit High Voltage</p>
			                <p>P1376 - Ignition Ground Circuit</p>
			                <p>P1377 - IC Cam Pulse To 4X Reference Pulse</p>
			                <p>P1380 - Misfire Detected - Rough Road Data Not Available</p>
			                <p>P1381 - Misfire Detected - No Communication with Brake Control Module</p>
			                <p>P1390 - Wheel Speed Sensor 1 - G - Sensor Circuit</p>
			                <p>P1391 - Wheel Speed Sensor 1 - G - Sensor Circuit Performance</p>
			                <p>P1392 - Wheel Speed Sensor 1 - G - Sensor Circuit Low Voltage</p>
			                <p>P1393 - Wheel Speed Sensor 1 - G - Sensor Circuit High Voltage</p>
			                <p>P1394 - Wheel Speed Sensor 1 - G - Sensor Circuit Intermittent</p>
			                <p>P1395 - Wheel Speed Sensor 2 - G - Sensor Circuit</p>
			                <p>P1396 - Wheel Speed Sensor 2 - G - Sensor Circuit Performance</p>
			                <p>P1397 - Wheel Speed Sensor 2 - G - Sensor Circuit Low Voltage</p>
			                <p>P1398 - Wheel Speed Sensor 2 - G - Sensor Circuit High Voltage</p>
			                <p>P1399 - Wheel Speed Sensor 2 - G - Sensor Circuit Intermittent</p>
			                <p>P1403 - Exhaust Gas Recirculation System Valve 1</p>
			                <p>P1404 - Exhaust Gas Recirculation (EGR) Closed Position Performance</p>
			                <p>P1405 - Exhaust Gas Recirculation System Valve 3</p>
			                <p>P1406 - EGR Valve Pintle Position Circuit</p>
			                <p>P1407 - EGR Air Intrusion in Exhaust Supply to EGR Valve</p>
			                <p>P1408 - Intake Manifold Pressure Sensor Circuit</p>
			                <p>P1409 - EGR Vacuum System Leak</p>
			                <p>P1410 - Fuel Tank Pressure System</p>
			                <p>P1415 - Secondary Air Injection (AIR) System Bank 1</p>
			                <p>P1416 - Secondary Air Injection (AIR) System Bank 2</p>
			                <p>P1418 - Secondary Air Injection System Relay A Control Circuit High</p>
			                <p>P1420 - Intake Air Low Pressure Switch Circuit Low Voltage</p>
			                <p>P1421 - Intake Air Low Pressure Switch Circuit High Voltage</p>
			                <p>P1423 - Intake Air High Pressure Switch Circuit High Voltage</p>
			                <p>P1431 - Fuel Level Sensor 2 Circuit Performance</p>
			                <p>P1432 - Fuel Level Sensor 2 Circuit Low Voltage</p>
			                <p>P1433 - Fuel Level Sensor 2 Circuit High Voltage</p>
			                <p>P1441 - Evaporative Emission (EVAP) System Flow During Non-Purge</p>
			                <p>P1442 - EVAP Vacuum Sw. High Voltage During Ign. On</p>
			                <p>P1450 - Barometric Pressure Sensor Circuit</p>
			                <p>P1451 - Barometric Press. Sensor Performance</p>
			                <p>P1460 - Cooling Fan Control System</p>
			                <p>P1480 - Cooling Fan 1 Control Circuit High</p>
			                <p>P1481 - Cooling Fan Speed Sensor Circuit</p>
			                <p>P1482 - Cooling Fan Speed Output Circuit</p>
			                <p>P1483 - Engine Cooling System Performance</p>
			                <p>P1484 - Cooling Fan System Performance</p>
			                <p>P1500 - Starter Signal Circuit</p>
			                <p>P1501 - Theft Deterrent System</p>
			                <p>P1501 - Vehicle Speed Sensor Circuit Intermittent</p>
			                <p>P1502 - Theft Deterrent Fuel Enable Signal Not Received</p>
			                <p>P1503 - Theft Deterrent Fuel Enable Signal Not Correct</p>
			                <p>P1504 - Vehicle Speed Output Circuit</p>
			                <p>P1508 - Idle Speed Low - Idle Air Control (IAC) System Not Responding</p>
			                <p>P1509 - Idle Speed High - Idle Air Control (IAC) System Not Responding</p>
			                <p>P1510 - Throttle Control System Performance - Throttle Limitation Active</p>
			                <p>P1511 - Throttle Control System - Backup System Performance</p>
			                <p>P1514 - Airflow to TP Sensor Correlation High</p>
			                <p>P1515 - Electronic Throttle System Throttle Position</p>
			                <p>P1516 - Throttle Actuator Control (TAC) Module Throttle Actuator Position Performance</p>
			                <p>P1517 - Electronic Throttle Module</p>
			                <p>P1518 - Electronic Throttle Module to PCM Communication</p>
			                <p>P1519 - Throttle Actuator Control (TAC) Module Internal Circuit</p>
			                <p>P1520 - Transmission Range Switch Circuit</p>
			                <p>P1521 - Transmission Engaged at High Throttle Angle</p>
			                <p>P1522 - Park/Neutral to Drive/Reverse at High RPM</p>
			                <p>P1523 - Throttle Closed Position Performance</p>
			                <p>P1524 - Throttle Closed Position Performance</p>
			                <p>P1525 - Throttle Body ServiceRequired</p>
			                <p>P1526 - Minimum Throttle Position Not Learned</p>
			                <p>P1527 - Transmission Range to Pressure Switch Correlation</p>
			                <p>P1528 - Governor</p>
			                <p>P1529 - Heated Windshield Request Problem</p>
			                <p>P1530 - Throttle Actuator Control (TAC) Module Internal Circuit</p>
			                <p>P1531 - A/C Low Side Temperature Sensor Fault</p>
			                <p>P1532 - A/C Evaporator Temp. Sens. Circuit Low Voltage</p>
			                <p>P1533 - A/C Evaporator Temp. Sens. Circuit High Voltage</p>
			                <p>P1534 - A/C High Side Temp. Sensor Low Voltage</p>
			                <p>P1535 - A/C High Side Temperature Sensor Circuit</p>
			                <p>P1536 - Engine Coolant Overtemperature - Air Conditioning (A/C) Disabled</p>
			                <p>P1537 - A/C Request Circuit Low Voltage</p>
			                <p>P1538 - A/C Request Circuit High Voltage</p>
			                <p>P1539 - A/C Clutch Status Circuit High Voltage</p>
			                <p>P1540 - Air Conditioning (A/C) Refrigerant Overpressure - Air Conditioning (A/C) Disabled</p>
			                <p>P1541 - A/C High Side Over Temperature</p>
			                <p>P1542 - A/C System High Pressure High Temperature</p>
			                <p>P1543 - A/C System Performance</p>
			                <p>P1544 - A/C Refrigerant Condition Very Low</p>
			                <p>P1545 - Air Conditioning (A/C) Clutch Relay Control Circuit</p>
			                <p>P1546 - A/C Clutch Status Circuit Low Voltage</p>
			                <p>P1547 - A/C System Performance Degraded</p>
			                <p>P1548 - A/C Recirculation Circuit</p>
			                <p>P1551 - Throttle Valve Rest Position Not Reached During Learn</p>
			                <p>P1554 - Cruise Control Feedback Circuit</p>
			                <p>P1555 - Electronic Variable Orifice Output</p>
			                <p>P1558 - Cruise Control Servo Indicates Low</p>
			                <p>P1559 - Cruise Control Power Management Mode</p>
			                <p>P1560 - Transaxle Not in Drive - Cruise Control Disabled</p>
			                <p>P1561 - Cruise Vent Solenoid</p>
			                <p>P1562 - Cruise Vacuum Solenoid</p>
			                <p>P1563 - Cruise Vehicle Speed/Set Speed Difference Too High</p>
			                <p>P1564 - Vehicle Acceleration Too High - Cruise Control Disabled</p>
			                <p>P1565 - Cruise Servo Position Sensor</p>
			                <p>P1566 - Engine RPM Too High - Cruise Control Disabled</p>
			                <p>P1567 - Active Banking Control Active - Cruise Control Disabled</p>
			                <p>P1568 - Cruise Servo Stroke Greater than Commanded in Cruise</p>
			                <p>P1569 - Cruise Servo Stroke High While not in Cruise</p>
			                <p>P1570 - Traction Control Active - Cruise Control Disabled</p>
			                <p>P1571 - Traction Control Torque Request Circuit</p>
			                <p>P1572 - ASR Active Circuit Low Too Long</p>
			                <p>P1573 - PCM/EBTCM Serial Data Circuit</p>
			                <p>P1574 - Stoplamp Switch Circuit</p>
			                <p>P1575 - Extended Travel Brake Switch Circuit</p>
			                <p>P1576 - BBV Sensor Circuit High Voltage</p>
			                <p>P1577 - BBV Sensor Circuit Low Voltage</p>
			                <p>P1578 - BBV Sensor Circuit Low Vacuum</p>
			                <p>P1579 - P/N to D/R at High Throttle Angle - Power Reduction Mode Active</p>
			                <p>P1580 - Cruise Move Circuit Low Voltage</p>
			                <p>P1581 - Cruise Move Circuit High Voltage</p>
			                <p>P1582 - Cruise Direction Circuit Low Voltage</p>
			                <p>P1583 - Cruise Direction CircuitHigh Voltage</p>
			                <p>P1584 - Cruise Control Disabled</p>
			                <p>P1585 - Cruise Control Inhibit Output Circuit</p>
			                <p>P1586 - Cruise Control Brake Switch 2 Circuit</p>
			                <p>P1587 - Cruise Control Clutch Control Circuit Low</p>
			                <p>P1588 - Cruise Control Clutch Control Circuit High</p>
			                <p>P1599 - Engine Stall or Near Stall Detected</p>
			                <p>P1600 - TCM Internal Watchdog Operation</p>
			                <p>P1601 - Serial Comm. Problem With Device 1</p>
			                <p>P1602 - Knock Sensor (KS) Module Performance</p>
			                <p>P1603 - Loss of SDM Serial Data</p>
			                <p>P1604 - Loss of IPC Serial Data</p>
			                <p>P1605 - Loss of HVAC Serial Data</p>
			                <p>P1606 - Serial Communication Problem With Device 6</p>
			                <p>P1607 - Serial Communication Problem With Device 7</p>
			                <p>P1608 - Serial Communication Problem With Device 8</p>
			                <p>P1609 - Loss Of TCS Serial Data</p>
			                <p>P1610 - Loss of PZM Serial Data</p>
			                <p>P1611 - Loss of CVRTD Serial Data</p>
			                <p>P1612 - Loss of IPM Serial Data</p>
			                <p>P1613 - Loss of DIM Serial Data</p>
			                <p>P1614 - Loss of RIM Serial Data</p>
			                <p>P1615 - Loss of VTD Serial Data</p>
			                <p>P1617 - Engine Oil Level Switch Circuit</p>
			                <p>P1619 - Engine Oil Life Monitor Reset Circuit</p>
			                <p>P1620 - Low Coolant Circuit</p>
			                <p>P1621 - Control Module Long Term Memory Performance</p>
			                <p>P1622 - Cylinder Select</p>
			                <p>P1623 - Transmission Temp Pull-Up Resistor</p>
			                <p>P1624 - Customer Snapshot Requested - Data Available</p>
			                <p>P1625 - TCM System Reset</p>
			                <p>P1626 - Theft Deterrent Fuel Enable Signal Not Received</p>
			                <p>P1627 - A/D Performance</p>
			                <p>P1628 - ECT Pull-Up Resistor</p>
			                <p>P1629 - Theft Deterrent System - Cranking Signal</p>
			                <p>P1630 - Theft Deterrent Learn Mode Active</p>
			                <p>P1631 - Theft Deterrent Start Enable Signal Not Correct</p>
			                <p>P1632 - Theft Deterrent Fuel Disable Signal Received</p>
			                <p>P1633 - Ignition 0 Switch Circuit</p>
			                <p>P1634 - Ignition 1 Switch Circuit</p>
			                <p>P1635 - 5 Volt Reference Circuit</p>
			                <p>P1636 - PCM Stack Overrun</p>
			                <p>P1637 - Generator L-Terminal Circuit</p>
			                <p>P1638 - Generator F-Terminal Circuit</p>
			                <p>P1639 - 5 Volt Reference 2 Circuit</p>
			                <p>P1640 - Driver-1-Input High Voltage</p>
			                <p>P1641 - Malfunction Indicator Lamp (MIL) Control Circuit</p>
			                <p>P1642 - Vehicle Speed Output Circuit</p>
			                <p>P1643 - Engine Speed Output Circuit</p>
			                <p>P1644 - Traction Control Delivered Torque Output Circuit</p>
			                <p>P1645 - Evaporative Emission (EVAP) Vent Solenoid Contorl Circuit</p>
			                <p>P1646 - Evaporative Emission (EVAP) Vent Solenoid Control Circuit</p>
			                <p>P1647 - Driver 1 Line 7</p>
			                <p>P1650 - Control Module Output B Circuit</p>
			                <p>P1651 - Fan 1 Relay Control Circuit</p>
			                <p>P1652 - Powertrain Induced Chassis Pitch Output Circuit</p>
			                <p>P1653 - Oil Level Lamp Control Circuit</p>
			                <p>P1654 - Cruise Control Inhibit Output Circuit</p>
			                <p>P1655 - EVAP Purge Solenoid Control Circuit</p>
			                <p>P1656 - Driver 2 Line 6</p>
			                <p>P1657 - 1-4 Upshift Solenoid Control Circuit</p>
			                <p>P1658 - Starter Enable Relay Control Circuit</p>
			                <p>P1660 - Cooling Fan Control Circuits</p>
			                <p>P1661 - MIL Control Circuit</p>
			                <p>P1662 - Cruise Lamp Control Circuit</p>
			                <p>P1663 - Oil Life Lamp Control Circuit</p>
			                <p>P1664 - 1-4 Upshift Lamp Control Circuit</p>
			                <p>P1665 - Driver 3 Line 5</p>
			                <p>P1666 - Driver 3 Line 6</p>
			                <p>P1667 - Reverse Inhibit Solenoid Control Circuit</p>
			                <p>P1669 - ABS Unit Expected</p>
			                <p>P1670 - Driver 4</p>
			                <p>P1671 - Driver 4 Line 1</p>
			                <p>P1672 - Low Engine Oil Level Lamp Control Circuit</p>
			                <p>P1673 - Engine Hot Lamp Control Circuit</p>
			                <p>P1674 - Tachometer Control Circuit</p>
			                <p>P1675 - EVAP Vent Solenoid Control Circuit</p>
			                <p>P1676 - Driver 4 Line 6</p>
			                <p>P1677 - Driver 4 Line 7</p>
			                <p>P1680 - Driver 5 (ECU Malfunction)</p>
			                <p>P1681 - Driver 5 Line 1</p>
			                <p>P1682 - Driver 5 Line 2</p>
			                <p>P1683 - Driver 5 Line 3</p>
			                <p>P1684 - Driver 5 Line 4</p>
			                <p>P1685 - Driver 5 Line 5</p>
			                <p>P1686 - Driver 5 Line 6</p>
			                <p>P1687 - Driver 5 Line 7</p>
			                <p>P1689 - Delivered Torque Circuit Fault</p>
			                <p>P1690 - ECM Loop Overrun</p>
			                <p>P1691 - Coolant Gage Circuit Low Voltage</p>
			                <p>P1692 - Coolant Gage Circuit High Voltage</p>
			                <p>P1693 - Tachometer Circuit Low Voltage</p>
			                <p>P1694 - Tachometer Circuit High Voltage</p>
			                <p>P1695 - Remote Keyless Entry Circuit Low</p>
			                <p>P1696 - Remote Keyless Entry Voltage High</p>
			                <p>P1700 - Transmission Control Module (TCM) Requested MIL Illumination</p>
			                <p>P1701 - Trans. MIL Request Circuit</p>
			                <p>P1705 - P/N Signal Output Circuit</p>
			                <p>P1719 - Incorrect Shifting Detected (TCM)</p>
			                <p>P1740 - Torque Reduction Signal Circuit</p>
			                <p>P1743 - TP Signal from ECM</p>
			                <p>P1760 - TCM Supply Voltage Interrupted</p>
			                <p>P1779 - Engine Torque Delivered to TCM Signal</p>
			                <p>P1780 - Park/Neutral Position [PNP] Switch Circuit</p>
			                <p>P1781 - Engine Torque Signal Circuit</p>
			                <p>P1790 - Transmission Control Module Checksum</p>
			                <p>P1791 - Transmission Control Module Loop</p>
			                <p>P1791 - Throttle/Pedal Position Signal (2000+)</p>
			                <p>P1792 - Transmission Control Module Reprogrammable Memory</p>
			                <p>P1792 - ECM to TCM Engine Coolant Signal</p>
			                <p>P1793 - Transmission Control Module Stack Overrun</p>
			                <p>P1793 - Wheel Speed Signal (2000+)</p>
			                <p>P1795 - CAN Bus - Throttle Body Position</p>
			                <p>P1800 - TCM Power Relay Control Circuit</p>
			                <p>P1801 - Performance Selector Switch Failure</p>
			                <p>P1804 - Ground Control Relay</p>
			                <p>P1810 - TFP Valve Position Switch Circuit</p>
			                <p>P1811 - Maximum Adapt and Long Shift</p>
			                <p>P1812 - Transmission Over Temperature Condition</p>
			                <p>P1813 - Torque Control</p>
			                <p>P1814 - Torque Converter Overstressed</p>
			                <p>P1815 - Transmission Range Switch - Start In Wrong Range</p>
			                <p>P1816 - TFP Valve Position Sw. - Park/Neu. With Drive Ratio</p>
			                <p>P1817 - TFP Valve Position Sw. - Reverse With Drive Ratio</p>
			                <p>P1818 - TFP Valve Position Sw. - Drive Without Drive Ratio</p>
			                <p>P1819 - Internal Mode Switch - No StartWrong Range</p>
			                <p>P1820 - Internal Mode Switch Circuit A Low</p>
			                <p>P1822 - Internal Mode Switch Circuit B High</p>
			                <p>P1823 - Internal Mode Switch Circuit P Low</p>
			                <p>P1825 - Internal Mode Switch - Invalid Range</p>
			                <p>P1826 - Internal Mode Switch Circuit C - High</p>
			                <p>P1831 - Pressure Control (PC) Solenoid Power Circuit - Low Voltage</p>
			                <p>P1832 - Pressure Control (PC)/Shift Lock Solenoid Control Circuit High Voltage</p>
			                <p>P1833 - A/T Solenoids Power Circuit - Low Voltage</p>
			                <p>P1834 - Torque Converter Clutch (TCC)/Shift Solenoid (SS) Control Circuit High Voltage</p>
			                <p>P1835 - Kick-Down Switch Circuit</p>
			                <p>P1836 - Kick-Down Switch Failed Open</p>
			                <p>P1837 - Kick-Down Switch Failed Short</p>
			                <p>P1842 - 1-2 Shift Solenoid Circuit Low Voltage</p>
			                <p>P1843 - 1-2 Shift Solenoid Circuit High Voltage</p>
			                <p>P1844 - Torque Reduction Signal Circuit Desired By TCM</p>
			                <p>P1845 - 2-3 Shift Solenoid Circuit Low Voltage</p>
			                <p>P1847 - 2-3 Shift Solenoid Circuit High Voltage</p>
			                <p>P1850 - Brake Band Apply Solenoid Circuit</p>
			                <p>P1851 - Brake Band Apply Solenoid Performance</p>
			                <p>P1852 - Brake Band Apply SolenoidLow Voltage</p>
			                <p>P1853 - Brake Band Apply Solenoid High Voltage</p>
			                <p>P1860 - TCC PWM Solenoid Circuit Electrical</p>
			                <p>P1864 - Torque Converter Clutch Circuit</p>
			                <p>P1865 - 4-5 Shift Solenoid (SS) Valve Control Circuit High Voltage</p>
			                <p>P1866 - Torque Converter Clutch (TCC) Pulse Width Modulation (PWM) Solenoid Control Circuit Low Voltage</p>
			                <p>P1867 - Torque Converter Clutch (TCC) Pulse Width Modulation (PWM) Solenoid Control Circuit High Voltage</p>
			                <p>P1868 - Transmission Fluid Life</p>
			                <p>P1870 - Transmission Component Slipping</p>
			                <p>P1871 - Undefined Gear Ratio</p>
			                <p>P1873 - TCC Stator Temp. Switch Circuit Low</p>
			                <p>P1874 - TCC Stator Temp. Switch Circuit High</p>
			                <p>P1875 - 4WD Low Switch Circuit Electrical</p>
			                <p>P1884 - TCC Enable/Shift Light Circuit</p>
			                <p>P1886 - Shift Timing Solenoid</p>
			                <p>P1887 - TCC Release Switch Circuit</p>
			                <p>P1890 - ECM Data Input Circuit</p>
			                <p>P1890 - Throttle Position Signal Input</p>
			                <p>P1891 - Throttle Position Sensor PWM Signal Low</p>
			                <p>P1892 - Throttle Position Sensor PWM Signal High</p>
			                <p>P1893 - Engine Torque Signal Low Voltage</p>
			                <p>P1894 - Engine Torque Signal High Voltage</p>
			                <p>P1895 - TCM to ECM Torque Reduction Circuit</p>
			                <p>P2008 - Intake Manifold Runner Control (IMRC) Solenoid Control Circuit</p>
			                <p>P2009 - Intake Manifold Runner Control (IMRC) Solenoid Control Circuit Low Voltage</p>
			                <p>P2010 - Intake Manifold Runner Control (IMRC) Solenoid Control Circuit High Voltage</p>
			                <p>P2066 - Fuel Level Sensor 2 Performance</p>
			                <p>P2067 - Fuel Level Sensor 2 Circuit Low Voltage</p>
			                <p>P2068 - Fuel Level Sensor 2 Circuit High Voltage</p>
			                <p>P2096 - Post Catalyst Fuel Trim System Low Limit</p>
			                <p>P2097 - Post Catalyst Fuel Trim System High Limit</p>
			                <p>P2098 - Post Catalyst Fuel Trim System Low Limit</p>
			                <p>P2099 - Post Catalyst Fuel Trim System High Limit</p>
			                <p>P2100 - Throttle Actuator Control (TAC) Motor Control Circuit</p>
			                <p>P2101 - Control Module Throttle Actuator Position Performance</p>
			                <p>P2105 - Throttle Actuator Control (TAC) System - Forced Engine Shutdown</p>
			                <p>P2107 - Throttle Actuator Control (TAC) Module Internal Circuit</p>
			                <p>P2108 - Throttle Actuator Control (TAC) Module Performance</p>
			                <p>P2119 - Throttle Closed Position Performance</p>
			                <p>P2120 - Accelerator Pedal Position (APP) Sensor 1 Circuit</p>
			                <p>P2121 - Accelerator Pedal Position (APP) Sensor 1 Performance</p>
			                <p>P2122 - Accelerator Pedal Position (APP) Sensor 1 Circuit Low Voltage</p>
			                <p>P2123 - Accelerator Pedal Position (APP) Sensor 1 Circuit High Voltage</p>
			                <p>P2125 - Accelerator Pedal Position (APP) Sensor 2 Circuit</p>
			                <p>P2127 - Accelerator Pedal Position (APP) Sensor 2 Circuit Low Voltage</p>
			                <p>P2128 - Accelerator Pedal Position (APP) Sensor 2 Circuit High Voltage</p>
			                <p>P2135 - Throttle Position (TP) Sensor 1-2 Correlation</p>
			                <p>P2138 - Accelerator Pedal Position (APP) Sensor 1-2 Correlation</p>
			                <p>P2176 - Minimum Throttle Position Not Learned</p>
			                <p>P2500 - Generator L-Terminal Circuit Low Voltage</p>
			                <p>P2501 - Generator L-Terminal Circuit High Voltage</p>
			                <p>P2535 - Ignition 1 Switch Circuit High Voltage (PCM)</p>
			                <p>P2610 - ECU Malfunction</p>
			                <p>P2763 - Short to voltage in the TCC Solenoid</p>
			                <p>P2764 - Open or Short to ground in the TCC PWM solenoid valve circuit</p>
			                <p>P2A00 - HO2S Circuit Closed Loop (CL) Performance Bank 1 Sensor 1 (PCM)</p>
			                <p>P2A01 - HO2S Circuit Closed Loop (CL) Performance Bank 1 Sensor 2 (PCM)</p>
			                <p>P3000 - Hacking AWH Data</p>
			              </div>
			            </div>
			          </div>
			          <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingBCodes">
			              <h4 class="panel-title">
			                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseBCodes" aria-expanded="true" aria-controls="collapseBCodes">
			                  B-Codes
			                </a>
			              </h4>
			            </div>
			            <div id="collapseBCodes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBCodes">
			              <div class="panel-body">
			                <p>B0001 - PCM Discrete Input Speed Signal Error</p>
			                <p>B0004 - PCM Discrete Input Speed Signal Not Present</p>
			                <p>B0005 - In Park Switch Circuit Malfunction</p>
			                <p>B0012 - Right Front/Passenger Frontal Deployment Loop Circuit</p>
			                <p>B0013 - Right Front/Passenger Frontal Deployment Loop Circuit</p>
			                <p>B0014 - Right Front/Passenger Frontal Deployment Loop Circuit</p>
			                <p>B0016 - Right Front/Passenger Frontal Deployment Loop (Single Stage or Stage 1) Resistance Low</p>
			                <p>B0017 - Right Front/Passenger Frontal Deployment Loop (Single Stage or Stage 1) Open</p>
			                <p>B0018 - Right Front/Passenger Frontal Deployment Loop (Single Stage or Stage 1) Short to Ground/Voltage Out of Range</p>
			                <p>B0022 - Left Front/Driver Frontal Deployment Loop (Single Stage or Stage 1) Resistance Low</p>
			                <p>B0024 - Left Front/Driver Frontal Deployment Loop (Single Stage or Stage 1) Short to Ground/Voltage Out of Range</p>
			                <p>B0026 - Left Front/Driver Frontal Deployment Loop (Single Stage or Stage 1) Open</p>
			                <p>B0028 - Right Front/Passenger Side Deployment Loop Resistance Low</p>
			                <p>B0029 - Right Front/Passenger Side Deployment Loop Open</p>
			                <p>B0030 - Right Front/Passenger Side Deployment Loop Short to Ground/Voltage Out of Range</p>
			                <p>B0035 - ADS Closed/Shorted to Ground</p>
			                <p>B0036 - ADS Open/Missing/Shorted to Battery</p>
			                <p>B0037 - AUX switch closed/shorted to ground</p>
			                <p>B0038 - AUX switch open/shorted to battery</p>
			                <p>B0040 - Left Front/Driver Side Deployment Loop Resistance Low</p>
			                <p>B0041 - Left Front/Driver Side Deployment Loop Open</p>
			                <p>B0042 - Left Front/Driver Frontal Deployment Loop Circuit</p>
			                <p>B0043 - Left Front/Driver Frontal Deployment Loop Circuit</p>
			                <p>B0044 - Left Front/Driver Frontal Deployment Loop Circuit</p>
			                <p>B0045 - Left Front Side Deploy Loop Short to Ground/Voltage Out of Range</p>
			                <p>B0051 - Deployment Commanded</p>
			                <p>B0053 - Deployment Commanded with Loop Malfunctions Present</p>
			                <p>B0057 - Right Front/Passenger Pretensioner Deployment Loop Resistance Low</p>
			                <p>B0058 - Right Front/Passenger Pretensioner Deployment Loop Open</p>
			                <p>B0059 - Right Front/Passenger Pretensioner Deployment Loop Short to Ground/Voltage Out of Range</p>
			                <p>B0061 - Roof Rail Module-Left Deployment Loop Circuit</p>
			                <p>B0062 - Roof Rail Module-Left Deployment Loop Circuit</p>
			                <p>B0064 - Left Front/Driver Pretensioner Deployment Loop Resistance Low</p>
			                <p>B0065 - Left Front/Driver Pretensioner Deployment Loop Open</p>
			                <p>B0066 - Left Front/Driver Pretensioner Deployment Loop Short to Ground/Voltage Out of Range</p>
			                <p>B0068 - Roof Rail Module-Left Deployment Loop Circuit</p>
			                <p>B0069 - Roof Rail Module-Right Deployment Loop Circuit</p>
			                <p>B0070 - Roof Rail Module-Right Deployment Loop Circuit</p>
			                <p>B0071 - Roof Rail Module-Right Deployment Loop Circuit</p>
			                <p>B0073 - Supplemental Deployment Loop #1 Resistance Low</p>
			                <p>B0074 - Supplemental Deployment Loop #1 Open</p>
			                <p>B0075 - Supplemental Deployment Loop #1 Short to Ground/Voltage Out of Range</p>
			                <p>B0077 - Left Front/Driver Side Impact Sensor (SIS) Malfunction</p>
			                <p>B0078 - Right Front/Passenger SIS Malfunction</p>
			                <p>B0079 - Incorrect Left Front/Driver SIS Installed</p>
			                <p>B0080 - Discard Left Front/Driver SIS</p>
			                <p>B0081 - Incorrect Right Front/Passenger SIS Installed</p>
			                <p>B0082 - Discard Right Front/Passenger SIS</p>
			                <p>B0086 - Supplemental Deployment Loop #2 Resistance Low</p>
			                <p>B0087 - Supplemental Deployment Loop #2 Open</p>
			                <p>B0088 - Supplemental Deployment Loop #2 Short to Ground/Voltage Out of Range</p>
			                <p>B0090 - Active switch voltage out of range</p>
			                <p>B0091 - Active switch: wrong state</p>
			                <p>B0092 - PPS passenger detection error</p>
			                <p>B0093 - PPS/CPS self-test malfunction</p>
			                <p>B0094 - CPS childseat detection error</p>
			                <p>B0095 - SDM-PPS/CPS mismatch malfunction</p>
			                <p>B0100 - Electronic Front End Sensor 1 Performance</p>
			                <p>B0101 - Electronic Front End Sensor 1 Performance</p>
			                <p>B0102 - Electronic Front End Sensor 1 Performance</p>
			                <p>B0103 - Electronic Frontal Sensor Circuit</p>
			                <p>B0104 - Electronic Frontal Sensor Circuit</p>
			                <p>B0105 - Electronic Frontal Sensor Circuit</p>
			                <p>B0109 - Side impact module-Left Rear deployment loop resistance is less than 1.3 ohms</p>
			                <p>B0110 - Side impact module-Left Rear high circuit is less than 2.4 volts</p>
			                <p>B0111 - Side impact module-Left Rear high and/or low circuits is short to ground or short to voltage</p>
			                <p>B0112 - Side impact module-Right Rear deployment loop resistance is less than 1.3 ohms</p>
			                <p>B0113 - Side impact module-Right Rear high circuit is less than 2.4 volts</p>
			                <p>B0114 - Side impact module-Right Rear high and/or low circuits is short to ground or short to voltage</p>
			                <p>B0126 - Right Panel Discharge Temperature Fault</p>
			                <p>B0130 - Air Temperature/Mode Door Actuator Malfunction</p>
			                <p>B0131 - Right Heater Discharge Temperature Fault</p>
			                <p>B0145 - Auxiliary HAVC Actuator Circuit</p>
			                <p>B0159 - Outside Air Temperature Sensor Circuit Range/Performance</p>
			                <p>B0160 - Ambient Air Temperature Sensor Circuit</p>
			                <p>B0162 - Ambient Air Temperature Sensor Circuit</p>
			                <p>B0164 - Passenger Compartment Temperature Sensor #1 (Single Sensor or LH) Circuit Range/Performance</p>
			                <p>B0169 - In-car Temp Sensor Failure (passenger -not used)</p>
			                <p>B0174 - Output Air Temperature Sensor #1 (Upper; Single or LH) Circuit Range/Performance</p>
			                <p>B0179 - Output Air Temperature Sensor #2 (Lower; Single or LH) Circuit Range/Performance</p>
			                <p>B0183 - Sunload Sensor Circuit</p>
			                <p>B0184 - Solar Load Sensor #1 Circuit Range (sunload)</p>
			                <p>B0188 - Sunload Sensor Circuit</p>
			                <p>B0189 - Solar Load Sensor #2 Circuit Range (sunload)</p>
			                <p>B0229 - HVAC Actuator Circuit</p>
			                <p>B0248 - Mode Door Inoperative Error</p>
			                <p>B0249 - Heater/Defrost/AC Door Range Error</p>
			                <p>B0263 - HVAC Actuator Circuit</p>
			                <p>B0268 - A/I Door Inoperative Error</p>
			                <p>B0269 - Air Inlet Door Range Error</p>
			                <p>B0283 - Electric Rear Defrost Circuit</p>
			                <p>B0285 - Electric Rear Defrost Circuit Low (BCM)</p>
			                <p>B0286 - Electric Rear Defrost Circuit High (BCM)</p>
			                <p>B0408 - Temperature Control #1 (Main/Front) Circuit Malfunction</p>
			                <p>B0409 - Air Mix Door #1 Range Error</p>
			                <p>B0414 - Air Temperature/Mode Door Actuator Malfunction</p>
			                <p>B0418 - HVAC Actuator Circuit</p>
			                <p>B0419 - Air Mix Door #2 Range Error</p>
			                <p>B0423 - Air Mix Door #2 Inoperative Error</p>
			                <p>B0424 - Air Temperature/Mode Door Actuator Malfunction</p>
			                <p>B0428 - Air Mix Door #3 Inoperative Error</p>
			                <p>B0429 - Temperature Control #3 Rear Circuit Range/Performance</p>
			                <p>B0510 - RH Panel Discharge Temp Sensor Failure</p>
			                <p>B0515 - RH Heater Discharge Temp Sensor Failure</p>
			                <p>B0520 - Rear Discharge Temp Sensor Failure</p>
			                <p>B0530 - Fuel Level Sensor Stuck</p>
			                <p>B0532 - Fuel Sensor Shorted To Ground</p>
			                <p>B0533 - Fuel Sensor Open/Shorted To B+</p>
			                <p>B0540 - Speedometer Circuit</p>
			                <p>B0560 - Tachometer Circuit</p>
			                <p>B0688 - Security System Indicator Circuit High</p>
			                <p>B0689 - Security System Indicator Circuit Open (BCM)</p>
			                <p>B0728 - P (park) Indicator Circuit High (BCM)</p>
			                <p>B0729 - P (park) Indicator Circuit Open (BCM)</p>
			                <p>B0733 - R (reverse) Indicator Circuit High (BCM)</p>
			                <p>B0734 - R (reverse) Indicator Circuit Open (BCM)</p>
			                <p>B0738 - N (neutral) Indicator Circuit High (BCM)</p>
			                <p>B0739 - N (neutral) Indicator Circuit Open (BCM)</p>
			                <p>B0748 - D (drive) Indicator Circuit High (BCM)</p>
			                <p>B0749 - D (drive) Indicator Circuit Open (BCM)</p>
			                <p>B0768 - Service Indicator Circuit High</p>
			                <p>B0770 - All Wheel Drive (AWD) Indicator Circuit</p>
			                <p>B0775 - Four Wheel Drive High Range (4HI) Indicator Circuit</p>
			                <p>B0780 - Four Wheel Drive Low Range (4LO) Indicator Circuit</p>
			                <p>B0785 - Two Wheel Drive High Range (2HI) Indicator Circuit</p>
			                <p>B0790 - Transfer Case Neutral Indicator Circuit</p>
			                <p>B0846 - +5 Volt Reference Out of Range</p>
			                <p>B0856 - Battery 2 Out of Range</p>
			                <p>B0951 - Dimming Circuit</p>
			                <p>B1000 - ECU Malfunction</p>
			                <p>B1001 - Option Configuration Error</p>
			                <p>B1004 - Keep Alive Memory (KAM)</p>
			                <p>B1008 - Calibration Data Not Programmed (BCM)</p>
			                <p>B1007 - EEPROM Write Error</p>
			                <p>B1009 - EEPROM Checksum Error</p>
			                <p>B1013 - ROM Checksum Error</p>
			                <p>B1014 - Program ROM Checksum Error</p>
			                <p>B1015 - Passenger Deploy. Loop Resistance High</p>
			                <p>B1016 - Passenger Deployment Loop Resistance Low</p>
			                <p>B1017 - Passenger Deployment Loop Open</p>
			                <p>B1018 - Passenger Deployment Loop Short to GND</p>
			                <p>B1019 - Passenger Deploy. Loop Short to Voltage</p>
			                <p>B1021 - Driver Deployment Loop Resistance High</p>
			                <p>B1022 - Driver Deployment Loop Resistance Low</p>
			                <p>B1023 - Integral Switch Performance</p>
			                <p>B1024 - Driver Deployment Loop Short to Ground</p>
			                <p>B1025 - Driver Deployment Loop Short to Voltage</p>
			                <p>B1026 - Driver Deployment Loop Open</p>
			                <p>B1035 - Discr. Sensor Closed or Short to GND</p>
			                <p>B1036 - Discr. Sensor Open or Short to Voltage</p>
			                <p>B1045 - Audio Output 3 Circuit (Radio)</p>
			                <p>B1051 - Frontal Air Bag and Preten Deployment</p>
			                <p>B1053 - Deployment Commanded w/Loop Malfunction</p>
			                <p>B1054 - Infl Rst IP Module Switch Circuit Failure</p>
			                <p>B1055 - Audio Output 4 Circuit (Radio)</p>
			                <p>B1061 - Lamp Circuit Failure</p>
			                <p>B1071 - Internal SDM Failure</p>
			                <p>B1115 - Passenger Deploy. Loop Resistance High</p>
			                <p>B1116 - Passenger Deploy. Loop Resistance Low</p>
			                <p>B1117 - Passenger Deployment Loop Open</p>
			                <p>B1121 - Driver Deployment Loop Resistance High</p>
			                <p>B1122 - Driver Deployment Loop Resistance Low</p>
			                <p>B1124 - Driver/Passenger Deploy. Loop Short to GND</p>
			                <p>B1125 - Driver/Pass Deploy Loop Short to Voltage</p>
			                <p>B1126 - Driver Deployment Loop Open</p>
			                <p>B1131 - Passenger Pretensioner Loop Resistance High</p>
			                <p>B1132 - Passenger Pretensioner Loop Resistance Low</p>
			                <p>B1134 - Passenger Pretensioner Loop Open</p>
			                <p>B1135 - Discr. Sensor Closed or Short to GND</p>
			                <p>B1136 - Discr. Sensor Open or Short to Voltage</p>
			                <p>B1141 - Driver Pretensioner Loop Resistance High</p>
			                <p>B1142 - Driver Pretens. Deploy. Loop Res. Low</p>
			                <p>B1144 - Driver/Pass Pretens. Loop Short to GND</p>
			                <p>B1145 - Driver/Pass Pretens. Loop Short to Volt</p>
			                <p>B1146 - Driver Pretensioner Loop Open</p>
			                <p>B1147 - Driver Side Air Bag System Malfunction</p>
			                <p>B1148 - Passenger Side Air Bag System Malfunction</p>
			                <p>B1151 - Deployment Commanded - Frontal</p>
			                <p>B1152 - Data Area Full</p>
			                <p>B1153 - Deployment Commanded w/Loop Malfunction</p>
			                <p>B1155 - SDM Calibration Mismatch</p>
			                <p>B1159 - Loss of Serial Data-Key Not Received</p>
			                <p>B1160 - Loss of Serial Data - VIN Not Received</p>
			                <p>B1161 - Lamp Circuit Failure</p>
			                <p>B1163 - Loss of Serial Data-No Lamp Response</p>
			                <p>B1171 - Internal SDM Failure</p>
			                <p>B1245 - CD Changer Not Responding</p>
			                <p>B1259 - The digital radio receiver detects an antenna fault</p>
			                <p>B1271 - Theft Lock Enabled - VIN does not match expect value</p>
			                <p>B1310 - Ambient Air Temperature Sensor Failure</p>
			                <p>B1311 - Outside Air Temp Sensor Short Circuit</p>
			                <p>B1312 - High Side Temp Sensor Open Circuit</p>
			                <p>B1313 - High Side Temp Sensor Short Circuit</p>
			                <p>B1314 - Evaporator Inlet Temp Sensor Open Circuit</p>
			                <p>B1315 - Evaporator Inlet Temp Sensor Short Circuit</p>
			                <p>B1316 - In Car Temperature Sensor Open Circuit</p>
			                <p>B1317 - In Car Air Temperature Sensor</p>
			                <p>B1318 - LH Sun Load Sensor Fault</p>
			                <p>B1319 - Sunload Sensor Short Circuit</p>
			                <p>B1321 - A/C Low Side Temperature Sensor Fault</p>
			                <p>B1324 - A/C Refrigerant Overpressure</p>
			                <p>B1327 - Vehicle system voltage below 9.0 volts</p>
			                <p>B1328 - Vehicle system voltage is greater than 15.9 volts</p>
			                <p>B1328 - RH Sun Load Sensor Fault</p>
			                <p>B1330 - Left A/C Discharge Sensor Fault</p>
			                <p>B1331 - Right A/C Discharge Sensor Fault</p>
			                <p>B1332 - Left Heater Discharge Sensor Fault</p>
			                <p>B1333 - Right Heater Discharge Sensor Fault</p>
			                <p>B1336 - Memory seat module (MSM) current exceeds 81 amps</p>
			                <p>B1340 - Air Mix Door One Movement Fault</p>
			                <p>B1341 - Air Mix Door Two Movement Fault</p>
			                <p>B1343 - Air Inlet Door Movement Fault</p>
			                <p>B1344 - HeaterDefrost/AC Door Movement Fault</p>
			                <p>B1347 - Very Low A/C Refrigerant Warning</p>
			                <p>B1348 - Very Low A/C Refrigerant Pressure</p>
			                <p>B1350 - Engine Coolant Over-Temperature</p>
			                <p>B1372 - Device Ignition 1 Circuit Low</p>
			                <p>B1375 - Device Ignition 3 (ON) Circuit</p>
			                <p>B1377 - Device Ignition 3 (ON) Circuit Low (BCM)</p>
			                <p>B1378 - Device Ignition 3 (ON) Circuit High (BCM)</p>
			                <p>B1382 - Device Ignition ACCESSORY Circuit Low</p>
			                <p>B1390 - Device Voltage Reference Input Circuit Malfunction</p>
			                <p>B1396 - Device Voltage Reference Output 1 Circuit Range Performance</p>
			                <p>B1399 - Loss of KDD Communications</p>
			                <p>B1420 - Seat Switch Input Status</p>
			                <p>B1422 - Device Power Moding Malfunction</p>
			                <p>B1438 - IPC High Voltage Output Overcurrent to IPM</p>
			                <p>B1440 - Power Mode Master Input Circuits Mismatch</p>
			                <p>B1480 - Battery Rundown Protection Circuit Malfunction</p>
			                <p>B1482 - Battery Rundown Protection Circuit Low (BCM)</p>
			                <p>B1513 - Voltage falls below 10.5 volts with the engine is running</p>
			                <p>B1514 - Voltage is greater than 16.2 volts with the engine running</p>
			                <p>B1550 - Mirror Left Front or Right Front Select Switch Circuit</p>
			                <p>B1552 - Keep Alive Memory (KAM) Error</p>
			                <p>B1556 - IPC EEPROM Odo/Configuration Error</p>
			                <p>B1557 - EEPROM Calibration Error</p>
			                <p>B1558 - BCM EPROM Checksum Error</p>
			                <p>B1586 - Mirror Horiz. Pos Sensor-Out of Range/Open</p>
			                <p>B1591 - Mirror Vert. Pos Sensor-Out of Range/Open</p>
			                <p>B1652 - Loss of Keep Alive Memory (KAM)</p>
			                <p>B1656 - EEPROM Write Error</p>
			                <p>B1658 - EEPROM Checksum Error</p>
			                <p>B1697 - Mirror Switch L Input Shorted to Ground</p>
			                <p>B1698 - Mirror Switch L Up Input Stuck High</p>
			                <p>B1702 - Mirror Switch L Input Shorted to Ground</p>
			                <p>B1703 - Mirror Switch L Down Input Stuck High</p>
			                <p>B1707 - Mirror Switch R Input Shorted to Ground</p>
			                <p>B1708 - Mirror Switch R Up Input Stuck High</p>
			                <p>B1710 - Switched Antenna Error</p>
			                <p>B1712 - Mirror Switch R Input Shorted to Ground</p>
			                <p>B1713 - Mirror Switch R Down Input Stuck High</p>
			                <p>B1717 - Mirror Power Fold Control Switch Shorted Low</p>
			                <p>B1718 - Power Folding Mirror Switch Input Circuit High</p>
			                <p>B1720 - Mirror Up and Down Control Switch Circuit</p>
			                <p>B1721 - Mirror Left and Right Control Switch Circuit</p>
			                <p>B1723 - Mirror Motor Control Circuit 1 Performance</p>
			                <p>B1724 - Mirror Motor Control Circuit 2 Performance</p>
			                <p>B1735 - Driver Seat Front Up Switch Circuit Malfunction (Power Seat Switch Circuit)</p>
			                <p>B1740 - Driver Seat Front Down Switch Circuit Malfunction</p>
			                <p>B1745 - Driver Seat Rear Up Switch Circuit Malfunction</p>
			                <p>B1750 - Driver Seat Rear Down Switch Circuit Malfunction</p>
			                <p>B1755 - Driver Seat Asm Forward Switch Circuit Malfunction</p>
			                <p>B1760 - Driver Seat Asm Rearward Switch Circuit Malfunction</p>
			                <p>B1760 - CD Changer Not Responding</p>
			                <p>B1761 - CD changer tracking fault</p>
			                <p>B1762 - CD changer focus error</p>
			                <p>B1763 - CD player load/unload fault</p>
			                <p>B1770 - Cassette not responding</p>
			                <p>B1771 - Cassette tape slow</p>
			                <p>B1772 - Cassette head cleaning required</p>
			                <p>B1780 - Theft Lock Enabled</p>
			                <p>B1802 - Inadv. Pwr Short to Ground</p>
			                <p>B1805 - Ignition Switch Problem</p>
			                <p>B1815 - Driver Recline Forward Switch Circuit Malfunction</p>
			                <p>B1820 - Driver Recline Rearward Switch Circuit Malfunction</p>
			                <p>B1825 - Driver Recline Sensor Circuit Malfunction</p>
			                <p>B1830 - Driver Lumbar Forward Switch Circuit Malfunction</p>
			                <p>B1835 - Driver Lumbar Rearward Switch Circuit Malfunction</p>
			                <p>B1840 - Driver Lumbar Up Switch Circuit Malfunction</p>
			                <p>B1845 - Driver Lumbar Down Switch Circuit Malfunction</p>
			                <p>B1850 - Driver Lumbar Horiz Sensor Circuit Malfunction</p>
			                <p>B1860 - Driver Lumbar Vert Sensor Circuit Malfunction</p>
			                <p>B1870 - Driver Belt Tower Up Switch Circuit Malfunction</p>
			                <p>B1875 - Driver Belt Tower Down Switch Circuit Malfunction</p>
			                <p>B1900 - Driver Belt Tower Vert Sensor Circuit Malfunction</p>
			                <p>B1910 - Generator L-Terminal Open Circuit</p>
			                <p>B1911 - Generator L-Terminal Problem</p>
			                <p>B1913 - Heated Seat Switch - Mode Input Shorted to Battery</p>
			                <p>B1918 - Heated Seat Switch - Temperature Input Shorted to Battery</p>
			                <p>B1970 - Exterior Lamp Power</p>
			                <p>B1971 - Inadvertent Power</p>
			                <p>B1972 - Low Power Driver Fault</p>
			                <p>B1973 - High Power Control Fault</p>
			                <p>B1981 - Battery Voltage Low</p>
			                <p>B1982 - Device Power Circuit High</p>
			                <p>B1983 - Device Power Circuit Low</p>
			                <p>B2075 - Lumbar Switch Control Circuit</p>
			                <p>B2080 - Lumbar Switch Control Circuit</p>
			                <p>B2085 - Lumbar Switch Control Circuit</p>
			                <p>B2090 - Lumbar Switch Control Circuit</p>
			                <p>B2101 - Recline Aft Switch Failed</p>
			                <p>B2102 - Recline Forward Switch Failed</p>
			                <p>B2103 - Rear Vertical Down Switch Failed</p>
			                <p>B2104 - Rear Vertical Up Switch Failed</p>
			                <p>B2105 - Horizontal Aft Switch Failed</p>
			                <p>B2106 - Horizontal Forward Switch Failed</p>
			                <p>B2107 - Front Vertical Down Switch Failed</p>
			                <p>B2108 - Front Vertical Up Switch Failed</p>
			                <p>B2109 - Lumbar Aft Switch Failed</p>
			                <p>B2110 - Lumbar Forward Switch Failed</p>
			                <p>B2111 - Lumbar Down Switch Failed</p>
			                <p>B2112 - Lumbar Up Switch Failed</p>
			                <p>B2115 - Recline Sensor Failed</p>
			                <p>B2116 - Rear Vertical Sensor Failed</p>
			                <p>B2117 - Horizontal Sensor Failed</p>
			                <p>B2118 - Front Vertical Sensor Failed</p>
			                <p>B2119 - Lumbar Forward/Aft Sensor Failed</p>
			                <p>B2120 - Lumbar Up/Down Sensor Failed</p>
			                <p>B2130 - Driver Memory 1 Select Switch Circuit Malfunction</p>
			                <p>B2131 - Driver Memory 2 Select Switch Circuit Malfunction</p>
			                <p>B2132 - Driver Memory Exit Exit/Off Switch Circuit Malfunction</p>
			                <p>B2133 - Driver Memory Set Switch Circuit Malfunction</p>
			                <p>B2140 - Mirror Up Control Switch Circuit Malfunction</p>
			                <p>B2141 - Mirror Down Control Switch Circuit Malfunction</p>
			                <p>B2142 - Mirror Left Control Switch Circuit Malfunction</p>
			                <p>B2143 - Mirror Right Control Switch Circuit Malfunction</p>
			                <p>B2144 - Left Front Mirror Vertical Position Sensor Circuit Low</p>
			                <p>B2145 - Left Front Mirror Vertical Position Sensor Circuit High</p>
			                <p>B2146 - Left Front Mirror Horizontal Position Sensor Circuit Low</p>
			                <p>B2147 - Left Front Mirror Horizontal Position Sensor Circuit High</p>
			                <p>B2148 - Right Front Mirror Vertical Position Sensor Circuit Low</p>
			                <p>B2149 - Right Front Mirror Vertical Position Sensor Circuit High</p>
			                <p>B2150 - Right Front Mirror Horizontal Position Sensor Circuit Low</p>
			                <p>B2151 - Right Front Mirror Horizontal Position Sensor Circuit High</p>
			                <p>B2175 - Tilt/Telescope Module Manual Switch Fail</p>
			                <p>B2200 - Left Front Window Switch Stuck in Up Position</p>
			                <p>B2201 - Left Front Window Switch Stuck in Down Position</p>
			                <p>B2202 - Right Front Window Switch Stuck in Up Position</p>
			                <p>B2203 - Right Front Window Switch Stuck in Down Position</p>
			                <p>B2204 - Left Rear Window Switch Stuck in Up Position</p>
			                <p>B2205 - Left Rear Window Switch Stuck in Down Position</p>
			                <p>B2206 - Right Rear Window Switch Stuck in Up Position</p>
			                <p>B2207 - Right Rear Window Switch Stuck in Down Position</p>
			                <p>B2212 - Right Front Switch on Left Front Door Stuck Up Position</p>
			                <p>B2213 - Right Front Switch on Left Front Door Stuck Down Position</p>
			                <p>B2214 - Left Rear Switch on Left Front Door Stuck Up Position</p>
			                <p>B2215 - Left Rear Switch on Left Front Door Stuck Down Position</p>
			                <p>B2216 - Right Rear Switch on Left Front Door Stuck Up Position</p>
			                <p>B2217 - Right Rear Switch on Left Front Door Stuck Down Position</p>
			                <p>B2220 - Left Front Door Lock/Unlock Switch Stuck in Lock</p>
			                <p>B2221 - Left Front Door Lock/Unlock Switch Stuck UnLock</p>
			                <p>B2222 - Right Front Door Lock/Unlock Switch Stuck in Lock</p>
			                <p>B2223 - Right Front Door Lock/Unlock Switch Stuck UnLock</p>
			                <p>B2224 - Left Rear Door Lock/Unlock Switch Stuck in Lock</p>
			                <p>B2226 - Right Rear Door Lock/Unlock Switch Stuck in Lock</p>
			                <p>B2240 - Memory 1 Switch Failed</p>
			                <p>B2241 - Memory 2 Switch Failed</p>
			                <p>B2242 - Memory Exit Switch Failed</p>
			                <p>B2243 - Memory Set Switch Failed</p>
			                <p>B2310 - Hand Set Failure</p>
			                <p>B2311 - TRU Failure</p>
			                <p>B2312 - Software Failure</p>
			                <p>B2355 - Driver Front Vertical Sensor Malfunction</p>
			                <p>B2365 - Driver Rear Vertical Sensor Malfunction</p>
			                <p>B2375 - Driver Seat Asm Horiz Sensor Circuit Malfunction</p>
			                <p>B2419 - Twilight Photocell Circuit Problem</p>
			                <p>B2420 - Twilight Delay Pot Failure</p>
			                <p>B2422 - Interior Lamp Rheostat Failure</p>
			                <p>B2425 - Seat Heater Circuit</p>
			                <p>B2430 - Seat Heater Circuit</p>
			                <p>B2435 - Seat Back Heater Sensor</p>
			                <p>B2440 - Seat Back Heater Sensor</p>
			                <p>B2455 - Open or short in Cellular Phone Microphone Circuit</p>
			                <p>B2460 - Navigation Antenna Selector Circuit High Current</p>
			                <p>B2461 - Navigation ECU Synchronous Signal Error</p>
			                <p>B2462 - GPS Signal Error</p>
			                <p>B2463 - Navigation CD Player - No Disk</p>
			                <p>B2464 - Navigation CD Player - Decoding Error</p>
			                <p>B2465 - Navigation CD Player - Data Error</p>
			                <p>B2466 - Navigation VICS Memory Error</p>
			                <p>B2468 - Navigation Display Head (NDH) Malfunction</p>
			                <p>B2470 - Daytime Running Lamps Fault</p>
			                <p>B2470 - Cellular Phone Antenna Circuit (2000+)</p>
			                <p>B2471 - Interior Lamp Fault</p>
			                <p>B2472 - Low Beam Fault</p>
			                <p>B2473 - High Beam Fault</p>
			                <p>B2474 - Navigation Display Head (NDH) Back Lighting Malfunction</p>
			                <p>B2475 - Navigation Display Head (NDH) Auxiliary Input Malfunction</p>
			                <p>B2476 - Cellular Phone Select Service Switch Malfunction (keypad signal circuit)</p>
			                <p>B2477 - Reverse Lamp Relay Shorted to Ground</p>
			                <p>B2478 - Reverse Lamp Shorted to Battery</p>
			                <p>B2482 - Cellular Phone Select Service Switch Range/Performance</p>
			                <p>B2483 - Global Positioning System (GPS) Antenna Circuit</p>
			                <p>B2484 - Global Positioning System (GPS) Antenna Circuit</p>
			                <p>B2502 - Auto Trans Shift Lock Control Shorted to Ground</p>
			                <p>B2503 - Park Gear (Auto Trans Shift Lock Control) Relay Shorted to Batt</p>
			                <p>B2507 - Voltage from climate control seat module (CCSM) is less than 2.0 volts or greater than 10 volts</p>
			                <p>B2510 - Steering Wheel Controls HVAC Key Stuck</p>
			                <p>B2511 - Steering Wheel Controls Conv Key Stuck</p>
			                <p>B2512 - Strng Wheel Controls Illegal A/D Values</p>
			                <p>B2515 - Strg Whl Cont Illegal Resistance Value</p>
			                <p>B2527 - Front Fog Lamp Circuit Low</p>
			                <p>B2530 - Front Foglamps Control Circuit</p>
			                <p>B2532 - Front Fog Lamps Control Circuit Low (BCM)</p>
			                <p>B2533 - Front Fog Lamps Control Circuit High (BCM)</p>
			                <p>B2540 - Rear Foglamps Control Circuit</p>
			                <p>B2550 - Storage Mode Entered (Backup Lamps Control Circuit)</p>
			                <p>B2556 - Interior Lamp Rheostat Circuit Range</p>
			                <p>B2560 - RKE Message Validation Error</p>
			                <p>B2575 - Headlamp Control Circuit</p>
			                <p>B2577 - Headlamp Relay Output Circuit Low (BCM)</p>
			                <p>B2578 - Headlamp Relay Output Circuit High (BCM)</p>
			                <p>B2580 - Headlamp High Beam Control Circuit</p>
			                <p>B2585 - Parklamp Control Circuit Malfunction</p>
			                <p>B2587 - Park Lamp Relay Output Circuit Low (BCM)</p>
			                <p>B2588 - Park Lamp Relay Output Circuit High (BCM)</p>
			                <p>B2600 - Daytime Running Lamp Control Circuit (BCM)</p>
			                <p>B2602 - Daytime Running Lamp Circuit Low (BCM)</p>
			                <p>B2603 - Daytime Running Lamp Circuit High (BCM)</p>
			                <p>B2610 - Passenger Compartment Dimming 1 Circuit</p>
			                <p>B2615 - Passenger Compartment Dimming 2 Circuit</p>
			                <p>B2620 - Display Dimming Input Circuit</p>
			                <p>B2622 - Display Dimming Pulse Width Modulation (PWM) Input Circuit Low (BCM)</p>
			                <p>B2623 - Display Dimming Pulse Width Modulation (PWM) Input Circuit High (BCM)</p>
			                <p>B2625 - Display Dimming Pulse Width Modulation (PWM) Output Circuit</p>
			                <p>B2627 - Display Dimming Pulse Width Modulation (PWM) Output Circuit Low (BCM)</p>
			                <p>B2628 - Display Dimming Pulse Width Modulation (PWM) Output Circuit High (BCM)</p>
			                <p>B2641 - Delayed Exterior Lighting Ctrl Circuit Range</p>
			                <p>B2645 - Ambient Light Sensor Circuit</p>
			                <p>B2646 - Ambient Light Sensor Circuit Range</p>
			                <p>B2647 - Ambient Light Sensor Circuit Low (BCM)</p>
			                <p>B2662 - Park Lamp Relay Output Circuit Low (BCM)</p>
			                <p>B2697 - Headlamp Washer Request Circuit</p>
			                <p>B2700 - Ignition Shift Interlock Circuit (base number)</p>
			                <p>B2701 - Ignition Shift Interlock Circuit Range/Performance</p>
			                <p>B2702 - Ignition Shift Interlock Circuit Low</p>
			                <p>B2703 - Ignition Shift Interlock Circuit High</p>
			                <p>B2704 - Ignition Shift Interlock Circuit Open</p>
			                <p>B2707 - Gearshift Unlock Circuit Low (BCM)</p>
			                <p>B2708 - Gearshift Unlock Circuit High (BCM)</p>
			                <p>B2710 - PASSKey Open/Shorted Pellet</p>
			                <p>B2711 - PASSKey Open/Shorted Pellet After Good Key</p>
			                <p>B2719 - CTD-Trunk Tamper Switch Fault</p>
			                <p>B2725 - ATC Mode Switch Circuit Malfunction</p>
			                <p>B2732 - Trunk Release Switch Circuit Low</p>
			                <p>B2734 - Coded Key Controller Memory Failure</p>
			                <p>B2743 - Fog Lamp Switch Circuit High (BCM)</p>
			                <p>B2750 - PASSKey Data Communication Failure</p>
			                <p>B2752 - Horn Relay Coil Circuit Low (BCM)</p>
			                <p>B2753 - Horn Relay Coil Circuit High (BCM)</p>
			                <p>B2757 - Driver Memory 1 Select Switch Circuit Low</p>
			                <p>B2762 - Driver Memory 2 Select Switch Circuit Low</p>
			                <p>B2767 - Memory Set Switch Failed Low</p>
			                <p>B2772 - Driver Memory Exit Switch Circuit Low</p>
			                <p>B2780 - Wrong Resistor Before Good</p>
			                <p>B2781 - Wrong Resistor After Good</p>
			                <p>B2782 - PASSKey Pellet Resistance Not Programmed</p>
			                <p>B2783 - Key Code/Password Corrupted in Memory</p>
			                <p>B2805 - Steering Whl Controls HVAC Switch Circuit Malfunction</p>
			                <p>B2810 - Steering wheel controls Entertainment Circuit Malfunction</p>
			                <p>B2815 - Steering Wheel Controls Illegal Resistance Value</p>
			                <p>B2853 - Telescope Forward Switch Circuit Malfunction</p>
			                <p>B2858 - Telescope Rearward Switch Circuit Malfunction</p>
			                <p>B2860 - Telescope Position Sensor Range</p>
			                <p>B2862 - Telescope Position Sensor Low</p>
			                <p>B2873 - Tilt Up Switch Circuit Malfunction</p>
			                <p>B2878 - Tilt Down Switch Circuit Malfunction</p>
			                <p>B2880 - Tilt Position Sensor Range</p>
			                <p>B2882 - Tilt Position Sensor Low</p>
			                <p>B2891 - Tilt/Telescope Motor Over Current</p>
			                <p>B2904 - Tilt/Telescope 4-way Position Switch Circuit Malfunction</p>
			                <p>B2947 - Security System Sensor Power Circuit Low</p>
			                <p>B2948 - Security System Sensor Power Circuit High</p>
			                <p>B2955 - Security System Sensor Data Circuit Malfunction</p>
			                <p>B2957 - Security System Sensor Data Circuit Low</p>
			                <p>B2958 - Security System Sensor Data Circuit High</p>
			                <p>B2960 - Security System Sensor Data Incorrect but Valid</p>
			                <p>B2961 - Key In Ignition Circuit Malfunction</p>
			                <p>B2965 - Key in Ignition Circuit Open (IPC)</p>
			                <p>B3028 - Starter Relay Interface Short to Ground</p>
			                <p>B3029 - Starter Relay Interface Open/Short to B+</p>
			                <p>B3031 - Key Decoder Device in Assem Learn Mode</p>
			                <p>B3033 - Security System Indicates Tamper</p>
			                <p>B3055 - Key Not Present</p>
			                <p>B3060 - Security System Sensor Data Incorrect but Valid</p>
			                <p>B3064 - Driver Door Key Cylinder Circuit</p>
			                <p>B3069 - Right Front/Left Front Door Key Unlock Circuit Low</p>
			                <p>B3108 - Transmitter Synchronization Failure</p>
			                <p>B3109 - 3 consecutive low battery signals from the same programmed transmitter</p>
			                <p>B3127 - LF Door Only, Unlock Circuit Low (BCM)</p>
			                <p>B3128 - LF Door Only, Unlock Circuit High (BCM)</p>
			                <p>B3132 - All Door Unlock Circuit Low (BCM)</p>
			                <p>B3133 - All Door Unlock Circuit High (BCM)</p>
			                <p>B3137 - All Door Lock Circuit Low (BCM)</p>
			                <p>B3138 - All Door Lock Circuit High (BCM)</p>
			                <p>B3142 - Left Front Unlock Switch Circuit Low</p>
			                <p>B3147 - Passenger Unlock Switch Circuit Low</p>
			                <p>B3152 - Left Front Lock Switch Circuit Low</p>
			                <p>B3157 - Passenger Lock Switch Circuit Low</p>
			                <p>B3172 - Window Up Switch Circuit Low</p>
			                <p>B3177 - Window Down Switch Circuit Low</p>
			                <p>B3182 - Window Switch Circuit</p>
			                <p>B3187 - Window Switch Circuit</p>
			                <p>B3192 - Window Switch Circuit</p>
			                <p>B3197 - Window Switch Circuit</p>
			                <p>B3203 - Rear Window Lockout Switch Input Circuit High</p>
			                <p>B3282 - Window Switch-Express Input Shorted to Ground</p>
			                <p>B3287 - Left Rear Window Switch Express Down Circuit Low</p>
			                <p>B3292 - Right Rear Window Switch Express Down Circuit Low</p>
			                <p>B3282 - Window Switch-Express Input Shorted to Ground</p>
			                <p>B3287 - Window Switch Circuit</p>
			                <p>B3292 - Window Switch Circuit</p>
			                <p>B3377 - Left Front Window Up Switch Circuit Low</p>
			                <p>B3382 - Left Front Window Down Switch Circuit Low</p>
			                <p>B3387 - Right Front Window Up Switch Circuit Low</p>
			                <p>B3392 - Right Front Window Down Switch Circuit Low</p>
			                <p>B3397 - Left Rear Window Up Switch Circuit Low</p>
			                <p>B3410 - AHLD Front Axle Sensor Signal Circuit</p>
			                <p>B3420 - AHLD Rear Axle Sensor Signal Circuit</p>
			                <p>B3452 - Left Rear Window Down Switch Circuit Low</p>
			                <p>B3457 - Right Rear Window Up Switch Circuit Low</p>
			                <p>B3462 - Right Rear Window Down Switch Circuit Low</p>
			                <p>B3467 - Left Front Window Express Down Circuit Low</p>
			                <p>B3472 - Right Front Window Express Down Circuit Low</p>
			                <p>B3477 - Left Rear Window Express Down Circuit Low</p>
			                <p>B3482 - MalfunctionWindow Express Down Circuit Low</p>
			                <p>B3517 - Left Rear Door Switch Express Up/Down Window Contact Shorted to GND</p>
			                <p>B3522 - Right Rear Door Switch Express Up/Down Window Contact Shorted to GND</p>
			                <p>B3527 - Window Lockout Switch Circuit Low</p>
			                <p>B3531 - Auxiliary HAVC Actuator Circuit</p>
			                <p>B3642 - Seat cool temperature switch shorted</p>
			                <p>B3702 - Intermittent Wiper Delay Input Circuit Low (BCM)</p>
			                <p>B3703 - Intermittent Wiper Delay Input Circuit High/Open (BCM)</p>
			                <p>B3708 - Front Washer Motor Input High (BCM)</p>
			                <p>B3713 - Rear Washer Motor Input Circuit High (BCM)</p>
			                <p>B3717 - Front Wiper Relay Drive Circuit Low (BCM)</p>
			                <p>B3718 - Front Wiper Relay Drive Circuit High (BCM)</p>
			                <p>B3722 - Rear Wiper Relay Drive Circuit Low (BCM)</p>
			                <p>B3723 - Rear Wiper Relay Drive Circuit High (BCM)</p>
			                <p>B3761 - HVAC Actuator Circuit</p>
			                <p>B3770 - HVAC Actuator Circuit</p>
			                <p>B3793 - Memory Seat Module Over Current</p>
			                <p>B3801 - Passenger Compartment Lamp Request Circuit</p>
			                <p>B3802 - Parklamps Request Circuit</p>
			                <p>B3808 - Rear Door Lock Relay Circuit</p>
			                <p>B3809 - Rear Door Unlock Relay Circuit</p>
			                <p>B3810 - Washer Relay Circuit</p>
			                <p>B3811 - Washer Relay Circuit</p>
			                <p>B3819 - Left Rear Power Window Up Relay Circuit</p>
			                <p>B3820 - Left Rear Power Window Down Relay Circuit</p>
			                <p>B3821 - Window Lockout Circuit Low</p>
			                <p>B3822 - Right Rear Power Window Up Relay Circuit</p>
			                <p>B3823 - Right Rear Power Window Down Relay Circuit</p>
			                <p>B3824 - Window Lockout Circuit Low</p>
			                <p>B3832 - Window Position Sensor Circuit</p>
			                <p>B3833 - Window Position Sensor Circuit</p>
			                <p>B3905 - Lumbar Switch Control Circuit</p>
			                <p>B3935 - Transponder Authentication Error</p>
			                <p>B1200 Climate Control Pushbutton Circuit Failure</p>
			                <p>B1201 Fuel Sender Circuit Failure</p>
			                <p>B1202 Fuel Sender Circuit Open</p>
			                <p>B1203 Fuel Sender Circuit Short To Battery</p>
			                <p>B1204 Fuel Sender Circuit Short To Ground</p>
			                <p>B1205 EIC Switch-1 Assembly Circuit Failure</p>
			                <p>B1206 EIC Switch-1 Assembly Circuit Open</p>
			                <p>B1207 EIC Switch-1 Assembly Circuit Short To Battery</p>
			                <p>B1208 EIC Switch-1 Assembly Circuit Short To Ground</p>
			                <p>B1209 EIC Switch-2 Assembly Circuit Failure</p>
			                <p>B1210 EIC Switch-2 Assembly Circuit Open</p>
			                <p>B1211 EIC Switch-2 Assembly Circuit Short To Battery</p>
			                <p>B1212 EIC Switch-2 Assembly Circuit Short To Ground</p>
			                <p>B1213 Anti-Theft Number of Programmed Keys Is Below Minimum</p>
			                <p>B1214 Running Board Lamp Circuit Failure</p>
			                <p>B1215 Running Board Lamp Circuit Short to Battery</p>
			                <p>B1216 Emergency &amp; Road Side Assistance Switch Circuit Short to Ground</p>
			                <p>B1217 Horn Relay Coil Circuit Failure</p>
			                <p>B1218 Horn Relay Coil Circuit Short to V batt</p>
			                <p>B1219 Fuel Tank Pressure Sensor Circuit Failure</p>
			                <p>B1220 Fuel Tank Pressure Sensor Circuit Open</p>
			                <p>B1222 Fuel Temperature Sensor #1 Circuit Failure</p>
			                <p>B1223 Fuel Temperature Sensor #1 Circuit Open</p>
			                <p>B1224 Fuel Temperature Sensor #1 Circuit Short to Battery</p>
			                <p>B1225 Fuel Temperature Sensor #1 Circuit Short to Ground</p>
			                <p>B1226 Fuel Temperature Sensor #2 Circuit Failure</p>
			                <p>B1227 Fuel Temperature Sensor #2 Circuit Open</p>
			                <p>B1228 Fuel Temperature Sensor #2 Circuit Short to Battery</p>
			                <p>B1229 Fuel Temperature Sensor #2 Circuit Short to Ground</p>
			                <p>B1231 Longitudinal Acceleration Threshold Exceeded</p>
			                <p>B1232 See Manufacturer</p>
			                <p>B1233 Glass Break Sensor Failure</p>
			                <p>B1234 Mirror Switch Invalid Code</p>
			                <p>B1235 Window Feedback Failure</p>
			                <p>B1236 Window Feedback Loss of Signal</p>
			                <p>B1237 Window Feedback Out of Range</p>
			                <p>B1238 over Temperature Fault</p>
			                <p>B1239 Air Flow Blend Door Driver Circuit Failure</p>
			                <p>B1240 Wiper Washer Rear Pump Relay Circuit Failure</p>
			                <p>B1241 Wiper Washer Rear Pump Relay Circuit Short to Battery</p>
			                <p>B1242 Air Flow Recirculation Door Driver Circuit Failure</p>
			                <p>B1243 Express Window down Switch Circuit Short to Battery</p>
			                <p>B1244 Wiper Rear Motor Run Relay Circuit Failure</p>
			                <p>B1245 Wiper Rear Motor Run Relay Circuit Short to Battery</p>
			                <p>B1246 Dim Panel Potentiometer Switch Circuit Failure</p>
			                <p>B1247 Panel Dim Switch Circuit Open</p>
			                <p>B1248 Passenger's Seatback Auto glides Rearward Switch Circuit Short to Ground</p>
			                <p>B1249 Blend Door Failure</p>
			                <p>B1250 Air Temperature Internal Sensor Circuit Failure</p>
			                <p>B1251 Air Temperature Internal Sensor Circuit Open</p>
			                <p>B1252 Air Temperature Internal Sensor Circuit Short To Battery</p>
			                <p>B1253 Air Temperature Internal Sensor Circuit Short To Ground</p>
			                <p>B1254 Air Temperature External Sensor Circuit Failure</p>
			                <p>B1255 Air Temperature External Sensor Circuit Open</p>
			                <p>B1256 Air Temperature External Sensor Circuit Short To Battery</p>
			                <p>B1257 Air Temperature External Sensor Circuit Short To Ground</p>
			                <p>B1258 Solar Radiation Sensor Circuit Failure</p>
			                <p>B1259 Solar Radiation Sensor Circuit Open</p>
			                <p>B1260 Solar Radiation Sensor Circuit Short To Battery</p>
			                <p>B1261 Solar Radiation Sensor Circuit Short To Ground</p>
			                <p>B1262 Servo Motor Defrost Circuit Failure</p>
			                <p>B1263 Servo Motor Vent Circuit Failure</p>
			                <p>B1264 Servo Motor Foot Circuit Failure</p>
			                <p>B1265 Servo Motor Cool air Bypass Circuit Failure</p>
			                <p>B1266 Servo Motor Air intake Left Circuit Failure</p>
			                <p>B1267 Servo Motor Air intake Right Circuit Failure</p>
			                <p>B1268 Servo Motor Potentiometer Defrost Circuit Failure</p>
			                <p>B1269 Servo Motor Potentiometer Defrost Circuit Open</p>
			                <p>B1270 Servo Motor Potentiometer Defrost Circuit Short To Battery</p>
			                <p>B1271 Servo Motor Potentiometer Defrost Circuit Short To Ground</p>
			                <p>B1272 Servo Motor Potentiometer Vent Circuit Failure</p>
			                <p>B1273 Servo Motor Potentiometer Vent Circuit Open</p>
			                <p>B1274 Servo Motor Potentiometer Vent Circuit Short To Battery</p>
			                <p>B1275 Servo Motor Potentiometer Vent Circuit Short To Ground</p>
			                <p>B1276 Servo Motor Potentiometer Foot Circuit Failure</p>
			                <p>B1277 Servo Motor Potentiometer Foot Circuit Open</p>
			                <p>B1278 Servo Motor Potentiometer Foot Circuit Short To Battery</p>
			                <p>B1279 Servo Motor Potentiometer Foot Circuit Short To Ground</p>
			                <p>B1280 Servo Motor Potentiometer Cool air Circuit Failure</p>
			                <p>B1281 Servo Motor Potentiometer Cool air Circuit Open</p>
			                <p>B1282 Servo Motor Potentiometer Cool air Circuit Short to Battery</p>
			                <p>B1283 Servo Motor Potentiometer Cool air Circuit Short to Ground</p>
			                <p>B1284 Servo Motor Potentiometer Air intake Left Circuit Failure</p>
			                <p>B1285 Servo Motor Potentiometer Air intake Left Circuit Open</p>
			                <p>B1286 Servo Motor Potentiometer Air intake Left Circuit Short to Battery</p>
			                <p>B1287 Servo Motor Potentiometer Air intake Left Circuit Short to Ground</p>
			                <p>B1288 Servo Motor Potentiometer Air intake Right Circuit Failure</p>
			                <p>B1289 Servo Motor Potentiometer Air intake Right Circuit Open</p>
			                <p>B1290 Servo Motor Potentiometer Air intake Right Circuit Short to Battery</p>
			                <p>B1291 Servo Motor Potentiometer Air intake Right Circuit Short to Ground</p>
			                <p>B1292 Battery Power Relay Circuit Failure</p>
			                <p>B1293 Battery Power Relay Circuit Open</p>
			                <p>B1294 Battery Power Relay Circuit Short To Battery</p>
			                <p>B1295 Battery Power Relay Circuit Short To Ground</p>
			                <p>B1296 Power Supply Sensor Circuit Failure</p>
			                <p>B1297 Power Supply Sensor Circuit Open</p>
			                <p>B1298 Power Supply Sensor Circuit Short To Battery</p>
			                <p>B1299 Power Supply Sensor Circuit Short To Ground</p>
			                <p>B1300 Power Door Lock Circuit Failure</p>
			                <p>B1301 Power Door Lock Circuit Open</p>
			                <p>B1302 Accessory Delay Relay Coil Circuit Failure</p>
			                <p>B1303 Accessory Delay Relay Coil Circuit Open</p>
			                <p>B1304 Accessory Delay Relay Coil Circuit Short To Battery</p>
			                <p>B1305 Accessory Delay Relay Coil Circuit Short To Ground</p>
			                <p>B1306 Oil Level Switch Circuit Open</p>
			                <p>B1307 Oil Level Switch Circuit Short To Battery</p>
			                <p>B1308 Oil Level Switch Circuit Short To Ground</p>
			                <p>B1309 Power Door Lock Circuit Short To Ground</p>
			                <p>B1310 Power Door Unlock Circuit Failure</p>
			                <p>B1311 Power Door Unlock Circuit Open</p>
			                <p>B1312 Lamp Headlamp Input Circuit Short To Battery</p>
			                <p>B1313 Battery Saver Relay Coil Circuit Failure</p>
			                <p>B1314 Battery Saver Relay Coil Circuit Open</p>
			                <p>B1315 Battery Saver Relay Coil Circuit Short To Battery</p>
			                <p>B1316 Battery Saver Relay Coil Circuit Short To Ground</p>
			                <p>B1317 Battery Voltage High</p>
			                <p>B1318 Battery Voltage Low</p>
			                <p>B1319 Driver Door Ajar Circuit Failure</p>
			                <p>B1320 Driver Door Ajar Circuit Open</p>
			                <p>B1321 Driver Door Ajar Circuit Short To Battery</p>
			                <p>B1322 Driver Door Ajar Circuit Short To Ground</p>
			                <p>B1323 Door Ajar Lamp Circuit Failure</p>
			                <p>B1324 Door Ajar Lamp Circuit Open</p>
			                <p>B1325 Door Ajar Lamp Circuit Short To Battery</p>
			                <p>B1326 Door Ajar Lamp Circuit Short To Ground</p>
			                <p>B1327 Passenger Door Ajar Circuit Failure</p>
			                <p>B1328 Passenger Door Ajar Circuit Open</p>
			                <p>B1329 Passenger Door Ajar Circuit Short To Battery</p>
			                <p>B1330 Passenger Door Ajar Circuit Short To Ground</p>
			                <p>B1331 Deck lid Ajar Rear Door Circuit Failure</p>
			                <p>B1332 Deck lid Ajar Rear Door Circuit Open</p>
			                <p>B1333 Deck lid Ajar Rear Door Circuit Short To Battery</p>
			                <p>B1334 Deck lid Ajar Rear Door Circuit Short To Ground</p>
			                <p>B1335 Door Ajar RR Circuit Failure</p>
			                <p>B1336 Door Ajar RR Circuit Open</p>
			                <p>B1337 Door Ajar RR Circuit Short To Battery</p>
			                <p>B1338 Door Ajar RR Circuit Short To Ground</p>
			                <p>B1339 Chime Input Request Circuit Short To Battery</p>
			                <p>B1340 Chime Input Request Circuit Short To Ground</p>
			                <p>B1341 Power Door Unlock Circuit Short To Ground</p>
			                <p>B1342 ECU Is Defective</p>
			                <p>B1343 Heated Backlight Input Circuit Failure</p>
			                <p>B1344 Heated Backlight Input Circuit Open</p>
			                <p>B1345 Heated Backlight Input Circuit Short To Ground</p>
			                <p>B1346 Heated Backlight Input Circuit Short To Battery</p>
			                <p>B1347 Heated Backlight Relay Circuit Failure</p>
			                <p>B1348 Heated Backlight Relay Circuit Open</p>
			                <p>B1349 Heated Backlight Relay Short to Battery</p>
			                <p>B1350 Heated Backlight Relay Short To Ground</p>
			                <p>B1351 Ignition Key-In Circuit Short To Battery</p>
			                <p>B1352 Ignition Key-In Circuit Failure</p>
			                <p>B1353 Ignition Key-In Circuit Open</p>
			                <p>B1354 Ignition Key-In Circuit Short To Ground</p>
			                <p>B1355 Ignition Run Circuit Failure</p>
			                <p>B1356 Ignition Run Circuit Open</p>
			                <p>B1357 Ignition Run Circuit Short To Battery</p>
			                <p>B1358 Ignition Run Circuit Short To Ground</p>
			                <p>B1359 Ignition Run/Acc Circuit Failure</p>
			                <p>B1360 Ignition Run/Acc Circuit Open</p>
			                <p>B1361 Ignition Run/Acc Circuit Short To Battery</p>
			                <p>B1362 Ignition Run/Acc Circuit Short To Ground</p>
			                <p>B1363 Ignition Start Circuit Failure</p>
			                <p>B1364 Ignition Start Circuit Open</p>
			                <p>B1365 Ignition Start Circuit Short To Battery</p>
			                <p>B1366 Ignition Start Circuit Short To Ground</p>
			                <p>B1367 Ignition Tach Circuit Failure</p>
			                <p>B1368 Ignition Tach Circuit Open</p>
			                <p>B1369 Ignition Tach Circuit Short To Battery</p>
			                <p>B1370 Ignition Tach Circuit Short To Ground</p>
			                <p>B1371 Illuminated Entry Relay Circuit Failure</p>
			                <p>B1372 Illuminated Entry Relay Circuit Open</p>
			                <p>B1373 Illuminated Entry Relay Short To Battery</p>
			                <p>B1374 Illuminated Entry Relay Short To Ground</p>
			                <p>B1375 Oil Change Lamp Circuit Open</p>
			                <p>B1376 Oil Change Lamp Circuit Short To Battery</p>
			                <p>B1377 Oil Change Lamp Circuit Failure</p>
			                <p>B1378 Oil Change Lamp Circuit Short To Ground</p>
			                <p>B1379 Oil Change Reset Button Circuit Short To Ground</p>
			                <p>B1380 Oil Change Reset Button Circuit Failure</p>
			                <p>B1381 Oil Change Reset Button Circuit Open</p>
			                <p>B1382 Oil Change Reset Button Circuit Short To Battery</p>
			                <p>B1383 Oil Level Lamp Circuit Short To Battery</p>
			                <p>B1384 Oil Level Lamp Circuit Failure</p>
			                <p>B1385 Oil Level Lamp Circuit Open</p>
			                <p>B1386 Oil Level Lamp Circuit Short To Ground</p>
			                <p>B1387 Oil Temperature Sensor Circuit Open</p>
			                <p>B1388 Oil Temperature Sensor Circuit Short To Battery</p>
			                <p>B1389 Oil Temperature Sensor Circuit Failure</p>
			                <p>B1390 Oil Temperature Sensor Circuit Short To Ground</p>
			                <p>B1391 Oil Level Switch Circuit Failure</p>
			                <p>B1392 Power Door Memory Lock Relay Circuit Failure</p>
			                <p>B1393 Power Door Memory Lock Relay Circuit Open</p>
			                <p>B1394 Power Door Memory Lock Relay Circuit Short To Battery</p>
			                <p>B1395 Power Door Memory Lock Relay Circuit Short To Ground</p>
			                <p>B1396 Power Door Lock Circuit Short To Battery</p>
			                <p>B1397 Power Door Unlock Circuit Short To Battery</p>
			                <p>B1398 Driver Power Window One Touch Window Relay Circuit Failure</p>
			                <p>B1399 Driver Power Window One Touch Window Relay Circuit Open</p>
			                <p>B1400 Driver Power Window One Touch Window Relay Circuit Short To Battery</p>
			                <p>B1401 Driver Power Window One Touch Window Relay Circuit Short To Ground</p>
			                <p>B1402 Driver Power Window down Switch Circuit Failure</p>
			                <p>B1403 Driver Power Window up Switch Circuit Failure</p>
			                <p>B1404 Driver Power Window down Circuit Open</p>
			                <p>B1405 Driver Power Window down Circuit Short to Battery</p>
			                <p>B1406 Driver Power Window Down Circuit Short To Ground</p>
			                <p>B1407 Driver Power Window up Circuit Open</p>
			                <p>B1408 Driver Power Window up Circuit Short to Battery</p>
			                <p>B1409 Driver Power Window Up Circuit Short To Ground</p>
			                <p>B1410 Driver Power Window Motor Circuit Failure</p>
			                <p>B1411 Driver Power Window Motor Circuit Open</p>
			                <p>B1412 Driver Power Window Motor Circuit Short To Battery</p>
			                <p>B1413 Driver Power Window Motor Circuit Short To Ground</p>
			                <p>B1414 Power Window LR Motor Circuit Failure</p>
			                <p>B1415 Power Window LR Motor Circuit Open</p>
			                <p>B1416 Power Window LR Motor Circuit Short To Battery</p>
			                <p>B1417 Power Window LR Motor Circuit Short To Ground</p>
			                <p>B1418 Passenger Power Window Motor Circuit Failure</p>
			                <p>B1419 Passenger Power Window Motor Circuit Open</p>
			                <p>B1420 Passenger Power Window Motor Circuit Short To Battery</p>
			                <p>B1421 Passenger Power Window Motor Circuit Short To Ground</p>
			                <p>B1422 Power Window RR Motor Circuit Failure</p>
			                <p>B1423 Power Window RR Motor Circuit Open</p>
			                <p>B1424 Power Window RR Motor Circuit Short To Battery</p>
			                <p>B1425 Power Window RR Motor Circuit Short To Ground</p>
			                <p>B1426 Lamp Seat Belt Circuit Short To Battery</p>
			                <p>B1427 Lamp Seat Belt Circuit Open</p>
			                <p>B1428 Lamp Seat Belt Circuit Failure</p>
			                <p>B1429 Lamp Seat Belt Circuit Short To Ground</p>
			                <p>B1430 Seat Belt Switch Circuit Short To Ground</p>
			                <p>B1431 Wiper Brake/Run Relay Circuit Failure</p>
			                <p>B1432 Wiper Brake/Run Relay Circuit Short To Battery</p>
			                <p>B1433 Wiper Brake/Run Relay Circuit Short To Ground</p>
			                <p>B1434 Wiper Hi/Low Speed Relay Coil Circuit Failure</p>
			                <p>B1435 Wiper Hi/Low Speed Relay Coil Circuit Open</p>
			                <p>B1436 Wiper Hi/Low Speed Relay Coil Circuit Short To Battery</p>
			                <p>B1437 Wiper Hi/Low Speed Relay Coil Circuit Short To Ground</p>
			                <p>B1438 Wiper Mode Select Switch Circuit Failure</p>
			                <p>B1439 Wiper Mode Select Switch Circuit Open</p>
			                <p>B1440 Wiper Mode Select Switch Circuit Short To Battery</p>
			                <p>B1441 Wiper Mode Select Switch Circuit Short To Ground</p>
			                <p>B1442 Door Handle Switch Circuit Failure</p>
			                <p>B1443 Door Handle Switch Circuit Open</p>
			                <p>B1444 Door Handle Switch Circuit Short To Battery</p>
			                <p>B1445 Door Handle Switch Circuit Short To Ground</p>
			                <p>B1446 Wiper Park Sense Circuit Failure</p>
			                <p>B1447 Wiper Park Sense Circuit Open</p>
			                <p>B1448 Wiper Park Sense Circuit Short To Battery</p>
			                <p>B1449 Wiper Park Sense Circuit Short To Ground</p>
			                <p>B1450 Wiper Wash/Delay Switch Circuit Failure</p>
			                <p>B1451 Wiper Wash/Delay Switch Circuit Open</p>
			                <p>B1452 Wiper Wash/Delay Switch Circuit Short To Battery</p>
			                <p>B1453 Wiper Wash/Delay Switch Circuit Short To Ground</p>
			                <p>B1454 Wiper Washer Fluid Lamp Circuit Failure</p>
			                <p>B1455 Wiper Washer Fluid Lamp Circuit Open</p>
			                <p>B1456 Wiper Washer Fluid Lamp Circuit Short To Battery</p>
			                <p>B1457 Wiper Washer Fluid Lamp Circuit Short To Ground</p>
			                <p>B1458 Wiper Washer Pump Motor Relay Circuit Failure</p>
			                <p>B1459 Wiper Washer Pump Motor Relay Coil Circuit Open</p>
			                <p>B1460 Wiper Washer Pump Motor Relay Coil Circuit Short To Battery</p>
			                <p>B1461 Wiper Washer Pump Motor Relay Coil Circuit Short To Ground</p>
			                <p>B1462 Seat Belt Switch Circuit Failure</p>
			                <p>B1463 Seat Belt Switch Circuit Open</p>
			                <p>B1464 Seat Belt Switch Circuit Short To Battery</p>
			                <p>B1465 Wiper Brake/Run Relay Circuit Open</p>
			                <p>B1466 Wiper Hi/Low Speed Not Switching</p>
			                <p>B1467 Wiper Hi/Low Speed Circuit Motor Short to Battery</p>
			                <p>B1468 Chime Input Request Circuit Failure</p>
			                <p>B1469 Chime Input Request Circuit Open</p>
			                <p>B1470 Lamp Headlamp Input Circuit Failure</p>
			                <p>B1471 Lamp Headlamp Input Circuit Open</p>
			                <p>B1472 Lamp Headlamp Input Circuit Short To Ground</p>
			                <p>B1473 Wiper Low Speed Circuit Motor Failure</p>
			                <p>B1474 Battery Saver Power Relay Circuit Short To Battery</p>
			                <p>B1475 Accessory Delay Relay Contact Short To Battery</p>
			                <p>B1476 Wiper High Speed Circuit Motor Failure</p>
			                <p>B1477 Wiper Hi/Low Circuit Motor Short to Ground</p>
			                <p>B1478 Power Window One Touch Up/Down Activated Simultaneously</p>
			                <p>B1479 Wiper Washer Fluid Level Sensor Circuit Failure</p>
			                <p>B1480 Wiper Washer Fluid Level Sensor Circuit Open</p>
			                <p>B1481 Wiper Washer Fluid Level Sensor Circuit Short To Battery</p>
			                <p>B1482 Wiper Washer Fluid Level Sensor Circuit Short To Ground</p>
			                <p>B1483 Brake Pedal Input Circuit Failure</p>
			                <p>B1484 Brake Pedal Input Open Circuit</p>
			                <p>B1485 Brake Pedal Input Circuit Battery Short</p>
			                <p>B1486 Brake Pedal Input Circuit Ground Short</p>
			                <p>B1487 Door Handle Right Front Circuit Failure</p>
			                <p>B1488 Door Handle Right Front Circuit Open</p>
			                <p>B1489 Door Handle Right Front Short to Battery</p>
			                <p>B1490 Door Handle Right Front Short to Ground</p>
			                <p>B1491 Ignition Cylinder Sensor Circuit Failure</p>
			                <p>B1492 Ignition Cylinder Sensor Open Circuit</p>
			                <p>B1493 Ignition Cylinder Sensor Battery Short</p>
			                <p>B1494 Ignition Cylinder Sensor Ground Short</p>
			                <p>B1495 Deck lid Punch-Out Sensor Circuit Failure</p>
			                <p>B1496 Deck lid Punch-Out Sensor Open Circuit</p>
			                <p>B1497 Deck lid Punch-Out Sensor Battery Short</p>
			                <p>B1498 Deck lid Punch-Out Sensor Ground Short</p>
			                <p>B1499 Lamp Turn Signal Left Circuit Failure</p>
			                <p>B1500 Lamp Turn Signal Left Circuit Open</p>
			                <p>B1501 Lamp Turn Signal Left Circuit Short To Battery</p>
			                <p>B1502 Lamp Turn Signal Left Circuit Short To Ground</p>
			                <p>B1503 Lamp Turn Signal Right Circuit Failure</p>
			                <p>B1504 Lamp Turn Signal Right Circuit Open</p>
			                <p>B1505 Lamp Turn Signal Right Circuit Short To Battery</p>
			                <p>B1506 Lamp Turn Signal Right Circuit Short To Ground</p>
			                <p>B1507 Flash to Pass Switch Circuit Failure</p>
			                <p>B1508 Flash to Pass Switch Circuit Open</p>
			                <p>B1509 Flash to Pass Switch Circuit Short To Battery</p>
			                <p>B1510 Flash to Pass Switch Circuit Short To Ground</p>
			                <p>B1511 Driver Door Handle Circuit Failure</p>
			                <p>B1512 Driver Door Handle Circuit Open</p>
			                <p>B1513 Driver Door Handle Circuit Short To Battery</p>
			                <p>B1514 Driver Door Handle Circuit Short To Ground</p>
			                <p>B1515 Seat Driver Occupied Switch Circuit Failure</p>
			                <p>B1516 Seat Driver Occupied Switch Circuit Open</p>
			                <p>B1517 Seat Driver Occupied Switch Circuit Short To Battery</p>
			                <p>B1518 Seat Driver Occupied Switch Circuit Short To Ground</p>
			                <p>B1519 Hood Switch Circuit Failure</p>
			                <p>B1520 Hood Switch Circuit Open</p>
			                <p>B1521 Hood Switch Circuit Short To Battery</p>
			                <p>B1522 Hood Switch Circuit Short To Ground</p>
			                <p>B1523 Keyless Entry Circuit Failure</p>
			                <p>B1524 Keyless Entry Circuit Open</p>
			                <p>B1525 Keyless Entry Circuit Short To Battery</p>
			                <p>B1526 Keyless Entry Circuit Short To Ground</p>
			                <p>B1527 Memory Set Switch Circuit Failure</p>
			                <p>B1528 Memory Set Switch Circuit Open</p>
			                <p>B1529 Memory Set Switch Circuit Short To Battery</p>
			                <p>B1530 Memory Set Switch Circuit Short To Ground</p>
			                <p>B1531 Memory 1 Switch Circuit Failure</p>
			                <p>B1532 Memory 1 Switch Circuit Open</p>
			                <p>B1533 Memory 1 Switch Circuit Short To Battery</p>
			                <p>B1534 Memory 1 Switch Circuit Short To Ground</p>
			                <p>B1535 Memory 2 Switch Circuit Failure</p>
			                <p>B1536 Memory 2 Switch Circuit Open</p>
			                <p>B1537 Memory 2 Switch Circuit Short To Battery</p>
			                <p>B1538 Memory 2 Switch Circuit Short To Ground</p>
			                <p>B1539 Mirror Driver Switch Assembly Circuit Failure</p>
			                <p>B1540 Mirror Driver Switch Assembly Circuit Open</p>
			                <p>B1541 Mirror Driver Switch Assembly Circuit Short To Battery</p>
			                <p>B1542 Mirror Driver Switch Assembly Circuit Short To Ground</p>
			                <p>B1543 Seat Direction Switch Assembly Circuit Failure</p>
			                <p>B1544 Seat Direction Switch Assembly Circuit Open</p>
			                <p>B1545 Seat Direction Switch Assembly Circuit Short To Battery</p>
			                <p>B1546 Seat Direction Switch Assembly Circuit Short To Ground</p>
			                <p>B1547 Power Window Master Circuit Failure</p>
			                <p>B1548 Power Window Master Circuit Open</p>
			                <p>B1549 Power Window Master Circuit Short to Battery</p>
			                <p>B1550 Power Window Master Circuit Short to Ground</p>
			                <p>B1551 Deck lid Release Circuit Failure</p>
			                <p>B1552 Deck lid Release Circuit Open</p>
			                <p>B1553 Deck lid Release Circuit Short to Battery</p>
			                <p>B1554 Deck lid Release Circuit Short to Ground</p>
			                <p>B1555 Ignition Run/Start Circuit Failure</p>
			                <p>B1556 Ignition Run/Start Circuit Open</p>
			                <p>B1557 Ignition Run/Start Circuit Short To Battery</p>
			                <p>B1558 Ignition Run/Start Circuit Short To Ground</p>
			                <p>B1559 Door Lock Cylinder Circuit Failure</p>
			                <p>B1560 Door Lock Cylinder Circuit Open</p>
			                <p>B1561 Door Lock Cylinder Circuit Short To Battery</p>
			                <p>B1562 Door Lock Cylinder Circuit Short To Ground</p>
			                <p>B1563 Door Ajar Circuit Failure</p>
			                <p>B1564 Door Ajar Circuit Open</p>
			                <p>B1565 Door Ajar Circuit Short To Battery</p>
			                <p>B1566 Door Ajar Circuit Short To Ground</p>
			                <p>B1567 Lamp Headlamp High-Beam Circuit Failure</p>
			                <p>B1568 Lamp Headlamp High-Beam Circuit Open</p>
			                <p>B1569 Lamp Headlamp High-Beam Circuit Short To Battery</p>
			                <p>B1570 Lamp Headlamp High-Beam Circuit Short To Ground</p>
			                <p>B1571 Door Ajar LR Circuit Failure</p>
			                <p>B1572 Door Ajar LR Circuit Open</p>
			                <p>B1573 Door Ajar LR Circuit Short To Battery</p>
			                <p>B1574 Door Ajar LR Circuit Short To Ground</p>
			                <p>B1575 Lamp Park Input Circuit Failure</p>
			                <p>B1576 Lamp Park Input Circuit Open</p>
			                <p>B1577 Lamp Park Input Circuit Short To Battery</p>
			                <p>B1578 Lamp Park Input Circuit Short To Ground</p>
			                <p>B1579 Dim Panel Increase Input Circuit Failure</p>
			                <p>B1580 Dim Panel Increase Input Circuit Open</p>
			                <p>B1581 Dim Panel Increase Input Circuit Short To Battery</p>
			                <p>B1582 Dim Panel Increase Input Circuit Short To Ground</p>
			                <p>B1583 Dim Panel Decrease Input Circuit Failure</p>
			                <p>B1584 Dim Panel Decrease Input Circuit Open</p>
			                <p>B1585 Dim Panel Decrease Input Circuit Short To Battery</p>
			                <p>B1586 Dim Panel Decrease Input Circuit Short To Ground</p>
			                <p>B1587 Auto lamp Delay Increase Circuit Failure</p>
			                <p>B1588 Auto lamp Delay Increase Circuit Open</p>
			                <p>B1589 Auto lamp Delay Increase Circuit Short to Battery</p>
			                <p>B1590 Auto lamp Delay Increase Circuit Short to Ground</p>
			                <p>B1591 Auto lamp Delay Decrease Circuit Failure</p>
			                <p>B1592 Auto lamp Delay Decrease Circuit Open</p>
			                <p>B1593 Auto lamp Delay Decrease Circuit Short to Battery</p>
			                <p>B1594 Auto lamp Delay Decrease Circuit Short to Ground</p>
			                <p>B1595 Ignition Switch Illegal Input Code</p>
			                <p>B1596 Service Continuous Codes</p>
			                <p>B1597 Driver's Seat Seatback Auto glides Forward Switch Circuit Short to Ground</p>
			                <p>B1598 Driver's Seat Seatback Auto glides Rearward Switch Circuit Short to Ground</p>
			                <p>B1599 Passenger's Seatback Auto glides Forward Switch Circuit Short to Ground</p>
			                <p>B1600 PATS Ignition Key Transponder Signal Is Not Received</p>
			                <p>B1601 PATS Received Incorrect Key-Code from Ignition Key Transponder</p>
			                <p>B1602 PATS Received Invalid Format of Key-Code from Ignition Key Transponder</p>
			                <p>B1603 Lamp Anti-Theft Indicator Circuit Failure</p>
			                <p>B1604 Lamp Anti-Theft Indicator Circuit Open</p>
			                <p>B1605 Lamp Anti-Theft Indicator Circuit Short To Battery</p>
			                <p>B1606 Lamp Anti-Theft Indicator Circuit Short To Ground</p>
			                <p>B1607 Illuminated Entry Input Circuit Failure</p>
			                <p>B1608 Illuminated Entry Input Open Circuit</p>
			                <p>B1609 Illuminated Entry Input Short Circuit to Battery</p>
			                <p>B1610 Illuminated Entry Input Short Circuit to Ground</p>
			                <p>B1611 Wiper Rear Mode Select Switch Circuit Failure</p>
			                <p>B1612 Wiper Rear Mode Select Switch Circuit Open</p>
			                <p>B1613 Wiper Rear Mode Select Switch Circuit Short To Battery</p>
			                <p>B1614 Wiper Rear Mode Select Switch Circuit Short To Ground</p>
			                <p>B1615 Wiper Rear Disable Switch Circuit Failure</p>
			                <p>B1616 Wiper Rear Disable Switch Circuit Open</p>
			                <p>B1617 Wiper Rear Disable Switch Circuit Short To Battery</p>
			                <p>B1618 Wiper Rear Disable Switch Circuit Short To Ground</p>
			                <p>B1619 Wiper Rear Low Limit Input Circuit Failure</p>
			                <p>B1620 Wiper Rear Low Limit Input Circuit Open</p>
			                <p>B1621 Wiper Rear Low Limit Input Circuit Short To Battery</p>
			                <p>B1622 Wiper Rear Low Limit Input Circuit Short To Ground</p>
			                <p>B1623 Lamp Keypad Output Circuit Failure</p>
			                <p>B1624 Lamp Keypad Output Open Circuit</p>
			                <p>B1625 Lamp Keypad Output Short Circuit to Battery</p>
			                <p>B1626 Lamp Keypad Output Short Circuit to Ground</p>
			                <p>B1627 PRNDL Reverse Input Circuit Failure</p>
			                <p>B1628 PRNDL Reverse Input Open Circuit</p>
			                <p>B1629 PRNDL Reverse Input Short to Battery</p>
			                <p>B1630 PRNDL Reverse Input Short Circuit to Ground</p>
			                <p>B1631 Mirror Driver Left Circuit Failure</p>
			                <p>B1632 Mirror Driver Left Circuit Open</p>
			                <p>B1633 Mirror Driver Left Circuit Short To Battery</p>
			                <p>B1634 Mirror Driver Left Circuit Short To Ground</p>
			                <p>B1635 Mirror Driver Right Circuit Failure</p>
			                <p>B1636 Mirror Driver Right Circuit Open</p>
			                <p>B1637 Mirror Driver Right Circuit Short To Battery</p>
			                <p>B1638 Mirror Driver Right Short To Ground</p>
			                <p>B1639 Mirror Passenger Left Circuit Failure</p>
			                <p>B1640 Mirror Passenger Left Circuit Open</p>
			                <p>B1641 Mirror Passenger Left Circuit Short To Battery</p>
			                <p>B1642 Mirror Passenger Left Circuit Short To Ground</p>
			                <p>B1643 Mirror Passenger Right Circuit Failure</p>
			                <p>B1644 Mirror Passenger Right Circuit Open</p>
			                <p>B1645 Mirror Passenger Right Circuit Short To Battery</p>
			                <p>B1646 Mirror Passenger Right Circuit Short To Ground</p>
			                <p>B1647 Seat Driver Recline Forward Circuit Failure</p>
			                <p>B1648 Seat Driver Recline Forward Circuit Open</p>
			                <p>B1649 Seat Driver Recline Forward Circuit Short To Battery</p>
			                <p>B1650 Seat Driver Recline Forward Circuit Short To Ground</p>
			                <p>B1651 Seat Driver Recline Backward Circuit Failure</p>
			                <p>B1652 Seat Driver Recline Backward Circuit Open</p>
			                <p>B1653 Seat Driver Recline Backward Circuit Short To Battery</p>
			                <p>B1654 Seat Driver Recline Backward Circuit Short To Ground</p>
			                <p>B1655 Seat Driver Rear up Circuit Failure</p>
			                <p>B1656 Seat Driver Rear up Circuit Open</p>
			                <p>B1657 Seat Driver Rear up Circuit Short to Battery</p>
			                <p>B1658 Seat Driver Rear Up Circuit Short To Ground</p>
			                <p>B1659 Seat Driver Front up Circuit Failure</p>
			                <p>B1660 Seat Driver Front up Circuit Open</p>
			                <p>B1661 Seat Driver Front up Circuit Short to Battery</p>
			                <p>B1662 Seat Driver Front Up Circuit Short To Ground</p>
			                <p>B1663 Seat Driver Front up/Down Motor Stalled</p>
			                <p>B1664 Seat Driver Rear Up/Down Motor Stalled</p>
			                <p>B1665 Seat Driver Forward/Backward Motor Stalled</p>
			                <p>B1666 Seat Driver Recline Motor Stalled</p>
			                <p>B1667 Mirror Driver Up/Down Motor Stalled</p>
			                <p>B1668 Mirror Driver Right/Left Motor Stalled</p>
			                <p>B1669 Mirror Passenger Up/Down Motor Stalled</p>
			                <p>B1670 Mirror Passenger Right/Left Motor Stalled</p>
			                <p>B1671 Battery Module Voltage Out Of Range</p>
			                <p>B1672 Seat Driver Occupied Input Circuit Failure</p>
			                <p>B1673 Seat Driver Occupied Input Circuit Open</p>
			                <p>B1674 Seat Driver Occupied Input Circuit Short To Battery</p>
			                <p>B1675 Seat Driver Occupied Input Circuit Short To Ground</p>
			                <p>B1676 Battery Pack Voltage Out Of Range</p>
			                <p>B1677 Alarm Panic Input Circuit Failure</p>
			                <p>B1678 Alarm Panic Input Circuit Open</p>
			                <p>B1679 Alarm Panic Input Circuit Short To Battery</p>
			                <p>B1680 Alarm Panic Input Circuit Short To Ground</p>
			                <p>B1681 PATS Transceiver Module Signal Is Not Received</p>
			                <p>B1682 PATS Is Disabled (Check Link between PATS and Transponder)</p>
			                <p>B1683 Mirror Driver/Passenger Switch Circuit Failure</p>
			                <p>B1684 Mirror Driver/Passenger Switch Circuit Open</p>
			                <p>B1685 Lamp Dome Input Circuit Failure</p>
			                <p>B1686 Lamp Dome Input Circuit Open</p>
			                <p>B1687 Lamp Dome Input Circuit Short To Battery</p>
			                <p>B1688 Lamp Dome Input Circuit Short To Ground</p>
			                <p>B1689 Auto lamp Delay Circuit Failure</p>
			                <p>B1690 Auto lamp Delay Circuit Open</p>
			                <p>B1691 Auto lamp Delay Circuit Short to Battery</p>
			                <p>B1692 Auto lamp Delay Circuit Short to Ground</p>
			                <p>B1693 Auto lamp On Circuit Failure</p>
			                <p>B1694 Auto lamp On Circuit Open</p>
			                <p>B1695 Auto lamp On Circuit Short to Battery</p>
			                <p>B1696 Auto lamp On Circuit Short to Ground</p>
			                <p>B1697 Mirror Driver/Passenger Switch Circuit Short To Battery</p>
			                <p>B1698 Mirror Driver/Passenger Switch Circuit Short To Ground</p>
			                <p>B1699 Passenger's Seat Occupied Switch Circuit Short to Ground</p>
			                <p>B1700 Passenger's Seatbelt Tension Reducer Circuit Short to Ground</p>
			                <p>B1701 Seat Driver Recline Forward Switch Circuit Failure</p>
			                <p>B1702 Seat Driver Recline Forward Switch Circuit Open</p>
			                <p>B1703 Seat Driver Recline Forward Switch Circuit Short To Battery</p>
			                <p>B1704 Seat Driver Recline Forward Switch Circuit Short To Ground</p>
			                <p>B1705 Seat Driver Recline Rearward Switch Circuit Failure</p>
			                <p>B1706 Seat Driver Recline Rearward Switch Circuit Open</p>
			                <p>B1707 Seat Driver Recline Rearward Switch Circuit Short To Battery</p>
			                <p>B1708 Seat Driver Recline Rearward Switch Circuit Short To Ground</p>
			                <p>B1709 Seat Driver Front up Switch Circuit Failure</p>
			                <p>B1710 Seat Driver Front up Switch Circuit Open</p>
			                <p>B1711 Seat Driver Front up Switch Circuit Short to Battery</p>
			                <p>B1712 Seat Driver Front up Switch Circuit Short to Ground</p>
			                <p>B1713 Seat Driver Front down Switch Circuit Failure</p>
			                <p>B1714 Seat Driver Front down Switch Circuit Open</p>
			                <p>B1715 Seat Driver Front down Switch Circuit Short to Battery</p>
			                <p>B1716 Seat Driver Front down Switch Circuit Short to Ground</p>
			                <p>B1717 Seat Driver Forward Switch Circuit Failure</p>
			                <p>B1718 Seat Driver Forward Switch Circuit Open</p>
			                <p>B1719 Seat Driver Forward Switch Circuit Short To Battery</p>
			                <p>B1720 Seat Driver Forward Switch Circuit Short To Ground</p>
			                <p>B1721 Seat Driver Rearward Switch Circuit Failure</p>
			                <p>B1722 Seat Driver Rearward Switch Circuit Open</p>
			                <p>B1723 Seat Driver Rearward Switch Circuit Short To Battery</p>
			                <p>B1724 Seat Driver Rearward Switch Circuit Short To Ground</p>
			                <p>B1725 Seat Driver Rear up Switch Circuit Failure</p>
			                <p>B1726 Seat Driver Rear up Switch Circuit Open</p>
			                <p>B1727 Seat Driver Rear up Switch Circuit Short to Battery</p>
			                <p>B1728 Seat Driver Rear up Switch Circuit Short to Ground</p>
			                <p>B1729 Seat Driver Rear down Switch Circuit Failure</p>
			                <p>B1730 Seat Driver Rear down Switch Circuit Open</p>
			                <p>B1731 Seat Driver Rear down Switch Circuit Short to Battery</p>
			                <p>B1732 Seat Driver Rear down Switch Circuit Short to Ground</p>
			                <p>B1733 Mirror Driver Vertical Switch Circuit Failure</p>
			                <p>B1734 Mirror Driver Vertical Switch Circuit Open</p>
			                <p>B1735 Mirror Driver Vertical Switch Circuit Short To Battery</p>
			                <p>B1736 Mirror Driver Vertical Switch Circuit Short To Ground</p>
			                <p>B1737 Mirror Driver Horizontal Switch Circuit Failure</p>
			                <p>B1738 Mirror Driver Horizontal Switch Circuit Open</p>
			                <p>B1739 Mirror Driver Horizontal Switch Circuit Short To Battery</p>
			                <p>B1740 Mirror Driver Horizontal Switch Circuit Short To Ground</p>
			                <p>B1741 Mirror Passenger Vertical Switch Circuit Failure</p>
			                <p>B1742 Mirror Passenger Vertical Switch Circuit Open</p>
			                <p>B1743 Mirror Passenger Vertical Switch Circuit Short To Battery</p>
			                <p>B1744 Mirror Passenger Vertical Switch Circuit Short To Ground</p>
			                <p>B1745 Mirror Passenger Horizontal Switch Circuit Failure</p>
			                <p>B1746 Mirror Passenger Horizontal Switch Circuit Open</p>
			                <p>B1747 Mirror Passenger Horizontal Switch Circuit Short To Battery</p>
			                <p>B1748 Mirror Passenger Horizontal Switch Circuit Short To Ground</p>
			                <p>B1749 Park/Neutral Switch Circuit Failure</p>
			                <p>B1750 Park/Neutral Switch Circuit Open</p>
			                <p>B1751 Park/Neutral Switch Circuit Short To Battery</p>
			                <p>B1752 Park/Neutral Switch Circuit Short To Ground</p>
			                <p>B1753 Hazard Flash Output Circuit Failure</p>
			                <p>B1754 Hazard Flash Output Circuit Open</p>
			                <p>B1755 Hazard Flash Output Circuit Short Battery</p>
			                <p>B1756 Hazard Flash Output Circuit Short To Ground</p>
			                <p>B1757 Seat Driver Rear down Circuit Failure</p>
			                <p>B1758 Seat Driver Rear down Circuit Open</p>
			                <p>B1759 Seat Driver Rear down Circuit Short to Battery</p>
			                <p>B1760 Seat Driver Rear Down Circuit Short To Ground</p>
			                <p>B1761 Seat Driver Front down Circuit Failure</p>
			                <p>B1762 Seat Driver Front down Circuit Open</p>
			                <p>B1763 Seat Driver Front down Circuit Short to Battery</p>
			                <p>B1764 Seat Driver Front Down Circuit Short To Ground</p>
			                <p>B1765 Seat Driver Forward Circuit Failure</p>
			                <p>B1766 Seat Driver Forward Circuit Open</p>
			                <p>B1767 Seat Driver Forward Circuit Short To Battery</p>
			                <p>B1768 Seat Driver Forward Circuit Short To Ground</p>
			                <p>B1769 Seat Driver Backward Circuit Failure</p>
			                <p>B1770 Seat Driver Backward Circuit Open</p>
			                <p>B1771 Seat Driver Backward Circuit Short To Battery</p>
			                <p>B1772 Seat Driver Backward Circuit Short To Ground</p>
			                <p>B1773 Mirror Driver up Circuit Failure</p>
			                <p>B1774 Mirror Driver up Circuit Open</p>
			                <p>B1775 Mirror Driver up Circuit Short to Battery</p>
			                <p>B1776 Mirror Driver Up Circuit Short To Ground</p>
			                <p>B1777 Driver's Seatbelt Tension Reducer Circuit Short to Ground</p>
			                <p>B1778 Mirror Driver down Circuit Failure</p>
			                <p>B1779 Mirror Driver down Circuit Open</p>
			                <p>B1780 Mirror Driver down Circuit Short to Battery</p>
			                <p>B1781 Mirror Driver down Short to Ground</p>
			                <p>B1782 Mirror Passenger up Circuit Failure</p>
			                <p>B1783 Mirror Passenger up Circuit Open</p>
			                <p>B1784 Mirror Passenger up Circuit Short to Battery</p>
			                <p>B1785 Mirror Passenger Up Circuit Short To Ground</p>
			                <p>B1786 Mirror Passenger down Circuit Failure</p>
			                <p>B1787 Mirror Passenger down Circuit Open</p>
			                <p>B1788 Mirror Passenger down Circuit Short to Battery</p>
			                <p>B1789 Mirror Passenger Down Circuit Short To Ground</p>
			                <p>B1790 Auto lamp Sensor Input Circuit Failure</p>
			                <p>B1791 Auto lamp Sensor Input Circuit Open</p>
			                <p>B1792 Auto lamp Sensor Input Circuit Short to Battery</p>
			                <p>B1793 Auto lamp Sensor Input Circuit Short to Ground</p>
			                <p>B1794 Lamp Headlamp Low-Beam Circuit Failure</p>
			                <p>B1795 Lamp Headlamp Low-Beam Circuit Open</p>
			                <p>B1796 Lamp Headlamp Low-Beam Circuit Short To Battery</p>
			                <p>B1797 Lamp Headlamp Low-Beam Circuit Short To Ground</p>
			                <p>B1798 Lamp Turn Signal Front Output Circuit Failure</p>
			                <p>B1799 Lamp Turn Signal Front Output Circuit Open</p>
			                <p>B1800 Lamp Turn Signal Front Output Circuit Short To Battery</p>
			                <p>B1801 Lamp Turn Signal Front Output Circuit Short To Ground</p>
			                <p>B1802 Lamp Turn Signal Rear Output Circuit Failure</p>
			                <p>B1803 Lamp Turn Signal Rear Output Circuit Open</p>
			                <p>B1804 Lamp Turn Signal Rear Output Circuit Short To Battery</p>
			                <p>B1805 Lamp Turn Signal Rear Output Circuit Short To Ground</p>
			                <p>B1806 Lamp Tail Output Circuit Failure</p>
			                <p>B1807 Lamp Tail Output Circuit Open</p>
			                <p>B1808 Lamp Tail Output Circuit Short To Battery</p>
			                <p>B1809 Lamp Tail Output Circuit Short To Ground</p>
			                <p>B1810 Lamp Backup Switch Input Circuit Failure</p>
			                <p>B1811 Lamp Backup Switch Input Circuit Open</p>
			                <p>B1812 Lamp Backup Switch Input Circuit Short To Battery</p>
			                <p>B1813 Lamp Backup Switch Input Circuit Short To Ground</p>
			                <p>B1814 Wiper Rear Motor down Relay Coil Circuit Failure</p>
			                <p>B1815 Wiper Rear Motor down Relay Coil Circuit Open</p>
			                <p>B1816 Wiper Rear Motor down Relay Coil Circuit Short to Battery</p>
			                <p>B1817 Wiper Rear Motor down Relay Coil Circuit Short to Ground</p>
			                <p>B1818 Wiper Rear Motor up Relay Coil Circuit Failure</p>
			                <p>B1819 Wiper Rear Motor up Relay Coil Circuit Open</p>
			                <p>B1820 Wiper Rear Motor up Relay Coil Circuit Short to Battery</p>
			                <p>B1821 Wiper Rear Motor up Relay Coil Circuit Short to Ground</p>
			                <p>B1822 Wiper Rear Park Sense Input Circuit Failure</p>
			                <p>B1823 Wiper Rear Park Sense Input Circuit Open</p>
			                <p>B1824 Wiper Rear Park Sense Input Circuit Short To Battery</p>
			                <p>B1825 Wiper Rear Park Sense Input Circuit Short To Ground</p>
			                <p>B1826 Wiper Rear High Limit Input Circuit Failure</p>
			                <p>B1827 Wiper Rear High Limit Input Circuit Open</p>
			                <p>B1828 Wiper Rear High Limit Input Circuit Short To Battery</p>
			                <p>B1829 Wiper Rear High Limit Input Circuit Short To Ground</p>
			                <p>B1830 Door Unlock Disarm Switch Circuit Failure</p>
			                <p>B1831 Door Unlock Disarm Switch Circuit Open</p>
			                <p>B1832 Door Unlock Disarm Switch Circuit Short To Battery</p>
			                <p>B1833 Door Unlock Disarm Switch Circuit Short To Ground</p>
			                <p>B1834 Door Unlock Disarm Output Circuit Failure</p>
			                <p>B1835 Door Unlock Disarm Output Circuit Open</p>
			                <p>B1836 Door Unlock Disarm Output Circuit Short To Battery</p>
			                <p>B1837 Door Unlock Disarm Output Circuit Short To Ground</p>
			                <p>B1838 Battery Saver Power Relay Circuit Failure</p>
			                <p>B1839 Wiper Rear Motor Circuit Failure</p>
			                <p>B1840 Wiper Front Power Circuit Failure</p>
			                <p>B1841 Wiper Front Power Circuit Open</p>
			                <p>B1842 Wiper Front Power Circuit Short To Battery</p>
			                <p>B1843 Wiper Front Power Circuit Short To Ground</p>
			                <p>B1844 Phone Handset Circuit Failure</p>
			                <p>B1845 Ignition Tamper Circuit Failure</p>
			                <p>B1846 Ignition Tamper Circuit Open</p>
			                <p>B1847 Ignition Tamper Circuit Short To Battery</p>
			                <p>B1848 Ignition Tamper Circuit Short To Ground</p>
			                <p>B1849 Climate Control Temperature Differential Circuit Failure</p>
			                <p>B1850 Climate Control Temperature Differential Circuit Open</p>
			                <p>B1851 Climate Control Temperature Differential Circuit Short To Battery</p>
			                <p>B1852 Climate Control Temperature Differential Circuit Short To Ground</p>
			                <p>B1853 Climate Control Air Temperature Internal Sensor Motor Circuit Failure</p>
			                <p>B1854 Climate Control Air Temperature Internal Sensor Motor Circuit Open</p>
			                <p>B1855 Climate Control Air Temperature Internal Sensor Motor Circuit Short To Battery</p>
			                <p>B1856 Climate Control Air Temperature Internal Sensor Motor Circuit Short To Ground</p>
			                <p>B1857 Climate Control On/Off Switch Circuit Failure</p>
			                <p>B1858 Climate Control A/C Pressure Switch Circuit Failure</p>
			                <p>B1859 Climate Control A/C Pressure Switch Circuit Open</p>
			                <p>B1860 Climate Control A/C Pressure Switch Circuit Short To Battery</p>
			                <p>B1861 Climate Control A/C Pressure Switch Circuit Short To Ground</p>
			                <p>B1862 Climate Control A/C Lock Sensor Failure</p>
			                <p>B1863 Ground ECU Circuit Open</p>
			                <p>B1864 Battery Power Supply ECU Circuit Failure</p>
			                <p>B1865 Battery Power Supply ECU Circuit Open</p>
			                <p>B1866 Battery Power Supply ECU Circuit Short To Battery</p>
			                <p>B1867 Battery Power Supply ECU Circuit Short To Ground</p>
			                <p>B1868 Lamp Air Bag Warning Indicator Circuit Failure</p>
			                <p>B1869 Lamp Air Bag Warning Indicator Circuit Open</p>
			                <p>B1870 Lamp Air Bag Warning Indicator Circuit Short To Battery</p>
			                <p>B1871 Passenger Air Bag Disable Module Fault</p>
			                <p>B1872 Turn Signal / Hazard Power Feed Circuit Short To Battery</p>
			                <p>B1873 Turn Signal / Hazard Power Feed Circuit Short To Ground</p>
			                <p>B1874 Cellular Phone Handset Not Present</p>
			                <p>B1875 Turn Signal / Hazard Switch Signal Circuit Failure</p>
			                <p>B1876 Seatbelt Driver Pretension Circuit Failure</p>
			                <p>B1877 Seatbelt Driver Pretensioner Circuit Open</p>
			                <p>B1878 Seatbelt Driver Pretensioner Circuit Short to Battery</p>
			                <p>B1879 Seatbelt Driver Pretensioner Circuit Short to Ground</p>
			                <p>B1880 Seatbelt Passenger Pretensioner Circuit Failure</p>
			                <p>B1881 Seatbelt Passenger Pretensioner Circuit Open</p>
			                <p>B1882 Seatbelt Passenger Pretensioner Circuit Short to Battery</p>
			                <p>B1883 Seatbelt Passenger Pretensioner Circuit Short to Ground</p>
			                <p>B1884 PAD Warning Lamp Inoperative</p>
			                <p>B1885 Seatbelt Driver Pretensioner Circuit Resistance Low on Squib</p>
			                <p>B1886 Seatbelt Passenger Pretensioner Circuit Resistance Low on Squib</p>
			                <p>B1887 Air Bag Driver Circuit Resistance Low or Shorted Together</p>
			                <p>B1888 Air Bag Passenger Circuit Resistance Low or Shorted Together</p>
			                <p>B1889 Passenger Airbag Disable Module Sensor Obstructed</p>
			                <p>B1890 PAD Warning Lamp Circuit Short to Battery</p>
			                <p>B1891 Air Bag Tone Warning Indicator Circuit Short to Battery</p>
			                <p>B1892 Air Bag Tone Warning Indicator Circuit Failure</p>
			                <p>B1893 GPS Antenna Open Circuit</p>
			                <p>B1894 Wiper Rear Motor Speed Sense Circuit Failure</p>
			                <p>B1895 Driver's / Passenger's Door Ajar Output Circuit Failure</p>
			                <p>B1896 Driver's / Passenger's Door Ajar Output Circuit Short to Battery</p>
			                <p>B1897 Horn Switch Circuit Failure</p>
			                <p>B1898 Chime Input #2 Circuit Short to Ground</p>
			                <p>B1899 Microphone Input Signal Circuit Open</p>
			                <p>B1900 Driver Side Airbag Fault</p>
			                <p>B1901 Air Bag Crash Sensor #1 Feed/Return Circuit Short To Ground</p>
			                <p>B1902 Air Bag Crash Sensor #1 Ground Circuit Failure</p>
			                <p>B1903 Air Bag Crash Sensor #1 Ground Circuit Short To Battery</p>
			                <p>B1904 Air Bag Crash Sensor #2 Feed/Return Circuit Failure</p>
			                <p>B1905 Air Bag Crash Sensor #2 Feed/Return Circuit Short To Battery</p>
			                <p>B1906 Air Bag Crash Sensor #2 Feed/Return Circuit Short To Ground</p>
			                <p>B1907 Air Bag Crash Sensor #2 Ground Circuit Failure</p>
			                <p>B1908 Air Bag Crash Sensor #2 Ground Circuit Short To Battery</p>
			                <p>B1909 Air Bag Crash Sensor #2 Ground Circuit Short To Ground</p>
			                <p>B1910 Air Bag Diagnostic Monitor Ground Circuit Failure</p>
			                <p>B1911 Air Bag Diagnostic Monitor Ground Circuit Short To Battery</p>
			                <p>B1912 Air Bag Diagnostic Monitor Ground Circuit Short To Ground</p>
			                <p>B1913 Air Bag Driver/Passenger Circuit Short To Ground</p>
			                <p>B1914 Air Bag Crash Sensors #1 / #2 Circuit Short To Ground</p>
			                <p>B1915 Air Bag Driver Circuit Failure</p>
			                <p>B1916 Air Bag Driver Circuit Short To Battery</p>
			                <p>B1917 Air Bag Memory Clear Circuit Failure</p>
			                <p>B1918 Air Bag Memory Clear Circuit Open</p>
			                <p>B1919 Air Bag Memory Clear Circuit Short To Battery</p>
			                <p>B1920 Air Bag Passenger Circuit Failure</p>
			                <p>B1921 Air Bag Diagnostic Monitor Ground Circuit Open</p>
			                <p>B1922 Air Bag Seeing Sensor Output Circuit Short To Battery</p>
			                <p>B1923 Air Bag Memory Clear Circuit Short To Ground</p>
			                <p>B1924 Air Bag Internal Diagnostic Monitor Fault or System Disarm Fault</p>
			                <p>B1925 Air Bag Passenger Circuit Short To Battery</p>
			                <p>B1926 Air Bag Passenger Pressure Switch Circuit Failure</p>
			                <p>B1927 Passenger Side Airbag Fault</p>
			                <p>B1928 Air Bag Safing Sensor Output Circuit Failure</p>
			                <p>B1929 Air Bag Safing Sensor Output Circuit Open</p>
			                <p>B1930 Air Bag Safing Sensor Output Circuit Short To Ground</p>
			                <p>B1931 Air Bag Crash Sensor #1 Feed/Return Circuit Failure</p>
			                <p>B1932 Air Bag Driver Circuit Open</p>
			                <p>B1933 Air Bag Passenger Circuit Open</p>
			                <p>B1934 Air Bag Driver Inflator Circuit Resistance Low on Squib</p>
			                <p>B1935 Air Bag Passenger Inflator Circuit Resistance Low on Squib</p>
			                <p>B1936 Air Bag Driver Circuit Short To Ground</p>
			                <p>B1937 Air Bag Passenger Pressure Switch Circuit Open</p>
			                <p>B1938 Air Bag Passenger Circuit Short To Ground</p>
			                <p>B1939 Air Bag Passenger Pressure Switch Circuit Short To Ground</p>
			                <p>B1941 Air Bag Crash Sensor #1 Feed/Return Circuit Open</p>
			                <p>B1942 Air Bag Crash Sensor #2 Feed/Return Circuit Open</p>
			                <p>B1943 Air Bag Crash Sensor #1 Ground Circuit Short To Ground</p>
			                <p>B1944 Air Bag Crash Sensor #1 Ground Circuit Open</p>
			                <p>B1945 Air Bag Crash Sensor #2 Ground Circuit Open</p>
			                <p>B1946 Climate Control A/C Post Evaporator Sensor Circuit Failure</p>
			                <p>B1947 Climate Control A/C Post Evaporator Sensor Circuit Short To Ground</p>
			                <p>B1948 Climate Control Water Temperature Sensor Circuit Failure</p>
			                <p>B1949 Climate Control Water Temperature Sensor Circuit Short To Ground</p>
			                <p>B1950 Seat Rear Up/Down Potentiometer Feedback Circuit Failure</p>
			                <p>B1951 Seat Rear Up/Down Potentiometer Feedback Circuit Open</p>
			                <p>B1952 Seat Rear Up/Down Potentiometer Feedback Circuit Short To Battery</p>
			                <p>B1953 Seat Rear Up/Down Potentiometer Feedback Circuit Short To Ground</p>
			                <p>B1954 Seat Front Up/Down Potentiometer Feedback Circuit Failure</p>
			                <p>B1955 Seat Front Up/Down Potentiometer Feedback Circuit Open</p>
			                <p>B1956 Seat Front Up/Down Potentiometer Feedback Circuit Short To Battery</p>
			                <p>B1957 Seat Front Up/Down Potentiometer Feedback Circuit Short To Ground</p>
			                <p>B1958 Seat Recline Forward/Backward Potentiometer Feedback Circuit Failure</p>
			                <p>B1959 Seat Recline Forward/Backward Potentiometer Feedback Circuit Open</p>
			                <p>B1960 Seat Recline Forward/Backward Potentiometer Feedback Circuit Short To Battery</p>
			                <p>B1961 Seat Recline Forward/Backward Potentiometer Feedback Circuit Short To Ground</p>
			                <p>B1962 Seat Horizontal Forward/Rearward Potentiometer Feedback Circuit Failure</p>
			                <p>B1963 Seat Horizontal Forward/Rearward Potentiometer Feedback Circuit Open</p>
			                <p>B1964 Seat Horizontal Forward/Rearward Potentiometer Feedback Circuit Short To Battery</p>
			                <p>B1965 Seat Horizontal Forward/Rearward Potentiometer Feedback Circuit Short To Ground</p>
			                <p>B1966 A/C Post Heater Sensor Circuit Failure</p>
			                <p>B1967 A/C Post Heater Sensor Circuit Short To Ground</p>
			                <p>B1968 A/C Water Pump Detection Circuit Failure</p>
			                <p>B1969 A/C Clutch Magnetic Control Circuit Failure</p>
			                <p>B1970 Passenger Seatback Forward Switch Circuit Short to Ground</p>
			                <p>B1971 Passenger Seatback Rearward Switch Circuit Short to Ground</p>
			                <p>B1972 Passenger Rear Seat up Switch Circuit Short to Battery</p>
			                <p>B1973 Passenger Rear Seat down Switch Circuit Short to Battery</p>
			                <p>B1974 Passenger's Seat Recline Forward Switch Circuit Short to Battery</p>
			                <p>B1975 Passenger's Seat Recline Back Switch Circuit Short to Battery</p>
			                <p>B1976 Passenger's Seat Forward Switch Circuit Short to Battery</p>
			                <p>B1977 Passenger's Front Seat up Switch Circuit Short to Battery</p>
			                <p>B1978 Passenger's Front Seat down Switch Circuit Short to Battery</p>
			                <p>B1979 Passenger Seat Rearward Switch Circuit Short to Battery</p>
			                <p>B1980 Bulb - Outage Condition Detected</p>
			                <p>B1981 Memory off Switch Circuit Short to Battery</p>
			                <p>B1982 Driver's Door Unlock Relay Circuit Failure</p>
			                <p>B1983 Driver's Door Unlock Relay Circuit Short to Battery</p>
			                <p>B1984 Seat Switch Lumbar Inflate Circuit Failure</p>
			                <p>B1985 Seat Switch Lumbar Deflate Circuit Failure</p>
			                <p>B1986 Driver's Seat Seatback Auto glides Rearward Switch Circuit Failure</p>
			                <p>B1987 Pedal Forward / Rearward Motor Stalled</p>
			                <p>B1988 Pedal Position Forward Switch Circuit Short to Battery</p>
			                <p>B1989 Pedal Position Rearward Switch Circuit Short to Battery</p>
			                <p>B1990 Pedal Forward / Rearward Potentiometer Feedback Circuit Failure</p>
			                <p>B1991 Pedal Forward / Rearward Potentiometer Feedback Circuit Short to Battery</p>
			                <p>B1992 Driver Side, Side mount Airbag Circuit Short to V batt</p>
			                <p>B1993 Driver Side, Side mount Airbag Circuit Short to Ground</p>
			                <p>B1994 Driver Side, Side mount Airbag Circuit Open</p>
			                <p>B1995 Driver Side, Side mount Airbag Low resistance on Squib</p>
			                <p>B1996 Passenger Side, Side mount Airbag Circuit Short to V batt</p>
			                <p>B1997 Passenger Side, Side mount Airbag Circuit Short to Ground</p>
			                <p>B1998 Passenger Side, Side mount Airbag Circuit Open</p>
			                <p>B1999 Passenger Side, Side mount Airbag Low resistance on Squib</p>
			                <p>B2100 Door Driver Key Cylinder Switch Failure</p>
			                <p>B2101 Head Rest Switch Circuit Failure</p>
			                <p>B2102 Antenna Circuit Short to Ground</p>
			                <p>B2103 Antenna Not Connected</p>
			                <p>B2104 Door Passenger Key Cylinder Switch Failure</p>
			                <p>B2105 Throttle Position Input Out of Range Low</p>
			                <p>B2106 Throttle Position Input Out of Range High</p>
			                <p>B2107 Front Wiper Motor Relay Circuit Short to V batt</p>
			                <p>B2108 Trunk Key Cylinder Switch Failure</p>
			                <p>B2109 Heated Wind Shield Relay Short to V batt&Acirc;&nbsp;</p>
			                <p>B2110 Front Wiper Motor Relay Circuit Open (changed from Failure 2/6/97)</p>
			                <p>B2111 All Door Lock Input Short to Ground</p>
			                <p>B2112 Door Driver Set Switch Stuck Failure</p>
			                <p>B2113 Heated Windshield Input Short to Ground</p>
			                <p>B2114 Front Washer Input Short to Ground</p>
			                <p>B2115 Rear Washer Input Short to Ground</p>
			                <p>B2116 Door Driver Reset Switch Stuck Failure</p>
			                <p>B2117 Driver Side, Side mount Airbag Low capacitance on Squib</p>
			                <p>B2118 Passenger Side, Side mount Airbag Low capacitance on Squib</p>
			                <p>B2119 Compressor Failure</p>
			                <p>B2120 Door Passenger Set Switch Stuck Failure</p>
			                <p>B2122 Driver Side Satellite Communication Circuit Short to Ground</p>
			                <p>B2123 Passenger Side Satellite Communication Circuit Short to Ground</p>
			                <p>B2124 Door Passenger Reset Switch Stuck Failure</p>
			                <p>B2128 Central Lock Motor Failure</p>
			                <p>B2129 Central Lock Feedback Failure</p>
			                <p>B2130 Double Lock Timeout Failure</p>
			                <p>B2131 Double Lock Feedback Failure</p>
			                <p>B2132 Dimmer switch Circuit Short to Gnd</p>
			                <p>B2133 Brake Motor Warning lamp Circuit Failure</p>
			                <p>B2134 Brake Motor Warning lamp Circuit Short to V batt</p>
			                <p>B2135 Park Brake Applied Warning Lamp Circuit Failure</p>
			                <p>B2136 Park Brake Applied Warning Lamp Circuit Short To Battery</p>
			                <p>B2139 Data Mismatch (receive data does not match what was expected)</p>
			                <p>B2141 NVM Configuration Failure</p>
			                <p>B2142 NVM TIC Failure</p>
			                <p>B2143 NVM Memory Failure</p>
			                <p>B2144 NVM Alarm Data Failure</p>
			                <p>B2145 NVM RF HR Failure</p>
			                <p>B2146 Seat Recline Motor Position Out of Range</p>
			                <p>B2148 PWM Input Circuit Failure</p>
			                <p>B2149 Seat Front Vertical Motor Position Out of Range</p>
			                <p>B2150 Power Supply #1 Circuit Short to Ground</p>
			                <p>B2151 Power Supply #2 Circuit Short to Ground</p>
			                <p>B2152 Seat Rear Vertical Motor Position Out of Range</p>
			                <p>B2153 Rear Echo Sensor Circuit Failure</p>
			                <p>B2154 Front Echo Sensor Circuit Failure</p>
			                <p>B2155 Seat Horizontal Motor Position Out of Range</p>
			                <p>B2156 Rear Doppler Sensor Circuit Failure</p>
			                <p>B2157 Front Doppler Sensor Circuit Failure</p>
			                <p>B2158 Seat Recline Motor Memory Position Out of Range</p>
			                <p>B2159 Memory #1 output Short to Ground</p>
			                <p>B2160 Memory #1 output Short to V Batt</p>
			                <p>B2161 Seat Front Vertical Motor Memory Position Out of Range</p>
			                <p>B2162 Data Mismatch #2 (receive data does not match what was expected)</p>
			                <p>B2163 Clutch Position Fault</p>
			                <p>B2164 Seat Rear Vertical Motor Memory Position Out of Range</p>
			                <p>B2165 Gear shift position Fault</p>
			                <p>B2166 Gear select position Fault</p>
			                <p>B2167 Seat Horizontal Motor Memory Position Out of Range</p>
			                <p>B2168 Unable to confirm Unlock Condition</p>
			                <p>B2169 Unable to confirm locks Condition</p>
			                <p>B2170 Steering Column Lock Switch Circuit Failure</p>
			                <p>B2172 Inertia Switch input Circuit Open</p>
			                <p>B2174 Window Driver Rear Remote up Switch Short to Battery</p>
			                <p>B2175 A/C Request Signal Circuit Short to Ground</p>
			                <p>B2176 Overdrive switch circuit short to V batt</p>
			                <p>B2177 Interior Scanning Sensor Circuit Failure</p>
			                <p>B2178 Window Driver Rear Remote down Switch Short to Battery</p>
			                <p>B2179 Front Wiper Select Switch "A" Short to Ground</p>
			                <p>B2180 Front Wiper Select Switch "B" Short to Ground</p>
			                <p>B2181 Front Wiper Select Switch "C" Short to Ground</p>
			                <p>B2182 Window Passenger Front Remote Up Switch Short to Battery</p>
			                <p>B2183 Front Wiper Select Switch "H" Short to Ground</p>
			                <p>B2184 Front Wiper Select Switch "W" Short to Ground</p>
			                <p>B2185 Rear Wiper Select Switch "D" Short to Ground</p>
			                <p>B2186 Window Passenger Front Remote Down Switch Short to Battery</p>
			                <p>B2187 Rear Wiper Select Switch "B" Short to Ground</p>
			                <p>B2188 Rear Wiper Select Switch "E" Short to Ground</p>
			                <p>B2190 Window Passenger Rear Remote up Switch Short to Battery</p>
			                <p>B2194 Window Passenger Rear Remote down Switch Short to Battery</p>
			                <p>B2195 Driver Window Up / Down Power Circuit Short to Ground</p>
			                <p>B2196 Passenger Window Up / Down Power Circuit Short to Ground</p>
			                <p>B2197 TV Module Error</p>
			                <p>B2198 Traffic Master Module Error</p>
			                <p>B2199 VICS Module Error</p>
			                <p>B2200 No Communication to TV Module (No Fitting of TV)</p>
			                <p>B2201 No Communication with Traffic Master Module</p>
			                <p>B2202 No Communication to VICS Module (No Fitting of VICS)</p>
			                <p>B2203 CD-ROM Error</p>
			                <p>B2204 GPS Antenna Connection Open or Short</p>
			                <p>B2205 GPS Receiver Error</p>
			                <p>B2206 Gyroscope Error</p>
			                <p>B2207 ECU ROM Checksum Error</p>
			                <p>B2208 Communication Link to Display and Switch Module Error</p>
			                <p>B2209 Interior Lamp Override Switch Open Circuit</p>
			                <p>B2210 Interior Lamp Override Switch Short to Ground</p>
			                <p>B2211 Low Coolant Lamp Output Circuit Short to Battery</p>
			                <p>B2214 Window Passenger Front up Switch Short to Battery</p>
			                <p>B2215 Window Passenger Front down Switch Short to Battery</p>
			                <p>B2219 Window Driver Front Current Feedback Exceeded</p>
			                <p>B2220 Window Driver Rear Current Feedback Exceeded</p>
			                <p>B2221 Window Passenger Front Current Feedback Exceeded</p>
			                <p>B2222 Window Passenger Rear Current Feedback Exceeded</p>
			                <p>B2223 Mirror Driver Drive Circuit Failure</p>
			                <p>B2224 Mirror Passenger Drive Circuit Failure</p>
			                <p>B2225 Front Crash Sensor Mount Fault</p>
			                <p>B2226 Front Crash Sensor Internal Fault</p>
			                <p>B2227 Front Crash Sensor Driver Communications Fault</p>
			                <p>B2228 Air Bag Driver Circuit Short to Ground - Loop #2</p>
			                <p>B2229 Air Bag Passenger Circuit Short to Ground - Loop #2</p>
			                <p>B2230 Air Bag Driver Circuit Short to Battery - Loop #2</p>
			                <p>B2231 Air Bag Passenger Circuit Short to Battery - Loop #2</p>
			                <p>B2232 Air Bag Driver Circuit Open - Loop #2</p>
			                <p>B2233 Air Bag passenger Circuit Open - Loop #2</p>
			                <p>B2234 Air Bag Driver Inflator Circuit Resistance Low on Squib - Loop #2</p>
			                <p>B2235 Air Bag Passenger Inflator Circuit</p>
			                <p>B2236 Weak or Defected Electric Vehicle Battery Module Fault</p>
			                <p>B2237 Vehicle Signal indicating Park While VSS Present</p>
			                <p>B2238 Power Cable for Power Sliding Door Broken</p>
			                <p>B2239 Rear Cargo Door Set Switch Stuck (Short to Ground)</p>
			                <p>B2240 Rear Cargo Door Reset Switch Stuck (Short to Ground)</p>
			                <p>B2241 Rear Cargo Door Lock Circuit Short to Ground</p>
			                <p>B2242 Rear Cargo Door Unlock Circuit Open</p>
			                <p>B2243 Driver Rear Door Ajar Circuit Open</p>
			                <p>B2244 Driver Sliding Door Ajar Circuit Short to GND</p>
			                <p>B2245 Passenger Rear Door Ajar Circuit Open</p>
			                <p>B2246 Passenger Sliding Door Ajar Circuit Short to GND</p>
			                <p>B2247 EV Battery Pack Temperature Fault</p>
			                <p>B2248 Heated Windshield Relay Coil Circuit Failure</p>
			                <p>B2249 Head Lamp Relay Coil Short to Battery</p>
			                <p>B2250 All Doors Unlock Relay Circuit Failure</p>
			                <p>B2251 Park lamp Output Relay Driver Circuit Failure</p>
			                <p>B2252 Park lamp Output Relay Driver Short to Battery</p>
			                <p>B2300 Seat Driver Memory Position Error</p>
			                <p>B2301 Seat Passenger Memory Position Error</p>
			                <p>B2302 Seat Headrest Feedback Potentiometer Circuit Failure</p>
			                <p>B2303 Seat Headrest Feedback Potentiometer Circuit Open</p>
			                <p>B2304 Seat Headrest Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2305 Seat Headrest Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2306 Seat Headrest Motor Stalled</p>
			                <p>B2310 Mirror Driver Memory Position Error</p>
			                <p>B2311 Mirror Passenger Memory Position Error</p>
			                <p>B2312 Mirror Passenger Horizontal Feedback Potentiometer Circuit Failure</p>
			                <p>B2313 Mirror Passenger Horizontal Feedback Potentiometer Circuit Open</p>
			                <p>B2314 Mirror Passenger Horizontal Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2315 Mirror Passenger Horizontal Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2316 Mirror Passenger Vertical Feedback Potentiometer Circuit Failure</p>
			                <p>B2317 Mirror Passenger Vertical Feedback Potentiometer Circuit Open</p>
			                <p>B2318 Mirror Passenger Vertical Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2319 Mirror Passenger Vertical Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2320 Mirror Driver Horizontal Feedback Potentiometer Circuit Failure</p>
			                <p>B2321 Mirror Driver Horizontal Feedback Potentiometer Circuit Open</p>
			                <p>B2322 Mirror Driver Horizontal Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2323 Mirror Driver Horizontal Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2324 Mirror Driver Vertical Feedback Potentiometer Circuit Failure</p>
			                <p>B2325 Mirror Driver Vertical Feedback Potentiometer Circuit Open</p>
			                <p>B2326 Mirror Driver Vertical Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2327 Mirror Driver Vertical Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2328 Column Reach Feedback Potentiometer Circuit Failure</p>
			                <p>B2329 Column Reach Feedback Potentiometer Circuit Open</p>
			                <p>B2330 Column Reach Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2331 Column Reach Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2332 Column Tilt Feedback Potentiometer Circuit Failure</p>
			                <p>B2333 Column Tilt Feedback Potentiometer Circuit Open</p>
			                <p>B2334 Column Tilt Feedback Potentiometer Circuit Short to Battery</p>
			                <p>B2335 Column Tilt Feedback Potentiometer Circuit Short to Ground</p>
			                <p>B2336 Mirror Switch Assembly Circuit Failure</p>
			                <p>B2337 Mirror Switch Assembly Circuit Open</p>
			                <p>B2338 Mirror Switch Assembly Circuit Short to Battery</p>
			                <p>B2339 Mirror Switch Assembly Circuit Short to Ground</p>
			                <p>B2340 Column Reach Motor Stalled</p>
			                <p>B2341 Column Tilt Motor Stalled</p>
			                <p>B2342 Seat Switch Reference Voltage Positive Common Open Circuit</p>
			                <p>B2343 Seat Switch Reference Voltage Positive Common Supply Low Voltage</p>
			                <p>B2344 Seat Switch Reference Voltage Positive Common Supply Voltage Fault</p>
			                <p>B2345 Seat Switch Reference Voltage Negative Common Open Circuit</p>
			                <p>B2346 Mirror Switch Reference Voltage Positive Common Open Circuit</p>
			                <p>B2347 Mirror Switch Reference Voltage Positive Common Supply Low Voltage</p>
			                <p>B2348 Mirror Switch Reference Voltage Positive Common Supply Voltage Fault</p>
			                <p>B2349 Mirror Switch Reference Voltage Negative Common Open Circuit</p>
			                <p>B2350 Steering Column Switch Circuit Short to Battery</p>
			                <p>B2351 Steering Column Switch Circuit Failure</p>
			                <p>B2352 Driver Memory Power Switch Indicator Circuit Short to Battery</p>
			                <p>B2353 Driver Mirror Power Driver Circuit Short Ground</p>
			                <p>B2354 Driver Mirror Horizontal / Vertical Feedback Potentiometer Circuit Open</p>
			                <p>B2355 Passenger Mirror Horizontal / Vertical Feedback Potentiometer Circuit Open</p>
			                <p>B2357 Driver Window Down Current Sense Low Circuit Failure</p>
			                <p>B2362 Remote Open/Close signal Circuit Short to Ground</p>
			                <p>B2363 Optical Sensor System Failure</p>
			                <p>B2364 Fuel Filler Door Circuit Open</p>
			                <p>B2365 B-pillar Power Sliding Door Open/Close Switch Input Ckt Short to Gnd</p>
			                <p>B2366 IP Power Sliding Door Open/Close switch Ckt Short to Gnd</p>
			                <p>B2367 Power Sliding Door Override Switch Input Ckt Short to Gnd</p>
			                <p>B2368 Steering Column Switch Circuit Out of Range</p>
			                <p>B2369 Chime OUTPUT Request Ckt Short to Ground</p>
			                <p>B2373 LED #1 Circuit Short to Battery</p>
			                <p>B2374 Power Sliding Detent (Latch) Circuit Failure</p>
			                <p>B2380 Heater Coolant Temp sensor circuit Short to GND</p>
			                <p>B2381 Heater Coolant Temp sensor circuit Open</p>
			                <p>B2384 Audio Reverse Aid Mute Input Ckt Failure</p>
			                <p>B2385 Audio Navigation Mute Input Ckt Failure</p>
			                <p>B2401 Audio Tape Deck Mechanism Fault</p>
			                <p>B2402 Audio CD/DJ Thermal Shutdown Fault</p>
			                <p>B2403 Audio CD/DJ Internal Fault</p>
			                <p>B2404 Audio Steering Wheel Switch Circuit Fault</p>
			                <p>B2405 Audio Single-Disc CD player Thermal Shutdown Fault</p>
			                <p>B2406 Audio Single-Disc CD player Internal Fault</p>
			                <p>B2416 Climate Control Recirculation Actuator Out of Limits</p>
			                <p>B2425 Remote Keyless Entry Out of Synchronization</p>
			                <p>B2426 Passenger Solar Radiation Sensor Circuit Open</p>
			                <p>B2427 Passenger Solar Radiation Sensor Circuit Short to Ground</p>
			                <p>B2428 A/C Post Heater Sensor #2 Circuit Failure</p>
			                <p>B2429 A/C Post Heater Sensor #2 Circuit Short to Ground</p>
			                <p>B2431 Transponder Programming Failed</p>
			                <p>B2432 Drivers Seat Belt Buckle Switch Circuit Open</p>
			                <p>B2433 Drivers Seat Belt Buckle Switch Circuit Short to Battery</p>
			                <p>B2434 Drivers Seat Belt Buckle Switch Circuit Short to Ground</p>
			                <p>B2435 Drivers Seat Belt Buckle Switch Resistance out of Range</p>
			                <p>B2436 Passengers Seat Belt Buckle Switch Circuit Open</p>
			                <p>B2437 Passengers Seat Belt Buckle Switch Circuit Short to Battery</p>
			                <p>B2438 Passengers Seat Belt Buckle Switch Circuit Short to Ground</p>
			                <p>B2439 Passengers Seat Belt Buckle Switch Resistance out of Range</p>
			                <p>B2440 Passenger Side, Side crash sensor mount fault</p>
			                <p>B2441 Driver Side, Side crash sensor mount fault</p>
			                <p>B2442 Intrusion Sensor Fault</p>
			                <p>B2443 Power train Performance Mode Switch Circuit failure</p>
			                <p>B2444 Driver Side Crash Sensor Internal Fault</p>
			                <p>B2445 Passenger Side Crash Sensor Internal Fault</p>
			                <p>B2446 RESCU/VEMS Input Circuit Open</p>
			                <p>B2447 RESCU/VEMS Input Circuit Short to Battery</p>
			                <p>B2448 RESCU/VEMS Input Circuit Short to Ground</p>
			                <p>B2449 Aux Heater Glow Plug Circuit Short to Ground</p>
			                <p>B2450 Aux Heater Glow Plug Circuit Open</p>
			                <p>B2451 Aux Heater Fuel Pump Circuit Short to Ground</p>
			                <p>B2452 Aux Heater Fuel Pump Circuit Open</p>
			                <p>B2453 Aux Heater Blower Fan Circuit Short to Ground</p>
			                <p>B2454 Aux Heater Blower Fan Circuit Open</p>
			                <p>B2455 Aux Heater Blower Faulted</p>
			                <p>B2456 Aux Heater Coolant Sensor Circuit Short to Ground</p>
			                <p>B2457 Aux Heater Coolant Sensor Circuit Open</p>
			                <p>B2458 Aux Heater Overheat Sensor Circuit Short to Ground</p>
			                <p>B2459 Aux Heater Overheat Sensor Circuit Open</p>
			                <p>B2460 Aux Heater Flame Sensor Circuit Short to Ground</p>
			                <p>B2461 Aux Heater Flame Sensor Circuit Open</p>
			                <p>B2462 Aux Heater Flame Out Fault</p>
			                <p>B2463 Aux Heater Overheat Fault</p>
			                <p>B2464 Aux Heater Start Time Exceeded</p>
			                <p>B2465 Aux Heater Start Counter Overrun/System Locked</p>
			                <p>B2466 Aux Heater Overheat Counter Overrun/System Locked</p>
			                <p>B2467 Aux Heater Cool down Time Exceeded&Acirc;&nbsp;</p>
			                <p>B2468 Aux Heater Coolant Pump Circuit Short to Ground</p>
			                <p>B2469 Aux Heater Coolant Pump Circuit Open</p>
			                <p>B2470 Interior Fan Control Circuit Short to Ground</p>
			                <p>B2471 Interior Fan Control Circuit Open</p>
			                <p>B2472 Fog Lamp Switch Failure</p>
			                <p>B2473 Passenger Door Disarm Switch Ckt Short to Ground</p>
			                <p>B2474 Passenger Door Lock Switch Circuit Shorted to Ground</p>
			                <p>B2475 Passenger Door Unlock Switch Circuit Shorted to Ground</p>
			                <p>B2476 RADIO PRESENT SWITCH Ckt Failure</p>
			                <p>B2477 Module Configuration Failure</p>
			                <p>B2478 ANTI THEFT INPUT SIGNAL SHORT TO GROUND</p>
			                <p>B2479 BRAKE PARK SWITCH CIRCUIT SHORT TO GROUND</p>
			                <p>B2480 LF CORNER LAMP OUTPUT Ckt Short to Battery</p>
			                <p>B2481 Convertible Top Up/Down switch Fault</p>
			                <p>B2482 RF CORNER LAMP OUTPUT Ckt Short to Battery</p>
			                <p>B2483 Enable Signal Open Circuit</p>
			                <p>B2484 Disable Signal Short to Ground</p>
			                <p>B2485 LF SIDE REPEATER LAMP OUTPUT Ckt Short to Battery</p>
			                <p>B2487 RF SIDE REPEATER LAMP OUTPUT Ckt Short to Battery</p>
			                <p>B2489 UNDERHOOD LAMP OUTPUT CIRCUIT Failure</p>
			                <p>B2490 UNDERHOOD LAMP OUTPUT CIRCUIT Short to Battery</p>
			                <p>B2491 RF PARK LAMP OUTPUT CIRCUIT Short to Battery</p>
			                <p>B2492 Already Programmed</p>
			                <p>B2493 LF PARK LAMP OUTPUT CIRCUIT Short to Battery</p>
			                <p>B2494 ANTI THEFT HORN OUTPUT CIRCUIT Short to Batt</p>
			                <p>B2495 ANTI THEFT HORN OUTPUT CIRCUIT Failure</p>
			                <p>B2496 ANTI THEFT HORN OUTPUT CIRCUIT Short to Gnd</p>
			                <p>B2499 COURTESY LAMP OUTPUT Failure</p>
			                <p>B2500 COURTESY LAMP OUTPUT Ckt Short to Battery</p>
			                <p>B2501 LF LAMP LOW BEAM CIRCUIT Failure</p>
			                <p>B2502 LF LAMP LOW BEAM CIRCUIT Short to Battery</p>
			                <p>B2503 RF LAMP LOW BEAM CIRCUIT Failure</p>
			                <p>B2504 RF LAMP LOW BEAM CIRCUIT Short to Battery</p>
			                <p>B2505 LF LAMP HIGH BEAM CIRCUIT Failure</p>
			                <p>B2506 LF LAMP HIGH BEAM CIRCUIT Short to Battery</p>
			                <p>B2507 RF LAMP HIGH BEAM CIRCUIT Failure</p>
			                <p>B2508 RF LAMP HIGH BEAM CIRCUIT Short to Battery</p>
			                <p>B2509 Rear Fog Lamp Switch Circuit Failure</p>
			                <p>B2510 Main Blower Motor Relay Circuit Short to Battery</p>
			                <p>B2511 Horn Output Relay Circuit Short to Battery</p>
			                <p>B2512 Front Fog Lamp Relay Ckt Short to Battery</p>
			                <p>B2513 Blower (Fan) Circuit Failure</p>
			                <p>B2514 Blower (Fan) Circuit Short to V batt</p>
			                <p>B2515 Heater Blower Relay Circuit Failure</p>
			                <p>B2516 Blower Control Circuit Failure</p>
			                <p>B2517 Emergency Power off System Faulted</p>
			                <p>B2518 Compressor Over temp Fault</p>
			                <p>B2519 High Mount Stop Lamp Circuit Failure</p>
			                <p>B2520 High Mount Stop Lamp Circuit Short to Battery</p>
			                <p>B2523 License Lamp Circuit Failure</p>
			                <p>B2524 License Lamp Circuit Short to Battery</p>
			                <p>B2525 Left Rear Backup Lamp Circuit Failure</p>
			                <p>B2526 Left Rear Backup Lamp Circuit Short to Battery</p>
			                <p>B2527 Left Rear Stop lamp Circuit Failure</p>
			                <p>B2528 Left Rear Stop lamp Circuit Short to Battery</p>
			                <p>B2529 Left Rear Turn Lamp Circuit Failure</p>
			                <p>B2530 Left Rear Turn Lamp Circuit Short to Battery</p>
			                <p>B2531 Right Rear Backup Lamp Circuit Failure</p>
			                <p>B2532 Right Rear Backup Lamp Circuit Short to Battery</p>
			                <p>B2533 Right Rear Stop lamp Circuit Failure</p>
			                <p>B2534 Right Rear Stop lamp Circuit Short to Battery</p>
			                <p>B2535 Right Rear Turn Lamp Circuit Failure</p>
			                <p>B2536 Right Rear Turn Lamp Circuit Short to Battery</p>
			                <p>B2539 Aux A/C Mode Position Reference Circuit Short to Ground</p>
			                <p>B2540 Aux A/C Mode Position Reference Circuit Short to Battery</p>
			                <p>B2543 Aux A/C Control Switch Reference Circuit Short to Ground</p>
			                <p>B2544 Aux A/C Control Switch Reference Circuit Short to Battery</p>
			                <p>B2545 System Power Relay Circuit Short to Battery</p>
			                <p>B2546 System Power Relay Circuit Failure</p>
			                <p>B2550 LAMP DOME OUTPUT Circuit Short to Ground</p>
			                <p>B2553 Disable Signal Output Circuit Short to Battery</p>
			                <p>B2554 LAMP DOME OUTPUT Circuit Failure</p>
			                <p>B2555 LAMP DOME OUTPUT Circuit Short to Battery</p>
			                <p>B2556 Enable Signal Circuit Short to Battery</p>
			                <p>B2557 Left Power Sliding Door Open/Close Output Circuit Short to Battery</p>
			                <p>B2558 Right Power Sliding Door Open/Close Output Circuit Short to Battery</p>
			                <p>B2559 Aux A/C Blower Motor Relay Circuit Short to Battery</p>
			                <p>B2560 Aux A/C Blower Motor Relay Circuit Short to Ground</p>
			                <p>B2561 Aux A/C Blower Speed 1 Circuit Failure</p>
			                <p>B2562 Aux A/C Blower Speed 1 Circuit Short to Ground</p>
			                <p>B2563 Aux A/C Blower Speed 2 Circuit Failure</p>
			                <p>B2564 Aux A/C Blower Speed 2 Circuit Short to Ground</p>
			                <p>B2565 Right Tail Lamp Circuit Failure</p>
			                <p>B2566 Right Tail Lamp Circuit Short to Ground</p>
			                <p>B2567 Reverse Mirror Output Circuit Failure</p>
			                <p>B2568 Reverse Mirror Output Circuit Short to Ground</p>
			                <p>B2569 Lift gate Disarm Switch Circuit Short to Ground</p>
			                <p>B2570 Right Lamp Outage Signal Circuit Short to Ground</p>
			                <p>B2571 Left Lamp Outage Signal Circuit Short to Ground</p>
			                <p>B2580 Aux Blower Sense Switch Circuit Failure</p>
			                <p>B2581 Passenger Seat Occupant Detection Circuit Short To Ground</p>
			                <p>B2582 Passenger Seat Occupant Detection Circuit Open</p>
			                <p>B2583 Child Seat Detection Circuit Short to Ground</p>
			                <p>B2584 Child Seat Detection Circuit Open</p>
			                <p>B2585 Anti Theft Input Signal Circuit Short To Battery</p>
			                <p>B2586 Headlamp Mode Select Circuit Failure</p>
			                <p>B2587 Passenger Seat Occupant Detection Circuit Short To Battery</p>
			                <p>B2588 Child Seat Detection Circuit Short To Battery</p>
			                <p>B2589 Unexpected Door Reversal during Close</p>
			                <p>B2590 Vehicle Park/Speed Signal Circuit Failure</p>
			                <p>B2591 Detent Signal Missing During Unlatch</p>
			                <p>B2592 PSD Not Fully Closed (Module Commanded Successfully)</p>
			                <p>B2593 Power Sliding Door Opened During Module Close Command</p>
			                <p>B2594 No Movement Detected After an Unlatch During Power Open</p>
			                <p>B2595 Anti Theft Input Signal Circuit Failure</p>
			                <p>B2596 Headlamp Aim Output Relay Circuit Short To Battery</p>
			                <p>B2597 Headlamp Aim Output Relay Circuit Failure</p>
			                <p>B2598 Headlamp Relay Circuit Failure</p>
			                <p>B2599 Tailgate Release Open Circuit</p>
			                <p>B2600 Double Locking Door Motor Frozen</p>
			                <p>B2601 No Latch Signal Sensed on Closing and Door Reversed</p>
			                <p>B2602 Missing Latch Signal during Power Sliding Door Unlatch</p>
			                <p>B2603 PSD Not Fully Closed During Self-Test</p>
			                <p>B2604 Power Sliding Door On/Off Switch Open Circuit</p>
			                <p>B2605 Disable Signal Open Circuit</p>
			                <p>B2606 A/C Temperature Sensor Out of Range</p>
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
			    <div class="col-xs-12 col-sm-6">
			        <div class="panel-group launch" id="accordion-two" role="tablist" aria-multiselectable="true">
			          <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingCCodes">
			              <h4 class="panel-title">
			                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseCCodes" aria-expanded="true" aria-controls="collapseCCodes">
			                  C-Codes
			                </a>
			              </h4>
			            </div>
			            <div id="collapseCCodes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCCodes">
			              <div class="panel-body">
			                <p>Generic OBD-II Chassis Codes</p>
			                <p>C0000 - Vehicle Speed Information Circuit Malfunction</p>
			                <p>C0035 - Left Front Wheel Speed Circuit Malfunction</p>
			                <p>C0040 - Right Front Wheel Speed Circuit Malfunction</p>
			                <p>C0041 - Right Front Wheel Speed Sensor Circuit Range/Performance (EBCM)</p>
			                <p>C0045 - Left Rear Wheel Speed Circuit Malfunction</p>
			                <p>C0046 - Left Rear Wheel Speed Sensor Circuit Range/Performance (EBCM)</p>
			                <p>C0050 - Right Rear Wheel Speed Circuit Malfunction</p>
			                <p>C0051 - LF Wheel Speed Sensor Circuit Range/Performance (EBCM)</p>
			                <p>C0060 - Left Front ABS Solenoid #1 Circuit Malfunction</p>
			                <p>C0065 - Left Front ABS Solenoid #2 Circuit Malfunction</p>
			                <p>C0070 - Right Front ABS Solenoid #1 Circuit Malfunction</p>
			                <p>C0075 - Right Front ABS Solenoid #2 Circuit Malfunction</p>
			                <p>C0080 - Left Rear ABS Solenoid #1 Circuit Malfunction</p>
			                <p>C0085 - Left Rear ABS Solenoid #2 Circuit Malfunction</p>
			                <p>C0090 - Right Rear ABS Solenoid #1 Circuit Malfunction</p>
			                <p>C0095 - Right Rear ABS Solenoid #2 Circuit Malfunction</p>
			                <p>C0110 - Pump Motor Circuit Malfunction</p>
			                <p>C0121 - Valve Relay Circuit Malfunction</p>
			                <p>C0128 - Low Brake Fluid Circuit Low</p>
			                <p>C0141 - Left TCS Solenoid #1 Circuit Malfunction</p>
			                <p>C0146 - Left TCS Solenoid #2 Circuit Malfunction</p>
			                <p>C0151 - Right TCS Solenoid #1 Circuit Malfunction</p>
			                <p>C0156 - Right TCS Solenoid #2 Circuit Malfunction</p>
			                <p>C0161 - ABS/TCS Brake Switch Circuit Malfunction</p>
			                <p>C0221 - Right Front Wheel Speed Sensor Circuit Open</p>
			                <p>C0222 - Right Front Wheel Speed Signal Missing</p>
			                <p>C0223 - Right Front Wheel Speed Signal Erratic</p>
			                <p>C0225 - Left Front Wheel Speed Sensor Circuit Open</p>
			                <p>C0226 - Left Front Wheel Speed Signal Missing</p>
			                <p>C0227 - Left Front Wheel Speed Signal Erratic</p>
			                <p>C0229 - Drop Out of Front Wheel Speed Signals</p>
			                <p>C0235 - Rear Wheel Speed Signal Circuit Open</p>
			                <p>C0236 - Rear Wheel Speed Signal Circuit Missing</p>
			                <p>C0237 - Rear Wheel Speed Signal Erratic</p>
			                <p>C0238 - Wheel Speed Mismatch</p>
			                <p>C0241 - EBCM Control Valve Circuit</p>
			                <p>C0245 - Wheel Speed Sensor Frequency Error</p>
			                <p>C0254 - EBCM Control Valve Circuit</p>
			                <p>C0265 - EBCM Relay Circuit</p>
			                <p>C0266 - EBCM Relay Circuit</p>
			                <p>C0267 - Pump Motor Circuit Open/Shorted</p>
			                <p>C0268 - Pump Motor Circuit Open/Shorted</p>
			                <p>C0269 - Excessive Dump/Isolation Time</p>
			                <p>C0271 - EBCM Malfunction</p>
			                <p>C0272 - EBCM Malfunction</p>
			                <p>C0273 - EBCM Malfunction</p>
			                <p>C0274 - Excessive Dump/Isolation Time</p>
			                <p>C0279 - Powertrain Configuration Not Valid</p>
			                <p>C0281 - Brake Switch Circuit</p>
			                <p>C0283 - Traction Switch Shorted to Ground</p>
			                <p>C0284 - EBCM Malfunction</p>
			                <p>C0286 - ABS Indicator Lamp Circuit Shorted to B+</p>
			                <p>C0287 - Delivered Torque Circuit</p>
			                <p>C0288 - Brake Warning Lamp Circuit Shorted to B+</p>
			                <p>C0290 - Lost Communications With PCM</p>
			                <p>C0292 - Lost Communications With PCM</p>
			                <p>C0291 - Lost Communications With BCM</p>
			                <p>C0297 - Powertrain Configuration Data Not Received</p>
			                <p>C0298 - Powertrain Indicated Traction Control Malfunction</p>
			                <p>C0300 - Rear Speed Sensor Malfunction</p>
			                <p>C0305 - Front Speed Sensor Malfunction</p>
			                <p>C0306 - Motor A or B Circuit</p>
			                <p>C0308 - Motor A/B Circuit Low</p>
			                <p>C0309 - Motor A/B Circuit High</p>
			                <p>C0310 - Motor A/B Circuit Open</p>
			                <p>C0315 - Motor Ground Circuit Open</p>
			                <p>C0321 - Transfer Case Lock Circuit</p>
			                <p>C0323 - T-Case Lock Circuit Low</p>
			                <p>C0324 - T-Case Lock Circuit High</p>
			                <p>C0327 - Encoder Circuit Malfunction</p>
			                <p>C0357 - Park Switch Circuit High</p>
			                <p>C0359 - Four Wheel Drive Low Range (4LO) Discrete Output Circuit</p>
			                <p>C0362 - 4LO Discrete Output Circuit High</p>
			                <p>C0367 - Front Axle Control Circuit High</p>
			                <p>C0374 - General System Malfunction</p>
			                <p>C0376 - Front/Rear Shaft Speed Mismatch</p>
			                <p>C0379 - Front Axle System</p>
			                <p>C0387 - Unable to Perform Shift</p>
			                <p>C0472 - Steering Handwheel Speed Sensor Signal V Low</p>
			                <p>C0473 - Steering Handwheel Speed Sensor Signal V High</p>
			                <p>C0495 - EVO Tracking Error</p>
			                <p>C0498 - Steering Assist Control Actuator Feed Circuit Low</p>
			                <p>C0499 - Steering Assist Control Solenoid Feed Circuit High</p>
			                <p>C0503 - Steering Assist Control Solenoid Return Circuit Low</p>
			                <p>C0504 - Steering Assist Control Solenoid Return Circuit High</p>
			                <p>C0550 - ECU Malfunction - internal write / checksum malfunction</p>
			                <p>C0559 - EEPROM Checksum Error</p>
			                <p>C0563 - Calibration ROM Checksum Error</p>
			                <p>C0577 - Left Front Solenoid Circuit Low</p>
			                <p>C0578 - Left Front Solenoid Circuit High</p>
			                <p>C0579 - Left Front Solenoid Circuit Open</p>
			                <p>C0582 - Right Front Solenoid Circuit Low</p>
			                <p>C0583 - Right Front Solenoid Circuit High</p>
			                <p>C0584 - Right Front Solenoid Circuit Open</p>
			                <p>C0587 - Left Rear Solenoid Circuit Low</p>
			                <p>C0588 - Left Rear Solenoid Circuit High</p>
			                <p>C0589 - Left Rear Solenoid Circuit Open</p>
			                <p>C0592 - Right Rear Solenoid Circuit Low</p>
			                <p>C0593 - Right Rear Solenoid Circuit High</p>
			                <p>C0594 - Right Rear Solenoid Circuit Open</p>
			                <p>C0611 - VIN Information Error</p>
			                <p>C0615 - Left Front Position Sensor Malfunction</p>
			                <p>C0620 - Right Front Position Sensor Malfunction</p>
			                <p>C0625 - Left Rear Position Sensor Malfunction</p>
			                <p>C0628 - Level Control Position Sensor Circuit High</p>
			                <p>C0630 - Right Rear Position Sensor Malfunction</p>
			                <p>C0635 - Left Front Normal Force Circuit Malfunction</p>
			                <p>C0638 - Left Front Normal Force Circuit High</p>
			                <p>C0640 - Right Front Normal Force Circuit Malfunction</p>
			                <p>C0643 - Right Front Normal Force Circuit High</p>
			                <p>C0655 - Level Control Compressor Relay Malfunction</p>
			                <p>C0657 - Level Control Compressor Circuit Low</p>
			                <p>C0658 - Level Control Compressor Circuit High</p>
			                <p>C0660 - Level Control Exhaust Valve Circuit Malfunction</p>
			                <p>C0662 - Level Control Exhaust Valve Circuit Low</p>
			                <p>C0663 - Level Control Exhaust Valve Circuit High</p>
			                <p>C0665 - Chassis Pitch Signal Circuit</p>
			                <p>C0690 - Damper Control Relay Circuit Malfunction</p>
			                <p>C0691 - Damper Control Relay Circuit Range</p>
			                <p>C0693 - Damper Control Relay Circuit High</p>
			                <p>C0695 - Position Sensor Overcurrent (8 volt supply)</p>
			                <p>C0696 - Position Sensor Overcurrent (5 volt supply)</p>
			                <p>C0710 - Steering Position Signal Malfunction</p>
			                <p>C0750 - Tire Pressure Monitor (TPM) system sensor not transmitting</p>
			                <p>C0755 - Tire Pressure Monitor (TPM) system sensor not transmitting</p>
			                <p>C0760 - Tire Pressure Monitor (TPM) system sensor not transmitting</p>
			                <p>C0765 - Tire Pressure Monitor (TPM) system sensor not transmitting</p>
			                <p>C0800 - Device Power #1 Circuit Malfunction</p>
			                <p>C0896 - Electronic Suspension Control (ESC) voltage is outside the normal range of 9 to 15.5 volts</p>
			              </div>
			            </div>
			          </div>
			          <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingUCodes">
			              <h4 class="panel-title">
			                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUCodes" aria-expanded="true" aria-controls="collapseUCodes">
			                  U-Codes
			                </a>
			              </h4>
			            </div>
			            <div id="collapseUCodes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingUCodes">
			              <div class="panel-body">
			                <p>Generic OBD-II Network Codes</p>
			                <p>U0001 High Speed CAN Communication Bus</p>
			                <p>U0002 High Speed CAN Communication Bus Performance</p>
			                <p>U0003 High Speed CAN Communication Bus (+) Open</p>
			                <p>U0004 High Speed CAN Communication Bus (+) Low</p>
			                <p>U0005 High Speed CAN Communication Bus (+) High</p>
			                <p>U0006 High Speed CAN Communication Bus (-) Open</p>
			                <p>U0007 High Speed CAN Communication Bus (-) Low</p>
			                <p>U0008 High Speed CAN Communication Bus (-) High</p>
			                <p>U0009 High Speed CAN Communication Bus (-) shorted to Bus (+)</p>
			                <p>U0010 Medium Speed CAN Communication Bus</p>
			                <p>U0011 Medium Speed CAN Communication Bus Performance</p>
			                <p>U0012 Medium Speed CAN Communication Bus (+) Open</p>
			                <p>U0013 Medium Speed CAN Communication Bus (+) Low</p>
			                <p>U0014 Medium Speed CAN Communication Bus (+) High</p>
			                <p>U0015 Medium Speed CAN Communication Bus (-) Open</p>
			                <p>U0016 Medium Speed CAN Communication Bus (-) Low</p>
			                <p>U0017 Medium Speed CAN Communication Bus (-) High</p>
			                <p>U0018 Medium Speed CAN Communication Bus (-) shorted to Bus (+)</p>
			                <p>U0019 Low Speed CAN Communication Bus</p>
			                <p>U0020 Low Speed CAN Communication Bus Performance</p>
			                <p>U0021 Low Speed CAN Communication Bus (+) Open</p>
			                <p>U0022 Low Speed CAN Communication Bus (+) Low</p>
			                <p>U0023 Low Speed CAN Communication Bus (+) High</p>
			                <p>U0024 Low Speed CAN Communication Bus (-) Open</p>
			                <p>U0025 Low Speed CAN Communication Bus (-) Low</p>
			                <p>U0026 Low Speed CAN Communication Bus (-) High</p>
			                <p>U0027 Low Speed CAN Communication Bus (-) shorted to Bus (+)</p>
			                <p>U0028 Vehicle Communication Bus A</p>
			                <p>U0029 Vehicle Communication Bus A Performance</p>
			                <p>U0030 Vehicle Communication Bus A (+) Open</p>
			                <p>U0031 Vehicle Communication Bus A (+) Low</p>
			                <p>U0032 Vehicle Communication Bus A (+) High</p>
			                <p>U0033 Vehicle Communication Bus A (-) Open</p>
			                <p>U0034 Vehicle Communication Bus A (-) Low</p>
			                <p>U0035 Vehicle Communication Bus A (-) High</p>
			                <p>U0036 Vehicle Communication Bus A (-) shorted to Bus A (+)</p>
			                <p>U0037 Vehicle Communication Bus B</p>
			                <p>U0038 Vehicle Communication Bus B Performance</p>
			                <p>U0039 Vehicle Communication Bus B (+) Open</p>
			                <p>U0040 Vehicle Communication Bus B (+) Low</p>
			                <p>U0041 Vehicle Communication Bus B (+) High</p>
			                <p>U0042 Vehicle Communication Bus B (-) Open</p>
			                <p>U0043 Vehicle Communication Bus B (-) Low</p>
			                <p>U0044 Vehicle Communication Bus B (-) High</p>
			                <p>U0045 Vehicle Communication Bus B (-) shorted to Bus B (+)</p>
			                <p>U0046 Vehicle Communication Bus C</p>
			                <p>U0047 Vehicle Communication Bus C Performance</p>
			                <p>U0048 Vehicle Communication Bus C (+) Open</p>
			                <p>U0049 Vehicle Communication Bus C (+) Low</p>
			                <p>U0050 Vehicle Communication Bus C (+) High</p>
			                <p>U0051 Vehicle Communication Bus C (-) Open</p>
			                <p>U0052 Vehicle Communication Bus C (-) Low</p>
			                <p>U0053 Vehicle Communication Bus C (-) High</p>
			                <p>U0054 Vehicle Communication Bus C (-) shorted to Bus C (+)</p>
			                <p>U0055 Vehicle Communication Bus D</p>
			                <p>U0056 Vehicle Communication Bus D Performance</p>
			                <p>U0057 Vehicle Communication Bus D (+) Open</p>
			                <p>U0058 Vehicle Communication Bus D (+) Low</p>
			                <p>U0059 Vehicle Communication Bus D (+) High</p>
			                <p>U0060 Vehicle Communication Bus D (-) Open</p>
			                <p>U0061 Vehicle Communication Bus D (-) Low</p>
			                <p>U0062 Vehicle Communication Bus D (-) High</p>
			                <p>U0063 Vehicle Communication Bus D (-) shorted to Bus D (+)</p>
			                <p>U0064 Vehicle Communication Bus E</p>
			                <p>U0065 Vehicle Communication Bus E Performance</p>
			                <p>U0066 Vehicle Communication Bus E (+) Open</p>
			                <p>U0067 Vehicle Communication Bus E (+) Low</p>
			                <p>U0068 Vehicle Communication Bus E (+) High</p>
			                <p>U0069 Vehicle Communication Bus E (-) Open</p>
			                <p>U0070 Vehicle Communication Bus E (-) Low</p>
			                <p>U0071 Vehicle Communication Bus E (-) High</p>
			                <p>U0072 Vehicle Communication Bus E (-) shorted to Bus E (+)</p>
			                <p>U0073 Control Module Communication Bus Off</p>
			                <p>U0074 Reserved by Document U0075 Reserved by Document</p>
			                <p>U0076 Reserved by Document</p>
			                <p>U0077 Reserved by Document</p>
			                <p>U0078 Reserved by Document</p>
			                <p>U0079 Reserved by Document</p>
			                <p>U0080 Reserved by Document</p>
			                <p>U0081 Reserved by Document</p>
			                <p>U0082 Reserved by Document</p>
			                <p>U0083 Reserved by Document</p>
			                <p>U0084 Reserved by Document</p>
			                <p>U0085 Reserved by Document</p>
			                <p>U0086 Reserved by Document</p>
			                <p>U0087 Reserved by Document</p>
			                <p>U0088 Reserved by Document</p>
			                <p>U0089 Reserved by Document</p>
			                <p>U0090 Reserved by Document</p>
			                <p>U0091 Reserved by Document</p>
			                <p>U0092 Reserved by Document</p>
			                <p>U0093 Reserved by Document</p>
			                <p>U0094 Reserved by Document</p>
			                <p>U0095 Reserved by Document</p>
			                <p>U0096 Reserved by Document</p>
			                <p>U0097 Reserved by Document</p>
			                <p>U0098 Reserved by Document</p>
			                <p>U0099 Reserved by Document</p>
			                <p>U0100 Lost Communication With ECM/PCM "A"</p>
			                <p>U0101 Lost Communication with TCM</p>
			                <p>U0102 Lost Communication with Transfer Case Control Module</p>
			                <p>U0103 Lost Communication With Gear Shift Module</p>
			                <p>U0104 Lost Communication With Cruise Control Module</p>
			                <p>U0105 Lost Communication With Fuel Injector Control Module</p>
			                <p>U0106 Lost Communication With Glow Plug Control Module</p>
			                <p>U0107 Lost Communication With Throttle Actuator Control Module</p>
			                <p>U0108 Lost Communication With Alternative Fuel Control Module</p>
			                <p>U0109 Lost Communication With Fuel Pump Control Module</p>
			                <p>U0110 Lost Communication With Drive Motor Control Module</p>
			                <p>U0111 Lost Communication With Battery Energy Control Module "A"</p>
			                <p>U0112 Lost Communication With Battery Energy Control Module "B"</p>
			                <p>U0113 Lost Communication With Emissions Critical Control Information</p>
			                <p>U0114 Lost Communication With Four-Wheel Drive Clutch Control Module</p>
			                <p>U0115 Lost Communication With ECM/PCM "B"</p>
			                <p>U0116 Reserved by Document</p>
			                <p>U0117 Reserved by Document</p>
			                <p>U0118 Reserved by Document</p>
			                <p>U0119 Reserved by Document</p>
			                <p>U0120 Reserved by Document</p>
			                <p>U0121 Lost Communication With Anti-Lock Brake System (ABS) Control Module</p>
			                <p>U0122 Lost Communication With Vehicle Dynamics Control Module</p>
			                <p>U0123 Lost Communication With Yaw Rate Sensor Module</p>
			                <p>U0124 Lost Communication With Lateral Acceleration Sensor Module</p>
			                <p>U0125 Lost Communication With Multi-axis Acceleration Sensor Module</p>
			                <p>U0126 Lost Communication With Steering Angle Sensor Module</p>
			                <p>U0127 Lost Communication With Tire Pressure Monitor Module</p>
			                <p>U0128 Lost Communication With Park Brake Control Module</p>
			                <p>U0129 Lost Communication With Brake System Control Module</p>
			                <p>U0130 Lost Communication With Steering Effort Control Module</p>
			                <p>U0131 Lost Communication With Power Steering Control Module</p>
			                <p>U0132 Lost Communication With Ride Level Control Module</p>
			                <p>U0133 Reserved by Document</p>
			                <p>U0134 Reserved by Document</p>
			                <p>U0135 Reserved by Document</p>
			                <p>U0136 Reserved by Document</p>
			                <p>U0137 Reserved by Document</p>
			                <p>U0138 Reserved by Document</p>
			                <p>U0139 Reserved by Document</p>
			                <p>U0140 Lost Communication With Body Control Module</p>
			                <p>U0141 Lost Communication With Body Control Module "A"</p>
			                <p>U0142 Lost Communication With Body Control Module "B"</p>
			                <p>U0143 Lost Communication With Body Control Module "C"</p>
			                <p>U0144 Lost Communication With Body Control Module "D"</p>
			                <p>U0145 Lost Communication With Body Control Module "E"</p>
			                <p>U0146 Lost Communication With Gateway "A"</p>
			                <p>U0147 Lost Communication With Gateway "B"</p>
			                <p>U0148 Lost Communication With Gateway "C"</p>
			                <p>U0149 Lost Communication With Gateway "D"</p>
			                <p>U0150 Lost Communication With Gateway "E"</p>
			                <p>U0151 Lost Communication With Restraints Control Module</p>
			                <p>U0152 Lost Communication With Side Restraints Control Module</p>
			                <p>U0153 Lost Communication With Side Restraints Control Module</p>
			                <p>U0154 Lost Communication With Restraints Occupant Sensing Control Module</p>
			                <p>U0155 Lost Communication With Instrument Panel Cluster (IPC) Control Module</p>
			                <p>U0156 Lost Communication With Information Center "A"</p>
			                <p>U0157 Lost Communication With Information Center "B"</p>
			                <p>U0158 Lost Communication With Head Up Display</p>
			                <p>U0159 Lost Communication With Parking Assist Control Module</p>
			                <p>U0160 Lost Communication With Audible Alert Control Module</p>
			                <p>U0161 Lost Communication With Compass Module</p>
			                <p>U0162 Lost Communication With Navigation Display Module</p>
			                <p>U0163 Lost Communication With Navigation Control Module</p>
			                <p>U0164 Lost Communication With HVAC Control Module</p>
			                <p>U0165 Lost Communication With HVAC Control Module</p>
			                <p>U0166 Lost Communication With Auxiliary Heater Control Module</p>
			                <p>U0167 Lost Communication With Vehicle Immobilizer Control Module</p>
			                <p>U0168 Lost Communication With Vehicle Security Control Module</p>
			                <p>U0169 Lost Communication With Sunroof Control Module</p>
			                <p>U0170 Lost Communication With "Restraints System Sensor A"</p>
			                <p>U0171 Lost Communication With "Restraints System Sensor B"</p>
			                <p>U0172 Lost Communication With "Restraints System Sensor C"</p>
			                <p>U0173 Lost Communication With "Restraints System Sensor D"</p>
			                <p>U0174 Lost Communication With "Restraints System Sensor E"</p>
			                <p>U0175 Lost Communication With "Restraints System Sensor F"</p>
			                <p>U0176 Lost Communication With "Restraints System Sensor G"</p>
			                <p>U0177 Lost Communication With "Restraints System Sensor H"</p>
			                <p>U0178 Lost Communication With "Restraints System Sensor I"</p>
			                <p>U0179 Lost Communication With "Restraints System Sensor J"</p>
			                <p>U0180 Lost Communication With Automatic Lighting Control Module</p>
			                <p>U0181 Lost Communication With Headlamp Leveling Control Module</p>
			                <p>U0182 Lost Communication With Lighting Control Module</p>
			                <p>U0183 Lost Communication With Lighting Control Module</p>
			                <p>U0184 Lost Communication With Radio</p>
			                <p>U0185 Lost Communication With Antenna Control Module</p>
			                <p>U0186 Lost Communication With Audio Amplifier</p>
			                <p>U0187 Lost Communication With Digital Disc Player/Changer Module "A"</p>
			                <p>U0188 Lost Communication With Digital Disc Player/Changer Module "B"</p>
			                <p>U0189 Lost Communication With Digital Disc Player/Changer Module "C"</p>
			                <p>U0190 Lost Communication With Digital Disc Player/Changer Module "D"</p>
			                <p>U0191 Lost Communication With Television</p>
			                <p>U0192 Lost Communication With Personal Computer</p>
			                <p>U0193 Lost Communication With "Digital Audio Control Module A"</p>
			                <p>U0194 Lost Communication With "Digital Audio Control Module B"</p>
			                <p>U0195 Lost Communication With Subscription Entertainment Receiver Module</p>
			                <p>U0196 Lost Communication With Rear Seat Entertainment Control Module</p>
			                <p>U0197 Lost Communication With Telephone Control Module</p>
			                <p>U0198 Lost Communication With Telematic Control Module</p>
			                <p>U0199 Lost Communication With "Door Control Module A"</p>
			                <p>U0200 Lost Communication With "Door Control Module B"</p>
			                <p>U0201 Lost Communication With "Door Control Module C"</p>
			                <p>U0202 Lost Communication With "Door Control Module D"</p>
			                <p>U0203 Lost Communication With "Door Control Module E"</p>
			                <p>U0204 Lost Communication With "Door Control Module F"</p>
			                <p>U0205 Lost Communication With "Door Control Module G"</p>
			                <p>U0206 Lost Communication With Folding Top Control Module</p>
			                <p>U0207 Lost Communication With Movable Roof Control Module</p>
			                <p>U0208 Lost Communication With "Seat Control Module A"</p>
			                <p>U0209 Lost Communication With "Seat Control Module B"</p>
			                <p>U0210 Lost Communication With "Seat Control Module C"</p>
			                <p>U0211 Lost Communication With "Seat Control Module D"</p>
			                <p>U0212 Lost Communication With Steering Column Control Module</p>
			                <p>U0213 Lost Communication With Mirror Control Module</p>
			                <p>U0214 Lost Communication With Remote Function Actuation</p>
			                <p>U0215 Lost Communication With "Door Switch A"</p>
			                <p>U0216 Lost Communication With "Door Switch B"</p>
			                <p>U0217 Lost Communication With "Door Switch C"</p>
			                <p>U0218 Lost Communication With "Door Switch D"</p>
			                <p>U0219 Lost Communication With "Door Switch E"</p>
			                <p>U0220 Lost Communication With "Door Switch F"</p>
			                <p>U0221 Lost Communication With "Door Switch G"</p>
			                <p>U0222 Lost Communication With "Door Window Motor A"</p>
			                <p>U0223 Lost Communication With "Door Window Motor B"</p>
			                <p>U0224 Lost Communication With "Door Window Motor C"</p>
			                <p>U0225 Lost Communication With "Door Window Motor D"</p>
			                <p>U0226 Lost Communication With "Door Window Motor E"</p>
			                <p>U0227 Lost Communication With "Door Window Motor F"</p>
			                <p>U0228 Lost Communication With "Door Window Motor G"</p>
			                <p>U0229 Lost Communication With Heated Steering Wheel Module</p>
			                <p>U0230 Lost Communication With Rear Gate Module</p>
			                <p>U0231 Lost Communication With Rain Sensing Module</p>
			                <p>U0232 Lost Communication With Side Obstacle Detection Control Module</p>
			                <p>U0233 Lost Communication With Side Obstacle Detection Control Module</p>
			                <p>U0234 Lost Communication With Convenience Recall Module</p>
			                <p>U0235 Lost Communication With Cruise Control Front Distance Range Sensor</p>
			                <p>U0300 Internal Control Module Software Incompatibility</p>
			                <p>U0301 Software Incompatibility with ECM/PCM</p>
			                <p>U0302 Software Incompatibility with Transmission Control Module</p>
			                <p>U0303 Software Incompatibility with Transfer Case Control Module</p>
			                <p>U0304 Software Incompatibility with Gear Shift Control Module</p>
			                <p>U0305 Software Incompatibility with Cruise Control Module</p>
			                <p>U0306 Software Incompatibility with Fuel Injector Control Module</p>
			                <p>U0307 Software Incompatibility with Glow Plug Control Module</p>
			                <p>U0308 Software Incompatibility with Throttle Actuator Control Module</p>
			                <p>U0309 Software Incompatibility with Alternative Fuel Control Module</p>
			                <p>U0310 Software Incompatibility with Fuel Pump Control Module</p>
			                <p>U0311 Software Incompatibility with Drive Motor Control Module</p>
			                <p>U0312 Software Incompatibility with Battery Energy Control Module A</p>
			                <p>U0313 Software Incompatibility with Battery Energy Control Module B</p>
			                <p>U0314 Software Incompatibility with Four-Wheel Drive Clutch Control Module</p>
			                <p>U0315 Software Incompatibility with Anti-Lock Brake System Control Module</p>
			                <p>U0316 Software Incompatibility with Vehicle Dynamics Control Module</p>
			                <p>U0317 Software Incompatibility with Park Brake Control Module</p>
			                <p>U0318 Software Incompatibility with Brake System Control Module</p>
			                <p>U0319 Software Incompatibility with Steering Effort Control Module</p>
			                <p>U0320 Software Incompatibility with Power Steering Control Module</p>
			                <p>U0321 Software Incompatibility with Ride Level Control Module</p>
			                <p>U0322 Software Incompatibility with Body Control Module</p>
			                <p>U0323 Software Incompatibility with Instrument Panel Control Module</p>
			                <p>U0324 Software Incompatibility with HVAC Control Module</p>
			                <p>U0325 Software Incompatibility with Auxiliary Heater Control Module</p>
			                <p>U0326 Software Incompatibility with Vehicle Immobilizer Control Module</p>
			                <p>U0327 Software Incompatibility with Vehicle Security Control Module</p>
			                <p>U0328 Software Incompatibility with Steering Angle Sensor Module</p>
			                <p>U0329 Software Incompatibility with Steering Column Control Module</p>
			                <p>U0330 Software Incompatibility with Tire Pressure Monitor Module</p>
			                <p>U0331 Software Incompatibility with Body Control Module "A"</p>
			                <p>U0400 Invalid Data Received U0401 Invalid Data Received From ECM/PCM</p>
			                <p>U0402 Invalid Data Received From Transmission Control Module</p>
			                <p>U0403 Invalid Data Received From Transfer Case Control Module</p>
			                <p>U0404 Invalid Data Received From Gear Shift Control Module</p>
			                <p>U0405 Invalid Data Received From Cruise Control Module</p>
			                <p>U0406 Invalid Data Received From Fuel Injector Control Module</p>
			                <p>U0407 Invalid Data Received From Glow Plug Control Module</p>
			                <p>U0408 Invalid Data Received From Throttle Actuator Control Module</p>
			                <p>U0409 Invalid Data Received From Alternative Fuel Control Module</p>
			                <p>U0410 Invalid Data Received From Fuel Pump Control Module</p>
			                <p>U0411 Invalid Data Received From Drive Motor Control Module</p>
			                <p>U0412 Invalid Data Received From Battery Energy Control Module A</p>
			                <p>U0413 Invalid Data Received From Battery Energy Control Module B</p>
			                <p>U0414 Invalid Data Received From Four-Wheel Drive Clutch Control Module</p>
			                <p>U0415 Invalid Data Received From Anti-Lock Brake System Control Module</p>
			                <p>U0416 Invalid Data Received From Vehicle Dynamics Control Module</p>
			                <p>U0417 Invalid Data Received From Park Brake Control Module</p>
			                <p>U0418 Invalid Data Received From Brake System Control Module</p>
			                <p>U0419 Invalid Data Received From Steering Effort Control Module</p>
			                <p>U0420 Invalid Data Received From Power Steering Control Module</p>
			                <p>U0421 Invalid Data Received From Ride Level Control Module</p>
			                <p>U0422 Invalid Data Received From Body Control Module</p>
			                <p>U0423 Invalid Data Received From Instrument Panel Control Module</p>
			                <p>U0424 Invalid Data Received From HVAC Control Module</p>
			                <p>U0425 Invalid Data Received From Auxiliary Heater Control Module</p>
			                <p>U0426 Invalid Data Received From Vehicle Immobilizer Control Module</p>
			                <p>U0427 Invalid Data Received From Vehicle Security Control Module</p>
			                <p>U0428 Invalid Data Received From Steering Angle Sensor Module</p>
			                <p>U0429 Invalid Data Received From Steering Column Control Module</p>
			                <p>U0430 Invalid Data Received From Tire Pressure Monitor Module</p>
			                <p>U0431 Invalid Data Received From Body Control Module "A"</p>
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
			</div>        
					</div>
				</div>
			</div>
	    </div>
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