<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AssignMent Operators</title>
</head>
<body>
    <h1>Assignment Operators</h1>
    <?php 
    $val = 100;
    $a = 100;
    $b = 20;

    echo "<br/>";
    echo "a = $a<br/>b = $b</br>";

    echo "a -= b == ". $a -= $b;
    echo "</br>";
    echo "a += b == ". $a += $b;
    echo "</br>";
    echo "a *= b == ". $a *= $b;
    echo "</br>";
    echo "a /= b == ". $a /= $b;
    echo "</br>";
    echo "a %= b == ". $a %= $b;
    ?>

    <h1>Comparision Operators</h1>

    <?php
    $a = 100;
    $b = "100";
    echo "</br> a = $a</br> b = $b</br>";
    if($a == $b){
        echo "a == b";
    }
    echo "<br/>";

    if ($a===$b){
        echo "a is equal and identical to b";

    }else{
        echo "a is not identical to b";
        // var_dump($a);
        // echo "</br>";
        // var_dump($b);
    }


    ?>
</body>
</html>