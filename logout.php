<?php
session_start();
session_destroy();
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];

if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
	setcookie('username',$username,time()-1);
	setcookie('password',$password,time()-1);
}
echo "You logged out";
echo "Click to login <a href='login.php'>Login</a>";
?>