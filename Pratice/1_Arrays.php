<?php
    // array = "variable" which can hold more than one value at a time
    $foods = array("apple", "orange", "banana", "coconut");
    // $foods[0] = "pineapple";
    // array_push($foods, "pineapple", "strawberry"); 
    // array_pop($foods);
    // array_shift($foods);
    // $reverse_foods = array_reverse($foods
    echo count($foods),"<br>";

    foreach($foods as $food)
    {
        echo $food, "<br>"; 
    }
?>