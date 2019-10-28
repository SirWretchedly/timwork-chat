<?php
echo'
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
			<h1>Register</h1>
				<form action=Register2.php method=post>
					<label>First Name:</label>     <input type=text name=nume><br>
					<label>Last Name:</label>     <input type=text name=prenume><br>
					<label>Username:</label>       <input type=text name=username><br>
					<label>E-mail:</label>         <input type=text name=email><br>
					<label>Password:</label>       <input type=password name=parola1><br>
					<label>Verify Password:</label><input type=password name=parola2><br>
													<input type=submit value=Register>
				</form>
				
		</div>
		<a id="t" href="Login.php">Already have an account?</a>
		<br>
	</section>
	<footer>
		<p>@Timwork, Copyright &copy; 2019 Designed by Timotei&Anca</p>
	</footer>
</body>
</html>
';
?>