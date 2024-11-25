 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
<?php 
	$id_player = $_GET['id_player'] ;
	$sql_find_edit_players = "SELECT * FROM `players` WHERE `id_player` = '$id_player'";
	$result_find_edit_players = mysqli_query($conn, $sql_find_edit_players);
	if (mysqli_num_rows($result_find_edit_players) > 0 ) {
		$row_find_edit_players = mysqli_fetch_assoc($result_find_edit_players);
		$player_id = $row_find_edit_players['player_id'];
	}else{
		echo  $_GET['id_player'];
		echo "not found";
	}
?>
<center>
<form method="post" action="" class="edit_sport_all">
	<label for="player_id">รหัสนักเรียน:</label><input type="text" class="box_sport" name="player_id" id="player_id" value="<?php echo $row_find_edit_players['player_id']; ?>"><br>

	<label for="player_title">คำนำหน้า:</label>
	<select class="box_sport" name="player_title" id="player_title" required>
		<option value="">เลือก</option>
		<option value="เด็กชาย" <?php if ($row_find_edit_players['player_title'] == "เด็กชาย") {echo "selected";} ?>>เด็กชาย</option>
		<option value="เด็กหญิง" <?php if ($row_find_edit_players['player_title'] == "เด็กหญิง") {echo "selected";} ?>>เด็กหญิง</option>
		<option value="นาย" <?php if ($row_find_edit_players['player_title'] == "นาย") {echo "selected";} ?>>นาย</option>
		<option value="นางสาว" <?php if ($row_find_edit_players['player_title'] == "นางสาว") {echo "selected";} ?>>นางสาว</option>
	</select><br>

	<label for="player_name">ชื่อ:</label><input type="text" class="box_sport" name="player_name" id="player_name" value="<?php echo $row_find_edit_players['player_name']; ?>"><br>
	
	<label for="player_sirname">นามสกุล:</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname" value="<?php echo $row_find_edit_players['player_sirname']; ?>"><br>




	<label for="player_class">ชั้น:</label>
		<select class="select_box" name="player_class" id="player_class" required>
		<option value="">เลือกชั้น</option>
		<option value="1" <?php if ($row_find_edit_players['player_class'] == "1") {echo "selected";} ?>>1</option>
		<option value="2" <?php if ($row_find_edit_players['player_class'] == "2") {echo "selected";} ?>>2</option>
		<option value="3" <?php if ($row_find_edit_players['player_class'] == "3") {echo "selected";} ?>>3</option>
		<option value="4" <?php if ($row_find_edit_players['player_class'] == "4") {echo "selected";} ?>>4</option>
		<option value="5" <?php if ($row_find_edit_players['player_class'] == "5") {echo "selected";} ?>>5</option>
		<option value="6" <?php if ($row_find_edit_players['player_class'] == "6") {echo "selected";} ?>>6</option>
	</select><br>

	<label for="player_room">ห้อง :</label>
		<select class="select_box" name="player_room" id="player_room" required>
		<option value="">เลือกห้อง</option>
		<option value="1" <?php if ($row_find_edit_players['player_room'] == "1") {echo "selected";} ?>>1</option>
		<option value="2" <?php if ($row_find_edit_players['player_room'] == "2") {echo "selected";} ?>>2</option>
		<option value="3" <?php if ($row_find_edit_players['player_room'] == "3") {echo "selected";} ?>>3</option>
		<option value="4" <?php if ($row_find_edit_players['player_room'] == "4") {echo "selected";} ?>>4</option>
		<option value="5" <?php if ($row_find_edit_players['player_room'] == "5") {echo "selected";} ?>>5</option>
		<option value="6" <?php if ($row_find_edit_players['player_room'] == "6") {echo "selected";} ?>>6</option>
		<option value="7" <?php if ($row_find_edit_players['player_room'] == "7") {echo "selected";} ?>>7</option>
		<option value="8" <?php if ($row_find_edit_players['player_room'] == "8") {echo "selected";} ?>>8</option>
		<option value="9" <?php if ($row_find_edit_players['player_room'] == "9") {echo "selected";} ?>>9</option>
        <option value="10" <?php if ($row_find_edit_players['player_room'] == "10") {echo "selected";} ?>>10</option>
        <option value="11" <?php if ($row_find_edit_players['player_room'] == "11") {echo "selected";} ?>>11</option>
        <option value="12" <?php if ($row_find_edit_players['player_room'] == "12") {echo "selected";} ?>>12</option>
		<option value="13" <?php if ($row_find_edit_players['player_room'] == "13") {echo "selected";} ?>>13</option>
        <option value="14" <?php if ($row_find_edit_players['player_room'] == "14") {echo "selected";} ?>>14</option>
        <option value="15" <?php if ($row_find_edit_players['player_room'] == "15") {echo "selected";} ?>>15</option>
        <option value="16" <?php if ($row_find_edit_players['player_room'] == "16") {echo "selected";} ?>>16</option>
		<option value="17" <?php if ($row_find_edit_players['player_room'] == "17") {echo "selected";} ?>>17</option>
	</select>
	<br>
	<!-- <label for="player_gender">เพศ:</label><input type="text" class="box_sport" name="player_gender" id="player_gender" value="<?php //echo $row_find_edit_players['player_gender']; ?>"><br> -->


	 <label for="player_sport_id">รายการกีฬา:</label>

  		<select name="player_sport_id" style="margin-bottom: 15px;" class="select_box">
          <option value="">เลือกรายการสี</option>
          <?php 
            sport_list($conn);
          ?>
  			</select>


	<input type="submit" name="edit_player" class="btn">
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
		// $player_gender = $_POST['player_gender'];
		$player_color_id = $_SESSION['user_id'];
		$player_sport_id = $_POST['player_sport_id'];
		
		unset($_POST);
		$sql_update_player = "UPDATE `players` SET `player_id`='$player_id',`player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `id_player`='$id_player'";
		if (mysqli_query($conn, $sql_update_player)) {
			echo "เพิ่มสำเร็จ";
			echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$player_sport_id' />";
		}else{
			echo "ล้มเหล็ว";
		}
	}
?>
</body>
