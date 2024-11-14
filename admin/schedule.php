
<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
<ul>
	<li><a href="?page=schedule&sub_page=view" class="btn_viewadd">แก้ไข/ลบ</a></li>
	<li><a href="?page=schedule&sub_page=add" class="btn_viewadd">เพิ่ม</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin/view/view_schedule.php';
		break;

	case 'edit':
		include 'admin/edit/edit_schedule.php';
		break;

	case 'add':
		include 'admin/add/add_schedule.php';
		break;

	case 'delete':
		include 'admin/delete/del_schedule.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			echo "<meta http-equiv='refresh' content='0;url=?page=schedule&sub_page=view' />";
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
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

    
            <!-- More event cards -->
        </div>
    </div>
    </section>

   
</div>




    <script src="element/script.js"></script>
</body>
</html>