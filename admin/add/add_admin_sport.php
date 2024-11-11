<body>
<form method="post" action="" class="add_sport_all">
	<label for="user_name">user_name</label><input type="text" class="box_sport" id="user_name" name="user_name" required><br>
	<label for="user_username">user_username</label><input type="text" class="box_sport" id="user_username" name="user_username" required><br>
	<label for="user_password">user_password</label><input type="text" class="box_sport" id="user_password" name="user_password" required><br>

	<label for="color_id">color_id</label><input type="text" name="color_id" id="color_id" required><br>
	<label for="color_name">color_name</label><input type="text" name="color_name" id="color_name" required><br>
	<label for="color_color">color_color</label><input type="text" name="color_color" id="color_color" required><br>
	<label for="color_president">color_president</label><input type="text" name="color_president" id="color_president" required><br>
	<label for="color_vice-president">color_vice-president</label><input type="text" name="color_vice-president" id="color_vice-president" required><br>

	<input type="submit" name="add_admin_sport" class="btn" value="เพิ่มผู้ใช้"><br>
</form>
<?php 
if ($_POST['add_admin_sport']) {
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];

		$sport_name = $_POST['sport_name'];
		$sport_type = $_POST['sport_type'];
		$sport_degree = $_POST['sport_degree'];
		$sport_gender = $_POST['sport_gender'];
		$sport_amount = $_POST['sport_amount'];
		$sport_note = $_POST['sport_note'];

		$sql_find_add = "SELECT * FROM `users` WHERE `user_username` = '$user_username'";
		$result_find_add_admin = mysqli_query($conn, $sql_find_add);
		if (mysqli_num_rows($result_find_add_admin) == 0) {
			$sql_find_user = "SELECT * FROM `users` WHERE `user_username` = '$user_username' AND `user_password` = '$user_password'";
			$result_find_user = mysqli_query($conn, $sql_find_user);
			$row_user = mysqli_fetch_assoc($result_find_user);
			

			$sql_add_admin = "INSERT INTO `users` (`user_name`, `user_username`, `user_password`, `user_role`) VALUES ('$user_name', '$user_username', '$user_password', 'admin_sport')";
			$result_add_admin = mysqli_query($conn, $sql_add_admin);
			if ($result_add_admin) {
				$sql_update_sport = "UPDATE `sports` SET `sport_name`='$sport_name',`sport_type`='$sport_type',`sport_degree`='$sport_degree',`sport_gender`='$sport_gender',`sport_amount`='$sport_amount',`sport_note`='$sport_note' WHERE `sport_id`= '$sport_id'";
				if (mysqli_query($conn, $sql_update_sport)) {
					echo "Success";
					echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
				}else{
					echo "Fall";
				}

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
