<?php
    //defining variable
    $num = 20;
    $str = "This is a string";

    echo $num ." ". $str . "<br><br>";

    define('constant', 'This is a constant variable');

    echo constant . "<br><br>";
   

    $var1 = "I";
    $var2 = "LOVE";
    $var3 = "YOU";
    $num1 = 1;
    $num2 = 4;
    $num3 = 3;
    $float1 = 3.1;
    $var4 = true;

    echo $var1 . " ". $var2 . $var3 . ($num1 + $num2) . "<br><br>";
?>

<?php

    //arrays

    //indexed array
    $array1 = array("kira", "burning");

    echo $array1[0] . "<br>";

    //associative array
    $array2 = array(35 => "Associative Array");

    echo $array2[35] . "<br><br>";

    //multi-dimensional array
    $array3 = [
        ["toyota", 0 ,20],
        ["toyota", 0 ,20],
        ["toyota", 0 ,20],
    ];

    echo $array3[0][0] . "<br><br>";
?>

<?php
    
    //for
    $love = "I Love ";
    for($i = 0; $i <= 10; $i++){
        echo $love . $i . "<br>";
    }

    //while
    $j = 0;
    while($j <= 10 ){
        echo $j . "<br>";
        $j++;
        echo "<br>";
    }

    //foreach
    foreach($array1 as $brand){
        echo $brand;
    }
    
    echo "<br><br>";
?>

<?php
    //simple function
    $name1 = "john arbert";
    function hello($name){
        echo "hello $name";
    }
    hello($name1);

    echo "<br><br>";

    //two params in a function
    function sum($num1, $num2){
        return $num1 + $num2;
    }
    echo sum(2,3);

    echo "<br><br>";
?>

<?php
    //nested if
    $score = 21 ;
    $age = 21;

    if($score < 20){
        if($age < 10){
            echo "average";
        }
        else{
            echo "horrible";
        }
    }
    else{
        if($age < 10){
            echo "very good";
        }
        else{
            echo "average tanda";
        }
    }
?>

