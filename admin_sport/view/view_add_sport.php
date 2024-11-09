<body>
	<center>
	<table class="table_all">
		<tr>
			<th>รหัสกีฬา</th>
			<th>ชื่อกีฬา</th>
			<th>ประเภทกีฬา</th>
			<th>ระดับชั้น</th>
			<th>เพศ</th>
			<th>จำกัดจำนวน</th>
			<th>จำนวนผู้เล่น</th>
			<th>หมายเหตุ</th>
			<th>เพิ่ม/แก้ไข</th>
		</tr>
		<?php

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
							<td class=edit><a href=admin_sport.php?page=add_sport&sub_page=add&sport_id=".$row_find_sports['sport_id'].">เพิ่ม/แก้ไข</a></td>
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
