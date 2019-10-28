<?php
echo '
<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>
<link rel="stylesheet" type="text/css" href="stylen.css">
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
	<section>
		<div class="container">
			<h1>Create Chatrooms</h1>
		<form action=New2.php method=post>
					<input type=text name=name placeholder="Name chat..."><br>
					<textarea name=description placeholder="Description..."></textarea><br>
						<input type=submit value="Submit">
		
		</form>
		</div>
	</section>
</body>
</html>
';
?>