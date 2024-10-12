<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>
<form method="post" action="">
	<label for="username">Username :</label>
	<input type="text" name="username" id="username"><br>
	<label for="password">Password :</label>
	<input type="text" name="password" id="password"><br>
	<input type="submit" name="login">
</form>
<?php 
if ($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login_sql = "SELECT * FROM `users` WHERE `user_username` = '$username' AND `user_password` = '$password'";
	$resuit_login  = mysqli_query($conn, $login_sql);
	if (mysqli_num_rows($resuit_login) == 1) { #found user
		while ($row_user = mysqli_fetch_assoc($resuit_login)) {
			$_SESSION['user_id'] = $row_user['user_id'];
			$_SESSION['user_name'] = $row_user['user_name'];
			$_SESSION['user_username'] = $row_user['user_username'];
			$_SESSION['user_password'] = $row_user['user_password'];
			$_SESSION['user_role'] = $row_user['user_role'];
		}
	}elseif (mysqli_num_rows($resuit_login) < 1) { #not found user
		echo "no user";
	} else { #found user same more than 2
		echo "err";
	}
}
switch ($_SESSION['user_role']) {
	case 'admin_system':
		header("Location: admin_system.php");
		break;
	
	case 'admin_sport':
		// code...
		break;
	
	case 'admin_report':
		// code...
		break;
	
	default:
		// code...
		break;
}
?>
</body>
</html>