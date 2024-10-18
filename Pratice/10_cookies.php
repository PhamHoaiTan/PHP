<?php
    // cookie = Information about a user stored in a user's web- browser
    //          targeted advertisements, browsing preferences, and
    //            other non-sensitive
    setcookie("fav_food", "pizza", time() - 0, "/");
    setcookie("fav_drinks", "cocktail", time() + 86400 * 2, "/");
    setcookie("fav_game", "valorant", time() + 86400 * 3, "/");

    //  foreach($_COOKIE as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    //  }

     if(isset($_COOKIE["fav_food"])) {
        echo "You fav food is {$_COOKIE["fav_food"]}";
     }
     else {
        echo "You need to choose fav food";
     }
?>