
<?php 
  include 'conn.php'; 
  if ($_SESSION['user_role'] !== 'admin_system') {
      header("Location: logout.php");
      exit();
  }
?>
  
<!DOCTYPE html>
<html lang="th">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผู้จัดการระบบ</title>
    <link rel="stylesheet"  href="element/styles_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <nav id="sidebar">
    <img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="40px" height="40px" >
        <span class="logo">ผู้จัดการระบบ</span>
    <ul class="menu">
      <li>
        <a href="?page=main_page">
        <i class="fa-solid fa-house"></i>
          <span>หน้าหลัก</span>
        </a>
      </li>

       <li>
          <a href="#" class="dropdown">
          <span class="icon"><i class="fa-solid fa-list"></i></span>
          <span class="text">จัดการบัญชี</span>
          <span class="arrow"><i class="fa-solid fa-angle-down"></i></span>
          </a>
          <ul class="submenu">
            <li><a href="?page=admin_system">
              <span><i class="fa-solid fa-list"></i></span><span class="text">Admin ผู้จัดการระบบ</span>
            </a></li>

            <li><a href="?page=admin_sport">
               <span><i class="fa-solid fa-list"></i><span class="text">Admin คณะสี</span>
            </a></li>

            <li><a href="?page=admin_report">
             <span><i class="fa-solid fa-list"></i><span class="text">Admin รายงานผล</span>
            </a></li>
          </ul>
      </li> 

      <li>
        <a href="?page=main_page">
        <i class="fa-solid fa-list"></i>
          <span>ระบบนักกีฬา</span>
        </a>
      </li> 

      <li>
        <a href="?page=schedule">
        <i class="fas fa-calendar-alt"></i>
          <span>ตารางการแข่งขัน</span>
        </a>
      </li> 

      <li>
        <a href="?page=results">
        <i class="fa-solid fa-trophy"></i>
          <span>ผลการแข่งขัน</span>
        </a>
      </li> 

      <li>
        <a href="?page=certificate">
        <i class="fa-solid fa-award"></i>
          <span>เกียรติบัตร</span>
        </a>
      </li> 

      <li>
        <a href="?page=log_out">
        <i class="fas fa-sign-out-alt"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li> 

      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
    <i class="fas fa-user-cog"></i>
          <span>จัดการบัญชี</span>
          <img id="rotated" src="element/svg/single_arrow_left.svg" height="12px" width="12px">
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
    <i class="fas fa-basketball-ball" ></i>
          <span>ระบบนักกีฬา</span>
         <img id="rotated" src="element/svg/single_arrow_left.svg" height="12px" width="12px">
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="?page=sport">ประเภทกีฬา</a></li>
            <li><a href="?page=player">นักกีฬา</a></li>
          </div>
        </ul>
      </li>


 
    </ul>
  </nav>
  <main>
    <div class="container">
      <?php 
        switch ($_GET['page']) {
          case 'main_page':
            echo "202 page found.";
            break;

          case 'admin_system':
            include 'admin/admin_system.php';
            break;

          case 'admin_sport':
            echo "202 page found.";
            break;

          case 'admin_report':
            echo "202 page found.";
            break;

          case 'sport':
            include 'admin/sport.php';
            break;
            
          case 'player':
            include 'admin/player.php';
            break;

          case 'schedule':
            echo "202 page found.";
            break;

          case 'results':
            echo "202 page found.";
            break;
            
          case 'certificate':
            echo "202 page found.";
            break;

          case 'log_out':
            header ("Location: logout.php");
            exit();
            break;
          
          default:
            if (empty($_GET['page'])) {
              header("Location: ?page=main_page");
              exit();
            }else{
              echo "404 page not found.";
            }
            break;
        }
      ?>
    </div>
  </main>
<script>
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
