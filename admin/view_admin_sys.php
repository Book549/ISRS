<body>
	<table>
		<tr>
			<th>user_id</th>
			<th>user_name</th>
			<th>user_username</th>
			<th>user_password</th>
			<th>user_role</th>
			<th>edit</th>
			<th>del</th>
		</tr>
		<?php
			$sql_find_users = "SELECT * FROM `users`";
			$result_find_users = mysqli_query($conn, $sql_find_users);
			if (mysqli_num_rows($result_find_users) > 0) {
				while ($row_find_users = mysqli_fetch_assoc($result_find_users)) {
					echo "<tr>
							<td>".$row_find_users['user_id']."</td>
							<td>".$row_find_users['user_name']."</td>
							<td>".$row_find_users['user_username']."</td>
							<td>".$row_find_users['user_password']."</td>
							<td>".$row_find_users['user_role']."</td>
							<td><a href=\"admin_system.php?page=admin_system&sub_page=edit&user_id=".$row_find_users['user_id']."\">edit</a></td>
							<td><a href=\"admin_system.php?page=admin_system&sub_page=view&user_id=".$row_find_users['user_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no user found...";
			}
		 ?>

	</table>
</body>