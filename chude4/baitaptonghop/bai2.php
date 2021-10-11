<html>
   
   <head>
      <title>Tính tổng dãy số trong PHP</title>
   </head>
   <body>
   
       <?php
       if(isset($_POST['n'])) $n = $_POST['n'];
		else
			$n = 0;

		
       
       ?>
        <div style="margin: 20px auto;
	width: 400px;
	border: 2px solid navy;
	pading: 10px;">
	 <form action="bai2.php" method="POST">
	 	<b><label style="margin-top: 10px; margin-left: 10px">Nhập dãy số:</label> </b><input style="margin-top: 10px; " type="text" name="n" value="<?php echo $n; ?>"/> <br>
	 	<input style="margin-left: 105px; margin-top: 10px; background-color: navy; color: white;" type="submit" name="kq" value="Tổng dãy số"/> <br> 
	 	<b><label style=" margin-left: 10px">Tổng dãy số:</label> </b>
	 	<input type="text" name="tongdayso"  style="margin-top: 10px; width: 100px; height: 50px;" name="tongdayso" readonly=""

	 		value="<?php 
	 			$n ="";
	 			$tongdayso = "";
	 			$error ="";
	 			if(($_SERVER['REQUEST_METHOD']=='POST'))
	 			{
	 				if($_POST['n']!= "")
	 				{
	 					$n = trim($_POST['n']);
	 					$arr = explode(",", $n);
	 					$tongdayso = array_sum($arr);
	 					echo $tongdayso;
	 				}
	 				else{
	 					echo $error = "Vui lòng nhập dãy số và các số nhập vào cách nhau bởi dấu ,";
	 				}
	 			}
	 		 ?>" 
	 	>
	 		
	 		

	 </form>
	</div>
   </body>
</html>