<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("site");
$text=$_POST['text'];
$id=$_POST['id'];
$ido=$_POST['ido'];
$space="_____";
$text=addslashes($text);
$c=$_SESSION['chat'];
$ok=mysql_query("update $c set text=concat(text,'<br>','<font color=white>','$space','</font>','<b>','<u>','$_SESSION[username]',':','</u>','</b>',' ','$text') where id='$id'");
echo'<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>';
if(!$ok)
	echo mysql_error();
echo "<form action=Browse2.php method=post>
<input type=hidden name=ido value=$ido></form>";
require('Browse2.php');
?>