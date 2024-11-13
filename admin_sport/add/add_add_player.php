<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
<body>
	<center>
		<div class="table_container">
	<div class="add_sport_all">
	<form method="post" >
		<label for="player_id">รหัสนักเรียน:</label><input type="text" class="box_sport" name="player_id" id="player_id"><br>
		<label for="player_title">คำนำหน้า:</label><input type="text" class="box_sport" name="player_title" id="player_title"><br>
		<label for="player_name">ชื่อ:</label><input type="text" class="box_sport" name="player_name" id="player_name"><br>
		
		<label for="player_sirname">นามสกุล:</label><input type="text" class="box_sport" name="player_sirname" id="player_sirname"><br>
		<label for="player_class">ชั้น:</label><input type="text" class="box_sport" name="player_class" id="player_class"><br>	
		<label for="player_room">ห้อง:</label><input type="text" class="box_sport" name="player_room" id="player_room"><br>
		<label for="player_gender">เพศ:</label><input type="text" class="box_sport" name="player_gender" id="player_gender"><br>
		<label for="player_sport_id">รหัสกีฬา:</label><input type="text" class="box_sport" name="player_sport_id" id="player_sport_id"><br>
		<input type="submit" name="add_player" class="btn">
	</form>
	</div>
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
		$player_gender = $_POST['player_gender'];
		$player_color_id = $_SESSION['user_id'];
		$player_sport_id = $_POST['player_sport_id'];
		$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id'";
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`,  `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_sirname', '$player_class', '$player_room', '$player_gender', '$player_color_id', '$player_sport_id')";
			$result_add_player = mysqli_query($conn, $sql_add_player);
			if ($result_add_player) {
				echo "<meta http-equiv='refresh' content='0;url=?page=add_player&sub_page=view' />";
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
				$posttoget = $posttoget;#."&player_color_id=".$_SESSION['user_id'];
				echo "duplicate player do you want to replace?";
				echo "<a href='?page=add_player&sub_page=add&resuit=Yes$posttoget'>Yes</a><a href='?page=add_player&sub_page=add&resuit=No'>No</a>";
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
						$player_gender = $_GET['player_gender'];
						$player_color_id = $_GET['player_color_id'];
						$player_sport_id = $_GET['player_sport_id'];
						$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_gender`='$player_gender',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `id_player`='$id_player'";
							$result_update_player = mysqli_query($conn, $sql_update_player);
						if ($result_update_player) {
							echo "<meta http-equiv='refresh' content='0;url=?page=add_player&sub_page=view' />";
							echo "Success";
							echo $player_id;

						}else{
							echo "Fall";
						}
						break;
					
					case 'No':
						echo "<meta http-equiv='refresh' content='0;url=?page=add_player&sub_page=view' />";
						break;

					default:
						echo "err bad url";
						break;
				}
		}
		$result_find_add_player = mysqli_query($conn, $find_same_player);
			while ($row_find_player = mysqli_fetch_assoc($result_find_add_player)) {
				foreach ($row_find_player as $key => $value) {
					echo "$key => $value<br>";
				}
			}
	}
	
		

 ?>

 <script>
	
 </script>
</body>


