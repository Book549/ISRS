<body>
    <h6>add set_sport(live saver)</h6>
    <center>
        <form method="post" action="" class="add_sport_all">
            <label for="sport_name">ชื่อกีฬา:</label><input type="text" class="box_sport" name="sport_name" id="sport_name"><br>
            <label for="sport_type">ชนิดกีฬา:</label><input type="text" class="box_sport" name="sport_type" id="sport_type"><br>
            <label for="sport_amount">จำนวนนักกีฬา:</label><input type="text" class="box_sport" name="sport_amount" id="sport_amount"><br>
            <label for="sport_note">หมายเหตุ:</label><input type="text" class="box_sport" name="sport_note" id="sport_note"><br>
            <center>
                <input type="submit" name="add_sport" class="btn">
            </center>
        </form>
    </center>
    <?php 
        if ($_POST['add_sport']) {
        	$sport_name = $_POST['sport_name'];
        	$sport_type = $_POST['sport_type'];
        	$sport_amount = $_POST['sport_amount'];
        	$sport_note = $_POST['sport_note'];
        	unset($_POST);
        	$find_same_sport = "SELECT * FROM `sports` WHERE `sport_type` = '$sport_type'";
        	$result_find_add_sport = mysqli_query($conn, $find_same_sport);
        	if (mysqli_num_rows($result_find_add_sport) == 0) {
        
        		$sql_add_sport_00  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมต้น ชาย','$sport_type','มัธยมต้น','ชาย','$sport_amount','$sport_note')";
        		$sql_add_sport_01  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมต้น หญิง','$sport_type','มัธยมต้น','หญิง','$sport_amount','$sport_note')";
        		$sql_add_sport_02  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมปลาย ชาย','$sport_type','มัธยมปลาย','ชาย','$sport_amount','$sport_note')";
        		$sql_add_sport_03  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมปลาย หญิง','$sport_type','มัธยมปลาย','หญิง','$sport_amount','$sport_note')";
        
        		$result_add_sport_00 = mysqli_query($conn, $sql_add_sport_00);
        		$result_add_sport_01 = mysqli_query($conn, $sql_add_sport_01);
        		$result_add_sport_02 = mysqli_query($conn, $sql_add_sport_02);
        		$result_add_sport_03 = mysqli_query($conn, $sql_add_sport_03);
        		if ($result_add_sport_00 ||$result_add_sport_01 ||$result_add_sport_02 ||$result_add_sport_03 ) {
        
        			echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
        			echo "Success";
        		}else{
        			echo "Fall";
        		}
        
        		// if (mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.1 ชาย','$sport_type','อื่นๆ','ชาย','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 1 $sport_note')") 
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.1 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 1 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.2 ชาย','$sport_type','อื่นๆ','ชาย','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 2 $sport_note')") 
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.2 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 2 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.3 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 3 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.3 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 3 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.4 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 4 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.4 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 4 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.5 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 5 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.5 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 5 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.6 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 6 $sport_note')")
        		// 	&& mysqli_query($conn, "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name ม.6 หญิง','$sport_type','อื่นๆ','หญิง','$sport_amount','ระดับชั้นมัธยมศึกษาปีที่ 6 $sport_note')")
        		// ) {
        
        		// 	echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
        		// 	echo "Success";
        		// }else{
        		// 	echo "Fall";
        		// }
        
        	}elseif (mysqli_num_rows($result_find_add_sport) > 0) {
        
        		echo "duplicate sport";
        
        		$sql_add_sport_00  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมต้น ชาย','$sport_type','มัธยมต้น','ชาย','$sport_amount','$sport_note')";
        		$sql_add_sport_01  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมต้น หญิง','$sport_type','มัธยมต้น','หญิง','$sport_amount','$sport_note')";
        		$sql_add_sport_02  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมปลาย ชาย','$sport_type','มัธยมปลาย','ชาย','$sport_amount','$sport_note')";
        		$sql_add_sport_03  = "INSERT INTO `sports`(`sport_name`, `sport_type`, `sport_degree`, `sport_gender`, `sport_amount`, `sport_note`) VALUES ('$sport_name มัธยมปลาย หญิง','$sport_type','มัธยมปลาย','หญิง','$sport_amount','$sport_note')";
        
        		$result_add_sport_00 = mysqli_query($conn, $sql_add_sport_00);
        		$result_add_sport_01 = mysqli_query($conn, $sql_add_sport_01);
        		$result_add_sport_02 = mysqli_query($conn, $sql_add_sport_02);
        		$result_add_sport_03 = mysqli_query($conn, $sql_add_sport_03);
        		if ($result_add_sport_00 ||$result_add_sport_01 ||$result_add_sport_02 ||$result_add_sport_03 ) {
        
        			echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
        			echo "Success";
        		}else{
        			echo "Fall";
        		}
        
        		
        	}
        	$result_find_add_sport = mysqli_query($conn, $find_same_sport);
        		while ($row_find_sport = mysqli_fetch_assoc($result_find_add_sport)) {
        			foreach ($row_find_sport as $key => $value) {
        				echo "$key => $value<br>";
        			}
        		}
        }
        
        	
        
        	
        ?>
</body>