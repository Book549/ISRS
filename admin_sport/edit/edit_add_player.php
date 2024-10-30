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
	<label for="player_id">player_id:</label><input type="text" name="player_id" id="player_id" value="<?php echo $row_find_edit_players['player_id']; ?>"><br>
	<label for="player_title">player_title:</label><input type="text" name="player_title" id="player_title" value="<?php echo $row_find_edit_players['player_title']; ?>"><br>
	<label for="player_name">player_name:</label><input type="text" name="player_name" id="player_name" value="<?php echo $row_find_edit_players['player_name']; ?>"><br>
	<label for="player_mid_name">player_mid_name:</label><input type="text" name="player_mid_name" id="player_mid_name" value="<?php echo $row_find_edit_players['player_mid_name']; ?>"><br>
	<label for="player_sirname">player_sirname:</label><input type="text" name="player_sirname" id="player_sirname" value="<?php echo $row_find_edit_players['player_sirname']; ?>"><br>
	<label for="player_class">player_class:</label><input type="text" name="player_class" id="player_class" value="<?php echo $row_find_edit_players['player_class']; ?>"><br>
	<label for="player_room">player_room:</label><input type="text" name="player_room" id="player_room" value="<?php echo $row_find_edit_players['player_room']; ?>"><br>
	<label for="player_gender">player_gender:</label><input type="text" name="player_gender" id="player_gender" value="<?php echo $row_find_edit_players['player_gender']; ?>"><br>
	
	<label for="player_sport_id">player_sport_id:</label><input type="text" name="player_sport_id" id="player_sport_id" value="<?php echo $row_find_edit_players['player_sport_id']; ?>"><br>

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
		$player_color_id = $_SESSION['user_id'];
		$player_sport_id = $_POST['player_sport_id'];
		
		unset($_POST);
		$sql_update_player = "UPDATE `players` SET `player_id`='$player_id',`player_title`='$player_title',`player_name`='$player_name',`player_mid_name`='$player_mid_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_gender`='$player_gender',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `player_id`='$player_id'";
		if (mysqli_query($conn, $sql_update_player)) {
			echo "Success";
			header("Location: ?page=add_player&sub_page=view");
		}else{
			echo "Fall";
		}
	}
?>
</body>