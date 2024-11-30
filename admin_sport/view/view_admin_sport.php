<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
        <div class="table_container">
            <table class="table_all">
                <tr>
                    <th>รหัสคณะสี</th>
                    <th>ชื่อคณะสี</th>
                    <th>คณะสี</th>
                    <th>ประธานสี</th>
                    <th>รองประธานสี</th>
                    <th>แก้ไข</th>
                </tr>
                <?php
                    $user_id = $_SESSION['user_id'];
                    $sql_view_admin_sport = "SELECT * FROM `colors` WHERE `color_id_user` = '$user_id'";
                    $result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
                    if (mysqli_num_rows($result_view_admin_sport) == 1) {
                    	while ($row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport)) {
                    		echo "<tr>
                    				<td>".$_SESSION['user_id']."</td>
                    				<td>".$row_view_admin_sport['color_name']."</td>
                    				<td>".$row_view_admin_sport['color_color']."</td>
                    				<td>".$row_view_admin_sport['color_president']."</td>
                    				<td>".$row_view_admin_sport['color_vice-president']."</td>
                    				<td class=edit><a href=\"admin_sport.php?page=profile&sub_page=edit\">แก้ไข</a></td>
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