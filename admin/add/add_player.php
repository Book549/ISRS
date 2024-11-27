<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
<form method="post" class="add_sport_all">
		<label for="player_id">รหัสนักเรียน:</label>
		<input type="text" class="box_sport" name="player_id" id="player_id" oninput="validateInput(this)" maxlength="5" required inputmode="numeric">
		<script>
		  function validateInput(input) {
		    // Remove any non-integer characters and limit the input to 5 digits
		    input.value = input.value.replace(/[^0-9]/g, '').slice(0, 5);
		  }
		</script>

		<br>
		<label for="player_title">คำนำหน้า:</label>
		<select class="select_box" name="player_title" id="player_title" required>
			<option value="" disabled selected>เลือก</option>
			<option value="เด็กชาย">เด็กชาย</option>
			<option value="เด็กหญิง">เด็กหญิง</option>
			<option value="นาย">นาย</option>
			<option value="นางสาว">นางสาว</option>
		</select><br>
	<label for="player_name">ชื่อจริง:</label><input type="text" class="box_sport" name="player_name" id="player_name"><br>
	
	<label for="player_sirname">นามสกุล:</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname"><br>
		
		<label for="player_class">ชั้น :</label>
		<select class="select_box" name="player_class" id="player_class" required>
		<option value="" disabled selected>เลือกชั้น</option>
		<option value="1">ม.1</option>
		<option value="2">ม.2</option>
		<option value="3">ม.3</option>
		<option value="4">ม.4</option>
		<option value="5">ม.5</option>
		<option value="6">ม.6</option>
		<option value="CIP">CIP</option>
	</select>
	<br>

		<label for="player_room">ห้อง :</label>
		<select class="select_box" name="player_room" id="player_room" required>
		<option value="" disabled selected>เลือกห้อง</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
		<option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
		<option value="17">17</option>
		<option value="Y.8">Y.8</option>
		<option value="Y.9">Y.9</option>
		<option value="Y.10">Y.10</option>
		<option value="Y.11">Y.11</option>
		<option value="Y.12">Y.12</option>
	</select>
	<br>
	<!-- <label for="player_gender">เพศ:</label><input type="text" class="box_sport" name="player_gender" id="player_gender"><br> --> 
	<label for="player_color_id">คณะสี :</label>
  		<select name="player_color_id" id="player_color_id" style="margin-bottom: 15px;" class="select_box" required>
          <option value="" disabled selected>เลือกรายการสี</option>
          <?php 
            sport_list($conn);
          ?>
  			</select><br>

	<label for="player_sport_id">player_sport_id:</label>
	<select name="player_sport_id" id="player_sport_id" style="margin-bottom: 25px;" class="select_box" required>
          <option value="" disabled selected>เลือกรายการกีฬา</option>
          <?php 
            $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports` ".$sport;
            $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
            if (mysqli_num_rows($result_find_sports_name) > 0) {
                while ($row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name)) {
                  echo "<option value=\"".$row_find_sports_name['sport_id']."\">".$row_find_sports_name['sport_name']."</option>";
                }
            }  
           ?>
  			</select><br>
	<input type="submit" name="add_player" class="btn">
</form>
	
<?php 
if (isset($_GET['resuit'])) {
	switch ($_GET['resuit']) {
	case 'Yes':
		$id_player = $_GET['id_player'];
	
		$player_id = $_GET['player_id'];
		$player_title = $_GET['player_title'];
		$player_name = $_GET['player_name'];
	
		$player_sirname = $_GET['player_sirname'];
		$player_class = $_GET['player_class'];		
		$player_room = $_GET['player_room'];
		// $player_gender = $_GET['player_gender'];
		$player_color_id = $_GET['player_color_id'];
		$player_sport_id = $_GET['player_sport_id'];
		$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `id_player`='$id_player'";
			$result_update_player = mysqli_query($conn, $sql_update_player);
		if ($result_update_player) {
			echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
			echo "Success";
			echo $id_player;

		}else{
			echo "Fall";
		}
		break;
	
	case 'No':
		$id_player = $_GET['id_player'];
	
		$player_id = $_GET['player_id'];
		$player_title = $_GET['player_title'];
		$player_name = $_GET['player_name'];
	
		$player_sirname = $_GET['player_sirname'];
		$player_class = $_GET['player_class'];		
		$player_room = $_GET['player_room'];
		// $player_gender = $_GET['player_gender'];
		$player_color_id = $_GET['player_color_id'];
		$player_sport_id = $_GET['player_sport_id'];
		$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`,  `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name',  '$player_sirname', '$player_class', '$player_room', '$player_color_id', '$player_sport_id')";
		$result_add_player = mysqli_query($conn, $sql_add_player);
		if ($result_add_player) {
			echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
			unset($_POST);
			#echo "Success";
		}else{
			#echo "Fall";
		}
		//echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
		break;

	default:
		echo "err bad url";
		break;
}
}
	if (isset($_POST['add_player'])) {
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];		
		$player_room = $_POST['player_room'];
		// $player_gender = $_POST['player_gender'];
		$player_color_id = $_POST['player_color_id'];
		$player_sport_id = $_POST['player_sport_id'];
		$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id'";
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`,  `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name',  '$player_sirname', '$player_class', '$player_room', '$player_color_id', '$player_sport_id')";
			$result_add_player = mysqli_query($conn, $sql_add_player);
			if ($result_add_player) {
				echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
				unset($_POST);
				#echo "Success";
			}else{
				#echo "Fall";
			}
		}elseif (mysqli_num_rows($result_find_add_player) > 0) {
				$posttoget = "";
				foreach ($_POST as $key => $value) {
					$posttoget = $posttoget."&$key=$value";
				}
				#echo $posttoget."<br>";
				echo "duplicate player do you want to replace?";
				echo "<a href='?page=player&sub_page=add&resuit=Yes$posttoget'>Yes</a><a href='?page=player&sub_page=add&resuit=No$posttoget'>No</a>";
				unset($_POST);

		}
		$result_find_add_player = mysqli_query($conn, $find_same_player);
			while ($row_find_player = mysqli_fetch_assoc($result_find_add_player)) {
				foreach ($row_find_player as $key => $value) {
					echo "$key => $value<br>";
				}
			}
	}
	
		

 ?>
