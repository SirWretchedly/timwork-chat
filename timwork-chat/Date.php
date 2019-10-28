<?php
session_start();
require_once('Database2.php');
$text=$_POST['text'];
$username=$_SESSION['username'];
$text=addslashes($text);
mysql_query("insert into GlobalChat values(0, '$username', '$text')");
require_once("Yay.php");
?>
