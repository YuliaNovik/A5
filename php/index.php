<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<body style='background-color:#fae6ee'>";
echo '<span style="color:#660b0b;text-align:center;"><h1>Thanks for your order.'
 . ' Here it is:</h1></span><br><br>';

$size = $_POST["size"];
$coffee = $_POST["coffee"];
$cream = $_POST["cream"];
$sugar = $_POST["sugar"];
$price = 0;
$sum = 0;
$tax = 1.13;
$x;


for ($x = 0; $x < $coffee; $x++) {
    if ($size == "s") {
        echo "<img src='image/cup.jpg' width='60' height='85'/>";
    }
    if ($size == "m") {
        echo "<img src='image/cup.jpg' width='85' height='120'/>";
    }
    if ($size == "l") {
        echo "<img src='image/cup.jpg' width='110' height='170'/>";
    }
    if ($size == "xl") {
        echo "<img src='image/cup.jpg' width='130' height='220'/>";
    }


    if ($size == "s") {
        $price = 1.59;
    }
    if ($size == "m") {
        $price = 1.79;
    }
    if ($size == "l") {
        $price = 1.99;
    }
    if ($size == "xl") {
        $price = 2.19;
    }

    for ($a = 0; $a < $cream; $a++) {
        if ($a == 0) {
            echo "<img src='image/plus.jpg' width='20' height='20'/>";
        }
        echo "<img src='image/cream.jpg' width='50' height='50'/>";
        // }
    }

    for ($b = 0; $b < $sugar; $b++) {
        if ($b == 0) {
            echo "<img src='image/plus.jpg' width='20' height='20'/>";
        }
        echo "<img src='image/sugar.jpg' width='41' height='50'/>";
        // }
    }
    echo "<br>";
    $sum += $price * $tax;
}
echo "<br>";
if (empty(!$price)) {
    echo "<p>Cost: $" . $price . " x " . $x . " + tax = <b>" . sprintf("%.2f", $sum)
    . "</p></b";
}



$sizeS = $_POST["sizeS"];
$coffeeS = $_POST["coffeeS"];
$choice = $_POST["choice"];
$priceS = 0;
$y = 0;
$sumS = 0;





for ($y = 0; $y < $coffeeS; $y++) {

    if ($sizeS == "s") {
        echo "<img src='image/cup.jpg' width='50' height='85'/";
    }
    if ($sizeS == "m") {
        echo "<img src='image/cup.jpg' width='85' height='120'/>";
    }
    if ($sizeS == "l") {
        echo "<img src='image/cup.jpg' width='110' height='170'/>";
    }
    if ($sizeS == "xl") {
        echo "<img src='image/cup.jpg' width='130' height='220'/>";
    }


    if ($sizeS == "s") {
        $priceS = 1.59;
    }
    if ($sizeS == "m") {
        $priceS = 1.79;
    }
    if ($sizeS == "l") {
        $priceS = 1.99;
    }
    if ($sizeS == "xl") {
        $priceS = 2.19;
    }

    if ($choice == "regular") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    if ($choice == "doubleD") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    if ($choice == "tripleT") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>";
        echo "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/cream.jpg' width='50' height='50'/>"
        . "<img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    if ($choice == "black") {
        echo "<br><br>";
    }

    if ($choice == "blackS") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    if ($choice == "blackTS") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    if ($choice == "blackThS") {
        echo "<span style='white-space: nowrap;'</span><img src='image/plus.jpg' width='20' height='20'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/>"
        . "<img src='image/sugar.jpg' width='41' height='50'/><br>";
    }

    echo "<br>";
    $sumS += $priceS * $tax;
}
echo "<br>";
if (empty(!$priceS)) {
    echo "<p>Cost: $" . $priceS . " x " . $y . " + tax = <b>" . sprintf("%.2f", $sumS)
    . "</p></b";
}
