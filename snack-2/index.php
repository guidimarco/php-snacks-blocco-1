<?php
    // address-bar: ?name=pippo&mail=pippo@gmail.com&age=22

    // GET
    $user_info = $_GET; // array of user's info
    // var_dump($user_info);

    // GLOBAL VAR
    $login_msg = ""; // string stamp on html



    // AGE CHECK, verify if it's a number
    if (is_login_permitted($user_info["name"], $user_info["mail"], $user_info["age"])) {
        $login_msg = "Accesso riuscito";
    } else {
        $login_msg = "Accesso negato";
    }

    // FUNCTION
    function is_login_permitted($name, $mail, $age) {
        // return true if is permetted
        // condition: (1) name --> is_correct_name (2) mail --> is_correct_mail (3) age --> is_correct_age

        // LOCAL VAR
        $is_permitted = false;

        if (is_correct_name($name) && is_correct_mail($mail) && is_correct_age($age)) {
            $is_permitted = true;
        };

        return $is_permitted;
    };
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
    function is_correct_mail($mail) {
        // return true if is correct
        // condition: (1) include "." (2) includes "@"

        // LOCAL VAR
        $current_mail = trim($mail);

        return strpos($current_mail, ".") !== false && strpos($current_mail, "@") !== false;
    };
    function is_correct_age($age) {
        // return true if is correct
        // condition: (1) is a number from min to max

        // LOCAL VAR
        $current_age = intval(trim($age)); // from string to int
        $min = 18;
        $max = 100;

        return $current_age >= $min && $current_age <= $max;
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

        <p>
            <?php echo $login_msg; ?>
        </p>

    </body>
</html>
