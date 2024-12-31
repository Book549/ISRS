<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>certificate</h1>
    <form action="" method="GET">
    <label for="player_sport_id">รายการกีฬา:</label>
            <select name="player_sport_id" id="player_sport_id" style="margin-bottom: 25px;" class="select_box" required>
                <option value="all">ทั้งหมด</option>
                <?php 
                    $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports`";
                    $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
                    if (mysqli_num_rows($result_find_sports_name) > 0) {
                        while ($row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name)) {
                          echo "<option value=\"".$row_find_sports_name['sport_id']."\">".$row_find_sports_name['sport_name']."</option>";
                        }
                    }  
                ?>
            </select>
        <input type="text" name="player_name">
        <input type="submit">
    </form>
    <?php 
    if (isset($_GET['id_player'])) {
        $id_player = $_GET['id_player'];
        $find_player = "SELECT * FROM `players` WHERE `id_player` = ".$id_player;
        $resuit_find_player = mysqli_query($conn, $find_player);
        if (mysqli_num_rows($resuit_find_player) > 0) {
            while ($row_players = mysqli_fetch_assoc($resuit_find_player)) {//`id_player``player_id``player_title``player_name``player_sirname``player_class``player_room``player_color_id``player_color_id``player_sport_id`
                $got_reward = "SELECT * FROM `reward` WHERE `reward_sport_id` = ".$row_players['player_sport_id'];
                $resuit_got_reward = mysqli_query($conn, $got_reward);
                if (mysqli_num_rows($resuit_got_reward) > 0) {
                    $reward_got = mysqli_fetch_assoc($resuit_got_reward);
                    foreach ($reward_got as $key => $value) {
                        echo "|$key => $value |<br>";

                        if ($row_players['player_color_id'] == $value) {
                            #echo $row_players['player_color_id']."|<br>";
                            switch ($key) {
                                case 'reward_first':
                                    echo "reward_first";
                                    break;

                                case 'reward_second':
                                    echo "reward_second";
                                    break;

                                case 'reward_third':
                                case 'reward_third_one':
                                case 'reward_third_two':
                                    echo "reward_third";
                                    break;
                                
                                default:
                                    echo "ไม่พบรางวัล";
                                    break;
                            }
                        }
                    }
                }else{
                    echo "resuit_got_reward = 0 (no data in reward)";
                }
            }
        }
    }else{
        $find_player = "SELECT * FROM `players`";
        $resuit_find_player = mysqli_query($conn, $find_player);
        if (mysqli_num_rows($resuit_find_player) > 0) {
            while ($row_players = mysqli_fetch_assoc($resuit_find_player)) {//`id_player``player_id``player_title``player_name``player_sirname``player_class``player_room``player_color_id``player_color_id``player_sport_id`
                foreach ($row_players as $key => $value) {
                    echo "$key => $value";
                }
                echo "<a href=\"createcertificate.php?id_player=".$row_players['id_player']."\">go</a>";
                echo "<br>";
            }
        }
    }


     ?>
</body>
</html>