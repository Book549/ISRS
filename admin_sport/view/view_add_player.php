<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        <input type="search" name="search">
        <input type="submit" name="send">
    </form>
    <?php 
        if (isset($_POST['send'])) {
        	$search = " AND `player_id` LIKE '%".$_POST['search']."%' OR `player_name` LIKE '%".$_POST['search']."%' OR `player_sirname` LIKE '%".$_POST['search']."%'";
        }else{
         	$search = "";
        }
        ?>
    <center>
        <div class="table_container">
            <table class="table_all">
                <tr>
                    <th>รหัสนักเรียน</th>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ชั้น</th>
                    <th>ห้อง</th>
                    <!-- <th>เพศ</th> -->
                    <th>คณะสี</th>
                    <th>ชื่อกีฬา</th>
                </tr>
                <?php
                    $sql_find_players = "SELECT * FROM `players` WHERE `player_color_id` = ".$_SESSION['user_id'] . $search;
                    $result_find_players = mysqli_query($conn, $sql_find_players);
                    if (mysqli_num_rows($result_find_players) > 0) {
                    	while ($row_find_players = mysqli_fetch_assoc($result_find_players)) {
                    		echo "<tr>
                    				<td>".$row_find_players['player_id']."</td>
                    				<td>".$row_find_players['player_title']."</td>
                    				<td>".$row_find_players['player_name']."</td>
                    				
                    				<td>".$row_find_players['player_sirname']."</td>
                    				<td>".$row_find_players['player_class']."</td>
                    				<td>".$row_find_players['player_room']."</td>						
                    
                    				<td>".color_color($row_find_players['player_color_id'], $conn)."</td>
                    				<td>".sport_name($row_find_players['player_sport_id'], $conn)."</td>
                    				<td class=edit><a href=\"admin_sport.php?page=add_player&sub_page=edit&id_player=".$row_find_players['id_player']."\" >edit</a></td>
                    				<td class=del><a href=\"admin_sport.php?page=add_player&sub_page=del&id_player=".$row_find_players['id_player']."\">del</a></td>
                    			</tr>";
                    	}
                    }else{
                    	echo "no player found...";
                    }
                    ?>
            </table>
        </div>
    </center>
</body>