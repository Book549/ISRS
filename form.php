<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body><!-- จำเป็นต้องตอบคำถามนี้ -->
	<h1>ลงทะเบียนนักกีฬา</h1>
	<p>ทะเบียนกีฬาที่ต้องการ</p>
	<p>* ระบุว่าเป็นคําถามที่จําเป็น</p>
<form>
	<label>คำนำหน้า *</label>
	<select>
		<option>เลือก</option>
		<option>เด็กชาย</option>
		<option>เด็กหญิง</option>
		<option>นาย</option>
		<option>นางสาว</option>
	</select>
	<label>ชื่อ *</label>
	<input type="text" name="" maxlength="64"><br><!-- คำตอบของคุณ -->
	<label>นามสกุล *</label>
	<input type="text" name="" maxlength="64"><br>
	<label>เพศ *</label>
	<label>ชาย</label><input type="radio" name="" value="ชาย"><br>
	<label>หญิง</label><input type="radio" name="" value="หญิง"><br>

	<label>ชั้น ม. *</label>
	<input type="number" name="" min="1" max="6"><br>
	<label>ห้อง *</label>
	<input type="number" name="" min="1" max="18"><br>
	<label>คณะสี *</label>
	<select>
		<option>เลือก</option>
		<option>ตัวเลือก 1</option>
		<option>ตัวเลือก 2</option>
		<option>ตัวเลือก 3</option>
		<option>ตัวเลือก 4</option>
	</select><br>
	<label>กีฬา *</label>
	<select>
		<option>ตัวเลือก 1</option>
		<option>ตัวเลือก 2</option>
		<option>ตัวเลือก 3</option>
		<option>ตัวเลือก 4</option>
	</select><br>
	<input type="submit" name="" value="ส่ง">

</form><!--REF: https://docs.google.com/forms/d/e/1FAIpQLSevDqh4AG0R9NvWQ_LyUf9qjCvcN7q8gqhqIEaiKLUWOTkMtg/viewform -->



</body>
</html>
