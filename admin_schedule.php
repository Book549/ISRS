<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styles.css">
    <link rel="stylesheet"  href="styles_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>รายการแข่งขัน</title>
</head>
<body>
<nav id="sidebar">
    <ul>
      <li>
	  <img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="40px" height="40px" >
        <span class="logo">ผู้จัดการระบบ</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li class="active">
        <a href="admin_system.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
          <span>หน้าหลัก</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
		<i class="fas fa-user-cog" style="padding-right:5px;"></i>
          <span>จัดการบัญชี</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="?page=admin_system">Admin ผู้จัดการระบบ</a></li>
            <li><a href="?page=admin_sport">Admin คณะสี</a></li>
            <li><a href="?page=admin_report">Admin รายงานผล</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
		<i class="fas fa-basketball-ball" style="padding-right: 10px;"></i>
          <span>ระบบนักกีฬา</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="?page=sport">ประเภทกีฬา</a></li>
            <li><a href="?page=player">นักกีฬา</a></li>
          </div>
        </ul>
      </li>
	  <li>
        <a href="?page=schedule">
		<i class="fas fa-calendar-alt" style="padding-right: 10px;"></i>
          <span>ตารางการแข่งขัน</span>
        </a>
      </li>
      <li>
        <a href="?page=results">
		<i class="fa-solid fa-trophy" style="padding-right: 5px;"></i>
          <span>ผลการแข่งขัน</span>
        </a>
      </li>
      <li>
        <a href="?page=certificate">
		<i class="fa-solid fa-award" style="padding-right: 9px;"></i>
          <span>เกียรติบัตร</span>
        </a>
      </li>
	  <li>
        <a href="?page=log_out">
		<i class="fas fa-sign-out-alt" style="padding-right: 5px;"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </nav>



  
  <main>
  <div class="container">
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
                    <h3>ฟุตซอล - ม.ปลาย ชาย</h3>
                    <p>สีแดง vs สีฟ้า</p>
                    <p>Time: 14:00</p>
                    <p>Venue: สนามปิงปอง</p>
                </div>
                <div class="event-status">
                    <p>Status: กำลังแข่งขัน</p>
                </div>
            </div>

            <div class="event-card" data-sport="Swimming">
                <div class="event-info">
                    <h3>ฟุตบอล - ม.ปลาย ชาย</h3>
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
  </div>
</main>

   
</div>
<script >
const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')

function toggleSidebar(){
  sidebar.classList.toggle('close')
  toggleButton.classList.toggle('rotate')

  closeAllSubMenus()
}

function toggleSubMenu(button){

  if(!button.nextElementSibling.classList.contains('show')){
    closeAllSubMenus()
  }

  button.nextElementSibling.classList.toggle('show')
  button.classList.toggle('rotate')

  if(sidebar.classList.contains('close')){
    sidebar.classList.toggle('close')
    toggleButton.classList.toggle('rotate')
  }
}

function closeAllSubMenus(){
  Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show')
    ul.previousElementSibling.classList.remove('rotate')
  })
}
	</script>
</body>
</html>