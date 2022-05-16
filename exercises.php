<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x = 8;
$y = 7;

$z = ($x + $y) * 5;
echo "The total is " . $z;
echo "<br>";
echo "<br>";

$price = 100;
$vat = 0.21;

$totalPrice = ($price * $vat) + $price;

echo "Price: " . $price . "<br>";
echo "VAT: " . $price * $vat . "<br>";
echo "Total price: " . $totalPrice . "<br>";
echo "<br>";
echo "<br>";

$x = 4;
$y = 9;
$z = 4;

$average = ($x + $y + $z) / 3;
echo number_format($average, 2, '.', '');
echo "<br>";
echo "<br>";

$countries = array("Netherlands" => "Amsterdam", "Germany" => "Berlin", "Thailand" => "Bangkok", "Denmark" => "Copenhagen", "Canada" => "Toronto");
foreach ($countries as $key => $value) {
    echo "The capital city of " . $key . " is " .$value;
    echo "<br>";
    echo "<br>";
}

$cm = 150;

$cmToInch = $cm * 0.39;
echo $cm . " centimeters is " . $cmToInch . " Inch ";
echo "<br>";
echo "<br>";

$expenses = array(40, 70, 20, 85, 40);

$totalAmount = 0;
$amountofExpenses = 0;

foreach ($expenses as $expense) {
    $totalAmount = $expense + $totalAmount;
    $amountofExpenses = $amountofExpenses + 1;
}

echo "My " . $amountofExpenses . " biggest expenses were " . $totalAmount;
echo "<br>";
echo "<br>";

$weather = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

echo "We've seen all kinds of weather this month. At the begining of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4];
?>
</body>
</html>
