<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Multidimensional Arrays

//Expensive
//Audi, Mercedes, BMW

//Inexpensive
//Volvo, Ford, Toyota

$cars = array(
        "Expensive" => array("Audi", "Mercedes", "BMW"),
        "Inexpensive" => array("Volvo", "Ford", "Toyota")
    );

echo $cars["Inexpensive"][1];

?>
</body>
</html>