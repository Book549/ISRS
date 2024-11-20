<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบลงทะเบียน-รายงานผลการแข่งขันกีฬาสี</title>
    <link rel="stylesheet"  href="element/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <div class="sidebar">
                <ul>
                  <li onclick="hideSidebar()" class="xicon"><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                    <li><a href="index.php"><i class="fas fa-house"></i> หน้าแรก</a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i> เข้าสู่ระบบ</a></li>
                    <li><a href="schedule.php"><i class="fas fa-clipboard-list"></i> รายการแข่งขัน</a></li>
                    <li><a href="report.php"><i class="fas fa-medal"></i> ผลการแข่งขัน</a></li>
                </ul>
            </div>
        <nav>
           

            <div class="menu" id="Mymenu">
                <ul>
                    <li><a href="index.php"><i class="fas fa-house"></i> Home</a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i> Log in</a></li>
                    <li><a href="schedule.php"><i class="fas fa-clipboard-list"></i>รายการแข่งขัน</a></li>
                    <li><a href="report.php"><i class="fas fa-medal"></i>ผลการแข่งขัน</a></li>
                </ul>
            </div>
            
            <div class="logo">
              <img src="pic/swk_logo.svg" width="60px" height="60px">
              <span class="title">
                <p >โรงเรียนสามัคคีวิทยาคม<br> SAMAKKHIWITTAYAKHOM SCHOOL</p>
                
              </span>
            </div>
            
            <div class="sc">
                <form class="search">
                    <input type="search"  id="search" class="box-search" placeholder="   Search..."> 
                    <span class="search-icon"><i class="fas fa-magnifying-glass"></i></span>
                </form>
                <span onclick="showSidebar()"><a href="#" class="bar-icon"><i class="fas fa-bars"></i></a></span>
            </div>

        </nav>
        
    </header>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic/flag.jpg" class="d-block w-100 h-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="pic/red2.jpg" class="d-block w-100 h-100" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="pic/yellow.jpg" class="d-block w-100 h-100" alt="Image 4">
    </div>
    <div class="carousel-item">
      <img src="pic/pink.jpg" class="d-block w-100 h-100" alt="Image 5">
    </div>
    <div class="carousel-item">
      <img src="pic/blue.jpg" class="d-block w-100 h-100" alt="Image 6">
    </div>
    <div class="carousel-item">
      <img src="pic/green.jpg" class="d-block w-100 h-100" alt="Image 7">
    </div>
    <div class="carousel-item">
      <img src="pic/red1.jpg " class="d-block w-100 h-100" alt="Image 8">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<center>
<section >
  <div class="additional_menu">
    <div>
      <a href="player_name.php" class="btn-menu" id="btn-player"><i class="fas fa-address-book"></i> รายชื่อนักกีฬา</a>
    </div>
  </div>
</section>
</center>


  <section>
  <div class="ndmenu-container">
    <div class="nd-menu">
        <table>
            <thead>
                <tr>
                    <th>
                        <i class="fas fa-file"></i> เอกสารงานแข่งขันต่างๆ
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr><td>แผนผังสถานที่จัดการแข่งขันกีฬาภายใน <a href="#"><i class="fa-solid fa-link"></i>image</a></td></tr>
                <tr><td>แผนที่เดินขบวนกีฬาภายใน <a href="#"><i class="fa-solid fa-link"></i>image</a></td></tr>
                <tr><td>ผังตั้งขบวนกีฬาภายใน <a href="#"><i class="fa-solid fa-link"></i>pdf</a></td></tr>
                <tr><td>แผนผังการจัดขบวนพาเหรดกีฬาสีภายใน <a href="#"><i class="fa-solid fa-link"></i>pdf</a></td></tr>
                <tr><td>รายชื่อครูประจำชั้นแบ่งตามคณะสี <a href="#"><i class="fa-solid fa-link"></i>pdf</a></td></tr>
                <tr><td>ระเบียบการแข่งขันกีฬาสีภายในโรงเรียนสามัคคีวิทยาคม <a href="#"><i class="fa-solid fa-link"></i>pdf</a></td></tr>
            </tbody>
        </table>
    </div>
</div>
  </section>

  <section>
  <div class="ndmenu-container">
    <div class="result-menu">
      <table>
        <thead>
          <span class="table_head"><i class="fas fa-trophy"> สรุปผลการแข่งขันตามคณะสี</i></span>
          <tr>
            <!-- <th style="width: 10%;">Rank</th> -->
            <th>คณะสี</th>
            <th>🥇 Gold</th>
            <th>🥈 Silver</th>
            <th>🥉 Bronze</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            // $rank_color = 0;
            $sql_view_color = "SELECT `color_id_user`, `color_color` FROM `colors`";
            $result_view_color = mysqli_query($conn, $sql_view_color);
            if (mysqli_num_rows($result_view_color) > 0) {
              while ($row_view_color = mysqli_fetch_assoc($result_view_color)) {
                // $rank_color = $rank_color + 1;
                $rank_gold = mysqli_num_rows(mysqli_query($conn,"SELECT `reward_id` FROM `reward` WHERE `reward_first` = '".$row_view_color['color_id_user']."'"));
                $rank_silver = mysqli_num_rows(mysqli_query($conn,"SELECT `reward_id` FROM `reward` WHERE `reward_second` = '".$row_view_color['color_id_user']."'"));
                $rank_bronze = mysqli_num_rows(mysqli_query($conn,"SELECT `reward_id` FROM `reward` WHERE `reward_third` = '".$row_view_color['color_id_user']."'"));
                $sum_reward = $rank_gold + $rank_silver + $rank_bronze;
                echo "<tr>
                    
                    <td>".$row_view_color['color_color']."</td>
                    <td>".$rank_gold."</td>
                    <td>".$rank_silver."</td>
                    <td>".$rank_bronze."</td>
                    <td>".$sum_reward."</td>

                  </tr>";
              }
            }else{
              echo "something is wrong..";
            }


          ?>
        </tbody>
      </table>
    </div>
</div>
  </section>

  <footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>โรงเรียนสามัคคีวิทยาคม</h4>
      <p>159 ถนนบรรพปราการ ตำบลเวียง <br> อำเภอเมือง จังหวัดเชียงราย 57000</p>
      <p>Email: samakkhisc@gmail.com</p>
    </div>

    <div class="footer-section">
      <h4>Follow Us</h4>
      <div class="social-icons">
        <a href="https://www.facebook.com/swkstudentcouncil?_rdc=1&_rdr#"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/swk.sc?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@swkstudentcouncil?_t=8Y2Sd6aXe8w&_r=1"><i class="fa-brands fa-tiktok"></i></i></a>
      </div>
    </div>
  </div>
    <div class="copyright">
      <p>© 2024 ICT CENTER SAMAKKHIWITTHAYAKHOM SCHOOL</p> 
    </div>
  </footer>

  <script>
    window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle('sticky', window.scrollY > 0);
    });

    function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
  }
    function hideSidebar(){ 
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
  }
  
  </script>
</body>
</html>
