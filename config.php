<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chủ đề 3 - BTTH - Bài 4</title>
</head>
<body>
	<form action="config.php" method="GET">

				 <h4>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h4>
			<?php echo 'Họ tên: ';  echo $_POST['name']."<br>"; echo'Địa chỉ: '; echo $_POST['diachi']."<br>" ; echo'Số điện thoại: '; echo $_POST['sdt']."<br>" ;
					echo 'Giới tính: '; echo $_POST['gender']."<br>";
					echo 'Quốc tịch: '; echo $_POST['qt']."<br>";
					echo 'Các môn đã học: '; echo $_POST['mdh']."<br>" ;
					
					echo 'Ghi chú: '; echo $_POST['ghichu'];
			?> 

		</form>
		<a href="javascript:window.history.back(-1);">Trở về trang trước</a>
</body>
</html>