<?php
session_start();
require_once('Database.php');
$username=$_POST['username'];
$_SESSION['username']=$username;
$parola=$_POST['parola'];
mysql_query("select username from users where username='$username' and parola='$parola'");
$a=mysql_fetch_array(mysql_query("select username from users where username='$username' and parola='$parola'")); 
if($a['username']!=$username)
{
	echo "Username sau parola gresite"."<br>";
	require_once("Login.php");
	exit;
}	
else
	if($username!=NULL&&$parola!=NULL)
		require_once("Yay.php");
	else
		require_once("Login.php");
?>