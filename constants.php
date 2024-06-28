<?php
print "<h1> Data types in php </h1>";

$types = ['String' => "A simple string value", 'Integer' => "An integer", 'Boolean' => "True or False", 'Float' => "Decimal number like a 3.14", 'Null' => "NULL", 'Array' => "Collection of items", 'Object' => "Instance of a class", 'Resource'=>"Connection Objects"];
foreach ($types as $type => $val) {
    echo "<ul>
    <li>$type | $val </li>
    </ul>";
}
?>

<?php
$name = "Salman";
echo var_dump($name);

echo "<br/>";

$num = 24;
echo var_dump($num);

echo "<br/>";

$num1 = 24.5;
echo var_dump($num1);

echo "<br/>";

$bool = true;
echo var_dump($bool);

echo "<br/>";

$arr = ["salman", "sayyed", ".."];
echo var_dump($arr);

echo "<br/>";

$nul = null;
echo var_dump($nul);

// Resources are connection objects 
// Objects are 
?>