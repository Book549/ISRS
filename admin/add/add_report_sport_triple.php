 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"  href="element/styles_admin_sport.css">
  <style type="text/css">
   .switch a{
    display: flex;
    padding: 15px;
    background-color: limegreen;
    color: white;
   gap: 20px;
    border-radius: 30px;
    width:60%;
    justify-content: center;
}
 </style>
<body>
	<center>
	<div class="add_sport_all">
	<form method="post" >

  			<label>รายการกีฬา:</label>
  			<select name="reward_sport_id" style="margin-bottom: 25px;" class="select_box">
          <option value="" disabled selected>เลือกรายการกีฬา</option>
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
        <select name="reward_color_1st" style="margin-bottom: 15px;" class="select_box">
          <option value="" disabled selected>เลือกรายการสี</option>
          <?php 
            sport_list($conn);
          ?>
        </select>
        <br>

        <label>🥈2</label>
        <select name="reward_color_2nd" style="margin-bottom: 15px;" class="select_box">
          <option value="" disabled selected>เลือกรายการสี</option>
        <?php 
            sport_list($conn);
           ?>
        </select>
        <br>

  			<label>🥉3</label>
  			<select name="reward_third" style="margin-bottom: 15px;" class="select_box">
          <option value="" disabled selected>เลือกรายการสี</option>
          <?php 
            sport_list($conn);
          ?>
  			</select>
        <br>

        <label>🥉3</label>
  			<select name="reward_third_one" style="margin-bottom: 15px;" class="select_box">
          <option value="" disabled selected>เลือกรายการสี</option>
        <?php 
            sport_list($conn);
           ?>
        </select>
        <br>

        <label>🥉3</label>
  			<select name="reward_third_two" style="margin-bottom: 15px;" class="select_box">
          <option value="" disabled selected>เลือกรายการสี</option>
        <?php 
            sport_list($conn);
           ?>
        </select>
        <br>
        <div class="switch">
          <a href="admin_system.php?page=results&sub_page=view&switch=main">กดสลับสู่โหมดปกติ</a>
        </div>
        <br>
      
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
              $reward_third = $_GET['reward_third'];
              $reward_third_one = $_GET['reward_third_one'];
              $reward_third_two = $_GET['reward_third_two'];
              $sql_add_reward_dup = "UPDATE `reward` SET `reward_sport_id`='$reward_sport_id',`reward_third`='$reward_third',`reward_third_one`='$reward_third_one',`reward_third_two`='$reward_third_two' WHERE `reward_sport_id` = '$reward_sport_id'";
              if (mysqli_query($conn, $sql_add_reward_dup)) {

                echo "<meta http-equiv='refresh' content='0;url=?page=results' />";
              }else{
                echo "err";
                mysqli_error($connn);
              }
            break;
          
          case 'No':
            echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=view' />";
            break;

          default:
            echo "err bad url";
            break;
        }
    }
    if (isset($_POST['add_reward'])) {
      $reward_sport_id = $_POST['reward_sport_id'];
      $inputs = [
                    $_POST['reward_color_1st'], 
                    $_POST['reward_color_2nd'], 
                    $_POST['reward_third'], 
                    $_POST['reward_third_one'], 
                    $_POST['reward_third_two']
                ];
      // Check if all inputs are unique
      if (count(array_unique($inputs)) < 5) {
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
        echo "<a href='?page=results&sub_page=view&resuit=Yes$posttoget'>Yes</a><a href='?page=results&sub_page=view&resuit=No'>No</a>";
        unset($_POST);

        } else {
            $reward_color_1st = $inputs[0];;
            $reward_color_2nd = $inputs[1];;
            $reward_third = $inputs[2];
            $reward_third_one = $inputs[3];
            $reward_third_two = $inputs[4];

            $sql_add_reward = "INSERT INTO `reward`( `reward_sport_id`, `reward_first`, `reward_second`, `reward_third`, `reward_third_one`, `reward_third_two`) VALUES ('$reward_sport_id','$reward_color_1st','$reward_color_2nd','$reward_third','$reward_third_one','$reward_third_two')";

            if (mysqli_query($conn, $sql_add_reward)) {
              echo "<meta http-equiv='refresh' content='0;url=?page=results' />";
            }else{
              echo "err";
              mysqli_error($connn);
            }
          }
        }
    }



    
    
   ?>
</body>
