<body>
<?php 
switch ($_GET['sub_page']) {
  case 'view':
    include 'admin_report/add/add_report_sport.php';
    include 'admin_report/view/view_report_sport.php';
    break;

  case 'edit':
    include 'admin_report/edit/edit_report_sport.php';
    break;

  case 'del':
    include 'admin_report/del/del_report_sport.php';
    break; 



  default:
    if (empty($_GET['sub_page'])) {
      echo "<meta http-equiv='refresh' content='0;url=?page=reward&sub_page=view' />";
      exit();
    }else{
      echo "404 page not found.";
    }
    break;
}
 ?>
</body>
</html>
