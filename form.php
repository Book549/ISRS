<?php 
	include 'conn.php'; 
if (isset($_GET['sport']) && $_GET['sport'] != "main") {
    $sport = "WHERE `sport_type` = '" . htmlspecialchars($_GET['sport'], ENT_QUOTES) . "'";
} else {
    $sport = "";
}

	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="element/styles_admin_sport.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title></title>
</head>
	<center>
<body><!-- จำเป็นต้องตอบคำถามนี้ -->


	 <div class="head_playersign">
		<h1>ลงทะเบียนนักกีฬา</h1>
		<p>ทะเบียนกีฬาที่ต้องการ</p>
		<p>* ระบุว่าเป็นคําถามที่จําเป็น</p>
	</div>
		<div class="all_filter">
	<?php 

	 	$sql_find_sport_type = "SELECT `sport_type` FROM `sports` GROUP BY `sport_type` ORDER BY `sports`.`sport_id` ASC";
        $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
        if (mysqli_num_rows($result_find_sports_type) > 0) {
            while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                //echo "<a onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>";
                echo "<a href=\"?sport=" . $row_find_sports_type['sport_type'] . "\" class=filter-button>" . $row_find_sports_type['sport_type'] . "</a>";
                echo "     ";
            }
        }

	 ?>
	 </div>

	<div class="table_container">
	<div class="add_sport_all">
	<form method="post" >
		<label for="player_sport_id">รายการกีฬา:</label>
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

		<label for="player_color_id">คณะสี :</label>
  		<select name="player_color_id" id="player_color_id" style="margin-bottom: 15px;" class="select_box" required>
          <option value="" disabled selected>เลือกรายการสี</option>
          <?php 
            sport_list($conn);
          ?>
  			</select><br>


		<label for="player_id">รหัสนักเรียน:</label>
		<input type="text" class="box_sport" name="player_id" id="player_id" oninput="validateInput(this)" pattern="[0-9]{5}" maxlength="5" required>
		<script>
		  function validateInput(input) {
		    // Allow only digits and limit to 5 characters
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


		<label for="player_name">ชื่อ :</label><input type="text" class="box_sport" name="player_name" id="player_name" required><br>
		
		<label for="player_sirname">นามสกุล :</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname" required><br>
		
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
	</select>
	<br>
<!--		<label for="player_gender">เพศ :</label>
 		<select class="select_box" name="player_gender" id="player_gender" required>
		<option value="">เลือกเพศ</option>
		<option value="ชาย">ชาย</option>
		<option value="หญิง">หญิง</option>
		</select> -->



		<input type="submit" name="add_player"  class="btn-sub" value="ส่ง" >
	</form>
	</div>
</div>
 	<div>
      <a href="player_name.php" class="filter-button"><i class="fas fa-address-book" ></i> ตรวจสอบรายชื่อนักกีฬา</a>
    </div>
	</center>

<?php 
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
		$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id' AND `player_sport_id` = '$player_sport_id' AND `player_color_id` = '$player_color_id'";
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`,  `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_sirname', '$player_class', '$player_room', '$player_color_id', '$player_sport_id')";
			$result_add_player = mysqli_query($conn, $sql_add_player);
			if ($result_add_player) {
				echo "<center><h1>Success</h1></center>";
				echo "<meta http-equiv='refresh' content='2;url=?sport=main' />";
				unset($_POST);
				
			}else{
				echo "<center><h1>Fall some thing is wrong... ติดต่อห้อง ICT</h1></center>";
				echo "<meta http-equiv='refresh' content='5;url=?sport=main' />";
			}
		}elseif (mysqli_num_rows($result_find_add_player) > 0) {
			$posttoget = "";
			foreach ($_POST as $key => $value) {
				$posttoget = $posttoget."&$key=$value";
			}
			$posttoget = $posttoget;#."&player_color_id=".$_SESSION['user_id'];
			echo "duplicate player do you want to replace?";
			echo "<a href='?sport=main&resuit=Yes$posttoget'>Yes</a><a href='?sport=main&resuit=No'>No</a>";
			unset($_POST);
			switch ($_GET['resuit']) {
				case 'Yes':
					$id_player = $_GET['id_player'];
					$player_id = $_GET['player_id'];
					$player_title = $_GET['player_title'];
					$player_name = $_GET['player_name'];
					$player_sirname = $_GET['player_sirname'];
					$player_class = $_GET['player_class'];		
					$player_room = $_GET['player_room'];
					$player_color_id = $_GET['player_color_id'];
					$player_sport_id = $_GET['player_sport_id'];
					$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `id_player`='$id_player'";
						$result_update_player = mysqli_query($conn, $sql_update_player);
					if ($result_update_player) {
						echo "<meta http-equiv='refresh' content='0;url=?sport=main' />";
						echo "Success";
						echo $player_id;

					}else{
						echo "Fall";
					}
					break;
				
				case 'No':
					echo "<meta http-equiv='refresh' content='0;url=?sport=main' />";
					break;

				default:
					echo "err bad url";
					break;
			}
		}
		
	}
	
	
		

 ?>

 <script>
	
 </script>
</body>



</html>
