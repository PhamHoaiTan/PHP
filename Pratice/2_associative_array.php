
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2_associative_array.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
    // associative array = An array made of key => value pairs

    $capitals = array("USA" => "Washington D.C.",
                    "Japan" => "Kyoto",
                    "South Korea" => "Seoul",
                    "India" => "New Delhi");
    
    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);
    $capital = $_POST["country"];
    echo $capitals[$capital];

?>