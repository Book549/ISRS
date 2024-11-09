<body>
<?php
	$user_id = $_SESSION['user_id'];
	$sql_view_admin_sport = "SELECT * FROM `colors` WHERE `color_id_user` = '$user_id'";
	$result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
	if (mysqli_num_rows($result_view_admin_sport) == 1) {
		$row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport);
	}else{
		echo "some thing is wrong..";
	}
?>
<form method="post" action="">
	<label for="color_name">ชื่อคณะสี</label><input type="text" name="color_name" id="color_name" value="<?php echo $row_view_admin_sport['color_name']; ?>" required><br>
	<label for="color_color">คณะสี</label><input type="text" name="color_color" id="color_color" value="<?php echo $row_view_admin_sport['color_color']; ?>" required><br>
	<label for="color_president">ประธานสี</label><input type="text" name="color_president" id="color_president" value="<?php echo $row_view_admin_sport['color_president']; ?>" required><br>
	<label for="color_vice-president">รองประธานสี</label><input type="text" name="color_vice-president" id="color_vice-president" value="<?php echo $row_view_admin_sport['color_vice-president']; ?>" required><br>
	<input type="submit" name="edit"><br>
</form>
<?php 
	if ($_POST['edit']) {
		//$color_id = $_POST['color_id'];
		$color_name = $_POST['color_name'];
		$color_color = $_POST['color_color'];
		$color_president = $_POST['color_president'];
		$color_vice_president = $_POST['color_vice-president']; 
		//$color_id_user = $_POST['color_id_user'];
		$sql_edit_profile = "UPDATE `colors` SET `color_name`='$color_name',`color_color`='$color_color',`color_president`='$color_president',`color_vice-president`='$color_vice_president',`color_id_user`='$user_id' WHERE `color_id_user` = '$user_id'";
		if (mysqli_query($conn, $sql_edit_profile)) {
			echo "ok";
			echo "<meta http-equiv='refresh' content='0;url=admin_sport.php?page=profile&sub_page=view' />";
		}else{
			echo "err";
		}

	}

?>
</body>