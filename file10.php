<?php
$a = $_GET["num1"];
$b = "";
if ($a % 2==0) {
    $b = "even";
}
else {
    $b = "odd";
}

print("<span>number is : ".$b."</span>")
?>