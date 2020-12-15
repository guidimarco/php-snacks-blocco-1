<?php
    // address-bar: ?name=pippo&mail=pippo@gmail.com&age=22

    // GET
    $user_info = $_GET; // array of user's info
    var_dump($user_info);

    // GLOBAL VAR
    $logIn_msg = "";

    // NAME CHECK, verify if "name" length is > 3
    // MAIL CHECK, verify if "mail" includes "." and "@"
    // AGE CHECK, verify if it's a number
    if (/* NAME CHECK */ strlen(trim($user_info["name"])) > 3
    && /* MAIL CHECK */ strpos($user_info["mail"], ".") !== false && strpos($user_info["mail"], "@")
    && /* AGE CHECK */ is_numeric($user_info["age"])) {
        $logIn_msg = "Accesso riuscito";
    } else {
        $logIn_msg = "Accesso negato";
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-2</title>
    </head>
    <body>
        <h1>Log-in</h1>
        <!-- <p><?php var_dump($user_info) ?></p>
        <p><?php echo strlen($user_info["name"]) ?></p>
        <p><?php echo strlen(trim($user_info["name"])) ?></p> -->

        <p><?php echo $logIn_msg; ?></p>

    </body>
</html>
