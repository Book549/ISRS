<?php

	$reward_id = $_GET['reward_id'];
	$sql_view_reward = "SELECT * FROM `reward` WHERE `reward_id` = '$reward_id'";
	$result_view_reward = mysqli_query($conn, $sql_view_reward);
	if (mysqli_num_rows($result_view_reward) == 1) {
		$row_view_reward = mysqli_fetch_assoc($result_view_reward);
	}else{
		echo "some thing is wrong..";
	}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
	<center>
	<div class="add_sport_all">
	<form method="post" >

  			<label>รายการกีฬา:</label>
  			<select name="reward_sport_id">
          <option value="">เลือกรายการกีฬา</option>
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
  	

        <h3>ผลการแข่งขัน:</h3>
    
  			<label>🥇1</label>
  			<select name="reward_color_1st">
          <option value="">เลือกรายการสี</option>
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

        <label>🥈2</label>
  			<select name="reward_color_2nd">
          <option value="">เลือกรายการสี</option>
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
  			<select name="reward_color_3rd">
          <option value="">เลือกรายการสี</option>
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

      
		<input type="submit" name="add_reward" class="btn">
	</form>
	</div>
</center>
	<?php 
      if (isset($_GET['resuit'])) {
        switch ($_GET['resuit']) {
          case 'Yes':
              $reward_sport_id = $_GET['reward_sport_id'];
              $reward_color_1st = $_GET['reward_color_1st'];
              $reward_color_2nd = $_GET['reward_color_2nd'];
              $reward_color_3rd = $_GET['reward_color_3rd'];
              $sql_add_reward_dup = "UPDATE `reward` SET `reward_sport_id`='$reward_sport_id',`reward_first`='$reward_color_1st',`reward_second`='$reward_color_2nd',`reward_third`='$reward_color_3rd' WHERE `reward_sport_id` = '$reward_sport_id'";
              if (mysqli_query($conn, $sql_add_reward_dup)) {

                echo "<meta http-equiv='refresh' content='0;url=?page=reward' />";
              }else{
                echo "err";
                mysqli_error($connn);
              }
            break;
          
          case 'No':
            echo "<meta http-equiv='refresh' content='0;url=?page=reward&sub_page=view' />";
            break;

          default:
            echo "err bad url";
            break;
        }
      }

      if (isset($_POST['add_reward'])) {

        $reward_sport_id = $_POST['reward_sport_id'];
        $inputs = [$_POST['reward_color_1st'], $_POST['reward_color_2nd'], $_POST['reward_color_3rd']];
      // Check if all inputs are unique
      if (count(array_unique($inputs)) < 3) {
          echo "Error: The three inputs must be different!";
      } else {

        $sql_check_duplicate = "SELECT * FROM `reward` WHERE `reward_sport_id` = '$reward_sport_id'";
        $result_check = mysqli_query($conn, $sql_check_duplicate);

        if (mysqli_num_rows($result_check) > 0) {
            echo "This reward combination already exists!";

                    $posttoget = "";
        foreach ($_POST as $key => $value) {
          $posttoget = $posttoget."&$key=$value";
        }
        #echo $posttoget."<br>";
        echo "duplicate reward do you want to replace?";
        echo "<a href='?page=reward&sub_page=view&resuit=Yes$posttoget'>Yes</a><a href='?page=reward&sub_page=view&resuit=No'>No</a>";
        unset($_POST);

        } else {
            
            $reward_color_1st = $inputs[0];
            $reward_color_2nd = $inputs[1];
            $reward_color_3rd = $inputs[2];

            $sql_update_reward = "UPDATE `reward` SET `reward_sport_id`='$reward_sport_id',`reward_first`='$reward_color_1st',`reward_second`='$reward_color_2nd',`reward_third`='$reward_color_3rd' WHERE `reward_sport_id` = '$reward_id'";

            if (mysqli_query($conn, $sql_update_reward)) {
              echo "<meta http-equiv='refresh' content='0;url=?page=reward' />";
            }else{
              echo "err";
              mysqli_error($connn);
            }
          }
        }
    }
    
   ?>