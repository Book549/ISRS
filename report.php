<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ผลการแข่งขันกีฬา</title>
    <style>
        body{
            font-family: "Mitr", sans-serif;
        }
        /* General styling */
        .menu-container {
            width: 80%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
           
        }

        .menu-title {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;

        }

        /* Dropdown menu style */
        .table-menu {
            list-style: none;
            padding: 0;
            margin: 0;

        }

        .table-menu > li {
            background-color: darkblue;
            font-size: 20px;
            color: white;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 5px;
            border-radius: 5px;

        }

        /* Table submenu hidden initially */
        .table-content {
            display: none;
            margin: 0;
            padding: 0;
           
        }
        .table-content.open{
            transition: max-height 0.4s ease;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            transition: 0.5s ease;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(25, 61, 107);
            font-weight: 500;
            color: white;
            cursor: pointer;
            
        }
        td{
            transition: 0.5s ease;
            cursor: pointer;
        }
        td:hover{
            background-color: #e1e1e1;
        }

       
    </style>
</head>
<body>

<div class="menu-container">
    <div class="menu-title" style="font-weight: 650;">ผลการแข่งขันกีฬา</div>
    <ul class="table-menu">
        <?php 
        $sql_find_sport_type = "SELECT * FROM `sports` GROUP BY `sport_type` ORDER BY `sports`.`sport_id` ASC";
        $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
        if (mysqli_num_rows($result_find_sports_type) > 0) {
            while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                echo "<li onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>";
                echo "<ul id=\"".$row_find_sports_type['sport_type']."\" class=\"table-content\">";
                echo "<table><tr>
                        <th>รายการ</th>
                        <th>ประเภท</th> 
                        <th>🥇1</th>
                        <th>🥈2</th>
                        <th>🥉3</th>
                    </tr>";
                $sql_find_sports = "SELECT `sport_id`, `sport_name`, `sport_gender` FROM `sports` WHERE `sport_type` = '".$row_find_sports_type['sport_type']."'";
                $result_find_sports = mysqli_query($conn, $sql_find_sports);
                if (mysqli_num_rows($result_find_sports) > 0) {
                    while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
                        echo "<tr>
                                <td>".$row_find_sports['sport_name']."</td>
                                <td>".$row_find_sports['sport_gender']."</td>";

                            $sql_find_rewards = "SELECT * FROM `reward` WHERE `reward_sport_id` = '".$row_find_sports['sport_id']."'";
                            $result_find_rewards = mysqli_query($conn, $sql_find_rewards);

                            if (mysqli_num_rows($result_find_rewards) > 0) {
                                while ($row_find_rewards = mysqli_fetch_assoc($result_find_rewards)) {
                                    if ($row_find_rewards['reward_third_one'] != 0 || $row_find_rewards['reward_third_two'] != 0) {
                                        echo "

                                            <td>" . color_color($row_find_rewards['reward_first'], $conn) . "</td>
                                            <td>" . color_color($row_find_rewards['reward_second'], $conn) . "</td>
                                            <td>" . color_color($row_find_rewards['reward_third'], $conn) . ",
                                                " . color_color($row_find_rewards['reward_third_one'], $conn) . ",
                                                " . color_color($row_find_rewards['reward_third_two'], $conn) . "</td>
                                            
                                          </tr>";
                                    }else{
                                        echo "

                                            <td>" . color_color($row_find_rewards['reward_first'], $conn) . "</td>
                                            <td>" . color_color($row_find_rewards['reward_second'], $conn) . "</td>
                                            <td>" . color_color($row_find_rewards['reward_third'], $conn) . "</td>
                                            
                                          </tr>";
                                      }
                                  }
                                    
                            }else{
                                    echo "<td> N/A </td>
                                        <td> N/A </td>
                                        <td> N/A </td>";
                            
                        }
                        echo "</tr>";
                    }
                }


                echo "</table></ul>";
            }
        }
        
        ?>
        <!-- <ul class="table-menu">
        <li onclick="toggleMenu('football')">ฟุตบอล</li>
        <ul id="football" class="table-content">
            <table >
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th> 
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>
    
    </ul>
</div> -->

<script>
   function toggleMenu(id) {
    // Get all submenu elements
    const allMenus = document.querySelectorAll('.table-content');
    
    // Close all menus before opening the clicked one
    allMenus.forEach(menu => {
        if (menu.id !== id) {
            menu.style.display = 'none';
        }
    });
    
    // Toggle the clicked menu
    const tableContent = document.getElementById(id);
    if (tableContent.style.display === 'block') {
        tableContent.style.display = 'none';
    } else {
        tableContent.style.display = 'block';
    }
}

    
</script>

</body>
</html>
