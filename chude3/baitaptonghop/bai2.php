<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bài tập tổng hợp - Tính tiền điện</title>
	<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
	<div style="margin: 20px auto;
	width: 400px;
	border: 2px solid navy;
	pading: 10px;">
		<form style="margin: 10px 10px 10px 10px;" action="bai2.php" method="POST">
			<h4 style="text-align: center;">THANH TOÁN TIỀN ĐIỆN</h4><br>
				Tên chủ hộ: 
					<input  style="margin-left: 10px; background-color: aqua;" type="text" name="ten" 
						value="<?php 
							if(isset($_POST['ten'])) 
								echo  $_POST['ten']; 
						?>"> <br><br>
				Chỉ số cũ: 
					<input required="" style="margin-left: 20px; background-color: oldlace;" type="text" name="csc" 
						value="<?php 
							if(isset($_POST['csc'])) 
								echo  $_POST['csc']; 
						?>"  />kw()<br><br>
				Chỉ số mới: 
					<input required="" style="margin-left: 10px; background-color: orange;" type="text" name="csm" 
						value="<?php 
							if(isset($_POST['csm'])) 
								echo  $_POST['csm'];
							?>" />kw()<br><br>
				Đơn giá: 
					<input required="" style="margin-left: 30px; background-color: olive;" type="text" name="dg" 
						value="<?php 
							$_POST['dg']=20000; 
							if(isset($_POST['dg'])) 
								echo  $_POST['dg']; 
							?>">VND<br><br>
				Số  tiền thanh toán: 
					<input style="margin-left: 30px;  text-align: center" type="text" name="" 
						value="<?php 
							if(is_numeric($_POST['csc'])&&is_numeric($_POST['csm'])&&is_numeric($_POST['dg']))
							{
								echo  ($_POST['csm']-$_POST['csc'])*$_POST['dg'];
							} 
							else echo"Hãy nhập đúng kí tự số"  
						?>" readonly=""/>VND<br><br>
			 <center>
			 	<input style=" text-align: center; background-color: yellow;" type="submit" name="thanhtoan" value="Thanh toán" >
			 </center>

		</form>
	</div>
	
</body>
</html>