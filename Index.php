<?php
session_start();
$username = "aprilmitchell";
$password = "1234";

if($username==$_POST["username"] && $password==$_POST["password"]){
	$_SESSION["username"] = $username;
		header("Location: actions.php");
} else {
	unset($_SESSION["username"]);
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>NTS Inventory Manager</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1>Welcome to Nikki Taylor Salon</h1>
					
					<nav id="nav">
						<ul>
							
			
							<li><a href="index.php" class="button">Home</a></li>
							<li><a href="actions.php" class="button">Login</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner --> 

			<div class box>
				<div class align="center">
				
				<section id="banner">
					<h2>Please Login Below</h2>
					
					<?php
					if (isset($_SESSION["username"]))
					{echo("<h1>Login Successful</h1>");
					echo("Please Proceed to choose your <a href='actions.php'> Action");
					} else {
					
					?>
						<div class align="center">
						<form method="post" action="index.php">
							<label for="username"><h2><strong>Username:</strong></h2></label><input name="username" type="text" id="username"><br>
							<label for="password"><h2><strong>Password:</strong></h2></label><input type="password" name="password" id="password"><br>
							<input type="submit" name="submit" value="Login"><br>
							<br><input type="submit" name="submit" value="New User"><br>
							<br><input type="submit" name="submit" value="Forgot Password"><br>
						</form>
					</div>
					<?php 
						}
					?>
				
				</section>
					</div>
					</div>
					
			<!-- Main -->
				<section id="main" class="container">

				</section>

		

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>