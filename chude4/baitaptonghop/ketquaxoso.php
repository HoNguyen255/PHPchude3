<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xổ số kiến thiết</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        text-align: center;
    }

    table {
        width: 500px;
        margin: 0 auto;
    }

    td {
        border: 1px solid rgba(0, 0, 0, 0.2);
    }

    td:first-of-type {
        padding: 10px;
        width: 100px;
    }

    .red {
        color: red;
    }
    </style>
</head>

<body>
    <?php
	    $xs = $_POST['xs'];
        $kq = array();
	
        function xoso($n, $m, $giai){
            global $xs;
            global $kq;

            for($i = 1; $i <= $n; $i++){
		        //tạo số cho các giải
                $rd = str_pad(rand(1,pow(10,$m)-1),$m,"0",STR_PAD_LEFT); 
                echo "<h3>" . $rd . "</h3>";

                $temp = substr($xs, -strlen($rd));
                if($temp == $rd) {
                    array_push($kq, $giai);
                }
            }
            return $temp;
        }
    ?>

    <h3>Xố số kiến thiết</h3>
    <h4>Ngày: <?php echo date('d/m/Y'); ?> </h4>

    <table>
        <tr>
            <td>Giải 8</td>
            <td class="red"> <?php xoso(1, 2, "Giải Tám"); ?></td>
        </tr>
        <tr>
            <td>Giải 7</td>
            <td> <?php xoso(1, 3, "Giải Bảy"); ?></td>
        </tr>
        <tr>
            <td>Giải 6</td>
            <td> <?php xoso(3, 4, "Giải Sáu"); ?></td>
        </tr>
        <tr>
            <td>Giải 5</td>
            <td> <?php xoso(1, 4, "Giải Năm"); ?></td>
        </tr>
        <tr>
            <td>Giải 4</td>
            <td> <?php xoso(7, 5, "Giải Tư"); ?></td>
        </tr>
        <tr>
            <td>Giải 3</td>
            <td> <?php xoso(2, 5, "Giải Ba"); ?></td>
        </tr>
        <tr>
            <td>Giải 2</td>
            <td> <?php xoso(1, 5, "Giải Nhì"); ?></td>
        </tr>
        <tr>
            <td>Giải 1</td>
            <td> <?php xoso(1, 5, "Giải Nhất"); ?></td>
        </tr>
        <tr>
            <td>Giải đặc biệt</td>
            <td class="red"> <?php xoso(1, 6, "Giải Đặc biệt"); ?></td>
        </tr>
    </table>
    <h3>Vé số của bạn là: <span class="red"> <?php echo $xs; ?> </span>
        <?php 
        if (count($kq) == 0) 
        {
            echo "<h2>Chúc bạn may mắn lần sau...</h2>";
        } else {
            echo "<h2>Chúc mừng bạn đã trúng " . $temp . " giải: ";
            foreach ($kq as $item) {
                echo $item;
            }
        }
    ?>
</body>

</html>