<body>
	<div class="table_container" >
	<table style="border-collapse: collapse;">
		<tr>
			<th>sport_id</th>
			<th>รายการกีฬา</th>
			<th>ชนิดกีฬา</th>
			<th>ระดับชั้น</th>
			<th>เพศ</th>
			<th>จำนวนนักกีฬา</th>
			<th>หมายเหตุ</th>
			<th>แก้ไข</th>
			<th>ลบ</th>
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
							<td>".$row_find_sports['sport_note']."</td>
							<td class=edit><a href=\"admin_system.php?page=sport&sub_page=edit&sport_id=".$row_find_sports['sport_id']."\">แก้ไข</a></td>
							<td class=del><a href=\"admin_system.php?page=sport&sub_page=delete&sport_id=".$row_find_sports['sport_id']."\">ลบ</a></td>
						</tr>";
				}
			}else{
				echo "no sport found...";
			}
		 ?>

	</table>
</div>
</body>
