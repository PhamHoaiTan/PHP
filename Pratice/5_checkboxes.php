<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="5_checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Apple">
        Apple <br>
        <input type="checkbox" name="foods[]" value="Pineapple">
        Pineapple <br>
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Coconut">
        Coconut <br>
        <input type="submit" name="submit" value="confirm">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["foods"])) {
        $foods = $_POST["foods"];
        foreach ($foods as $food) {
            echo "You like {$food} <br>";
        }
    }
} else {
    echo "u must check more than 0";
}
?>