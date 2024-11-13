<body>
	<div class="table_container">
<form method="post" action="" class="add_sport_all">
	<label for="sport_name">sport_name:</label><input type="text" class="box_sport" name="sport_name" id="sport_name"><br>
	<label for="sport_type">sport_type:</label><input type="text" class="box_sport" name="sport_type" id="sport_type"><br>

	<label for="sport_gender">sport_gender:</label>
	<select name="sport_gender" id="sport_gender" required>
		<option value="">เลือกเพศ</option>
		<option value="ชาย">ชาย</option>
		<option value="หญิง">หญิง</option>
		<option value="ผสม">ผสม</option>
		<option value="อื่นๆ">อื่นๆ</option>
	</select>
	<br>
	<label for="sport_degree">sport_degree:</label>
	<select name="sport_degree" id="sport_degree" required>
		<option value="">เลือกระดับชั้น</option>
		<option value="มัธยมต้น">มัธยมต้น</option>
		<option value="มัธยมปลาย">มัธยมปลาย</option>
		<option value="อื่นๆ">อื่นๆ</option>
	</select>
	<br>

	<label for="sport_amount">sport_amount:</label><input type="text" class="box_sport" name="sport_amount" id="sport_amount"><br>
	<label for="sport_note">sport_note:</label><input type="text" class="box_sport" name="sport_note" id="sport_note"><br>

	<input type="submit" name="add_sport" class="btn">
</form>
</div>
<?php 
	if ($_POST['add_sport']) {
		$sport_name = $_POST['sport_name'];
		$sport_type = $_POST['sport_type'];
		$sport_degree = $_POST['sport_degree'];
		$sport_gender = $_POST['sport_gender'];
		$sport_amount = $_POST['sport_amount'];
		$sport_note = $_POST['sport_note'];
		unset($_POST);
		$find_same_sport = "SELECT * FROM `sports` WHERE `sport_type` = '$sport_type' AND `sport_degree` = '$sport_degree' AND `sport_gender` = '$sport_gender'";
		$result_find_add_sport = mysqli_query($conn, $find_same_sport);
		if (mysqli_num_rows($result_find_add_sport) == 0) {
			$sql_add_sport  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name','$sport_type','$sport_degree','$sport_gender','$sport_amount','$sport_note')";
			$result_add_sport = mysqli_query($conn, $sql_add_sport);
			if ($result_add_sport) {
				#setcookie("add_sport", "Success", time() + 86400*7, "/");
				echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
				echo "Success";
			}else{
				echo "Fall";
			}
		}elseif (mysqli_num_rows($result_find_add_sport) > 0) {

				echo "duplicate sport";
			
		}
		$result_find_add_sport = mysqli_query($conn, $find_same_sport);
			while ($row_find_sport = mysqli_fetch_assoc($result_find_add_sport)) {
				foreach ($row_find_sport as $key => $value) {
					echo "$key => $value<br>";
				}
			}
	}
	
		

		
 ?>
</body>
