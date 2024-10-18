<body>
	<?php 
		if (isset($_GET['sport_id'])) {
			$id_del_sport = $_GET['sport_id'];
		} else {
			echo "url par not found";
		}
		$sql_del_user = "DELETE FROM `sports` WHERE `sport_id` = '$id_del_sport'";
		if (mysqli_query($conn, $sql_del_user)) {
			echo "Success";
			header("Location: ?page=sport&sub_page=view");
		}else{
			echo "Fall";
		}
	 ?>
	 <a href="?page=sport&sub_page=view">some thing is wrong? click here</a>
</body>