<?php
session_start();
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$username=$_POST['username'];
$email=$_POST['email'];
$parola1=$_POST['parola1'];
$parola2=$_POST['parola2'];
$_SESSION['username']=$username;
if (!strpos($email,"@"))
{
	echo "Invalid email address"."<br>";
	require_once("Register.php");
	exit;
}
if($parola1!=$parola2)
{
	echo "Password Incorrect"."<br>";
	require_once("Register.php");
	exit;
}
require_once('Database.php');
mysql_query("insert into users values(0, '$nume', '$prenume', '$username', '$email', '$parola1')");
require_once("Yay.php");
?>