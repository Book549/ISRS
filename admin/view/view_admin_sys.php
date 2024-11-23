
<body>

	<form method="post" action="admin_system.php?page=admin_system&sub_page=view"><!--warn-->
		<select class="select_box" name="filier">
			<option value="">all</option>
			<option value="admin_system">admin_system</option>
			<option value="admin_sport">admin_sport</option>
			<option value="admin_report">admin_report</option>
		</select>
		<input type="text" class="box_acc" name="search" placeholder="  ค้นหา"><!-- find user_id or user_name -->
		<input type="submit" name="find" value="find" class="btn_acc">
	</form>
	
	<?php 
		$sql_find_users = "SELECT * FROM `users`";
		$value_find_role = "";
		$conjunction_sql = "";
		$value_find_id_or_name = "";
		if (isset($_POST['find'])) {
			if ($_POST['filier'] != "") {
				$value_find_role = " WHERE `user_role` = '".$_POST['filier']."'";
			}
			if ($_POST['search'] != "") {
				if ($value_find_role != "") {
					$conjunction_sql = " AND ";
				}else{
					$conjunction_sql = " WHERE ";
				}
				$value_find_id_or_name = "`user_id` LIKE '%".$_POST['search']."%' OR `user_name` LIKE '%".$_POST['search']."%' OR `user_username` LIKE '%".$_POST['search']."%'";
			}
		}
		$sql_search_user = $sql_find_users.$value_find_role.$conjunction_sql.$value_find_id_or_name;
		echo $sql_search_user;
	 ?>
	<table style="margin-top: 20px; border-collapse: collapse; ">
		<tr>
			<th>user_id</th>
			<th>ชื่อ</th>
			<th>ขื่อผู้ใช้</th>
			<th>รหัสผ่าน</th>
			<th>บทบาทหน้าที่</th>
			<th>แก้ไข</th>
			<th>ลบ</th>
		</tr>
		<?php
			$result_find_users = mysqli_query($conn, $sql_search_user);
			if (mysqli_num_rows($result_find_users) > 0) {
				while ($row_find_users = mysqli_fetch_assoc($result_find_users)) {
					echo "<tr>
							<td>".$row_find_users['user_id']."</td>
							<td>".$row_find_users['user_name']."</td>
							<td>".$row_find_users['user_username']."</td>
							<td>".$row_find_users['user_password']."</td>
							<td>".$row_find_users['user_role']."</td>
							<td class=edit><a href=\"admin_system.php?page=admin_system&sub_page=edit&user_id=".$row_find_users['user_id']."\">แก้ไข</a></td>
							<td class=del><a href=\"admin_system.php?page=admin_system&sub_page=delete&user_id=".$row_find_users['user_id']."\">ลบ</a></td>
						</tr>";
				}
			}else{
				echo "no user found...";
			}
		 ?>

	</table>
</body>
