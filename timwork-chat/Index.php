<?php
error_reporting(E_ALL ^ E_WARNING);
require_once('Database.php');
mysql_query("create table chatrooms(id mediumint not NULL auto_increment, name char(30), description TEXT, primary key(id))");
mysql_query("insert into chatrooms(id, name, description) values(0, 'GlobalChat', 'Party for everybody')");
require_once('Database2.php');
$ok=mysql_query("insert into GlobalChat values(0, 'Timwork', 'Welcome to the Global Chatroom')");
if(!$ok)
	echo mysql_error();
echo '
<html>
<head>
	<meta name="description" content="Free Forum">
	<meta name="keywords" content="HTML,CSS,PHP,MySQL,JavaScript">
	<meta name="author" content="Timotei&Anca">
		<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
			<title>
				Timwork Chat
			</title>
				<link href="https://fonts.googleapis.com/css?family=Dokdo|Fascinate+Inline" rel="stylesheet">
					<link rel="stylesheet" href="style.css">
</head>
	<body>
		<header>
			<div class="container">
				<div id="sus">
					<h1><span class="highlight">Timwork</span> Chat<h1>
				</div>
			<!--<nav>
				<ul>
					<li class="current"><a href="#top">Home</a></li>
					<li><a href="#C4">About</a></li>
					<li><a href="#D4">Terms&conditions</a></li>
				</ul>
			</nav>-->
			</div>
		</header>
		<section id="principal">
			<div class="container">
				<h1>Take your journey on our site</h1>
					<p>If you want to join our special community just press the right button</p>
				<form action=Register.php method=post>
					<input type=submit class="buton" value=Register>
				</form>
				<form action=Login.php method=post>
					<input type=submit class="buton" value=Login>
				</form>
			</div>
		</section>
	<footer>
		<p>@Timwork, Copyright &copy; 2019 Designed by Timotei&Anca</p>
	</footer>
	</body>
</html>
'
?>