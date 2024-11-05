<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>เพิ่มรายชื่อนักกีฬา</title>
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
			<th>player_id</th>
			<th>player_title</th>
			<th>player_name</th>
			<th>player_mid_name</th>
			<th>player_sirname</th>
			<th>player_class</th>
			<th>player_room</th>
			<th>player_gender</th>
			<th>player_color_id</th>
			<th>player_sport_id</th>
		</tr>
		<?php
			$sql_find_players = "SELECT * FROM `players`";
			$result_find_players = mysqli_query($conn, $sql_find_players);
			if (mysqli_num_rows($result_find_players) > 0) {
				while ($row_find_players = mysqli_fetch_assoc($result_find_players)) {
					echo "<tr>
							<td>".$row_find_players['player_id']."</td>
							<td>".$row_find_players['player_title']."</td>
							<td>".$row_find_players['player_name']."</td>
							<td>".$row_find_players['player_mid_name']."</td>
							<td>".$row_find_players['player_sirname']."</td>
							<td>".$row_find_players['player_class']."</td>
							<td>".$row_find_players['player_room']."</td>						
							<td>".$row_find_players['player_gender']."</td>
							<td>".$row_find_players['player_color_id']."</td>
							<td>".$row_find_players['player_sport_id']."</td>
							<td class=edit><a href=\"admin_sport.php?page=add_player&sub_page=edit&player_id=".$row_find_players['player_id']."\" >edit</a></td>
							<td class=del><a href=\"admin_sport.php?page=add_player&sub_page=del&player_id=".$row_find_players['player_id']."\">del</a></td>
						</tr>";
				}
			}else{
				echo "no player found...";
			}
		 ?>

	</table>
	</center>
</body>
</html>
