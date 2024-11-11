<body>
	<center>
	<table class="table_all">
		<tr>
			<th>รหัสนักเรียน</th>
			<th>คำนำหน้า</th>
			<th>ชื่อ</th>
			
			<th>นามสกุล</th>
			<th>ชั้น</th>
			<th>ห้อง</th>
			<th>เพศ</th>
			<th>รหัสคณะสี</th>
			<th>รหัสกีฬา</th>
		</tr>
		<?php
			$sql_find_players = "SELECT * FROM `players` WHERE `player_color_id` = ".$_SESSION['user_id'];
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
							<td>".$row_find_players['player_gender']."</td>
							<td>".$row_find_players['player_color_id']."</td>
							<td>".$row_find_players['player_sport_id']."</td>
							<td class=edit><a href=\"admin_sport.php?page=add_player&sub_page=edit&player_id=".$row_find_players['player_id']."\" >edit</a></td>
							<td class=del><a href=\"admin_sport.php?page=add_player&sub_page=del&player_id=".$row_find_players['player_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
	</center>
</body>

