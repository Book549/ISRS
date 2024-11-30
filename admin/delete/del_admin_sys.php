<body>
    <?php 
        if (isset($_GET['user_id'])) {
        	$id_del_users = $_GET['user_id'];
        } else {
        	echo "url par not found";
        }
        $sql_del_user = "DELETE FROM `users` WHERE `user_id` = '$id_del_users'";
        if (mysqli_query($conn, $sql_del_user)) {
        	echo "Success";
        	echo "<meta http-equiv='refresh' content='0;url=?page=admin_system&sub_page=view' />";
        }else{
        	echo "Fall";
        }
        ?>
    <a href="?page=admin_system&sub_page=view">some thing is wrong? click here</a>
</body>