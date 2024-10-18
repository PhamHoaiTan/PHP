<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="8_sanitize_validate_input.php" method="post">
        <label for="">User Name:</label>
        <input type="text" name="username" id=""><br>
        <label for="">Age:</label>
        <input type="text" name="number" id=""><br>
        <label for="">Email:</label>
        <input type="text" name="email" id=""><br>
        <input type="submit" value="Submit" name="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])) {
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_NUMBER_INT);
        // $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        // echo "Hello {$email}";

        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        if (empty($number)) {
            echo "Invalid number";
        }
        else {
            echo "Your age is {$number}";
        }
    }
?>