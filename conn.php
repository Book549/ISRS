<?php 
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'isrs';
    
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "something is wrong";
    }
    
    if (!isset($_SESSION)) {
        session_start();
    }
    
    function color_color($id_color, $conn) {
        $sql_find_color_color = "SELECT `color_color` FROM `colors` WHERE `color_id_user` = $id_color";
        $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
        if (mysqli_num_rows($result_find_colors_name) > 0) {
            $row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name);
            return $row_find_colors_name['color_color'];
        }
        return "N/A"; // Default if no color is found
    }
    
    function sport_name($id_sport, $conn) {
        $sql_find_sport_name = "SELECT `sport_name` FROM `sports` WHERE `sport_id` = $id_sport";
        $result_find_sports_name = mysqli_query($conn, $sql_find_sport_name);
        if (mysqli_num_rows($result_find_sports_name) > 0) {
            $row_find_sports_name = mysqli_fetch_assoc($result_find_sports_name);
            return $row_find_sports_name['sport_name'];
        }
        return "N/A"; // Default if no color is found
    }
    
    function sport_type($id_sport, $conn) {
        $sql_find_sport_type = "SELECT `sport_type` FROM `sports` WHERE `sport_id` = $id_sport";
        $result_find_sport_type = mysqli_query($conn, $sql_find_sport_type);
        if (mysqli_num_rows($result_find_sport_type) > 0) {
            $row_find_sport_type = mysqli_fetch_assoc($result_find_sport_type);
            return $row_find_sport_type['sport_type'];
        }
        return "N/A"; // Default if no color is found
    }
    
    function sport_list($conn) {
        $sql_find_color_color = "SELECT `color_color`, `color_id_user` FROM `colors`";
        $result_find_colors_name = mysqli_query($conn, $sql_find_color_color);
        if (mysqli_num_rows($result_find_colors_name) > 0) {
            while ($row_find_colors_name = mysqli_fetch_assoc($result_find_colors_name)) {
              echo "<option value=\"".$row_find_colors_name['color_id_user']."\">".$row_find_colors_name['color_color']."</option>";
            }
        }
    }
    
    
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    #error_reporting(E_ERROR | E_PARSE);
    #header('Content-Type: text/html; charset=UTF-8');
    mysqli_set_charset($conn, 'utf8mb4');
    #phpinfo();
    ?>
