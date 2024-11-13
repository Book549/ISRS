<body>
	<?php 
		if (isset($_GET['id_player'])) {
			$id_player = $_GET['id_player'];
		} else {
			echo "url par not found";
		}
		$sql_del_player = "DELETE FROM `players` WHERE `id_player` = '$id_player'";
		if (mysqli_query($conn, $sql_del_player)) {
			echo "Success";
			echo "<meta http-equiv='refresh' content='0;url=?page=add_player&sub_page=view' />";
		}else{
			echo "Fall";
		}
	 ?>
	 <a href="?page=player&sub_page=view">some thing is wrong? click here</a>
</body>