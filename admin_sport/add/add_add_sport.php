<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
<?php 

	if (isset($_GET['sport_id'])) {
		$sport_id = $_GET['sport_id'];
		$_SESSION['sport_id'] = $_GET['sport_id'];
	}else{
		$sport_id = $_SESSION['sport_id'];
	}
	$user_id = $_SESSION['user_id'];
	if (isset($_GET['resuit'])) {
		switch ($_GET['resuit']) {
			case 'Yes':
				$player_id = $_GET['player_id'];
				$player_title = $_GET['player_title'];
				$player_name = $_GET['player_name'];
				
				$player_sirname = $_GET['player_sirname'];
				$player_class = $_GET['player_class'];		
				$player_room = $_GET['player_room'];
				// $player_gender = $_GET['player_gender'];
				$player_color_id = $user_id;
				$player_sport_id = $sport_id;
				$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `player_id`='$player_id'";
					$result_update_player = mysqli_query($conn, $sql_update_player);
				if ($result_update_player) {
					echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$sport_id' />";
					echo "Success";
					echo $player_id;

				}else{
					echo "Fall";
				}
				break;
			
			case 'No':
				echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$sport_id' />";
				break;

			default:
				echo "err bad url";
				break;
		}
	}
?>

<body>
<center>
<form method="post" class="add_sport_all">
<label for="player_id">รหัสนักเรียน:</label> <input type="text" class="box_sport" name="player_id" id="player_id"><br>
		<label for="player_title">คำนำหน้า:</label>
		<select class="box_sport" name="player_title" id="player_title" required>
			<option value="">เลือก</option>
			<option value="เด็กชาย">เด็กชาย</option>
			<option value="เด็กหญิง">เด็กหญิง</option>
			<option value="นาย">นาย</option>
			<option value="นางสาว">นางสาว</option>
		</select><br>
		<label for="player_name">ชื่อ:</label> <input type="text" class="box_sport" name="player_name" id="player_name"><br>
		
		<label for="player_sirname">นามสกุล:</label> <input type="text" class="box_sport" name="player_sirname" id="player_sirname"><br>
		
		<label for="player_class">ชั้นม. :</label>
		<select class="select_box" name="player_class" id="player_class" required>
		<option value="">เลือกชั้น</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select>
	<br>

		<label for="player_room">ห้อง :</label>
		<select class="select_box" name="player_room" id="player_room" required>
		<option value="">เลือกห้อง</option>
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
	</select>
	<br>
<!-- 		<label for="player_gender">เพศ :</label>
		<select class="select_box" name="player_gender" id="player_gender" required>
		<option value="">เลือกเพศ</option>
		<option value="ชาย">ชาย</option>
		<option value="หญิง">หญิง</option>
		</select> -->
		<br>
		<center>
		<input type="submit" name="add_player" class="btn">
		</center>
</form>
</center>
<?php 

	$sql_find_sports = "SELECT `sport_amount` FROM `sports` WHERE `sport_id` = '$sport_id'";
	$result_find_sports = mysqli_query($conn, $sql_find_sports);
	while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
		foreach ($row_find_sports as $row_find_sports_key => $row_find_sports_value) {
		    //echo $row_find_sports_key . " => " . $row_find_sports_value . "<br>";
		}
	}
	$player_limt = mysqli_num_rows(mysqli_query($conn, "SELECT `player_id` FROM `players` WHERE `player_sport_id` = ".$sport_id." AND `player_color_id` = ".$_SESSION['user_id']));
		if ($player_limt < $row_find_sports_value) {

			if (isset($_POST['add_player'])) {
				$player_id = $_POST['player_id'];
				$player_title = $_POST['player_title'];
				$player_name = $_POST['player_name'];
				
				$player_sirname = $_POST['player_sirname'];
				$player_class = $_POST['player_class'];		
				$player_room = $_POST['player_room'];
				// $player_gender = $_POST['player_gender'];
				$player_color_id = $user_id;
				$player_sport_id = $sport_id;

				$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id' AND `player_sport_id` = '$sport_id'";
				$result_find_add_player = mysqli_query($conn, $find_same_player);
				if (mysqli_num_rows($result_find_add_player) == 0) {
					$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`, `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_sirname', '$player_class', '$player_room', '$player_color_id', '$player_sport_id')";
					$result_add_player = mysqli_query($conn, $sql_add_player);
					if ($result_add_player) {
						echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$sport_id' />";
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
						echo "<a href='?page=add_sport&sub_page=add&resuit=Yes$posttoget'>Yes</a><a href='?page=add_sport&sub_page=add&resuit=No'>No</a>";
						$result_find_add_player = mysqli_query($conn, $find_same_player);
						while ($row_find_player = mysqli_fetch_assoc($result_find_add_player)) {
							foreach ($row_find_player as $key => $value) {
								echo "<br>$key => $value";
							}
						}
				}
			}
	
		}else{
			echo "Over limit";
		}
		


	
 ?>

	<center>
	<table class="table_all" style="margin-top: 20px;">
		<tr>
			<th>รหัสนักเรียน</th>
			<th>คำนำหน้า</th>
			<th>ชื่อ</th>
			
			<th>นามสกุล</th>
			<th>ชั้น</th>
			<th>ห้อง</th>
			<!-- <th>เพศ</th> -->

			<th>ชื่อกีฬา</th>
		</tr>
		<?php
			$sql_find_players = "SELECT * FROM `players` WHERE `player_color_id` = '$user_id' AND `player_sport_id` = '$sport_id'";
			$result_find_players = mysqli_query($conn, $sql_find_players);
			if (mysqli_num_rows($result_find_players) > 0) {
				while ($row_find_players = mysqli_fetch_assoc($result_find_players)) {
					echo "<tr>
							<td>".$row_find_players['player_id']."</td>
							<td>".$row_find_players['player_title']."</td>
							<td>".$row_find_players['player_name']."</td>
							
							<td>".$row_find_players['player_sirname']."</td>
							<td>".$row_find_players['player_class']."</td>
							<td>".$row_find_players['player_room']."</td>						
							
							<td>".sport_name($row_find_players['player_sport_id'], $conn)."</td>

							<td class=edit><a href=\"admin_sport.php?page=add_sport&sub_page=edit&id_player=".$row_find_players['id_player']."\" >แก้ไข</a></td>
							<td class=del><a href=\"admin_sport.php?page=add_sport&sub_page=del&id_player=".$row_find_players['id_player']."&sport_id=".$row_find_players['player_sport_id']."\">ลบ</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
	</center>


<body>
</html>
