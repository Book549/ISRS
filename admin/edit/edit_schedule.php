<body>
<?php 
	$id_edit_schedule = $_GET['schedule_id'] ;
	$sql_find_edit_schedule = "SELECT * FROM `schedule` WHERE `schedule_id` = '$id_edit_schedule'";
	$result_find_edit_schedule = mysqli_query($conn, $sql_find_edit_schedule);
	if (mysqli_num_rows($result_find_edit_schedule) > 0 ) {
		$row_find_edit_schedule = mysqli_fetch_assoc($result_find_edit_schedule);
		$schedule_id = $row_find_edit_schedule['schedule_id'];
	}else{
		echo  $_GET['schedule_id'];
		echo "not found";
	}
?>

<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <center>
<form method="post" class="add_sport_all">
	<label for="player_sport_id">รายการกีฬา:</label>


 	<select name="schedule_sport_id" id="player_sport_id" style="margin-bottom: 25px;" class="select_box" required>
          <option value="<?php echo $row_find_edit_schedule['schedule_sport_id']; ?>" selected><?php echo sport_name($row_find_edit_schedule['schedule_sport_id'], $conn); ?></option>
          <?php 
            $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports` WHERE `sport_id` != '".$row_find_edit_schedule['schedule_sport_id']."'";
            $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
            if (mysqli_num_rows($result_find_sports_name) > 0) {
                while ($row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name)) {
                  echo "<option value=\"".$row_find_sports_name['sport_id']."\">".$row_find_sports_name['sport_name']."</option>";
                }
            }  
           ?>
  			</select>
		<br>

		<label for="schedule_rival_one">คู่แรก :</label>
    <select class="select_box" name="schedule_rival_one" id="schedule_rival_one"style="margin-bottom: 15px;" class="select_box"  required>
					<?php
					$sql_find_color_color = "SELECT `color_color` FROM `colors` WHERE `color_color` = '".$row_find_edit_schedule['schedule_rival_one']."'";
					$result_find_colors_name = mysqli_query($conn, $sql_find_color_color);


					if (mysqli_num_rows($result_find_colors_name) > 0) {
					    while ($row_colors = mysqli_fetch_assoc($result_find_colors_name)) {
					    		echo "<option value=\"" . $row_find_edit_schedule['schedule_rival_one'] . "\" selected>";
									echo $row_find_edit_schedule['schedule_rival_one'];
									echo "</option>";
					    }
					}
					?>
					        <?php 
            $sql_find_color_color_AA = "SELECT `color_color` FROM `colors` WHERE `color_color` != '".$row_find_edit_schedule['schedule_rival_one']."'";
            $result_find_colors_name_AA = mysqli_query($conn, $sql_find_color_color_AA);
            if (mysqli_num_rows($result_find_colors_name_AA) > 0) {
                while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name_AA)) {
                  echo "<option value=\"".$row_find_colors_name['color_color']."\">".$row_find_colors_name['color_color']."</option>";
                }
            }  
           ?>

					<?php
					for ($sequence_schedule_rival_one = 1; $sequence_schedule_rival_one <= 56; $sequence_schedule_rival_one++) {
					    $current_value = "คู่ที่ " . $sequence_schedule_rival_one;
					    $selected = ($current_value == $row_find_edit_schedule['schedule_rival_one']) ? "selected" : "";
					    echo "<option value=\"$current_value\" $selected>$current_value</option>";
					}
					?>

  			</select><br>





	<label for="schedule_rival_two"> VS </label><br>
		<label for="schedule_rival_two">คู่สอง :</label>
    <select class="select_box" name="schedule_rival_two" id="schedule_rival_two" style="margin-bottom: 15px;" class="select_box" required>
					<?php
					$sql_find_color_color = "SELECT `color_color` FROM `colors` WHERE `color_color` = '".$row_find_edit_schedule['schedule_rival_two']."'";
					$result_find_colors_name = mysqli_query($conn, $sql_find_color_color);


					if (mysqli_num_rows($result_find_colors_name) > 0) {
					    while ($row_colors = mysqli_fetch_assoc($result_find_colors_name)) {
					    		echo "<option value=\"" . $row_find_edit_schedule['schedule_rival_two'] . "\" selected>";
									echo $row_find_edit_schedule['schedule_rival_two'];
									echo "</option>";
					    }
					}
					?>
					        <?php 
            $sql_find_color_color_BA = "SELECT `color_color` FROM `colors` WHERE `color_color` != '".$row_find_edit_schedule['schedule_rival_two']."'";
            $result_find_colors_name_BA = mysqli_query($conn, $sql_find_color_color_BA);
            if (mysqli_num_rows($result_find_colors_name_BA) > 0) {
                while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name_BA)) {
                  echo "<option value=\"".$row_find_colors_name['color_color']."\">".$row_find_colors_name['color_color']."</option>";
                }
            }  
           ?>

					<?php
					for ($sequence_schedule_rival_two = 1; $sequence_schedule_rival_two <= 56; $sequence_schedule_rival_two++) {
					    $current_value = "คู่ที่ " . $sequence_schedule_rival_two;
					    $selected = ($current_value == $row_find_edit_schedule['schedule_rival_two']) ? "selected" : "";
					    echo "<option value=\"$current_value\" $selected>$current_value</option>";
					}
					?>
  			</select><br>


	<label for="schedule_date">วันที่:</label><input type="date" class="box_sport" name="schedule_date" id="schedule_date" value="<?php echo $row_find_edit_schedule['schedule_date']; ?>"><br>
	<label for="schedule_time">เวลา :</label><input type="time" class="box_sport" name="schedule_time" id="schedule_time" value="<?php echo $row_find_edit_schedule['schedule_time']; ?>"><br>
    <label for="schedule_venue">สถานที่ :</label>

	<select class="select_box" name="schedule_venue" id="schedule_venue" required>
		<option value="" disabled <?php if ($row_find_edit_schedule['schedule_venue'] == "") {echo "selected";} ?> >เลือกสถานที่แข่ง</option>
		<option value="สนามวอลเลย์บอล" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามวอลเลย์บอล") {echo "selected";} ?>>สนามวอลเลย์บอล</option>
		<option value="สนามบาสเก็ตบอล" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามบาสเก็ตบอล") {echo "selected";} ?>>สนามบาสเก็ตบอล</option>
		<option value="สนามเปตอง" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามเปตอง") {echo "selected";} ?>>สนามเปตอง</option>
		<option value="สนามฟุตบอล" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามฟุตบอล") {echo "selected";} ?>>สนามฟุตบอล</option>
		<option value="สนามฟุตซอล" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามฟุตซอล") {echo "selected";} ?>>สนามฟุตซอล</option>
		<option value="สนามเทเบิลเทนนิส" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามเทเบิลเทนนิส") {echo "selected";} ?>>สนามเทเบิลเทนนิส</option>
		<option value="สนามแบดมินตัน" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามแบดมินตัน") {echo "selected";} ?>>สนามแบดมินตัน</option>
		<option value="สนามแฮนด์บอล" <?php if ($row_find_edit_schedule['schedule_venue'] == "สนามแฮนด์บอล") {echo "selected";} ?>>สนามแฮนด์บอล</option>
		<option value="กองเชียร์สีแดง" <?php if ($row_find_edit_schedule['schedule_venue'] == "กองเชียร์สีแดง") {echo "selected";} ?>>กองเชียร์สีแดง</option>
		<option value="กองเชียร์สีเหลือง" <?php if ($row_find_edit_schedule['schedule_venue'] == "กองเชียร์สีเหลือง") {echo "selected";} ?>>กองเชียร์สีเหลือง</option>
        <option value="กองเชียร์สีเขียว" <?php if ($row_find_edit_schedule['schedule_venue'] == "กองเชียร์สีเขียว") {echo "selected";} ?>>กองเชียร์สีเขียว</option>
        <option value="กองเชียร์สีฟ้า" <?php if ($row_find_edit_schedule['schedule_venue'] == "กองเชียร์สีฟ้า") {echo "selected";} ?>>กองเชียร์สีฟ้า</option>
        <option value="กองเชียร์สีชมพู" <?php if ($row_find_edit_schedule['schedule_venue'] == "กองเชียร์สีชมพู") {echo "selected";} ?>>กองเชียร์สีชมพู</option>
	</select>
	<br>
	<label for="schedule_status">สถานะ :</label>
    <select class="select_box" name="schedule_status" id="schedule_status" required>
		<option value="" <?php if ($row_find_edit_schedule['schedule_status'] == "") {echo "selected";} ?> disabled>เลือกสถานะแข่งขัน</option>
        <option value="ยังไม่แข่งขัน" <?php if ($row_find_edit_schedule['schedule_status'] == "ยังไม่แข่งขัน") {echo "selected";} ?> style="color: darkblue;">ยังไม่แข่งขัน</option>
		<option value="กำลังแข่งขัน" <?php if ($row_find_edit_schedule['schedule_status'] == "กำลังแข่งขัน") {echo "selected";} ?> style="color: green;">กำลังแข่งขัน</option>
		<option value="การแข่งขันจบแล้ว" <?php if ($row_find_edit_schedule['schedule_status'] == "การแข่งขันจบแล้ว") {echo "selected";} ?> style="color: darkred;">การแข่งขันจบแล้ว</option>
	</select>
	<br>	
    <center>
	<input type="submit" name="edit_schedule" class="btn">
    </center>
</form>
</center>
<?php 
	if ($_POST['edit_schedule']) {
		$schedule_sport_id = $_POST['schedule_sport_id'];
		$schedule_date = $_POST['schedule_date'];
		$schedule_time = $_POST['schedule_time'];
		$schedule_venue = $_POST['schedule_venue'];
		$schedule_status = $_POST['schedule_status'];
		$schedule_rival_one = $_POST['schedule_rival_one'];
		$schedule_rival_two = $_POST['schedule_rival_two'];

		$sql_edit_schedule = "UPDATE `schedule` SET `schedule_sport_id`='$schedule_sport_id',`schedule_date`='$schedule_date',`schedule_time`='$schedule_time',`schedule_venue`='$schedule_venue',`schedule_status`='$schedule_status',`schedule_rival_one`='$schedule_rival_one',`schedule_rival_two`='$schedule_rival_two' WHERE `schedule_id`='$schedule_id'";
		if (mysqli_query($conn, $sql_edit_schedule)) {
			echo "<meta http-equiv='refresh' content='0;url=?page=schedule&sub_page=view' />";
			echo "Success";


		}else{
			echo "Fall";
		}
	} else {
		# code...
	}
	
 ?>


</body>
