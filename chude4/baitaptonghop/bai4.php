<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4 - chủ đề 4</title>
   
</head>
<body>
<?php
		if(isset($_POST["m"]))
            $m = $_POST["m"];
        else $m = null;
		if(isset($_POST["n"]))
            $n = $_POST["n"];
        else $n = null;

		function TaoMT($mt,$m,$n)
		{
			$arr = array();
			for ($i = 0; $i < $m; $i++)
				for ($j = 0; $j < $n; $j++)
					$mt[$i][$j] = rand(-200,200);
			$arr = $mt;
			return $arr;			
		}

		function XuatMT($mt,$m,$n)
		{
			$arr = "<table class='b' style='text-align:center;' bgcolor='white'>";
			for ($i = 0; $i < $m; $i++)
			{
				$arr = $arr."<tr>";
				for ($j = 0; $j < $n; $j++)
					$arr = $arr."<td style='border:1px solid white; '>".$mt[$i][$j]."</td>";
				$arr = $arr."</tr>";
			}
			$arr = $arr."</table>";
			return $arr;
		}

        function SoPhanTuCoSoCuoiLe($mt,$m,$n){
            $dem = 0;
            for ($i = 0; $i < $m; $i++)
				for ($j = 0; $j < $n; $j++){
                    $matrix = "";
                    $doDai = strlen($mt[$i][$j]);
                    $matrix .= $mt[$i][$j];
                    if($matrix[$doDai-1] % 2 != 0)
                        $dem++;
                }
            return $dem;
        }
        

		$arr = array();
        $matrix = "";
		if (isset($_POST["xuly"]))
		{
			if(!is_numeric($m) || $m < 2)
				echo "<script>alert('Phải nhập vào m >= 2')</script>";		
			else
			if(!is_numeric($n) || $n > 10 || $n <= 0)
				echo "<script>alert('Phải nhập vào n là số nguyên dương và <= 10')</script>";		
			else
			{
				$arr = TaoMT($arr,$m,$n);
				$matrix = XuatMT($arr,$m,$n);
                $soPhanTuCuoiLe = SoPhanTuCoSoCuoiLe($arr,$m,$n);
			}				
		}
	?>

	<form action="" method="POST">
		<center>
		<fieldset style="width: 600px;">
			<legend><h4 style="color: navy;">Tạo ma trận ngẫu nhiên</h4></legend>
		
	    <table style="" border="0" class="a">
           
            <tr>
                <td><b>Nhập số dòng: </b></td>
                <td><input type="text" name="m" value="<?php echo $m;?>"/></td>
            </tr>
            <tr>
                <td><b>Nhập số cột: </b></td>
                <td><input type="text" name="n" value="<?php echo $n;?>"/></td>
            </tr>
            <tr>
            	<td></td>
                <td ><input  style="background: navy; color: white;" type="submit" value="Tạo ma trận" name="xuly"/></td>
            </tr>
            <tr>
                <td><b>Ma trận vừa tạo:</b></td>
                <td><?php if(isset($_POST["xuly"])) echo $matrix; ?></td>
            </tr>
            <tr>
                <td><b>Số phần tử có số cuối lẻ là:</b></td>
                <td><?php if(isset($_POST["xuly"])) echo $soPhanTuCuoiLe; ?></td>
            </tr>
		</table>
		</fieldset>
		</center>
	</form>

</body>
</html>