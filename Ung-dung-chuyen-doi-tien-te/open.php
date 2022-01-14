<?php
$usd=$_POST["usd"];
$rate =23000;
if ($usd==""){
    echo "Nhập số đô cần chuyển";
}
else{

    echo $usd." USD = ". $usd*$rate." VND";
}
?>