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
<h1>
    Result:
</h1>
<?php
$toan1=$_POST["first"];
$Operator=$_POST["ope"];
$toan2=$_POST['second'];

if ($Operator ==="cong"){
    echo $toan1. '+' .$toan2. '='.$toan1 + $toan2;
}
if ($Operator ==="tru"){
    echo $toan1. '-' .$toan2. '='.$toan1 - $toan2;
}
if ($Operator =="nhan"){
    echo $toan1. '*' .$toan2. '='.$toan1 * $toan2;
}
if ($Operator =="chia"){
    echo $toan1. '/' .$toan2. '='.$toan1 / $toan2;

}
?>
</body>
</html>
