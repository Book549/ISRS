<body>
<form method="post" >
	<label for="player_id">player_id:</label><input type="text" name="player_id" id="player_id"><br>
	<label for="player_title">player_title:</label><input type="text" name="player_title" id="player_title"><br>
	<label for="player_name">player_name:</label><input type="text" name="player_name" id="player_name"><br>
	<label for="player_mid_name">player_mid_name:</label><input type="text" name="player_mid_name" id="player_mid_name"><br>
	<label for="player_sirname">player_sirname:</label><input type="text" name="player_sirname" id="player_sirname"><br>
	<label for="player_class">player_class:</label><input type="text" name="player_class" id="player_class"><br>	
    <label for="player_room">player_room:</label><input type="text" name="player_room" id="player_room"><br>
	<label for="player_gender">player_gender:</label><input type="text" name="player_gender" id="player_gender"><br>
	<label for="player_color_id">player_color_id:</label><input type="text" name="player_color_id" id="player_color_id"><br>
	<label for="player_sport_id">player_sport_id:</label><input type="text" name="player_sport_id" id="player_sport_id"><br>
	<input type="submit" name="add_player">
<?php 
	if (isset($_POST)) {
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		$player_mid_name = $_POST['player_mid_name'];
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];		
		$player_room = $_POST['player_room'];
		$player_gender = $_POST['player_gender'];
		$player_color_id = $_POST['player_color_id'];
		$player_sport_id = $_POST['player_sport_id'];
		$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id'";
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`, `player_mid_name`, `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_mid_name', '$player_sirname', '$player_class', '$player_room', '$player_gender', '$player_color_id', '$player_sport_id')";
			$result_add_player = mysqli_query($conn, $sql_add_player);
			if ($result_add_player) {
				header("Location: ?page=player&sub_page=view");
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
				echo "<a href='?page=player&sub_page=add&resuit=Yes$posttoget'>Yes</a><a href='?page=player&sub_page=add&resuit=No'>No</a>";
				unset($_POST);
				switch ($_GET['resuit']) {
					case 'Yes':
						$player_id = $_GET['player_id'];
						$player_title = $_GET['player_title'];
						$player_name = $_GET['player_name'];
						$player_mid_name = $_GET['player_mid_name'];
						$player_sirname = $_GET['player_sirname'];
						$player_class = $_GET['player_class'];		
						$player_room = $_GET['player_room'];
						$player_gender = $_GET['player_gender'];
						$player_color_id = $_GET['player_color_id'];
						$player_sport_id = $_GET['player_sport_id'];
						$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_mid_name`='$player_mid_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_gender`='$player_gender',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `player_id`='$player_id'";
							$result_update_player = mysqli_query($conn, $sql_update_player);
						if ($result_update_player) {
							header("Location: ?page=player&sub_page=view");
							echo "Success";
							echo $player_id;

						}else{
							echo "Fall";
						}
						break;
					
					case 'No':
						header("Location: ?page=player&sub_page=view");
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