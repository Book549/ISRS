<body>
    <?php 
        $player_sport_id = $_GET['sport_id'];
        if (isset($_GET['player_id'])) {
        	$id_del_players = $_GET['player_id'];
        } else {
        	echo "url par not found";
        }
        $sql_del_player = "DELETE FROM `players` WHERE `player_id` = '$id_del_players'";
        if (mysqli_query($conn, $sql_del_player)) {
        	echo "Success";
        	echo "<meta http-equiv='refresh' content='0;url=?page=add_sport&sub_page=add&sport_id=$player_sport_id' />";
        }else{
        	echo "Fall";
        }
        ?>
    <a href="?page=add_sport&sub_page=view">some thing is wrong? click here</a>
</body>