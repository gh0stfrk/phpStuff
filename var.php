<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
// Valid variables 
// Variable names are case-sensitive 

$name='gh0st'; // $name and $NAME is different
$NAME='s@lman';
$age=21;
$float_ = 32.22;

echo $name;
echo "<br/>";
echo $NAME;
echo "<br/>";
echo $age;
echo "<br/>";
echo $float_;
echo "<br/>";


/*
Data Types 
- String 
- Integer 
- Float 
- Boolean
- Null

- Array
- Object 
- Resource

Use var_dump() function to check the type
*/

$name_str = "s@lman sayyed";
$int_val = 1234;
$float = 12.12;
$bool_ = true;

$arr = [1, 2, 3, 5, 6, "bingo", 8989];
$null_ = NULL;

echo "name string : " . $name_str; 
echo "<br/>";
var_dump($name_str);
echo "<br/>";

echo "<br/>";
echo "<br/>";

echo "integer value : " . $int_val; 
echo "<br/>";
var_dump($int_val);
echo "<br/>";


echo "<br/>";
echo "<br/>";

echo "float value : " . $float; 
echo "<br/>";
var_dump($float);
echo "<br/>";

echo "<br/>";
echo "<br/>";

echo "boolean value : " . $bool_; 
echo "<br/>";
var_dump($bool_);
echo "<br/>";

echo "<br/>";
echo "<br/>";

echo "array value : "; print_r($arr);
echo "<br/>";
var_dump($arr);
echo "<br/>";

echo "<br/>";
echo "<br/>";

echo "null value : " . $null_;
echo "<br/>";
var_dump($null_);
echo "<br/>";

?>

</body>
</html>