<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="element/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Log in</title>
</head>
<body class="login-page">
	<div class="login-all">
	<a href="index.php"><img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="100px" height="100px"></a>
		<div class="login-group">

			<h5>ลงทะเบียนกีฬาสี</h5>

			<form method="post" class="login-form" action="">
				<div>
					<label for="login-user">Username :</label><br>
					<input type="text" name="username"  id="login-user" class="box" placeholder="Enter your username"><br>
				</div>
				<div>
					<label for="login-pass">Password :</label><br>
					<input type="password" name="password"  id="login-pass" class="box" placeholder="Enter your password"  required><br>
				</div>
				<div >
					<i class="fa-solid fa-eye-slash" id="showpassword"></i>
				</div>
				<div style="display: flex; justify-content: center;">
					<input type="submit" name="login"  class="btn" value="Log in">
				</div>
				
			</form>
		</div>
	</div>

	<script src="element/script.js"></script>
</body>
</html>

<?php #minlength="6"
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
		header("Location: admin_sport.php");
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



           



				



