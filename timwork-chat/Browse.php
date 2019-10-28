<?php
echo '
<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>
<link rel="stylesheet" type="text/css" href="styleb.css">
<link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
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
					<li><a href="yay.php">Back</a></li>
				</ul>
			</nav>
		</div>
		</header>
		<h1 id="tit">Browse Chatrooms</h1>';
mysql_connect('localhost','root','');
mysql_select_db("site");
$b=mysql_query("select * from chatrooms");
while($a=mysql_fetch_array($b))
{
	echo "
	<section>
	<div class='ceva_nou'>
	<u><b>".$a['name']."</b></u>"." <br> ".$a['description']."<br>
	</div>
	</section>";
	echo " 
	<section id='igot'>
	<form action='Browse2.php' method=post>
		<input id='but1' type=submit value=Join>
		<input type=hidden name=ido value='$a[id]'>
	</form>
	</section>";
}
echo '
</body>
</html>
';
?>