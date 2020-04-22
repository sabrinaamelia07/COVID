<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	  <link rel="icon" href="coro.jpg" />
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<a href="covid.html"button type="submit" class="btn" name="login_user">Login</button></a>
		</div>
		<p>
			Create New Account? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>
