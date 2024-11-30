<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <center>
        <form method="post" class="add_sport_all">
            <label for="player_sport_id">รายการกีฬา:</label>
            <select name="schedule_sport_id" id="player_sport_id" style="margin-bottom: 25px;" class="select_box" required>
                <option value="">เลือกรายการกีฬา</option>
                <?php 
                    $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports`";
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
                <option value="" disabled selected>เลือกคู่แรก</option>
                <?php 
                    $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors`";
                    $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
                    if (mysqli_num_rows($result_find_colors_name) > 0) {
                    while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                    echo "<option value=\"".$row_find_colors_name['color_color']."\">".$row_find_colors_name['color_color']."</option>";
                    }
                    }
                    for ($sequence_schedule_rival_one = 1; $sequence_schedule_rival_one <= 56; $sequence_schedule_rival_one++) {
                    echo "<option value=\"คู่ที่ ".$sequence_schedule_rival_one."\">คู่ที่ ".$sequence_schedule_rival_one."</option>";
                    }
                    ?>
            </select>
            <br>
            <label for="schedule_rival_two"> VS </label><br>
            <label for="schedule_rival_two">คู่สอง :</label>
            <select class="select_box" name="schedule_rival_two" id="schedule_rival_two" style="margin-bottom: 15px;" class="select_box" required>
                <option value="" disabled selected>เลือกคู่สอง</option>
                <?php 
                    $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors`";
                    $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
                    if (mysqli_num_rows($result_find_colors_name) > 0) {
                    while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                    echo "<option value=\"".$row_find_colors_name['color_color']."\">".$row_find_colors_name['color_color']."</option>";
                    }
                    }
                    for ($sequence_schedule_rival_one = 1; $sequence_schedule_rival_one <= 56; $sequence_schedule_rival_one++) {
                    echo "<option value=\"คู่ที่ ".$sequence_schedule_rival_one."\">คู่ที่ ".$sequence_schedule_rival_one."</option>";
                    }
                    ?>
            </select>
            <br>
            <label for="schedule_date">วันที่:</label><input type="date" class="box_sport" name="schedule_date" id="schedule_date"><br>
            <label for="schedule_time">เวลา :</label><input type="time" class="box_sport" name="schedule_time" id="schedule_time"><br>
            <label for="schedule_venue">สถานที่ :</label>
            <select class="select_box" name="schedule_venue" id="schedule_venue" required>
                <option value="" disabled selected>เลือกสถานที่แข่ง</option>
                <option value="สนามวอลเลย์บอล">สนามวอลเลย์บอล</option>
                <option value="สนามบาสเก็ตบอล">สนามบาสเก็ตบอล</option>
                <option value="สนามเปตอง">สนามเปตอง</option>
                <option value="สนามฟุตบอล">สนามฟุตบอล</option>
                <option value="สนามฟุตซอล">สนามฟุตซอล</option>
                <option value="สนามเทเบิลเทนนิส">สนามเทเบิลเทนนิส</option>
                <option value="สนามแบดมินตัน">สนามแบดมินตัน</option>
                <option value="สนามแฮนด์บอล">สนามแฮนด์บอล</option>
                <option value="กองเชียร์สีแดง">กองเชียร์สีแดง</option>
                <option value="กองเชียร์สีเหลือง">กองเชียร์สีเหลือง</option>
                <option value="กองเชียร์สีเขียว">กองเชียร์สีเขียว</option>
                <option value="กองเชียร์สีฟ้า">กองเชียร์สีฟ้า</option>
                <option value="กองเชียร์สีชมพู">กองเชียร์สีชมพู</option>
            </select>
            <br>
            <label for="schedule_status">สถานะ :</label>
            <select class="select_box" name="schedule_status" id="schedule_status" required>
                <option value="" disabled selected>เลือกสถานะแข่งขัน</option>
                <option value="ยังไม่แข่งขัน" style="color: darkblue;">ยังไม่แข่งขัน</option>
                <option value="กำลังแข่งขัน" style="color: green;">กำลังแข่งขัน</option>
                <option value="การแข่งขันจบแล้ว" style="color: darkred;">การแข่งขันจบแล้ว</option>
            </select>
            <br>	
            <center>
                <input type="submit" name="add_schedule" class="btn">
            </center>
        </form>
    </center>
    <?php 
        if ($_POST['add_schedule']) {
        	$schedule_sport_id = $_POST['schedule_sport_id'];
        	$schedule_rival_one = $_POST['schedule_rival_one'];
        	$schedule_rival_two = $_POST['schedule_rival_two'];
        	$schedule_date = $_POST['schedule_date'];
        	$schedule_time = $_POST['schedule_time'];
        	$schedule_venue = $_POST['schedule_venue'];
        	$schedule_status = $_POST['schedule_status'];
        
        	$sql_add_schedule = "INSERT INTO `schedule`(`schedule_sport_id`, `schedule_date`, `schedule_time`, `schedule_venue`, `schedule_status`, `schedule_rival_one`, `schedule_rival_two` ) VALUES ('$schedule_sport_id','$schedule_date','$schedule_time','$schedule_venue','$schedule_status', '$schedule_rival_one', '$schedule_rival_two' )";
        	if (mysqli_query($conn, $sql_add_schedule)) {
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