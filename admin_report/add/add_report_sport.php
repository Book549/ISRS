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
    if ($_POST['add_reward']) {
      $reward_sport_id = $_POST['reward_sport_id'];
      $reward_color_1st = $_POST['reward_color_1st'];
      $reward_color_2nd = $_POST['reward_color_2nd'];
      $reward_color_3rd = $_POST['reward_color_3rd'];

      $sql_add_reward = "INSERT INTO `reward`( `reward_sport_id`, `reward_first`, `reward_second`, `reward_third`) VALUES ('$reward_sport_id','$reward_color_1st','$reward_color_2nd','$reward_color_3rd')";

      if (mysqli_query($conn, $sql_add_reward)) {
        echo "<meta http-equiv='refresh' content='0;url=?page=reward' />";
      }else{
        echo "err";
        mysqli_error($connn);
      }

    }
    
   ?>
</body>
