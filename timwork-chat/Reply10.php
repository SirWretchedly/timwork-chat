<?php
$id=$_POST['id'];
$ido=$_POST['ido'];
echo "
<html>
<head>
<link rel='icon' href='gb.png' type='image/gif' sizes='16x16'>
<title>
Timwork Chat
</title>
<link rel='stylesheet' href='styleReply.css'>
</head>
<body>
	<header>
		<div class='container'>
			<div id='sus'>
				<h1><span class='highlight'>Timwork</span> Chat<h1>
			</div>
			<nav>
				<ul>
					<li class='current'><a href='index.php'>Log out</a></li>
					
				</ul>
			</nav>
		</div>
	</header>
<section>
	<div class='container'>
		<form action=Reply20.php method=post>
			<textarea placeholder='Write...' name=text></textarea><br>
			<input type=submit value=Send>
			<input type=hidden name=id value='$id'>
			<input type=hidden name=ido value='$ido'>
		</form>
	</div>
</section>
</body>
</html>";
?>