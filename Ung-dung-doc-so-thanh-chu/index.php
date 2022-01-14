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
<form action="" method="get">
    <input type="text" name="number" placeholder="Nhập số cần đọc">
    <button>Read</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["number"])) {
        $number = $_GET["number"];
        readNumber($number);
    }
}
function readNumber($number)
{
    if ($number >= 0 && $number < 10) {
        echo oneDigit($number);
    } else if ($number < 100) {
        echo towDigit($number);
    } else if ($number < 1000) {
        echo threeDigit($number);
    } else if ($number < 10000) {
        echo fourDigit($number);
    } else {
        echo "Vui lòng nhập số cần đọc";
    }
}
function oneDigit($number)
{
    $oneDigit = [0 => "Zero", 1 => "One", 2 => "Two", 3 => "Three", 4 => "Four", 5 => "Five", 6 => "Six", 7 => "Seven", 8 => "Eight", 9 => "Nine"];
    return $oneDigit[$number];
}

function towDigit($number)
{
    $teen = [10 => "Ten", 11 => "Eleven", 12 => "Twelve", 13 => "Thirteen", 14 => "Fourteen", 15 => "Fifteen", 16 => "Sixteen", 17 => "Seventeen", 18 => "Eighteen", 19 => "Nineteen"];
    $ty = [2 => "Twenty", 3 => "Thirty", 4 => "Forty", 5 => "Fifty", 6 => "Sixty", 7 => "Seventy", 8 => "Eighty", 9 => "Ninety"];
    if ($number < 20) {
        return $teen[$number];
    } else if ($number % 10 == 0) {
        return $ty[$number];
    } else {
        return $ty[$number[0]] . " " . oneDigit($number[1]);
    }
}

function threeDigit($number)
{
    if ($number % 100 == 0) {
        return oneDigit($number[0]) . " hundred ";
    } else if ($number[1] == 0) {
        return oneDigit($number[0]) . " hundred and" . oneDigit($number[2]);
    } else {
        return oneDigit($number[0]) . " hundred " . towDigit($number[1] . $number[2]);
    }
}

function fourDigit($number)
{
    if ($number % 1000 == 0) {
        return oneDigit($number[0]) . " thousand";
    } else if ($number[1] == 0) {
        return oneDigit($number[0]) . " thousand and " . oneDigit($number[3]);
    } else {
        return oneDigit($number[0]) . " thousand " . oneDigit($number[0]) . " hundred " . towDigit($number[1] . $number[2]);
    }
}

?>

</body>
</html>

