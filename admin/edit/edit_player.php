<body>
<?php 
	$id_edit_players = $_GET['player_id'] ;
	$sql_find_edit_players = "SELECT * FROM `players` WHERE `player_id` = '$id_edit_players'";
	$result_find_edit_players = mysqli_query($conn, $sql_find_edit_players);
	if (mysqli_num_rows($result_find_edit_players) > 0 ) {
		$row_find_edit_players = mysqli_fetch_assoc($result_find_edit_players);
		$player_id = $row_find_edit_players['player_id'];
	}else{
		echo  $_GET['player_id'];
		echo "not found";
	}
?>
<form method="post" action="">
	<label for="player_name">player_name:</label><input type="text" name="player_name" id="player_name" value="<?php echo $row_find_edit_players['player_id']; ?>"><br>
	<label for="player_type">player_type:</label><input type="text" name="player_type" id="player_type" value="<?php echo $row_find_edit_players['player_type']; ?>"><br>
	<label for="player_gender">player_gender:</label><input type="text" name="player_gender" id="player_gender" value="<?php echo $row_find_edit_players['player_gender']; ?>"><br>
	<label for="player_degree">player_degree:</label><input type="text" name="player_degree" id="player_degree" value="<?php echo $row_find_edit_players['player_degree']; ?>"><br>
	<label for="player_amount">player_amount:</label><input type="text" name="player_amount" id="player_amount" value="<?php echo $row_find_edit_players['player_amount']; ?>"><br>
	<label for="player_note">player_note:</label><input type="text" name="player_note" id="player_note" value="<?php echo $row_find_edit_players['player_note']; ?>"><br>
	<label for="player_note">player_note:</label><input type="text" name="player_note" id="player_note" value="<?php echo $row_find_edit_players['player_note']; ?>"><br>
	<label for="player_note">player_note:</label><input type="text" name="player_note" id="player_note" value="<?php echo $row_find_edit_players['player_note']; ?>"><br>
	<label for="player_note">player_note:</label><input type="text" name="player_note" id="player_note" value="<?php echo $row_find_edit_players['player_note']; ?>"><br>

	<input type="submit" name="edit_player">
<?php 
	if ($_POST['edit_player']) {
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		$player_mid_name = $_POST['player_mid_name'];
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];
		$player_room = $_POST['player_room'];
		$player_gender = $_POST['player_gender'];
		$player_color_id = $_POST['player_color_id'];

		unset($_POST);
		$sql_update_player = "UPDATE `players` SET `player_name`='$player_name',`player_type`='$player_type',`player_degree`='$player_degree',`player_gender`='$player_gender',`player_amount`='$player_amount',`player_note`='$player_note' WHERE `player_id`= '$player_id'";
		if (mysqli_query($conn, $sql_update_player)) {
			echo "Success";
			header("Location: ?page=player&sub_page=view");
		}else{
			echo "Fall";
		}
	}
?>
</body>