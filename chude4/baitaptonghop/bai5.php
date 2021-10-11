<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mặt hàng</title>
	<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
	<?php

		if(isset($_POST['mathangs'])) $mathangs = $_POST['mathangs'];
		$mathangs = array(
			1 => array('mamathang'=> 'A001',
						'tenmathang'=>'Sữa tắm Xmen',
						'donvitinh'=>'Chai 50ml',
						'soluong'=> 50
			),
			2 => array('mamathang'=> 'A002',
						'tenmathang'=>'Dầu gội đầu Liteboy',
						'donvitinh'=>'Chai 50ml',
						'soluong'=> 20
			),
			3 => array('mamathang'=> 'B001',
						'tenmathang'=>'Dầu ăn Cái Lân',
						'donvitinh'=>'Chai 1 lít',
						'soluong'=> 10
			),
			4 => array('mamathang'=> 'B002',
						'tenmathang'=>'Đường Cát',
						'donvitinh'=>'1KG',
						'soluong'=> 15
			),
			5 => array('mamathang'=> 'C001',
						'tenmathang'=>'Chén sứ',
						'donvitinh'=>'Bộ 10 cái',
						'soluong'=> 2
			)

		);

				
		
		

	?>

	<h3>DANH SÁCH MẶT HÀNG</h3>
	<table border="1">
		<tr>
			<th>Mã mặt hàng</th>
			<th>Tên mặt hàng</th>
			<th>Đơn vị tính</th>
			<th>Số lượng</th>
		</tr>
		<tr>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'mamathang'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'tenmathang'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'donvitinh'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'soluong'}}<br>";
				
			}
			
		?></td>
		
					
		
		</tr>
		
		
	</table>
	
	<form action="" method="POST">

		<fieldset style="margin-left: 20px; width: 800px;">
			<legend><b>Thêm thông tin mặt hàng</b></legend>
		
			<label style="margin-left: 20px">Mã mặt hàng: </label>
			<input style="margin-top: 10px; margin-left: 10px" type="text" name="mamathang" value="<?php
				if(isset($_POST['mamathang'])) 
								echo  $_POST['mamathang']; 
			 ?>" /><br>
			<label style="margin-left: 20px">Tên mặt hàng: </label>
			<input style="margin-top: 10px; margin-left: 8px" type="text" name="tenmathang" value="<?php
				if(isset($_POST['tenmathang'])) 
								echo  $_POST['tenmathang']; 
			 ?>" /><br>
			<label style="margin-left: 20px">Đơn vị tính: </label>
			<input style="margin-top: 10px; margin-left: 22px" type="text" name="donvitinh" value="<?php
				if(isset($_POST['donvitinh'])) 
								echo  $_POST['donvitinh']; 
			 ?>" /><br>
			<label style="margin-left: 20px">Số lượng: </label>
			<input style="margin-top: 10px; margin-left: 37px" type="text" name="soluong" value="<?php
				if(isset($_POST['soluong'])) 
								echo  $_POST['soluong']; 
			 ?>"><br><br>
			<input style="background: navy; color: white; margin-left: 130px" type="submit" name="them" value="Thêm">

		</fieldset>
	</form>
	<?php 
		if(isset($_POST['mamathang'])&&isset($_POST['tenmathang'])&&isset(($_POST['donvitinh']))&&isset(($_POST['soluong'])))
		{
				$new_mathangs = array(
			    1 => array('mamathang'=> $_POST['mamathang'],
							'tenmathang'=> $_POST['tenmathang'],
							'donvitinh'=> $_POST['donvitinh'],
							'soluong'=> $_POST['soluong']
				),
				
			);
			
					$mathangs = $new_mathangs;
		}
		else{
			echo "<h4>Hãy nhập mặt hàng muốn thêm!</h4>";
		}
		
			 
		 
		// Thêm vào danh sách
	 ?>
	<center><h3>MẶT HÀNG ĐÃ THÊM</h3>
	<table border="1">
		<tr>
			<th>Mã mặt hàng</th>
			<th>Tên mặt hàng</th>
			<th>Đơn vị tính</th>
			<th>Số lượng</th>
		</tr>
		<tr>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'mamathang'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'tenmathang'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'donvitinh'}}<br>";
				
			}
			
		?></td>
			<td><?php 
			foreach($mathangs as $item)
			{
				echo "{$item{'soluong'}}<br>";
				
			}
			
		?></td>
		
					
		
		</tr>
		
		
	</table></center>

	
</body>

</body>
</html>