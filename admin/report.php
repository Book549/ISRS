<body>
<?php 
switch ($_GET['sub_page']) {
  case 'view':
    include 'admin/add/add_report_sport.php';
    include 'admin/view/view_report_sport.php';
    break;

  case 'edit':
    include 'admin/edit/edit_report_sport.php';
    break;

  case 'del':
    include 'admin/del/del_report_sport.php';
    break; 



  default:
    if (empty($_GET['sub_page'])) {
      echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=view' />";
      exit();
    }else{
      echo "404 page not found.";
    }
    break;
}
 ?>
</body>
</html>
