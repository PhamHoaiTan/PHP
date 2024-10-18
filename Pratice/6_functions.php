<?php
    // function = write some code once, reuse when you need it
    //              type () after function name to invoke
    //              ex. add() subtract() multiply() divide()


    // function happy_birthday($first_name,$x) {
    //     echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"Happy Birthday to {$first_name}! <br>";
    // echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"You are {$x} years old! <br>";
    // }

    // happy_birthday("Tan",12);

    function even_function($number) {
        if($number % 2 == 0){
            echo "{$number} is even number";
        } 
        else {
            echo "{$number} is old number";
        }
    }

    even_function(3);
?>