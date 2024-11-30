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
        <title>รายชื่อนักกีฬา</title>
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
            .menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            }
            .menu-header h2 {
            font-family: "Mitr", sans-serif;
            font-size: 28px;
            }
            .menu-filter input {
            padding: 10px;
            width: 250px;
            border-radius: 20px;
            border: 1px solid lightgray;
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
            /* Visited link color */
            a:visited {
            color: white;
            text-decoration: none;
            }
            a{
            color: white;
            text-decoration: none;
            }
        </style>
    </head>
    <body>
        <script src="element/script_player.js"></script>
        <div class="menu-container">
            <div class="menu-header">
                <h2 ><a href="index.php" style="text-decoration: none; color: black;" >รายชื่อนักกีฬา</a></h2>
                <!--         <div class="menu-filter">
                    <input type="search" placeholder="  ค้นหานักกีฬา...">
                    </div> -->
            </div>
            <ul class="table-menu">
                <?php 
                    $sql_find_sport_type = "SELECT `sport_type` FROM `sports` WHERE `sport_type` != 'กีฬาพื้นบ้าน' AND `sport_type` != 'กีฬาแต่ละระดับชั้น' GROUP BY `sport_type` ORDER BY `sports`.`sport_name` ASC";
                    $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
                    if (mysqli_num_rows($result_find_sports_type) > 0) {
                        while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                            echo "<li onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>
                                <ul id=\"".$row_find_sports_type['sport_type']."\" class=\"table-content\">";
                                echo "<div id=\"table_".$row_find_sports_type['sport_type']."\"></div>";
                                echo "<script>";
                                echo "const Datatable_".$row_find_sports_type['sport_type']." = {";
                                        //title: \"ตารางที่ 1: สินค้า\",";
                                echo "headers: [\"รายการ ⇕\", \"ประเภท ⇕\", \"สี ⇕\", \"คำนำหน้า ⇕\", \"ชื่อ ⇕\", \"สกุล ⇕\", \"ชั้น ⇕\", \"ห้อง ⇕\"],";
                                echo "rows: [";
                    
                                //SELECT `time_in`, `id_player`, `player_id`, `player_title`, `player_name`, `player_sirname`, `player_class`, `player_room`, `player_color_id`, `player_sport_id` FROM `players` WHERE 1
                                $sql_find_sports = "SELECT `sport_id`, `sport_name`, `sport_gender` FROM `sports` WHERE `sport_type` = '".$row_find_sports_type['sport_type']."'";
                                $result_find_sports = mysqli_query($conn, $sql_find_sports);
                                if (mysqli_num_rows($result_find_sports) > 0) {
                                    while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
                                        $sql_find_players = "SELECT * FROM `players`  WHERE `player_sport_id` = '".$row_find_sports['sport_id']."' ORDER BY `players`.`player_color_id` ASC";
                                        $result_find_players = mysqli_query($conn, $sql_find_players);
                                        if (mysqli_num_rows($result_find_players) > 0) {
                                            while ($row_find_players = mysqli_fetch_assoc($result_find_players)) {
                    
                                            echo "[\"".$row_find_sports['sport_name']."\", \"".$row_find_sports['sport_gender']."\", \"".color_color($row_find_players['player_color_id'], $conn)."\",\"".$row_find_players['player_title']."\", \"".$row_find_players['player_name']."\", \"".$row_find_players['player_sirname']."\", \"".$row_find_players['player_class']."\", \"".$row_find_players['player_room']."\"],";
                                            }
                                        }
                                    }
                                }
                                echo "]};";
                                echo "createSortableTable(\"table_".$row_find_sports_type['sport_type']."\", Datatable_".$row_find_sports_type['sport_type'].");
                                </script>";
                                echo "</ul>";
                               
                            } echo "<li><a href=\"player_name2.php\" style=\"color: white; text-decoration: none;'\">กีฬาแต่ละระดับชั้น</a></li></ul></div>";
                    }
                    
                    ?>
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