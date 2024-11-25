<body>
	<div class="table_container">
	<table style="border-collapse: collapse;">
		<tr>
			<th>รหัสประจำตัวนักเรียน</th>
			<th>คำนำหน้า</th>
			<th>ชื่อจริง</th>
			<th>นามสกุล</th>
			<th>ชั้น(ม. )</th>
			<th>ห้อง</th>
			<!-- <th>player_gender</th> -->
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

							<td>".$row_find_players['player_sirname']."</td>
							<td>".$row_find_players['player_class']."</td>
							<td>".$row_find_players['player_room']."</td>						
							
							<td>".$row_find_players['player_color_id']."</td>
							<td>".$row_find_players['player_sport_id']."</td>
							<td class=edit><a href=\"admin_system.php?page=player&sub_page=edit&id_player=".$row_find_players['id_player']."\">edit</a></td>
							<td class=del><a href=\"admin_system.php?page=player&sub_page=delete&id_player=".$row_find_players['id_player']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
</div>
</body>
