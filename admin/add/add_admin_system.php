<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
	<div class="table_container">
<form method="post" action="" class="add_sport_all">
	<label for="user_name">user_name</label>
	<input type="text" class="box_sport" id="user_name" name="user_name" required><br>
	<label for="user_username">user_username</label>
	<input type="text" class="box_sport" id="user_username" name="user_username" required><br>
	<label for="user_password">user_password</label>
	<input type="text" class="box_sport" id="user_password" name="user_password" required><br>
	<label>user role:</label><br>
    <div class="radio-group">
        <input type="radio" class="radio" id="admin_system" name="user_role" value="admin_system" required>
        <label for="admin_system">admin system</label><br>
        
        <input type="radio" class="radio" id="admin_sport" name="user_role" value="admin_sport" required>
        <label for="admin_sport">admin sport</label><br> 
        
        <input type="radio" class="radio" id="admin_report" name="user_role" value="admin_report" required>
        <label for="admin_report">admin report</label><br>
    </div>

	<input type="submit" name="add_admin" class="btn" value="เพิ่มผู้ใช้"><br>
</form>
</div>
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
				echo "<meta http-equiv='refresh' content='0;url=?page=admin_system&sub_page=view' />";
				echo "Success";
			}else{
				echo "Fall";
			}
		}elseif (mysqli_num_rows($result_find_add_admin) > 0) {

				echo "duplicate user";
			
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
