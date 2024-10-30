<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>รายการแข่งขัน</title>
</head>
<body>


    <div class="schedule-container">
    <div class="schedule-header">
        <h2>รายการแข่งขัน</h2>
        <div class="schedule-filter">
            <input type="search" placeholder="Search event or sport...">
        </div>
    </div>
    
    <div class="schedule-categories">
        <button class="filter-button" onclick="filterBySport('ฟุตบอล')">ฟุตบอล</button>
        <button class="filter-button" onclick="filterBySport('ฟุตซอล')">ฟุตซอล</button>
        <button class="filter-button" onclick="filterBySport('แฮนด์บอล')">แฮนด์บอล</button>
        <button class="filter-button" onclick="filterBySport('วอลเลย์บอล')">วอลเลย์บอล</button>
        <button class="filter-button" onclick="filterBySport('เปตอง')"> เปตอง</button>
        <button class="filter-button" onclick="filterBySport('บาสเก็ตบอล')">บาสเก็ตบอล</button>
        <button class="filter-button" onclick="filterBySport('แบดมินตัน')">แบดมินตัน</button>
        <button class="filter-button" onclick="filterBySport('เทเบิลเทนนิส')">เทเบิลเทนนิส</button>
        <button class="filter-button" onclick="filterBySport('กีฬาพื้นบ้าน')">กีฬาพื้นบ้าน</button>
        <button class="filter-button" onclick="filterBySport('กีฬาแต่ละระดับชั้น')">กีฬาแต่ละระดับชั้น</button>
        <button class="filter-button" onclick="filterBySport('กรีฑา')">กรีฑา</button>
        
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

            <div class="event-card" data-sport="Swimming">
                <div class="event-info">
                    <h3>Swimming - 200m Freestyle Women</h3>
                    <p>Date: November 29, 2024</p>
                    <p>Time: 10:00</p>
                    <p>Venue: สนามฟุตบอล</p>
                </div>
                <div class="event-status">
                    <p>Status: การแข่งขันสิ้นสุดแล้ว</p>
                </div>
            </div>
            <!-- More event cards -->
        </div>

        <div class="event-date">
                <h1>20 November</h1>
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

            <div class="event-card" data-sport="Swimming">
                <div class="event-info">
                    <h3>Swimming - 200m Freestyle Women</h3>
                    <p>Date: November 29, 2024</p>
                    <p>Time: 10:00</p>
                    <p>Venue: สนามฟุตบอล</p>
                </div>
                <div class="event-status">
                    <p>Status: การแข่งขันสิ้นสุดแล้ว</p>
                </div>
            </div>
            <!-- More event cards -->
        </div>
    </div>
    </section>

   
</div>





    <script src="script.js"></script>
</body>
</html>
