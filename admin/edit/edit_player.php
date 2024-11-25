<body>
<?php 
	$id_edit_players = $_GET['id_player'] ;
	$sql_find_edit_players = "SELECT * FROM `players` WHERE `id_player` = '$id_edit_players'";
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
	<label for="player_id">รหัสประจำตัว :</label><input type="text" class="box_sport"  name="player_id" id="player_id" value="<?php echo "$player_id"; ?>" ><br>
	
	<br>
<label for="player_title">คำนำหน้า:</label>
	<select class="box_sport" name="player_title" id="player_title" required>
		<option value="">เลือก</option>
		<option value="เด็กชาย" <?php if ($row_find_edit_players['player_title'] == "เด็กชาย") {echo "selected";} ?>>เด็กชาย</option>
		<option value="เด็กหญิง" <?php if ($row_find_edit_players['player_title'] == "เด็กหญิง") {echo "selected";} ?>>เด็กหญิง</option>
		<option value="นาย" <?php if ($row_find_edit_players['player_title'] == "นาย") {echo "selected";} ?>>นาย</option>
		<option value="นางสาว" <?php if ($row_find_edit_players['player_title'] == "นางสาว") {echo "selected";} ?>>นางสาว</option>
	</select><br>
	<label for="player_name">ชื่อจริง :</label><input type="text" class="box_sport" name="player_name" id="player_name" value="<?php echo $row_find_edit_players['player_name']; ?>"><br>
	
	<label for="player_sirname">นามสกุล :</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname" value="<?php echo $row_find_edit_players['player_sirname']; ?>"><br>
	<label for="player_class">ชั้น :</label><input type="text" class="box_sport" name="player_class" id="player_class" value="<?php echo $row_find_edit_players['player_class']; ?>"><br>
	<label for="player_room">ห้อง :</label><input type="text" class="box_sport" name="player_room" id="player_room" value="<?php echo $row_find_edit_players['player_room']; ?>"><br>

	<label for="player_color_id">คณะสี :</label>

  		<select name="player_color_id" id="player_color_id" style="margin-bottom: 15px;" class="select_box" required>
          <option value="<?php echo $row_find_edit_players['player_color_id']; ?>" selected><?php echo color_color($row_find_edit_players['player_color_id'], $conn); ?></option>
        <?php 
            $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors` WHERE `color_id_user` != ".$row_find_edit_players['player_color_id'];
            $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
            if (mysqli_num_rows($result_find_colors_name) > 0) {
                while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                  echo "<option value=\"".$row_find_colors_name['color_id_user']."\">".$row_find_colors_name['color_color']."</option>";
                }
            }  
           ?>
        </select>


  			<label for="player_sport_id">รายการกีฬา:</label>
  			<select name="player_sport_id" id="player_sport_id" style="margin-bottom: 25px;" class="select_box" required>
          <option value="<?php echo $row_find_edit_players['player_sport_id']; ?>" selected><?php echo sport_name($row_find_edit_players['player_sport_id'], $conn); ?></option>
          <?php 
            $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports` WHERE `sport_id` != ".$row_find_edit_players['player_sport_id'];
            $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
            if (mysqli_num_rows($result_find_sports_name) > 0) {
                while ($row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name)) {
                  echo "<option value=\"".$row_find_sports_name['sport_id']."\">".$row_find_sports_name['sport_name']."</option>";
                }
            }  
           ?>
  			</select><br>


	<center>
	<input type="submit" name="edit_player" class="btn">
	</center>
</form>

<div>
	<h2>player_color_id</h2><br>
	<span style="font-size: 20px; margin-bottom: 15px;">สีแดง => 4</span><br>
	<span style="font-size: 20px; margin-bottom: 15px;">สีฟ้า => 5</span><br>
	<span style="font-size: 20px; margin-bottom: 15px;">สีเขียว => 6</span><br>
	<span style="font-size: 20px; margin-bottom: 15px;">สีเหลือง => 7</span><br>
	<span style="font-size: 20px; margin-bottom: 15px;">สีชมพู => 8</span><br>
</div>

<div>
	<h2>player_sport_id</h2><br>
	<img src="pic/sport_id.jpg">
</center>
<?php 
	if ($_POST['edit_player']) {
		
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];		
        $player_room = $_POST['player_room'];
		// $player_gender = $_POST['player_gender'];
		$player_color_id = $_POST['player_color_id'];
		$player_sport_id = $_POST['player_sport_id'];
		
		unset($_POST);
		$sql_update_player = "UPDATE `players` SET `player_id`='$player_id',`player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `id_player`='$id_edit_players'";
		if (mysqli_query($conn, $sql_update_player)) {
			echo "Success";
			echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
		}else{
			echo "Fall";
		}
	}
?>
</body>
