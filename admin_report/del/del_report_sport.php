<?php 
	if (isset($_GET['reward_id'])) {
		$id_del_reward = $_GET['reward_id'];
	} else {
		echo "url par not found";
	}
	$sql_del_user = "DELETE FROM `reward` WHERE `reward_id` = '$id_del_reward'";
	if (mysqli_query($conn, $sql_del_user)) {
		echo "Success";
		echo "<meta http-equiv='refresh' content='0;url=?page=reward&sub_page=view' />";
	}else{
		echo "Fall";
	}
?>
<a href="?page=reward&sub_page=view">some thing is wrong? click here</a>
