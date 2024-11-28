<?php

	$reward_id = $_GET['reward_id'];
	$sql_view_reward = "SELECT * FROM `reward` WHERE `reward_id` = '$reward_id'";
	$result_view_reward = mysqli_query($conn, $sql_view_reward);
	if (mysqli_num_rows($result_view_reward) == 1) {
		$row_view_reward = mysqli_fetch_assoc($result_view_reward);
    foreach ($row_view_reward as $key => $value) {
      echo "$key => $value<br>";
    }
    echo $row_view_reward['reward_id'];
    echo $row_view_reward['reward_sport_id'];
    echo $row_view_reward['reward_third'];
    echo $row_view_reward['reward_third_one'];
    echo $row_view_reward['reward_third_two'];
	}else{
		echo "some thing is wrong..";
	}


?>
<link rel="stylesheet"  href="element/styles_admin_sport.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
	<center>
	<div >
	<form method="post" class="add_sport_all" >

  			<label>รายการกีฬา:</label>
  			<select name="reward_sport_id">
          <option value="<?php echo $row_view_reward['reward_sport_id']; ?>" selected><?php echo sport_name($row_view_reward['reward_sport_id'], $conn); ?></option>
          <?php 
            $sql_find_sport_name = "SELECT `sport_id`, `sport_name` FROM `sports` WHERE `sport_id` != ".$row_view_reward['reward_sport_id'];
            $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
            if (mysqli_num_rows($result_find_sports_name) > 0) {
                while ($row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name)) {
                  echo "<option value=\"".$row_find_sports_name['sport_id']."\">".$row_find_sports_name['sport_name']."</option>";
                }
            }  
           ?>
  			</select>
  	

        <h3>ผลการแข่งขัน:</h3>

                <label>🥇1</label>
            <select name="reward_color_1st">
         <option value="<?php echo $row_view_reward['reward_first']; ?>" selected><?php echo color_color($row_view_reward['reward_first'], $conn); ?></option>
        <?php 
            $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors` WHERE color_id != ".$row_view_reward['reward_first'];
            $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
            if (mysqli_num_rows($result_find_colors_name) > 0) {
                while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                  echo "<option value=\"".$row_find_colors_name['color_id_user']."\">".$row_find_colors_name['color_color']."</option>";
                }
            }  
           ?>
            </select>

        <label>🥈2</label>
            <select name="reward_color_2nd">
          <option value="<?php echo $row_view_reward['reward_second']; ?>" selected><?php echo color_color($row_view_reward['reward_second'], $conn); ?></option>
        <?php 
            $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors`";
            $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
            if (mysqli_num_rows($result_find_colors_name) > 0) {
                while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                  echo "<option value=\"".$row_find_colors_name['color_id_user']."\">".$row_find_colors_name['color_color']."</option>";
                }
            }  
           ?>
        </select>
  			<label>🥉3</label>
        <select name="reward_third">
            <option value="<?php echo $row_view_reward['reward_third']; ?>" selected>
                <?php echo color_color($row_view_reward['reward_third'], $conn); ?>
            </option>
            <?php 
                // Sanitize input to prevent SQL injection
                $reward_third = mysqli_real_escape_string($conn, $row_view_reward['reward_third']);

                // Use the correct field for the condition
                $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors` WHERE `color_id_user` != '$reward_third'";
                $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);

                if ($result_find_colors_name) {
                    // Check if there are results
                    if (mysqli_num_rows($result_find_colors_name) > 0) {
                        while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                            echo "<option value=\"" . htmlspecialchars($row_find_colors_name['color_id_user']) . "\">" . htmlspecialchars($row_find_colors_name['color_color']) . "</option>";
                        }
                    } else {
                        echo "<option disabled>No other colors available</option>";
                    }
                } else {
                    // Output error if query fails
                    echo "<option disabled>Error: " . htmlspecialchars(mysqli_error($conn)) . "</option>";
                }
            ?>
        </select>

        <label>🥉3</label>
        <select name="reward_third_one">
            <option value="<?php echo $row_view_reward['reward_third_one']; ?>" selected>
                <?php echo color_color($row_view_reward['reward_third_one'], $conn); ?>
            </option>
            <?php 
                // Sanitize input to prevent SQL injection
                $reward_third_one = mysqli_real_escape_string($conn, $row_view_reward['reward_third_one']);

                // Use the correct field for the condition
                $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors` WHERE `color_id_user` != '$reward_third_one'";
                $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);

                if ($result_find_colors_name) {
                    // Check if there are results
                    if (mysqli_num_rows($result_find_colors_name) > 0) {
                        while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                            echo "<option value=\"" . htmlspecialchars($row_find_colors_name['color_id_user']) . "\">" . htmlspecialchars($row_find_colors_name['color_color']) . "</option>";
                        }
                    } else {
                        echo "<option disabled>No other colors available</option>";
                    }
                } else {
                    // Output error if query fails
                    echo "<option disabled>Error: " . htmlspecialchars(mysqli_error($conn)) . "</option>";
                }
            ?>
        </select>

        <label>🥉3</label>
        <select name="reward_third_two">
            <option value="<?php echo $row_view_reward['reward_third_two']; ?>" selected>
                <?php echo color_color($row_view_reward['reward_third_two'], $conn); ?>
            </option>
            <?php 
                // Sanitize input to prevent SQL injection
                $reward_third_two = mysqli_real_escape_string($conn, $row_view_reward['reward_third_two']);

                // Use the correct field for the condition
                $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors` WHERE `color_id_user` != '$reward_third_two'";
                $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);

                if ($result_find_colors_name) {
                    // Check if there are results
                    if (mysqli_num_rows($result_find_colors_name) > 0) {
                        while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
                            echo "<option value=\"" . htmlspecialchars($row_find_colors_name['color_id_user']) . "\">" . htmlspecialchars($row_find_colors_name['color_color']) . "</option>";
                        }
                    } else {
                        echo "<option disabled>No other colors available</option>";
                    }
                } else {
                    // Output error if query fails
                    echo "<option disabled>Error: " . htmlspecialchars(mysqli_error($conn)) . "</option>";
                }
            ?>
        </select><br>
        <a href="admin_system.php?page=results&sub_page=edit&switch=main&reward_id=<?php echo $reward_id; ?>"><p>กดสลับสู่โหมดปกติ</p></a>
<br>
      
		<input type="submit" name="add_reward" class="btn">
	</form>
	</div>
</center>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $reward_id = mysqli_real_escape_string($conn, $_GET['reward_id']);
    $reward_sport_id = mysqli_real_escape_string($conn, $_POST['reward_sport_id']);
    $reward_color_1st = mysqli_real_escape_string($conn, $_POST['reward_color_1st']);
    $reward_color_2nd = mysqli_real_escape_string($conn, $_POST['reward_color_2nd']);
    $reward_third = mysqli_real_escape_string($conn, $_POST['reward_third']);
    $reward_third_one = mysqli_real_escape_string($conn, $_POST['reward_third_one']);
    $reward_third_two = mysqli_real_escape_string($conn, $_POST['reward_third_two']);

    // Check for unique inputs
    $inputs = [$reward_color_1st, $reward_color_2nd, $reward_third, $reward_third_one, $reward_third_two];
    if (count(array_unique($inputs)) < 5) {
        die("Error: The three inputs must be different!");
    }

    // Check for duplicate rewards
    $sql_check_duplicate = "
        SELECT * 
        FROM `reward` 
        WHERE `reward_sport_id` = '$reward_sport_id' 
          AND `reward_id` != '$reward_id'
    ";
    $result_check = mysqli_query($conn, $sql_check_duplicate);

    // if (mysqli_num_rows($result_check) > 0) {
    //     die("This reward combination already exists!");
    // }

    // Update reward
    $sql_update_reward = "
        UPDATE `reward` 
        SET `reward_first`='$reward_color_1st',
            `reward_second`='$reward_color_2nd',
            `reward_sport_id` = '$reward_sport_id',
            `reward_third` = '$reward_third',
            `reward_third_one` = '$reward_third_one',
            `reward_third_two` = '$reward_third_two'
        WHERE `reward_id` = '$reward_id'
    ";

    if (!mysqli_query($conn, $sql_update_reward)) {
        die("Error updating record: " . mysqli_error($conn));
    } else {
        echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=view' />";
        exit();
    }
}
?>
