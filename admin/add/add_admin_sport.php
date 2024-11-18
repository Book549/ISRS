<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
	<div class="table_container">
<form method="post" action="" class="add_sport_all">
	<label for="user_name">user_name</label><input type="text" class="box_sport" id="user_name" name="user_name" required><br>
	<label for="user_username">user_username</label><input type="text" class="box_sport" id="user_username" name="user_username" required><br>
	<label for="user_password">user_password</label><input type="text" class="box_sport" id="user_password" name="user_password" required><br>

	<label for="color_name">ชื่อคณะสี</label><input type="text" name="color_name" id="color_name" required><br>
	<label for="color_color">คณะสี</label><input type="text" name="color_color" id="color_color" required><br>
	<label for="color_president">ประธานสี</label><input type="text" name="color_president" id="color_president" required><br>
	<label for="color_vice-president">รองประธานสี</label><input type="text" name="color_vice-president" id="color_vice-president" required><br>

	<input type="submit" name="add_admin_sport" class="btn" value="เพิ่มผู้ใช้"><br>
</form>
</div>
<?php 
if ($_POST['add_admin_sport']) {
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];

		$color_name = $_POST['color_name'];
		$color_color = $_POST['color_color'];
		$color_president = $_POST['color_president'];
		$color_vice_president = $_POST['color_vice-president']; 

		$sql_find_add = "SELECT * FROM `users` WHERE `user_username` = '$user_username'";
		$result_find_add_admin = mysqli_query($conn, $sql_find_add);
		if (mysqli_num_rows($result_find_add_admin) == 0) {
			$result_add_admin = mysqli_query($conn, "INSERT INTO `users`(`user_name`, `user_username`, `user_password`, `user_role`) VALUES ('$user_name','$user_username','$user_password','admin_sport')");
			$result_find_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_username` = '$user_username' AND `user_password` = '$user_password' AND `user_role` = 'admin_sport'");
			$row_find_admin = mysqli_fetch_assoc($result_find_user);
			$color_user_id = $row_find_admin['user_id'];
			if ($result_find_user) {
				if ($result_add_admin) {
					$sql_add_admin_sport = "INSERT INTO `colors`(`color_name`, `color_color`, `color_president`, `color_vice-president`, `color_id_user`) VALUES ('$color_name','$color_color','$color_president','$color_vice_president','$color_user_id')";
					if (mysqli_query($conn, $sql_add_admin_sport)) {
						echo "Success";
						echo "<meta http-equiv='refresh' content='0;url=?page=admin_sport&sub_page=view' />";
					}else{
						echo "Fall";
					}

				}else{
					echo "Fall";
				}
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
