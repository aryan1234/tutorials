<?php
require('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query=$handler->query("SELECT * FROM Login WHERE username='$username' AND password='$password'" );
$r = $query->fetch();
if($r){
	if(isset($_POST['remeber'])){
			setcookie('username',$username,time()+60*60*7);
			setcookie('password',$password,time()+60*60*7);			
	}
  	session_start();
	$_SESSION['username'] = $username;
	header('location:dashboard.php');
}
echo "Invalid username or password";
?>
