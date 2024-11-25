<?php 
if (isset($_GET['sport']) && $_GET['sport'] != "main") {
    $sport = "WHERE `sport_type` = '" . htmlspecialchars($_GET['sport'], ENT_QUOTES) . "'";
} else {
    $sport = "";
}
 ?>
<link rel="stylesheet"  href="element/styles_admin_sport.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <div class="schedule-container">
    <div class="schedule-header">
        <h2>รายการแข่งขัน</h2>
        <div class="schedule-filter">
            <input type="search" placeholder="Search event or sport...">
        </div>
    </div>
    
    <div class="schedule-categories">
	<?php 
	 	$sql_find_sport_type = "SELECT `sport_type` FROM `sports` GROUP BY `sport_type` ORDER BY `sport_id` ASC";
        $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
        if (mysqli_num_rows($result_find_sports_type) > 0) {
            while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                //echo "<a onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>";
                echo "<a class=\"filter-button\" onclick=\"filterBySport('".$row_find_sports_type['sport_type']."')\">" . $row_find_sports_type['sport_type'] . "</a>";
            }
        }

	 ?>
    </div>

    <section>
    <div>
        <?php 
        $sql_find_date = "SELECT `schedule_date` FROM `schedule` GROUP BY `schedule_date`";
        $result_find_date = mysqli_query($conn, $sql_find_date);
        if (mysqli_num_rows($result_find_date) > 0){
            while ($row_date = mysqli_fetch_assoc($result_find_date)) {
                echo "<div class=\"event-date\"><h1>".$row_date['schedule_date']."</h1></div>";
                

                $sql_find_scheddule = "SELECT * FROM `schedule` WHERE `schedule_date` = ".date('Ymd', strtotime($row_date['schedule_date']));
                $result_find_scheddule = mysqli_query($conn, $sql_find_scheddule);
                if (mysqli_num_rows($result_find_scheddule) > 0){
                    while ($row_scheddule = mysqli_fetch_assoc($result_find_scheddule)) {
                        echo "<div class=\"schedule-list\"><div class=\"event-card\" data-sport=\"".sport_type($row_scheddule['schedule_sport_id'], $conn)."\">";
                        echo "<div class=\"event-info\">
                            <h3>" . sport_name($row_scheddule['schedule_sport_id'], $conn) . "</h3>
                            <p>Date: " . htmlspecialchars($row_scheddule['schedule_date']) . "</p>
                            <p>Time: " . htmlspecialchars($row_scheddule['schedule_time']) . "</p>
                            <p>Venue: " . htmlspecialchars($row_scheddule['schedule_venue']) . "</p>
                        </div>
                        <div class=\"event-status\">
                            <p>Status: ";

                    switch ($row_scheddule['schedule_status']) {
                        case 'ยังไม่แข่งขัน':
                            echo "<span style=\"color: darkblue;\">ยังไม่แข่งขัน</span>";
                            break;

                        case 'กำลังแข่งขัน':
                            echo "<span style=\"color: green;\">กำลังแข่งขัน</span>";
                            break;

                        case 'การแข่งขันจบแล้ว':
                            echo "<span style=\"color: darkred;\">การแข่งขันจบแล้ว</span>";
                            break;

                        default:
                            echo "<span>No Status</span>";
                            break;
                    }

                    echo "</p>
                        </div>";
                        echo "<a class=btn_schedule href=\"admin_system.php?page=schedule&sub_page=edit&schedule_id=".$row_scheddule['schedule_id']."\">แก้ไข</a>
                            <a class=btn_schedule href=\"admin_system.php?page=schedule&sub_page=delete&schedule_id=".$row_scheddule['schedule_id']."\">ลบ</a>";
                        echo "</div>";     
                    }
                }else{
                    echo "sport_not_found";
                }

                echo "</div>";
            }
        }else{
            echo "date not found..";
        }

         ?>

    </div>
    </section>

   
</div>




    <script src="element/script.js"></script>
</body>
