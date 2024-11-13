 <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<center>
<form method="post" action="" class="add_sport_all">
	<label for="player_id">รหัสนักเรียน:</label><input type="text" class="box_sport" name="player_id" id="player_id" value="<?php echo $row_find_edit_players['player_id']; ?>"><br>
	<label for="player_title">คำนำหน้า:</label><input type="text" class="box_sport" name="player_title" id="player_title" value="<?php echo $row_find_edit_players['player_title']; ?>"><br>
	<label for="player_name">ชื่อ:</label><input type="text" class="box_sport" name="player_name" id="player_name" value="<?php echo $row_find_edit_players['player_name']; ?>"><br>
	
	<label for="player_sirname">นามสกุล:</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname" value="<?php echo $row_find_edit_players['player_sirname']; ?>"><br>
	<label for="player_class">ชั้น:</label><input type="text" class="box_sport" name="player_class" id="player_class" value="<?php echo $row_find_edit_players['player_class']; ?>"><br>
	<label for="player_room">ห้อง:</label><input type="text" class="box_sport" name="player_room" id="player_room" value="<?php echo $row_find_edit_players['player_room']; ?>"><br>
	<label for="player_gender">เพศ:</label><input type="text" class="box_sport" name="player_gender" id="player_gender" value="<?php echo $row_find_edit_players['player_gender']; ?>"><br>
	
	<label for="player_sport_id">รหัสกีฬา:</label><input type="text" class="box_sport" name="player_sport_id" id="player_sport_id" value="<?php echo $row_find_edit_players['player_sport_id']; ?>"><br>
	<center>
	<input type="submit" name="edit_player" class="btn">
	</center>
</form>
	</center>
<?php 
	if ($_POST['edit_player']) {
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];		
        $player_room = $_POST['player_room'];
		$player_gender = $_POST['player_gender'];
		$player_color_id = $_SESSION['user_id'];
		$player_sport_id = $_POST['player_sport_id'];
		
		unset($_POST);
		$sql_update_player = "UPDATE `players` SET `player_id`='$player_id',`player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_gender`='$player_gender',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `player_id`='$player_id'";
		if (mysqli_query($conn, $sql_update_player)) {
			echo "เพิ่มสำเร็จ";
			echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$player_sport_id' />";
		}else{
			echo "ล้มเหล็ว";
		}
	}
?>
</body>
