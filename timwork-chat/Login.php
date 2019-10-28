<?php
echo '
<html>
<head>
<link rel="icon" href="gb.png" type="image/gif" sizes="16x16">
<title>
Timwork Chat
</title>
<link rel="stylesheet" href="styleR.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="sus">
				<h1><span class="highlight">Timwork</span> Chat<h1>
			</div>
		</div>
	</header>
		<section id="principal">
			<div class="container">
				<h1>Login</h1>
					<form action=Login2.php method=post>
					<label>Username:</label> <input type=text name=username><br>
					<label>Password:</label> <input type=password name=parola><br>
										     <input type=submit value=Login>
							  
					</form>
					<a id="t" href="register.php">Create a free Timwork account</a>
			</div>
		</section>
	<footer>
		<p>@Timwork, Copyright &copy; 2019 Designed by Timotei&Anca</p>
	</footer>
</body>
</html>'
?>