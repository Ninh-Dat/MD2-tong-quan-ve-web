<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    $Product = $_POST['ten'];
    $Price = $_POST['gia'];
    $Percent = $_POST['phan'];

    $Amount=$Price * $Percent * 0.1;
    $Discount_Price =$Price * $Amount *0.1; ;

echo "Mô tả sản phẩm: ".$Product.'<br>';
echo "Giá niêm yết của sản phẩm: ". $Price.'<br>';
echo "Tỉ lệ chiết khấu: ".$Percent.'<br>';
echo "Lượng chiết khấu: ".$Amount.'<br>';
echo "Giá sau khi được chiết khấu: ". $Discount_Price.'<br>';
?>


</body>
</html>
