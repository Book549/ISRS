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
			<th>sport_id</th>
			<th>sport_name</th>
			<th>sport_type</th>
			<th>sport_degree</th>
			<th>sport_gender</th>
			<th>sport_amount</th>
			<th>player_amount</th>
			<th>sport_note</th>
			<th>add</th>
			<th>edit</th>
			<th>del</th>
		</tr>
		<?php
			$sql_find_sports = "SELECT * FROM `sports`";
			$result_find_sports = mysqli_query($conn, $sql_find_sports);
			if (mysqli_num_rows($result_find_sports) > 0) {
				while ($row_find_sports = mysqli_fetch_assoc($result_find_sports)) {
					echo "<tr>
							<td>".$row_find_sports['sport_id']."</td>
							<td>".$row_find_sports['sport_name']."</td>
							<td>".$row_find_sports['sport_type']."</td>
							<td>".$row_find_sports['sport_degree']."</td>
							<td>".$row_find_sports['sport_gender']."</td>
							<td>".$row_find_sports['sport_amount']."</td>
							<td> XX </td>
							<td>".$row_find_sports['sport_note']."</td>
							<td class=add><a href=\"admin_sport.php?page=add_sport&sub_page=add&sport_id=".$row_find_sports['sport_id']."\">q_add</a></td>
							<td class=edit><a href=\"admin_sport.php?page=add_sport&sub_page=edit&sport_id=".$row_find_sports['sport_id']."\">edit</a></td>
							<td class=del><a href=\"admin_sport.php?page=add_sport&sub_page=del&sport_id=".$row_find_sports['sport_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no sport found...";
			}
		 ?>

	</table>
	</center>
</body>
</html>
