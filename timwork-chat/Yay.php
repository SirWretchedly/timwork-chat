<?php
require_once('Database2.php');
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
		</header>
<h1 id="tit">GlobalChat</h1>
<section class="pls">

<div>
<ul>
<form action=Browse.php method=post>
	<li><input type=submit value="Browse Chatrooms">
</form>
<form action=New.php method=post>
	<li><input type=submit value="New Chatroom">
</form>
</ul>
<br>
<br>
<br>
<br>
<form id="far" action=Date.php method=post>
	<textarea placeholder="Write..." name=text></textarea>
	<br>
	<input type=submit value=Send>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</section>
';
$b=mysql_query("select * from GlobalChat order by id desc");
while($a=mysql_fetch_array($b))
{
	echo '
	<section id="susu">
	<div class="mda"><u id="salee"><b>'.$a["username"].'</b>'.':'.'</u>'.$a["text"].'<br>'.'
	</div>
	</section>';
	echo '
	<section id="haide">
	<form action=Reply.php method=post>
	<input id="but1" type=submit value=Reply>
	</section>';
	echo "
	<section>
	<input type=hidden name=id value='$a[id]'></form>
	</section>
	";
	
}
echo '

</body>
</html>
';
?>