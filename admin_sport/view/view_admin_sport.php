<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>เพิ่มจำนวนนักกีฬา</title>
	<link rel="stylesheet"  href="element/styles_admin_sport.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<center>
	<table class="table_all">
		<tr>
			<th>color_id</th>
			<th>color_name</th>
			<th>color_color</th>
			<th>color_president</th>
			<th>color_vice-president</th>
			<th>color_id_user</th>
			<th>edit</th>
		</tr>
		<?php
			$user_id = $_SESSION['user_id'];
			$sql_view_admin_sport = "SELECT * FROM `colors` WHERE `color_id_user` = '$user_id'";
			$result_view_admin_sport = mysqli_query($conn, $sql_view_admin_sport);
			if (mysqli_num_rows($result_view_admin_sport) == 1) {
				while ($row_view_admin_sport = mysqli_fetch_assoc($result_view_admin_sport)) {
					echo "<tr>
							<td>".$row_view_admin_sport['color_id']."</td>
							<td>".$row_view_admin_sport['color_name']."</td>
							<td>".$row_view_admin_sport['color_color']."</td>
							<td>".$row_view_admin_sport['color_president']."</td>
							<td>".$row_view_admin_sport['color_vice-president']."</td>
							<td>".$row_view_admin_sport['color_id_user']."</td>
							<td class=edit><a href=\"admin_sport.php?page=profile&sub_page=edit\">edit</a></td>
						</tr>";
				}
			}else{
				echo "something is wrong..";
			}
		 ?>

	</table>
	</center>
</body>
</html>
