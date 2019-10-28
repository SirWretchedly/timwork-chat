<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("site");
$text=$_POST['text'];
$username=$_SESSION['username'];
$c=$_SESSION['chat'];
$ido=$_POST['ido'];
$text=addslashes($text);
echo'<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>';
mysql_query("insert into $c values(0, '$username', '$text')");
echo "<form action=Browse2.php method=post>
<input type=hidden name=ido value=$ido></form>";
require("Browse2.php");
?>