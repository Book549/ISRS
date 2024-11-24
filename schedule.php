<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="element/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>รายการแข่งขัน</title>
</head>
<body>
<?php 
include 'conn.php';
if (isset($_GET['sport']) && $_GET['sport'] != "main") {
    $sport = "WHERE `sport_type` = '" . htmlspecialchars($_GET['sport'], ENT_QUOTES) . "'";
} else {
    $sport = "";
}
 ?>
<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <div class="schedule-container">
    <div class="schedule-header">
        <h2 ><a href="index.php" style="text-decoration: none; color: black;" >รายการแข่งขัน</a></h2>
        <div class="schedule-filter">
            <input type="search" placeholder="  ค้นหารายการแข่งขัน...">
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
                                <h3>".sport_name($row_scheddule['schedule_sport_id'], $conn)."</h3>
                                <p>Date: ".$row_scheddule['schedule_date']."</p>
                                <p>Time: ".$row_scheddule['schedule_time']."</p>
                                <p>Venue: ".$row_scheddule['schedule_venue']."</p>
                            </div>
                            <div class=\"event-status\">
                                <p>Status: ".$row_scheddule['schedule_status']."</p>
                            </div>";
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

</html>
