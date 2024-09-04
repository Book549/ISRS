<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Log in</title>
</head>
<body class="login-page">
	<div class="container-log">
		<div class="login-group">
			<h3>Log in</h3>

			<form method="post" class="login-form">
				<div>
				<label for="login-user">Username :</label><br>
				<input type="text" name="user"  id="login-user" class="box" placeholder="Enter your username"><br>
				</div>
				<div>
				<label for="login-pass">Password :</label><br>
				<input type="password" name="pass"  id="login-pass" class="box" placeholder="Enter your password"><br>
				</div>
				<div >
				<input type="submit" name="submit"  class="btn" value="Log in">
				</div>
			</form>
		</div>
	</div>
</body>
</html>