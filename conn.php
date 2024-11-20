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

#error_reporting(E_ERROR | E_PARSE);

?>