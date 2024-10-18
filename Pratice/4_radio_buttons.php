<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="4_radio_buttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="MasterCard">
        Mastercard <br>
        <input type="radio" name="credit_card" value="AmericanExp">
        American Express <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    // if (empty($_POST["credit_card"])) {
    //     echo "U missing radio";
    // } else {
    //     $credit_card = $_POST["credit_card"];
    //     if ($credit_card == "Visa") {
    //         echo "You pay by Visa";
    //     } elseif ($credit_card == "Master Card") {
    //         echo "You pay by Master Card";
    //     } else {
    //         echo "You pay by American Express";
    //     }
    // }

    // another step
    if(isset($_POST["credit_card"]))
    {
        $credit_card = $_POST["credit_card"];
    }

    switch($credit_card) {
        case "Visa":
            echo "You selected Visa";
            break;
        case "MasterCard":
            echo "You selected Master Card";
            break;
        case "AmericanExp":
            echo "You selected American Express";
            break;  
    }
}


?>