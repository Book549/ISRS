<body>
<form method="post" action="">
	<label for="user_name">user_name</label>
	<input type="text" id="user_name" name="user_name" required><br>
	<label for="user_username">user_username</label>
	<input type="text" id="user_username" name="user_username" required><br>
	<label for="user_password">user_password</label>
	<input type="text" id="user_password" name="user_password" required><br>
	<p>user_role:</p>
	<input type="radio" id="admin_system" name="user_role" value="admin_system" required>
	<label for="admin_system">admin_system</label><br>
	<input type="radio" id="admin_sport" name="user_role" value="admin_sport" required>
	<label for="admin_sport">admin_sport</label><br> 
	<input type="radio" id="admin_report" name="user_role" value="admin_report" required>
	<label for="admin_report">admin_report</label><br>
	<input type="submit" name="add_admin" value="เพิ่มผู้ใช้"><br>
</form>
<?php 
	if ($_POST['add_admin']) {
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];
		unset($_POST);
		$sql_find_add = "SELECT * FROM `users` WHERE `user_username` = '$user_username'";
		$result_find_add_admin = mysqli_query($conn, $sql_find_add);
		echo mysqli_num_rows($result_find_add_admin);
		if (mysqli_num_rows($result_find_add_admin) == 0) {
			$sql_add_admin = "INSERT INTO `users` (`user_name`, `user_username`, `user_password`, `user_role`) VALUES ('$user_name', '$user_username', '$user_password', '$user_role')";
			$result_add_admin = mysqli_query($conn, $sql_add_admin);
			if ($result_add_admin) {
				#setcookie("add_admin", "Success", time() + 86400*7, "/");
				header("Location: ?page=admin_system&sub_page=view");
				echo "Success";
			}else{
				echo "Fall";
			}
		}elseif (mysqli_num_rows($result_find_add_admin) > 0) {
			if ($_COOKIE['add_admin'] == 'Success') {
				header('Location: '.$_SERVER['REQUEST_URI']);
				#setcookie("add_admin", "", time() - 3600, "/");
			}else{
				echo "duplicate user";
			}
		}
		$result_find_add_admin = mysqli_query($conn, $sql_find_add);
			while ($row_find_admin = mysqli_fetch_assoc($result_find_add_admin)) {
				foreach ($row_find_admin as $key => $value) {
					echo "$key => $value<br>";
				}
			}
	}
?>

</body>