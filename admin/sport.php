<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<main>
  <div class="container">
    <div class="add-sport">
    <h1 class="title" style="margin-bottom: 25px;">รายการกีฬา</h1>
  	<form action="" method="post" enctype="multipart/form-data">
  		<h3 >ป้อนข้อมูลรายการกีฬา</h3>
        <input type="text" name="sport_name" class="box_ad" placeholder="   ป้อนชื่อกีฬา" required>
        <input type="number" name="sport_number" class="box_ad" placeholder="   ป้อนจำนวนนักกีฬา" required>
		<table>
					<div>
					<label class="level">ระดับชั้น: </label>
					<select class="level">ระดับชั้น
						<option value="ม.ต้น">ม.ต้น</option>
						<option value="ม.ปลาย">ม.ปลาย</option>
					</select>
					</div>
				</table>
        <input type="submit" name="submit" value="submit" class="btn-sub">
    </form>
    </div>
    </div>
  </div>
</main>
	<ul>
	<li><a href="?page=sport&sub_page=view">แก้ไข/ลบ</a></li>
	<li><a href="?page=sport&sub_page=add">เพิ่ม</a></li>
</ul>

	<?php 
	switch ($_GET['sub_page']) {
		case 'view':
			include 'admin/view/view_sport.php';
			break;

		case 'edit':
			include 'admin/edit/edit_sport.php';
			break;

		case 'add':
			include 'admin/add/add_sport.php';
			break;

		case 'delete':
			include 'admin/delete/del_sport.php';
			break;

		default:
			if (empty($_GET['sub_page'])) {
				echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
			}else{
				echo "404 page not found.";
			}
			break;
	}
 ?>
</body>
</html>




