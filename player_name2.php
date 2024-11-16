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
    <title>กีฬาแต่ละระดับชั้น</title>
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

        td .another{
            background-color: lightcoral;
        }
    </style>
</head>
<body>

<div class="menu-container">
    <div class="menu-title">กีฬาแต่ละระดับชั้น</div>
    <ul class="table-menu">
        <?php 
            $sql_find_sport_type = "SELECT `sport_type` FROM `sports` WHERE `sport_degree` = 'อื่นๆ' GROUP BY `sport_type`";
            $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
            if (mysqli_num_rows($result_find_sports_type) > 0) {
                while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                    echo "<li onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>
                        <ul id=\"".$row_find_sports_type['sport_type']."\" class=\"table-content\">
                        <table>
                                <tr>
                                    <th>รายการ</th>
                                    <th>ชื่อ</th>
                                    <th>สกุล</th>
                                    <th>ชั้น</th>
                                    <th>ห้อง</th>
                                    <th>ประเภท</th>
                                    <th>สี</th>
                                </tr>";

                    $sql_find_sports = "SELECT `sport_id`, `sport_name` FROM `sports` WHERE `sport_type` = '".$row_find_sports_type['sport_type']."'";
                    $result_find_sports = mysqli_query($conn, $sql_find_sports);
                    if (mysqli_num_rows($result_find_sports) > 0) {
                        while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
                            $sql_find_players = "SELECT * FROM `players`  WHERE `player_sport_id` = '".$row_find_sports['sport_id']."' ORDER BY `players`.`player_name` ASC";
                            $result_find_players = mysqli_query($conn, $sql_find_players);
                            if (mysqli_num_rows($result_find_players) > 0) {
                                while ($row_find_players = mysqli_fetch_assoc($result_find_players)) {
                                    echo "<tr>";
                                    echo "<td>".$row_find_sports['sport_name']."</td>";
                                    echo "<td>".$row_find_players['player_name']."</td>
                                            <td>".$row_find_players['player_sirname']."</td>
                                            <td>".$row_find_players['player_class']."</td>
                                            <td>".$row_find_players['player_room']."</td>                       
                                            <td>".$row_find_players['player_gender']."</td>";
                                    $sql_view_admin_sport = "SELECT * FROM `colors` WHERE `color_id_user` = ".$row_find_players['player_color_id'];
                                    $result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
                                    if (mysqli_num_rows($result_view_admin_sport) == 1) {
                                        while ($row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport)) {
                                            echo "<td>".$row_view_admin_sport['color_color']."</td>";
                                        }
                                    }
                                }
                
                            }

                        }
                    }


                    echo "</table>
                        </ul>

                    ";
                }
            }
         ?>
        <!--<li onclick="toggleMenu('hideball')">ม.1 บอลมหาชัย(บอลหลบ)</li>
        <ul id="hideball" class="table-content">
            <table >
                <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>ชั้น</th>
                    <th>ห้อง</th>
                    <th>ประเภท</th>
                    <th>สี</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                    <td>เหลือง</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('arobic')">ม.2 แอโรบิก</li>
        <ul id="arobic" class="table-content">
            <table>
                <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>ชั้น</th>
                    <th>ห้อง</th>
                    <th>ประเภท</th>
                    <th>สี</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                    <td>เหลือง</td>
                </tr>
            </table>
        </ul>

       <li onclick="toggleMenu('boxing')">ม.3 Boxing Kids</li>
        <ul id="boxing" class="table-content">
            <table>
                <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>ชั้น</th>
                    <th>ห้อง</th>
                    <th>ประเภท</th>
                    <th>สี</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                    <td>เหลือง</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('bicycle')">ม.4 จักรยานคนจน</li>
        <ul id="bicycle" class="table-content">
            <table>
                <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>ชั้น</th>
                    <th>ห้อง</th>
                    <th>ประเภท</th>
                    <th>สี</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                    <td>เหลือง</td>
                </tr>
            </table>
        </ul>
-->

    
    </ul>
</div>

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
