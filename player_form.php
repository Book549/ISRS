<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="element/styles_admin_sport.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ลงทะเบียนนักกีฬา</title>
</head>
<body><!-- จำเป็นต้องตอบคำถามนี้ -->
	<center>
	<div class="form-container">
	<div class="head_signup">
	<h1 ><a href="index.php" style="text-decoration: none; color: black; " >ลงทะเบียนนักกีฬา</a></h1>
	<p>ทะเบียนกีฬาที่ต้องการ</p>
	<p>* ระบุว่าเป็นคําถามที่จําเป็น</p>
</div>
	</div>
</center>
	<center>
<form class="add_sport_all">

	<label>คำนำหน้า *</label>
	<select class="select_box">
		<option>เลือก</option>
		<option>เด็กชาย</option>
		<option>เด็กหญิง</option>
		<option>นาย</option>
		<option>นางสาว</option>
	</select>
	<label>ชื่อ *</label>
	<input type="text" name="" class="box_sport" maxlength="64"><br><!-- คำตอบของคุณ -->
	<label>นามสกุล *</label>
	<input type="text" name=""  class="box_sport" maxlength="64"><br>
	<div class="radio_group">
	<label>เพศ *</label>	
		<select class="select_box" required>
		<option value="">เลือกเพศ</option>
		<option value="ชาย">ชาย</option>
		<option value="หญิง">หญิง</option>
	</select>
	<br>

	<label>ชั้น ม. *</label>
		<select class="select_box" required>
		<option value="">เลือกชั้น ม.</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select>
	<label>ห้อง *</label>
		<select class="select_box" required>
		<option value="">เลือกห้อง</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
		<option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
		<option value="17">17</option>
	</select>
	<br>
	<label>คณะสี *</label>
	<select class="select_box">
		<option>เลือกคณะสี 	</option>
		<option>ตัวเลือก 1</option>
		<option>ตัวเลือก 2</option>
		<option>ตัวเลือก 3</option>
		<option>ตัวเลือก 4</option>
	</select><br>

	<label>กีฬา *</label>
	<select class="select_box">
		<option>ตัวเลือก 1</option>
		<option>ตัวเลือก 2</option>
		<option>ตัวเลือก 3</option>
		<option>ตัวเลือก 4</option>
	</select><br>
	<center>
	<input type="submit" name="" value="ส่ง" class="btn">
	</center>
	
</form><!--REF: https://docs.google.com/forms/d/e/1FAIpQLSevDqh4AG0R9NvWQ_LyUf9qjCvcN7q8gqhqIEaiKLUWOTkMtg/viewform -->
	</center>
	


</body>
</html>
