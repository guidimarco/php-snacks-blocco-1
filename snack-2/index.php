<?php
    // address-bar: ?name=pippo&mail=pippo@gmail.com&age=22

    // GET
    $user_info = $_GET; // array of user's info
    var_dump($user_info);

    // GLOBAL VAR
    $logIn_msg = "";

    // MAIL CHECK, verify if "mail" includes "." and "@"
    // AGE CHECK, verify if it's a number
    if (is_correct_name($user_info["name"])
    && /* MAIL CHECK */ strpos($user_info["mail"], ".") !== false && strpos($user_info["mail"], "@")
    && /* AGE CHECK */ is_numeric($user_info["age"])) {
        $logIn_msg = "Accesso riuscito";
    } else {
        $logIn_msg = "Accesso negato";
    }

    // FUNCTION
    function is_correct_name($name) {
        // return true if is correct
        // condition: 1) length is > min-charters

        // LOCAL VAR
        $current_name = trim($name);
        $min_characters = 3; // minimum numbers of charters admitted
        $is_correct = false; // boolean var to return

        if (strlen($current_name) > $min_characters) {
            $is_correct = true;
        }

        return $is_correct;
    };
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
