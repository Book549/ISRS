<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <center>
<form method="post" class="add_sport_all">
	<label for="schedule_sport">ชื่อกีฬา :</label><input type="text" class="box_sport"  name="schedule_sport" id="schedule_sport"><br>
	<label for="schedule_date">วันที่:</label><input type="date" class="box_sport" name="schedule_date" id="schedule_date"><br>
	<label for="schedule_time">เวลา :</label><input type="time" class="box_sport" name="schedule_time" id="schedule_time"><br>
    <label for="schedule_venue">สถานที่ :</label>
	<select class="select_box" name="schedule_venue" id="schedule_venue" required>
		<option value="">เลือกสถานที่แข่ง</option>
		<option value="สนามวอลเลย์บอล">สนามวอลเลย์บอล</option>
		<option value="สนามบาสเก็ตบอล">สนามบาสเก็ตบอล</option>
		<option value="สนามเปตอง">สนามเปตอง</option>
		<option value="สนามฟุตบอล">สนามฟุตบอล</option>
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
		<option value="">เลือกสถานะแข่งขัน</option>
        <option value="ยังไม่แข่งขัน" style="color: darkblue;">ยังไม่แข่งขัน</option>
		<option value="กำลังแข่งขัน" style="color: green;">กำลังแข่งขัน</option>
		<option value="การแข่งขันจบแล้ว" style="color: darkred;">การแข่งขันจบแล้ว</option>
	</select>
	<br>	
    <center>
	<input type="submit" name="add_player" class="btn">
    </center>
</form>
</center>
</body>
