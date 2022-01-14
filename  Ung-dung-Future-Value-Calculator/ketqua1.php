<?php
$money = $_POST["money"];
$interest = $_POST["interest"];
$year = $_POST["year"];
for ($i =1; $i <=$year; $i++){
    $money = $money +$money*$interest;
}
echo $money;
?>
