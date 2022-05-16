<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Sort valus in an array in descending order
   $numbers = array("Milk" => 2, "Cheese" => 4, "7-up" => 3);
   arsort($numbers) ;
   print_r($numbers);
   echo "<br>";

    //Birthday countdown
   $targetDays = mktime(0, 0, 0, 10, 11, 2022);
   $today = time();

   $differenceDays = ($targetDays - $today);
   $days = (int) ($differenceDays / 86400);

   echo "Days till next birthday: " .$days . "days!";
   echo "<br>";

    //Generating random float numbers
   $randNumber = rand(0, 100) / 10;

   echo $randNumber;
   echo "<br>";


    //Lowercase check
   $str = "Programming CAN SEEM had to grasp but it's actually easy WITH CONSISTENT PRACTISE";

   function lowercaseCheck($str) {
       echo strtolower($str);
   }

   lowercaseCheck($str);
   echo "<br>";

   //Search inside of a text

   $str = "Programming CAN SEEM had to grasp, but it's actually easy WITH CONSISTENT PRACTISE";

   $punctuation = 0;

   function searchText($str, $punctuation) {
       for ($i=0; $i < strlen($str); $i++) {
           if ($str[$i] == ",") {
               $punctuation++;
           }
       }
       echo "The text has " .$punctuation . " punctuation";
   }

   searchText($str, $punctuation);
   echo "<br>";
   
   //Lowest and highest values
   $onlyNumbers = array(8, 7, 5, 55, 44, 33, 41, 42, 56, 21);

   echo "The lowest value is " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);
   echo "<br>";

   //Repeat string
   $str = " My name is Ian... ";

   echo str_repeat($str, 8);

?>
</body>
</html>