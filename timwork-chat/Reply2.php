<?php
echo"
<html>
<head>
<link rel='icon' href='gb.png' type='image/gif' sizes='16x16'>
<title>
Timwork Chat
</title>
<link rel='stylesheet' type='text/css' href='styleh.css'>";
session_start();
require_once('Database2.php');
$text=$_POST['text'];
$id=$_POST['id'];
$space="_____";
$text=addslashes($text);
$ok=mysql_query("update GlobalChat set text=concat(text,'<br>','<font color=white>','$space','</font>','<b>','<u>','$_SESSION[username]',':','</u>','</b>',' ','$text') where id='$id'");
if(!$ok)
	echo mysql_error();
require_once('Yay.php');
echo"</head>
</html>";
?>