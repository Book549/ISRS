<body>
	<table>
		<tr>
			<th>color_id</th>
			<th>color_name</th>
			<th>color_color</th>
			<th>color_president</th>
			<th>color_vice-president</th>
			<th>color_id_user</th>
			<th>edit</th>
		</tr>
		<?php
			$user_id = $_SESSION['user_id'];
			$sql_view_admin_sport = "SELECT * FROM `colors` WHERE `color_id_user` = '$user_id'";
			$result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
			if (mysqli_num_rows($result_view_admin_sport) == 1) {
				while ($row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport)) {
					echo "<tr>
							<td>".$row_view_admin_sport['color_id']."</td>
							<td>".$row_view_admin_sport['color_name']."</td>
							<td>".$row_view_admin_sport['color_color']."</td>
							<td>".$row_view_admin_sport['color_president']."</td>
							<td>".$row_view_admin_sport['color_vice-president']."</td>
							<td>".$row_view_admin_sport['color_id_user']."</td>
							<td><a href=\"admin_sport.php?page=profile&sub_page=edit\">edit</a></td>
						</tr>";
				}
			}else{
				echo "some thing is wrong..";
			}
		 ?>

	</table>
</body>