<body>
    <?php 
        if (isset($_GET['color_id'])) {
        	$del_color_id = $_GET['color_id'];
        } else {
        	echo "url par not found";
        }
        $sql_view_colors = "SELECT `color_id`, `color_id_user` FROM `colors` WHERE `color_id` = '$del_color_id'";
        $result_view_colors = mysqli_query($conn, $sql_view_colors);
        $row_view_colors = mysqli_fetch_assoc($result_view_colors);
        $target_user_id = $row_view_colors['color_id_user'];
        $target_color_id = $row_view_colors['color_id'];
        $sql_del_color = "DELETE FROM `colors` WHERE `color_id` = '$target_color_id'";
        if (mysqli_query($conn, $sql_del_color)) {
        	$sql_del_user = "DELETE FROM `users` WHERE `user_id` = '$target_user_id'";
        	if (mysqli_query($conn, $sql_del_user)) {
        		echo "Success";
        		echo "<meta http-equiv='refresh' content='0;url=?page=admin_sport&sub_page=view' />";
        	}else{
        		echo "Fall del user";
        	}
        }else{
        	echo "Fall del color";
        }
        ?>
    <a href="?page=admin_sport&sub_page=view">some thing is wrong? click here</a>
</body>