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
<form method="post" action="">
	<label for="sport_name">sport_name:</label><input type="text" name="sport_name" id="sport_name" value="<?php echo $row_find_edit_users['sport_id']; ?>"><br>
	<label for="sport_type">sport_type:</label><input type="text" name="sport_type" id="sport_type" value="<?php echo $row_find_edit_users['sport_type']; ?>"><br>
	<label for="sport_gender">sport_gender:</label><input type="text" name="sport_gender" id="sport_gender" value="<?php echo $row_find_edit_users['sport_gender']; ?>"><br>
	<label for="sport_degree">sport_degree:</label><input type="text" name="sport_degree" id="sport_degree" value="<?php echo $row_find_edit_users['sport_degree']; ?>"><br>
	<label for="sport_amount">sport_amount:</label><input type="text" name="sport_amount" id="sport_amount" value="<?php echo $row_find_edit_users['sport_amount']; ?>"><br>
	<label for="sport_note">sport_note:</label><input type="text" name="sport_note" id="sport_note" value="<?php echo $row_find_edit_users['sport_note']; ?>"><br>
	<input type="submit" name="edit_sport">
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
			header("Location: ?page=sport&sub_page=view");
		}else{
			echo "Fall";
		}
	}
?>
</body>