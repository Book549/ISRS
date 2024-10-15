<body>
<?php 
	$id_edit_users = $_GET['user_id'] ;
	$sql_find_edit_users = "SELECT * FROM `users` WHERE `user_id` = '$id_edit_users'";
	$result_find_edit_users = mysqli_query($conn, $sql_find_edit_users);
	if (mysqli_num_rows($result_find_edit_users) > 0 ) {
		$row_find_edit_users = mysqli_fetch_assoc($result_find_edit_users);
		$user_id = $row_find_edit_users['user_id'];
	}else{
		echo  $_GET['user_id'];
		echo "not found";
	}
?>
<form method="post" action="">
	<p>id_user : <?php echo $user_id; ?></p>
	<label for="user_name">user_name</label>
	<input type="text" id="user_name" name="user_name" value="<?php echo $row_find_edit_users['user_name']; ?>" required><br>
	<label for="user_username">user_username</label>
	<input type="text" id="user_username" name="user_username" value="<?php echo $row_find_edit_users['user_username']; ?>" required><br>
	<label for="user_password">user_password</label>
	<input type="text" id="user_password" name="user_password" value="<?php echo $row_find_edit_users['user_password']; ?>" required><br>
	<p>user_role:</p>
	<input type="radio" id="admin_system" name="user_role" value="admin_system" <?php if ($row_find_edit_users['user_role'] == "admin_system") {echo "checked";} ?> required>
	<label for="admin_system">admin_system</label><br>
	<input type="radio" id="admin_sport" name="user_role" value="admin_sport" <?php if ($row_find_edit_users['user_role'] == "admin_sport") {echo "checked";} ?> required>
	<label for="admin_sport">admin_sport</label><br> 
	<input type="radio" id="admin_report" name="user_role" value="admin_report" <?php if ($row_find_edit_users['user_role'] == "admin_report") {echo "checked";} ?> required>
	<label for="admin_report">admin_report</label><br>
	<input type="submit" name="edit_admin" value="แก้ไขผู้ใช้"><br>
</form>
<?php 
	if ($_POST['edit_admin']) {
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];
		$sql_update_users = "UPDATE `users` SET `user_name`='$user_name',`user_username`='$user_username',`user_password`='$user_password',`user_role`='$user_role' WHERE `user_id`='$user_id'";
		if (mysqli_query($conn, $sql_update_users)) {
			echo "Success";
			header("Location: ?page=admin_system&sub_page=view");
		}else{
			echo "Fall";
		}
		
	}
?>
</body>