<body>
	<table>
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
							<td>".$row_find_players['player_sport_id']."</td>
							<td><a href=\"admin_sport.php?page=add_player&sub_page=edit&player_id=".$row_find_players['player_id']."\">edit</a></td>
							<td><a href=\"admin_sport.php?page=add_player&sub_page=del&player_id=".$row_find_players['player_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
</body>