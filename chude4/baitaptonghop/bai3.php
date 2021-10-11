<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra kết quả xổ số</title>
</head>
<body>
    <?php $xs = str_pad(rand(1,pow(10,6)-1),6,"0",STR_PAD_LEFT); ?>
    <form action="ketquaxoso.php" method="POST">
        <fieldset style="width: 200px;">
            Nhập vé số của bạn: <input type="text" name="xs" value="<?php echo $xs; ?>"/>
            </fieldset>
            <input type="submit" name="test" value="Kiểm tra" />
    </form>
</body>
</html>