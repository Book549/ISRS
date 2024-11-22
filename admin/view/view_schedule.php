<link rel="stylesheet"  href="element/styles_admin_sport.css">
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
	 	$sql_find_sport_type = "SELECT `sport_type` FROM `sports` GROUP BY `sport_type`";
        $result_find_sports_type = mysqli_query($conn, $sql_find_sport_type);
        if (mysqli_num_rows($result_find_sports_type) > 0) {
            while ($row_find_sports_type = mysqli_fetch_assoc($result_find_sports_type)) {
                //echo "<a onclick=\"toggleMenu('".$row_find_sports_type['sport_type']."')\">".$row_find_sports_type['sport_type']."</li>";
                echo "<a href=\"?page=schedule&sub_page=view&sport=" . $row_find_sports_type['sport_type'] . "\">" . $row_find_sports_type['sport_type'] . "</a>";
                echo "     ";
            }
        }

	 ?>
    </div>

    <section>
    <div>
        <div class="event-date">
                <h1>19 November</h1>
        </div>
        
        <div class="schedule-list">
    
            <div class="event-card" data-sport="Athletics">
                <div class="event-info">
                    <h3>Athletics - 100m Men</h3>
                    <p>Date: November 28, 2024</p>
                    <p>Time: 14:00</p>
                    <p>Venue: สนามปิงปอง</p>
                </div>
                <div class="event-status">
                    <p>Status: กำลังแข่งขัน</p>
                </div>
            </div>

    
            <!-- More event cards -->
        </div>
    </div>
    </section>

   
</div>




    <script src="element/script.js"></script>
</body>
