<?php 
	include 'conn.php'; 
	switch ($_SESSION['user_role']) {
	case 'admin_sport':
		//do notthing
		break;

	default:
		header("Location: logout.php");
		break;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin dashboard</title>
	<link rel="stylesheet"  href="element/styles_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav id="sidebar-ad">
    <div class="logo-ad">
        <img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="50px" height="50px" >
        <span class="logo-text">Admin คณะสี</span>
    </div>
    <div>
    <ul class="menu">
      <li>
        <a href="?page=main_page" class="active"><span class="icon">
        <i class="fa-solid fa-house"></i></span>
          <span >หน้าหลัก</span>
        </a>
      </li>

       <li>
          <a href="#" class="dropdown">
          <span class="icon"><i class="fas fa-user-gear"></i></span>
          <span class="text">จัดการบัญชี </span>
          <span class="arrow"><i class="fas fa-angle-down"></i></span>
          </a>
          <ul class="submenu">
            <li><a href="?page=profile">
              <span class="icon"><i class="fa-solid fa-list"></i></span><span class="text"> จัดการคณะสี</span>
            </a></li>
          </ul>
      </li> 

      <li>
        <a href="#" class="dropdown">
          <span class="icon"><i class="fa-solid fa-person-running"></i></span>
          <span class="text">ระบบนักกีฬา </span>
          <span class="arrow"><i class="fas fa-angle-down"></i></span>
        </a>

        <ul class="submenu">
            <li><a href="?page=add_sport">
              <span class="icon"><i class="fas fa-list"></i></span>
              <span class="text">เพิ่มจำนวนนักกีฬา</span>
            </a></li>

            <li><a href="?page=add_player">
              <span class="icon"><i class="fa-solid fa-list"></i>
              </span><span class="text">จัดการนักกีฬา</span>
            </a></li>
        </ul>
      </li> 

	  <li>
        <a href="?page=log_out"><span  class="icon">
        <i class="fas fa-sign-out-alt"></i></span>
          <span>ออกจากระบบ</span>
        </a>
      </li> 
 </ul>
    <span class="toggle">
      <i class="fas fa-angle-left"></i>
    </span>
    </div>
  </nav>

  <main>
    <div class="container">
<?php 
switch ($_GET['page']) {
	case 'main_page':
		echo "202 page found.";
		break;

	case 'profile':
		include 'admin_sport/admin_sport.php';
		break;

	case 'add_player':
		include 'admin_sport/add_player.php';
		break;

	case 'add_sport':
		include 'admin_sport/add_sport.php';
		break;

	case 'log_out':
		header("Location: logout.php");
		echo "202 page found.";
		break;
	
	default:
		if (empty($_GET['page'])) {
			header("Location: ?page=main_page");
		}else{
			echo "404 page not found.";
		}
		break;
}
?>
  </div>
  </main> 	

<script>
const dropdownButtons = document.querySelectorAll('.dropdown');
const toggleBtn = document.querySelector('.toggle');
const nav = document.querySelector('nav');

dropdownButtons.forEach((dropdownBtn) => {
  dropdownBtn.addEventListener('click', function(e) {
    e.preventDefault();
    nav.classList.remove('hide');
    const submenu = this.nextElementSibling;

    // Close any other open submenus
    document.querySelectorAll('.submenu.show').forEach(openSubmenu => {
      if (openSubmenu !== submenu) {
        openSubmenu.classList.remove('show');
      }
    });

    // Toggle the current submenu
    submenu.classList.toggle('show');
  });
});

toggleBtn.addEventListener('click', function() {
  nav.classList.toggle('hide');
  submenu.classList.remove(show);
});



</script>
</body>
</html>
