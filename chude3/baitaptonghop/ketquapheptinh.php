<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html charset-UTF-8">
<title>Bài 3: Tạo trang web thực hiện phép tính trên 2 số</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
			<?php
			$n1 = "";
			$n2 = "";
			$caculate = "";
			if(isset($_POST["number1"])==true&&isset($_POST["number2"])==true && isset($_POST["caculate"])==true){
				echo $n1 = $_POST["number1"];
				echo $n2 = $_POST["number2"];
				echo $caculate = $_POST["caculate"];
				$flag = true;
				if(is_numeric($n1)&& (is_numeric($n2)) ){
					switch ($caculate) {
						case "Cộng":
							$result = $n1 + $n2;
							break;
							
						case "Trừ":
							$result = $n1 - $n2;
							break;
						case "*":
						case "Nhân":
							$result = $n1 * $n2;
							break;
						case "/":
						case "Chia":
							$result = $n1 / $n2;
							break;
						default:
							echo $result="Bạn chưa nhập đúng";
							
							break;
					}
				}
				else{
					$result = "Không thực hiện được";
					$flag = false;
				}
				
			}
		?>
	<div class="content">
		<h1>Phép tính trên 2 số</h1>
		<form action="ketquapheptinh.php" method="post" name="main-form">
			<div class="row">
				<span>Phép toán</span>
				<input readonly="" type="text" name="caculate"
				value="<?php echo $caculate;?>"/>
				
			</div>
			<div class="row">
				<span>Số thứ nhất</span>
				<input readonly="" type="text" name="number1"
				value="<?php echo $n1;?>"
				/>
				
			</div>
			
			<div class="row">
				<span>Số thứ hai</span>
				<input readonly="" type="text" name="number2"
				value="<?php echo $n2;?>"/>
				
			</div>
			
			
			<div style="margin-bottom: 20px;" class="row">
				<p>Kết quả: 
					<input style="background: yellow; text-align: center"   type="text" name="caculate" value="<?php 
					if($flag==true){
						echo $n1." ".$caculate." ".$n2. " = ".$result; 
					} else{
						echo $result;
					}
				 ?>" readonly="" />
				
				 </p>
			</div>
			<center><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></center>
			
		</form>
	</div>
</body>
</html>
