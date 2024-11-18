<?php 
  include 'conn.php'; 
  if ($_SESSION['user_role'] !== 'admin_report') {
      echo "<meta http-equiv='refresh' content='0;url=logout.php'/>";
      exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ผู้จัดการรายงานผล</title>
	<link rel="stylesheet"  href="element/styles_admin_old.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav id="sidebar">
    <ul>
      <li>
    <img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="40px" height="40px" >
        <a href="#" class="logo">ผู้จัดการรายงานผล</a>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li class="active">
        <a href="?page=main_page">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
          <span>หน้าหลัก</span>
        </a>
      </li>
      <li>
 
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
		<svg xmlns="http://www.w3.org/2000/svg"  height="24px"  viewBox="0 0 32 32"><path d="M 6 4 L 6 9 L 5 9 L 5 11 L 8 11 L 8 6 L 24 6 L 24 26 L 8 26 L 8 23 L 6 23 L 6 28 L 26 28 L 26 4 Z M 16 10 C 13.800781 10 12 11.800781 12 14 C 12 15.113281 12.476563 16.117188 13.21875 16.84375 C 11.886719 17.746094 11 19.285156 11 21 L 13 21 C 13 19.34375 14.34375 18 16 18 C 17.65625 18 19 19.34375 19 21 L 21 21 C 21 19.285156 20.113281 17.746094 18.78125 16.84375 C 19.523438 16.117188 20 15.113281 20 14 C 20 11.800781 18.199219 10 16 10 Z M 6 12 L 6 14 L 5 14 L 5 16 L 8 16 L 8 12 Z M 16 12 C 17.117188 12 18 12.882813 18 14 C 18 15.117188 17.117188 16 16 16 C 14.882813 16 14 15.117188 14 14 C 14 12.882813 14.882813 12 16 12 Z M 6 17 L 6 19 L 5 19 L 5 21 L 8 21 L 8 17 Z"/></svg>
          <span>ระบบรายงานผล</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="?page=reward">ผลการแข่งขันรายกีฬา</a></li>
            <li><a href="?page=add_player">ผลกาารแข่งขันรวม</a></li>
          </div>
        </ul>
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
<?php 
switch ($_GET['page']) {
	case 'main_page':
		echo "XXX";
		break;

	case 'reward':
		include 'admin_report/report_sport.php';
		break;

	case 'add_player':
		include 'admin_report/add/add_report_all.php';
		break;

	case 'log_out':
		echo "<meta http-equiv='refresh' content='0;url=logout.php' />";
		echo "202 page found.";
		break;
	
	default:
		if (empty($_GET['page'])) {
			echo "<meta http-equiv='refresh' content='0;url=?page=main_page' />";
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
