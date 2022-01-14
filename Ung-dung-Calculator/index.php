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
<H1>Simple Calculator</H1>

<form action="ketqua.php" method="post">
    <table>
        <tr>
            <td>First operand:</td>
            <td><input type="text" name="first" placeholder="Nhập số"></td>
        </tr>
        <tr>
            <td>Operator:</td>
            <td>
                <SELECT name="ope">
                    <option name="cong">Phép cộng</option>
                    <option name="tru">Phép trừ</option>
                    <option name="nhan">Phép nhân </option>
                    <option name="chia">Phép chia</option>
                </SELECT>
            </td>
        </tr>
        <tr>
            <td>Second operand:</td>
            <td><input type="text" name="second" placeholder="Nhập số"></td>
        </tr>
        <tr>
            <td> </td>
            <td > <button>Calculate</button></td>
        </tr>

    </table>
</form>
</body>
</html>
<?php
