<?php
@session_start();
$ido=$_POST['ido'];
mysql_connect('localhost','root','');
mysql_select_db("site");
$b=mysql_query("select * from chatrooms where id='$ido' order by id desc");
$a=mysql_fetch_assoc($b);
$c=$a['name'];
$_SESSION['chat']=$c;
$d=$a['id'];
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
echo '
<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>
<link rel="stylesheet" type="text/css" href="styley.css">
<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
</head>
	<body>
		<header>
			<div class="container">
				<img id="imagine" src="gb.png">
					<div id="sus">
						<h1><span class="highlight">Timwork</span> Chat<h1>
					</div>
						<nav>
							<ul>
								<li class="current"><a href="index.php">Log out</a></li>
							</ul>
						</nav>
					</div>
		</header>';
echo "<h1 id='tit'><b>".$c."</b></h1>";
echo "
	<section class='pls'>
	<div>
	<ul>
					
	<form action=Browse.php method=post>
	 <li><input type=submit value='Browse Chatrooms'>
	</form>
	<form action=New.php method=post>
    <li><input type=submit value='New Chatroom'>
	</form>
	</ul>
				<br>
				<br>
				<br>
				<br>
	<form id='far' action=Send.php method=post>
	<textarea placeholder='Write...' name=text></textarea>
	<br>
	<input type=submit value=Send>
	<input type=hidden name=ido value=$d>
	</form>
	</div>
	</section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>";
$x=mysql_query("select * from $c order by id desc");
while($y=mysql_fetch_array($x))
{
	echo "
	<section id='susu'>
	<div class='mda'>
	<u id='salee'><b>".$y['username']."</b></u>".": ".$y['text']."<br>"."
	</div>
	</section>
	<section id='haide'>
	<form action='Reply10.php' method=post>
	<input id='but1' type=submit value=Reply>
	</section>
	<section>
	<input type=hidden name=id value='$y[id]'>
	<input type=hidden name=ido value='$a[id]'>
	</form>
	</section>
	</body>
	</html>";
}
?>