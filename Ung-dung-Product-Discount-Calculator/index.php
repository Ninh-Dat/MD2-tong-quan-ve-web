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
<form action="display_discount.php" method="post">
    <label>
        Product Description:
        <input type="text" name="ten" placeholder="Mô tả sản phẩm" >
    </label><br>
    <label>
        List Price:
        <input type="text" name="gia" placeholder="Giá niêm yết">
    </label><br>
    <label>
        Discount Percent:
        <input type="text" name="phan" placeholder="Tỷ lệ chiết khấu">
    </label><br>
    <button> Calculate Discount</button>
</form>
</body>
</html>
