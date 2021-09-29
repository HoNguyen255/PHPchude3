<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bài tập tổng hợp - Tính diện tích chữ nhật</title>
	<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
	<div style="margin: 20px auto;
	width: 400px;
	border: 2px solid navy;
	pading: 10px;">
		<form style="margin: 10px 10px 10px 10px;" action="bai1.php" method="POST">
			<h4 style="text-align: center;">DIỆN TÍCH HÌNH CHỮ NHẬT</h4><br>
				 
				Chiều dài: 
				<input required="" style="margin-left: 20px; background-color: green;" type="text" name="chieudai" value="<?php 
						if(isset($_POST['chieudai'])) 
							echo  $_POST['chieudai']; 
					?>"  /><br><br>
				Chiều rộng: 
				<input required="" style="margin-left: 10px; background-color: yellow;" type="text" name="chieurong" value="<?php 
						if(isset($_POST['chieurong'])) 
							echo  $_POST['chieurong']; 
					?>" /><br><br>
				Diện tích: 
				<input style="margin-left: 23px; text-align: center" type="text" name="" placeholder="Hãy nhập chiều dài và rộng" value="<?php 
						if(is_numeric($_POST['chieurong'])&&is_numeric($_POST['chieudai']))
						{
							echo  $_POST['chieurong']*$_POST['chieudai'];}  else {echo "Hãy nhập đúng kí tự số";
						}  ?>"  readonly=""/><br><br>
			 <center>
			 		<input style=" text-align: center; background-color: blue;" type="submit" name="tinh" value="Tính" >
			 </center>

		</form>
	</div>
	
</body>
</html>