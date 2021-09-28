<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Chủ đề 3 - bài 4</title>
</head>
<body>	
		<form action="config.php" method="POST">
			<fieldset>
				<legend><h4>Enter your information in the form below: </h4></legend>
			<b>Họ tên: </b><input style="margin-left: 80px" type="text" name="name" value="<?php if(isset($_POST['name'])) echo  $_POST['name']; ?>"><br><br>
			<b>Địa chỉ: </b><input style="margin-left: 76px" type="text" name="diachi" value="<?php if(isset($_POST['diachi'])) echo  $_POST['diachi']; ?>"><br><br>
			<b>Số điện thoại: </b><input style="margin-left: 35px" type="text" name="sdt" value="<?php if(isset($_POST['sdt'])) echo  $_POST['sdt']; ?>"><br><br>
			<b>Giới tính: </b> <i style="margin-left: 60px">Nam</i><input type="radio" name="gender" value="nam">
			<?php if(isset($_POST['gender'])&&$_POST['gender']=='nam') echo 'checked="nam"';  ?>
			<i>Nữ</i><input type="radio" name="gender" value="nữ">
			<?php if(isset($_POST['gender'])&&$_POST['gender']=='nữ') echo 'checked="nữ"';  ?>
			<br><br>
			<b>Quốc tịch: </b><select style="margin-left: 58px" name="qt">
				<option  value="vietnam"><?php if(isset($_POST['qt'])&&$_POST['qt']=='vietnam') echo ''; ?>Việt Nam</option>
				<option value="nhatban"><?php if(isset($_POST['qt'])&&$_POST['qt']=='nhatban') echo 'selected = "selected"'; ?>Nhật Bản</option>
			</select><br><br>
			<b>Các môn đã học: </b><?php if(isset($_POST['mdh'])&&$_POST['mdh']=='php') echo 'checked="php"';  ?><input style="margin-left: 15px" type="checkbox" name="mdh" value="php"> PHP & MYSQL  <?php if(isset($_POST['mdh'])&&$_POST['mdh']=='c') echo 'checked="c"';  ?><input type="checkbox" name="mdh" value="c"> C# <?php if(isset($_POST['mdh'])&&$_POST['mdh']=='xml') echo 'checked="xml"';  ?><input type="checkbox" name="mdh" value="xml">XML<?php if(isset($_POST['mdh'])&&$_POST['mdh']=='python') echo 'checked="python"';  ?><input type="checkbox" name="mdh" value="python">Python<br><br>
			<b>Ghi chú: </b><textarea style="margin-left:70px" name="ghichu" value="<?php if(isset($_POST['ghichu'])) echo  $_POST['ghichu']; ?>"></textarea><br><br>
			<input type="submit" name="" value="Gửi">
			<input type="reset" name="" value="Hủy">
			</fieldset>
			
		</form>

		
</body>
</html>