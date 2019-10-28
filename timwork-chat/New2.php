<?php
$name=$_POST['name'];
$description=$_POST['description'];
$description=addslashes($description);
mysql_connect('localhost','root','');
$ok=mysql_select_db("site");
if(!$ok)
	echo "1".mysql_error();
$ok=mysql_query("create table $name (id mediumint not NULL auto_increment, username char(30), text LONGTEXT, primary key(id))");
if(!$ok)
{
	echo "The name cannot contain spaces or special characters and must be unique"."<br>";
	require_once('New.php');
	exit;
}
//mysql_query("create table chatrooms(id mediumint not NULL auto_increment, name char(30), description TEXT, primary key(id))");
$ok=mysql_query("insert into chatrooms(id, name, description) values(0, '$name', '$description')");
if(!$ok)
	echo "4".mysql_error();
/*$a=mysql_fetch_assoc(mysql_query("select max(id) from chatrooms"));
$c=$a['max(id)'];
echo $c;
echo "<form action=Browse2.php method=post>
<input type=hidden name=ido value=$c></form>";*/
require('Browse.php');	
?>