<body>
	<?php 
		if (isset($_GET['schedule_id'])) {
			$id_del_schedule = $_GET['schedule_id'];
		} else {
			echo "url par not found";
		}
		$sql_del_user = "DELETE FROM `schedule` WHERE `schedule_id` = '$id_del_schedule'";
		if (mysqli_query($conn, $sql_del_user)) {
			echo "Success";
			echo "<meta http-equiv='refresh' content='0;url=?page=schedule&sub_page=view' />";
		}else{
			echo "Fall";
		}
	 ?>
	 <a href="?page=schedule&sub_page=view">some thing is wrong? click here</a>
</body>