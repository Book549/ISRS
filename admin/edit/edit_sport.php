<body>
<?php 
	$id_edit_sports = $_GET['sport_id'] ;
	$sql_find_edit_users = "SELECT * FROM `sports` WHERE `sport_id` = '$id_edit_sports'";
	$result_find_edit_sports = mysqli_query($conn, $sql_find_edit_users);
	if (mysqli_num_rows($result_find_edit_sports) > 0 ) {
		$row_find_edit_users = mysqli_fetch_assoc($result_find_edit_sports);
		$sport_id = $row_find_edit_users['sport_id'];
	}else{
		echo  $_GET['sport_id'];
		echo "not found";
	}
?>

<center>
<form method="post" action="" class="add_sport_all">
	<label for="sport_name">sport_name:</label><input type="text" class="box_sport" name="sport_name" id="sport_name" value="<?php echo $row_find_edit_users['sport_name']; ?>"><br>
	<label for="sport_type">sport_type:</label><input type="text" class="box_sport" name="sport_type" id="sport_type" value="<?php echo $row_find_edit_users['sport_type']; ?>"><br>

	<label for="sport_gender">เพศ:</label>
	<select class="select_box" name="sport_gender" id="sport_gender" required>
		<option value="" <?php if ($row_find_edit_users['sport_gender'] == "") {echo "selected";} ?>>เลือกเพศ</option>
		<option value="ชาย" <?php if ($row_find_edit_users['sport_gender'] == "ชาย") {echo "selected";} ?>>ชาย</option>
		<option value="หญิง" <?php if ($row_find_edit_users['sport_gender'] == "หญิง") {echo "selected";} ?>>หญิง</option>
		<option value="ผสม" <?php if ($row_find_edit_users['sport_gender'] == "ผสม") {echo "selected";} ?>>ผสม</option>
		<option value="อื่นๆ" <?php if ($row_find_edit_users['sport_gender'] == "อื่นๆ") {echo "selected";} ?>>อื่นๆ</option>
	</select>
	<br>
	<label for="sport_degree">ระดับชัั้น:</label>
	<select class="select_box" name="sport_degree" id="sport_degree" required>
		<option value="" <?php if ($row_find_edit_users['sport_degree'] == "") {echo "selected";} ?>>เลือกระดับชั้น</option>
		<option value="มัธยมต้น" <?php if ($row_find_edit_users['sport_degree'] == "มัธยมต้น") {echo "selected";} ?>>มัธยมต้น</option>
		<option value="มัธยมปลาย" <?php if ($row_find_edit_users['sport_degree'] == "มัธยมปลาย") {echo "selected";} ?>>มัธยมปลาย</option>
		<option value="ผสม" <?php if ($row_find_edit_users['sport_degree'] == "ผสม") {echo "selected";} ?>>ผสม</option>
		<option value="อื่นๆ" <?php if ($row_find_edit_users['sport_degree'] == "อื่นๆ") {echo "selected";} ?>>อื่นๆ</option>
	</select>
	<br>

	<label for="sport_amount">จำนวนนักกีฬา:</label><input type="text" class="box_sport" name="sport_amount" id="sport_amount" value="<?php echo $row_find_edit_users['sport_amount']; ?>"><br>
	<label for="sport_note">หมายเหตุ:</label><input type="text" class="box_sport" name="sport_note" id="sport_note"  value="<?php echo $row_find_edit_users['sport_note']; ?>"><br>
	<center>
	<input type="submit" name="edit_sport" class="btn">
	</center>
</form>



<?php 
	if ($_POST['edit_sport']) {
		$sport_name = $_POST['sport_name'];
		$sport_type = $_POST['sport_type'];
		$sport_degree = $_POST['sport_degree'];
		$sport_gender = $_POST['sport_gender'];
		$sport_amount = $_POST['sport_amount'];
		$sport_note = $_POST['sport_note'];
		unset($_POST);
		$sql_update_sport = "UPDATE `sports` SET `sport_name`='$sport_name',`sport_type`='$sport_type',`sport_degree`='$sport_degree',`sport_gender`='$sport_gender',`sport_amount`='$sport_amount',`sport_note`='$sport_note' WHERE `sport_id`= '$sport_id'";
		if (mysqli_query($conn, $sql_update_sport)) {
			echo "Success";
			echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
		}else{
			echo "Fall";
		}
	}
?>
</body>