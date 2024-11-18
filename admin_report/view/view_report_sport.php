<center>
<table border="1px">
	<tr>
		<th>reward_id</th>
		<th>reward_reward_id</th>
		<th>reward_first</th>
		<th>reward_second</th>
		<th>reward_third</th>	
		<th>edit</th>	
		<th>del</th>	
	</tr>

<?php
// Fetch all rewards from the database
$sql_find_rewards = "SELECT * FROM `reward`";
$result_find_rewards = mysqli_query($conn, $sql_find_rewards);

// Function to fetch the color's name by color ID
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

// Check if rewards exist and display them
if (mysqli_num_rows($result_find_rewards) > 0) {
    while ($row_find_rewards = mysqli_fetch_assoc($result_find_rewards)) {
        echo "<tr>
                <td>" . $row_find_rewards['reward_id'] . "</td>
                <td>" . sport_name($row_find_rewards['reward_sport_id'], $conn) . "</td>
                <td>" . color_color($row_find_rewards['reward_first'], $conn) . "</td>
                <td>" . color_color($row_find_rewards['reward_second'], $conn) . "</td>
                <td>" . color_color($row_find_rewards['reward_third'], $conn) . "</td>
                <td class='edit'><a href=\"admin_report.php?page=reward&sub_page=edit&reward_id=" . $row_find_rewards['reward_id'] . "\">edit</a></td>
                <td class='del'><a href=\"admin_report.php?page=reward&sub_page=del&reward_id=" . $row_find_rewards['reward_id'] . "\">del</a></td>
              </tr>";
    }
} else {
    echo "No reward found...";
}

?>

</table>
</center>