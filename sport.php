<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="element/styles.css">
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/>
                        </svg>
                    </button>
                </li>
                <li class="active">
                    <a href="admin_system.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/>
                        </svg>
                        <span>หน้าหลัก</span>
                    </a>
                </li>
                <li>
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                        <i class="fas fa-user-cog" style="padding-right:5px;"></i>
                        <span>จัดการบัญชี</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/>
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/>
                        </svg>
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
                <div class="add-sport">
                    <h1 class="title" >รายการกีฬา</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3 >ป้อนข้อมูลรายการกีฬา</h3>
                        <input type="text" name="sport_name" class="box_ad" placeholder="   ป้อนชื่อกีฬา" required>
                        <p>ระดับชั้น :</p>
                            <input type="radio" id="html" name="sport_level" value="ม.ต้น">
                            <label for="html">ม.ต้น</label><br>
                            <input type="radio" id="css" name="sport_level" value="ม.ปลาย">
                            <label for="css">ม.ปลาย</label><br>
                        <input type="number" name="sport_number" class="box_ad" placeholder="   ป้อนจำนวนนักกีฬา" required>
                        <input type="submit" name="submit" value="submit" class="btn">
                    </form>
                </div>
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