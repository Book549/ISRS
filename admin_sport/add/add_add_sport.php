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
				$player_mid_name = $_GET['player_mid_name'];
				$player_sirname = $_GET['player_sirname'];
				$player_class = $_GET['player_class'];		
				$player_room = $_GET['player_room'];
				$player_gender = $_GET['player_gender'];
				$player_color_id = $user_id;
				$player_sport_id = $sport_id;
				$sql_update_player = "UPDATE `players` SET `player_title`='$player_title',`player_name`='$player_name',`player_mid_name`='$player_mid_name',`player_sirname`='$player_sirname',`player_class`='$player_class',`player_room`='$player_room',`player_gender`='$player_gender',`player_color_id`='$player_color_id',`player_sport_id`='$player_sport_id' WHERE `player_id`='$player_id'";
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
<form method="post" class="table_all">
	<label for="player_id">player_id:</label><input type="text" name="player_id" id="player_id"><br>
	<label for="player_title">player_title:</label><input type="text" name="player_title" id="player_title"><br>
	<label for="player_name">player_name:</label><input type="text" name="player_name" id="player_name"><br>
	<label for="player_mid_name">player_mid_name:</label><input type="text" name="player_mid_name" id="player_mid_name"><br>
	<label for="player_sirname">player_sirname:</label><input type="text" name="player_sirname" id="player_sirname"><br>
	<label for="player_class">player_class:</label><input type="text" name="player_class" id="player_class"><br>	
    <label for="player_room">player_room:</label><input type="text" name="player_room" id="player_room"><br>
	<label for="player_gender">player_gender:</label><input type="text" name="player_gender" id="player_gender"><br>


	<input type="submit" name="add_player">
</form>
<?php 
	if (isset($_POST['add_player'])) {
		$player_id = $_POST['player_id'];
		$player_title = $_POST['player_title'];
		$player_name = $_POST['player_name'];
		$player_mid_name = $_POST['player_mid_name'];
		$player_sirname = $_POST['player_sirname'];
		$player_class = $_POST['player_class'];		
		$player_room = $_POST['player_room'];
		$player_gender = $_POST['player_gender'];
		$player_color_id = $user_id;
		$player_sport_id = $sport_id;
		$find_same_player = "SELECT * FROM `players` WHERE `player_id` = '$player_id'";
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players` (`player_id`, `player_title`, `player_name`, `player_mid_name`, `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`, `player_sport_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_mid_name', '$player_sirname', '$player_class', '$player_room', '$player_gender', '$player_color_id', '$player_sport_id')";
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
		}
		$result_find_add_player = mysqli_query($conn, $find_same_player);
			while ($row_find_player = mysqli_fetch_assoc($result_find_add_player)) {
				foreach ($row_find_player as $key => $value) {
					echo "$key => $value<br>";
				}
			}
	}

 ?>

	<center>
	<table class="table_all">
		<tr>
			<th>player_id</th>
			<th>player_title</th>
			<th>player_name</th>
			<th>player_mid_name</th>
			<th>player_sirname</th>
			<th>player_class</th>
			<th>player_room</th>
			<th>player_gender</th>
			<th>player_color_id</th>
			<th>player_sport_id</th>
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
							<td>".$row_find_players['player_mid_name']."</td>
							<td>".$row_find_players['player_sirname']."</td>
							<td>".$row_find_players['player_class']."</td>
							<td>".$row_find_players['player_room']."</td>						
							<td>".$row_find_players['player_gender']."</td>
							<td>".$row_find_players['player_color_id']."</td>
							<td>".$row_find_players['player_sport_id']."</td>
							<td class=edit><a href=\"admin_sport.php?page=add_sport&sub_page=edit&player_id=".$row_find_players['player_id']."\" >edit</a></td>
							<td class=del><a href=\"admin_sport.php?page=add_sport&sub_page=del&player_id=".$row_find_players['player_id']."&sport_id=".$row_find_players['player_sport_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
	</center>


<body>
