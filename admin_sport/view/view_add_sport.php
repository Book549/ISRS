<body>
	<center>
	<table class="table_all">
		<tr>
			<th>sport_id</th>
			<th>sport_name</th>
			<th>sport_type</th>
			<th>sport_degree</th>
			<th>sport_gender</th>
			<th>sport_amount</th>
			<th>player_amount</th>
			<th>sport_note</th>
			<th>add/edit</th>
			<th>del</th>
		</tr>
		<?php
			$num_player = 0;
			$sql_find_sports = "SELECT * FROM `sports`";
			$result_find_sports = mysqli_query($conn, $sql_find_sports);
			if (mysqli_num_rows($result_find_sports) > 0) {
				while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
					echo "<tr>
							<td>".$row_find_sports['sport_id']."</td>
							<td>".$row_find_sports['sport_name']."</td>
							<td>".$row_find_sports['sport_type']."</td>
							<td>".$row_find_sports['sport_degree']."</td>
							<td>".$row_find_sports['sport_gender']."</td>
							<td>".$row_find_sports['sport_amount']."</td>
							<td> ";
					echo mysqli_num_rows(mysqli_query($conn, "SELECT `player_id` FROM `players` WHERE `player_sport_id` = ".$row_find_sports['sport_id']." AND `player_color_id` = ".$_SESSION['user_id']));
					echo "</td>
							<td>".$row_find_sports['sport_note']."</td>
							<td class=edit><a href=admin_sport.php?page=add_sport&sub_page=add&sport_id=".$row_find_sports['sport_id'].">add/edit</a></td>
							<td class=del><a href=admin_sport.php?page=add_sport&sub_page=del&sport_id=".$row_find_sports['sport_id'].">del</a></td>
						</tr>";
				}
			} else {
				echo "no sport found...";
			}
		?>

	</table>
	</center>
</body>
</html>
