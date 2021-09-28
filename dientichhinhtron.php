<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bài tập tổng hợp - Tính diện tích hình tròn</title>
	<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
	<div style="margin: 20px auto;
	width: 400px;
	border: 2px solid navy;
	pading: 10px;">
		<form style="margin: 10px 10px 10px 10px;" action="dientichhinhtron.php" method="POST">
				<h4 style="text-align: center;">DIỆN TÍCH HÌNH TRÒN</h4><br>
				 
			Bán kính: <input style="margin-left: 20px; background-color: green;" type="text" name="bankinh" value="<?php if(isset($_POST['bankinh'])) echo  $_POST['bankinh']; ?>"  /><br><br>
			
			Kết quả: <input style="margin-left: 30px; text-align: center" type="text" name="" value="<?php if(isset($_POST['bankinh'])) echo  $_POST['bankinh']*3.14; ?>" readonly=""/><br><br>
			 <center><input style=" text-align: center; background-color: blue;" type="submit" name="tinh" value="Tính" ></center>

		</form>
	</div>
	
</body>
</html>
