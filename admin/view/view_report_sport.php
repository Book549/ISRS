<center>
    <table border="1px">
        <tr>
            <th>reward_id</th>
            <th>reward_reward_id</th>
            <th>🥇1</th>
            <th>🥈2</th>
            <th>🥉3</th>
            <th>edit</th>
            <th>del</th>
        </tr>
        <?php
            // Fetch all rewards from the database
            $sql_find_rewards = "SELECT * FROM `reward`";
            $result_find_rewards = mysqli_query($conn, $sql_find_rewards);
            
            if (mysqli_num_rows($result_find_rewards) > 0) {
                while ($row_find_rewards = mysqli_fetch_assoc($result_find_rewards)) {
                    if ($row_find_rewards['reward_third_one'] != 0 || $row_find_rewards['reward_third_two'] != 0) {
                        echo "<tr>
                            <td>" . $row_find_rewards['reward_id'] . "</td>
                            <td>" . sport_name($row_find_rewards['reward_sport_id'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_first'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_second'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_third'], $conn) . ",
                                " . color_color($row_find_rewards['reward_third_one'], $conn) . ",
                                " . color_color($row_find_rewards['reward_third_two'], $conn) . "</td>
                            <td class='edit'><a href=\"admin_system.php?page=results&sub_page=edit&reward_id=" . $row_find_rewards['reward_id'] . "&switch=third_place\">edit</a></td>
                            <td class='del'><a href=\"admin_system.php?page=results&sub_page=del&reward_id=" . $row_find_rewards['reward_id'] . "&switch=third_place\">del</a></td>
                          </tr>";
                    }else{
                        echo "<tr>
                            <td>" . $row_find_rewards['reward_id'] . "</td>
                            <td>" . sport_name($row_find_rewards['reward_sport_id'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_first'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_second'], $conn) . "</td>
                            <td>" . color_color($row_find_rewards['reward_third'], $conn) . "</td>
                            <td class='edit'><a href=\"admin_system.php?page=results&sub_page=edit&reward_id=" . $row_find_rewards['reward_id'] . "&switch=main\">edit</a></td>
                            <td class='del'><a href=\"admin_system.php?page=results&sub_page=del&reward_id=" . $row_find_rewards['reward_id'] . "&switch=main\">del</a></td>
                          </tr>";
                    }
                    
                }
            } else {
                echo "No reward found...";
            }
            
            ?>
    </table>
</center>