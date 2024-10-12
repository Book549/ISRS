<body>
<form method="post" action="">
	<label for="user_name">user_name</label>
	<input type="text" name="user_name" required><br>
	<label for="user_username">user_username</label>
	<input type="text" name="user_username" required><br>
	<label for="user_password">user_password</label>
	<input type="text" name="user_password" required><br>
	<label for="user_role">user_role</label>
	<input type="text" name="user_role" required><br>
	<input type="submit" name="add_admin"><br>
</form>
<?php 
	if ($_POST['add_admin']) {
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];
		$sql_find_add = "SELECT * FROM `users` WHERE `user_name` = '$user_name' AND `user_username` = '$user_username' AND` user_password` = '$user_password' AND `user_role` = '$user_role'";
		$sql_add_admin = "INSERT INTO `users` (`user_name`, `user_username`, `user_password`, `user_role`) VALUES ('$user_name', '$user_username', '$user_password', '$user_role')";
		$resuit_add_admin = mysqli_query($conn, $sql_add_admin);
		if ($resuit_add_admin) {
			echo "Success";
			
		}else{
			echo "Fall";
		}
	}
	

?>

</body>