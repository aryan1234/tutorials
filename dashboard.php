<?php
session_start();
if($_SESSION['username'])
{
echo "Welcome to your dashboard".$_SESSION['username'];

echo '<br>';
echo '<a href="logout.php">Logout</a>';
}
else
{
	echo "Authentication failed";
}



?>