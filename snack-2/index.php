<?php
    // address-bar: ?name=pippo&mail=pippo@gmail.com&age=22
    $user_info = $_GET; // array of user's info
    var_dump($user_info);


    // name check
    if (strlen(trim($user_info["name"])) > 3) {
        echo "nome OK";
    }

    // mail check
    if (strpos($user_info["mail"], ".") !== false && strpos($user_info["mail"], "@")) {
        echo "mail OK";
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

    </body>
</html>
