<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bai 1 - chủ đề 4</title>
</head>
<body>
	<?php 

		if(isset($_POST['n'])) $n = $_POST['n'];
		else
			$n = 0;
		$ketqua="";
		if(isset($_POST['kq']))
		{
			// tạo mảng có n phần tử, các phần tử có giá trị là số nguyên
			$arr = array();
			$z = rand(0,99);
			for ($i=0; $i < $n; $i++) { 
				$x = rand(0,100);
				$arr[$i]=$x;
			}
			
			// in ra mảng vừa tạo
			$ketqua="Mảng được tạo là: ".implode(" ",$arr)."&#13;&#10;";
			function themso($offset, $z, &$arr, &$ketqua)
			{

				array_splice($arr, $offset, 0, $z);
				$vitri = $offset + 1;
				$themso = "Mảng sau khi thêm số $z vào vị trí $vitri: ".implode(" ",$arr)."\n";
				$ketqua .= $themso;
			}
			$offset = rand(0, $n);
			themso($offset, $z, $arr, $ketqua);
			function sapxep($offset, $n, $z, &$arr, &$ketqua)
			{
				$arr1 = array();
				for($i = 0; $i < $offset; $i++)
				{
					$arr1[$i] = $arr[$i];
				}
				asort($arr1);

				$arr2 = array();
				for($i = $n; $i > $offset; $i--)
				{
					$arr2[$i] = $arr[$i];
				}
				arsort($arr2);

				array_push($arr1, $z);
				$arr = $arr1 + $arr2;
				$sx = "Mảng sau khi sắp xếp: ".implode(" ",$arr)."\n";
				$ketqua .= $sx;
			}
			sapxep($offset, $n, $z, $arr, $ketqua);
			



		}


	 ?>
	 <div style="margin: 20px auto;
	width: 400px;
	border: 2px solid navy;
	pading: 10px;">
	 <form action="bai1.php" method="POST">
	 	<b>Nhập n: </b><input type="text" name="n" value="<?php echo $n; ?>"/>
	 	<input type="submit" name="kq" value="Hiển thị"/> <br> <br>
	 	<b>Kết quả: </b><br>
	 	<center><textarea style="margin-top: 10px; width: 300px; height: 150px;" name="ketqua">
			 	<?php 
				 	if(is_numeric($_POST['n']))
				 	{
				 		echo $ketqua; 
					 	$sapxep = sort($arr);
							echo "Sắp xếp mảng tăng dần theo giá trị: ";
							foreach($arr as $sapxep)
							{
								echo $sapxep." ";
							}
				 	}
				 	else
				 	{
				 		echo "Hãy nhập số !";
				 	}
			 		
			 	?>
	 	
	 </textarea></center>

	 </form>
	</div>

</body>
</html>