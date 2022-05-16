<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $price = 100;
    $vat = 0.21;

    function calculateVat($price, $vat) {
        $calculatedPrice = ($price * $vat) + $price;
        return $calculatedPrice;
    }

    echo "Price: " . $price ."<br>";
    echo "Vat: " . $vat ."<br>";
    echo "Total price: " . calculateVat($price, $vat) ."<br>";

    $year = 2022;

    function isLeapYear($year) {
        if ($year % 400 == 0 || $year % 4 == 0 ) {
            return true;
        } else {
            return false;
        }
    }

    if (isLeapYear($year)) {
        echo $year . " is a leap year";
    } else {
        echo $year . " is not a leap year";
    }
    echo "<br>";

    $num1 = 10;

    function isPrime($num1) {
    if ($num1 == 1) {
        return false;
    } else {
        for ($i = 2; $i < $num1 / 2; $i++) {
            if ($num1 % $i == 0) {
                return false;
            }
        }
        return 1;
    }
}

if (isPrime($num1)) {
    echo "This number is a prime";
} else {
    echo "This number is not a prime";
}

?>
</body>
</html>