<body>
	<center>
		<div class="table_container">
	<table class="table_all">
		<tr>
			<th>color_id</th>
			<th>color_name</th>
			<th>color_color</th>
			<th>color_president</th>
			<th>color_vice-president</th>
			<th>color_id_user</th>
			<th>edit</th>
			<th>del</th>
		</tr>
		<?php
			$sql_view_admin_sport = "SELECT * FROM `colors`";
			$result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
			if (mysqli_num_rows($result_view_admin_sport) > 0) {
				while ($row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport)) {
					echo "<tr>
							<td>".$row_view_admin_sport['color_id']."</td>
							<td>".$row_view_admin_sport['color_name']."</td>
							<td>".$row_view_admin_sport['color_color']."</td>
							<td>".$row_view_admin_sport['color_president']."</td>
							<td>".$row_view_admin_sport['color_vice-president']."</td>
							<td>".$row_view_admin_sport['color_id_user']."</td>
							<td class=edit><a href=\"admin_system.php?page=admin_sport&sub_page=edit&color_id=".$row_view_admin_sport['color_id']."\">edit</a></td>
							<td class=del><a href=\"admin_system.php?page=admin_sport&sub_page=delete&color_id=".$row_view_admin_sport['color_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "something is wrong..";
			}
		 ?>

	</table>
	</div>
	</center>
</body>
</html>
