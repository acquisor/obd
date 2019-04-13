<?php 
 
 require_once 'connect.php';
 
 $response = array();
 
 if(isset($_GET['apicall'])){
 
 switch($_GET['apicall']){
 
 case 'signup':
 if(isTheseParametersAvailable(array('username','email','password','mobile'))){
 $username = $_POST['username']; 
 $email = $_POST['email']; 
 $password = md5($_POST['password']);
 $mobile = $_POST['mobile']; 
 
 $stmt = $conn->prepare("SELECT id FROM login WHERE username = ? OR email = ?");
 $stmt->bind_param("ss", $username, $email);
 $stmt->execute();
 $stmt->store_result();
 
 if($stmt->num_rows > 0){
 $response['error'] = true;
 $response['message'] = 'User already registered';
 $stmt->close();
 }else{
 $stmt = $conn->prepare("INSERT INTO login (username, email, password, mobile) VALUES (?, ?, ?, ?)");
 $stmt->bind_param("ssss", $username, $email, $password, $mobile);
 
 if($stmt->execute()){
 $stmt = $conn->prepare("SELECT id, id, username, email, mobile FROM login WHERE username = ?"); 
 $stmt->bind_param("s",$username);
 $stmt->execute();
 $stmt->bind_result($userid, $id, $username, $email, $mobile);
 $stmt->fetch();
 
 $user = array(
 'id'=>$id, 
 'username'=>$username, 
 'email'=>$email,
 'mobile'=>$mobile
 );
 
 $stmt->close();
 
 $response['error'] = false; 
 $response['message'] = 'User registered successfully'; 
 $response['user'] = $user; 
 }
 }
 
 }else{
 $response['error'] = true; 
 $response['message'] = 'required parameters are not available'; 
 }
 
 break; 
 
 case 'login':
 
 if(isTheseParametersAvailable(array('username', 'password'))){
 
 $username = $_POST['username'];
 $password = md5($_POST['password']); 
 
 $stmt = $conn->prepare("SELECT id, username, email, mobile FROM login WHERE username = ? AND password = ?");
 $stmt->bind_param("ss",$username, $password);
 
 $stmt->execute();
 
 $stmt->store_result();
 
 if($stmt->num_rows > 0){
 
 $stmt->bind_result($id, $username, $email, $mobile);
 $stmt->fetch();
 
 $user = array(
 'id'=>$id, 
 'username'=>$username, 
 'email'=>$email,
 'mobile'=>$mobile
 );
 
 $response['error'] = false; 
 $response['message'] = 'Login successfull'; 
 $response['user'] = $user; 
 }else{
 $response['error'] = false; 
 $response['message'] = 'Invalid username or password';
 }
 }
 break; 
 
 default: 
 $response['error'] = true; 
 $response['message'] = 'Invalid Operation Called';
 }
 
 }else{
 $response['error'] = true; 
 $response['message'] = 'Invalid API Call';
 }
 
 echo json_encode($response);
 
 function isTheseParametersAvailable($params){
 
 foreach($params as $param){
 if(!isset($_POST[$param])){
 return false; 
 }
 }
 return true; 
 }