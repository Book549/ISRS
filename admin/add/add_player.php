<body>
<form method="post" action="">
	<label for="player_id">player_id:</label><input type="text" name="player_id" id="player_id"><br>
	<label for="player_title">player_title:</label><input type="text" name="player_title" id="player_title"><br>
	<label for="player_name">player_namender:</label><input type="text" name="player_namender" id="player_namegender"><br>
	<label for="player_mid_name">player_mid_namegree:</label><input type="text" name="player_mid_namegree" id="player_mid_namedegree"><br>
	<label for="player_sirname">player_sirnameount:</label><input type="text" name="player_sirnameount" id="player_sirnameamount"><br>
	<label for="player_class">player_class:</label><input type="text" name="player_class" id="player_class"><br>	
    <label for="player_room">player_room:</label><input type="text" name="player_room" id="player_room"><br>
	<label for="player_gender">player_gender:</label><input type="text" name="player_gender" id="player_gender"><br>
	<label for="player_color_id">player_color_id:</label><input type="text" name="player_color_id" id="player_color_id"><br>
	

	<input type="submit" name="add_player">
<?php 
	if ($_POST['add_player']) {
		$player_name = $_POST['player_id'];
		$player_type = $_POST['player_title'];
		$player_degree = $_POST['player_name'];
		$player_gender = $_POST['player_mid_name'];
		$player_amount = $_POST['player_sirname'];
		$player_note = $_POST['player_class'];		
        $player_note = $_POST['player_room'];
		$player_note = $_POST['player_gender'];
		$player_note = $_POST['player_color_id'];

		unset($_POST);
		$find_same_player = "SELECT * FROM `players` WHERE `player_id`LIKE '$player_id';
		$result_find_add_player = mysqli_query($conn, $find_same_player);
		if (mysqli_num_rows($result_find_add_player) == 0) {
			$sql_add_player  = "INSERT INTO `players`(`player_id`, `player_title`, `player_name`, `player_mid_name`, `player_sirname`, `player_class`, `player_room`, `player_gender`, `player_color_id`) VALUES ('$player_id', '$player_title', '$player_name', '$player_mid_name', '$player_sirname', '$player_class', '$player_room', '$player_gender', '$player_color_id')";
			$result_add_player = mysqli_query($conn, $sql_add_player);
			if ($result_add_player) {
				#setcookie("add_player", "Success", time() + 86400*7, "/");
				header("Location: ?page=player&sub_page=view");
				echo "Success";
			}else{
				echo "Fall";
			}
		}elseif (mysqli_num_rows($result_find_add_player) > 0) {
			if ($_COOKIE['add_player'] == 'Success') {
				header('Location: '.$_SERVER['REQUEST_URI']);
				#setcookie("add_player", "", time() - 3600, "/");
			}else{
				echo "duplicate player do you want to replace?";
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
</body>

<body>
	<table>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<?php
			$sql_find_players = "SELECT * FROM `players`";
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
							<td><a href=\"admin_system.php?page=player&sub_page=edit&player_id=".$row_find_players['player_id']."\">edit</a></td>
							<td><a href=\"admin_system.php?page=player&sub_page=delete&player_id=".$row_find_players['player_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
</body>