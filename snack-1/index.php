<?php

    // GLOBAL VAR
    $matches = [
        // framework => matches(array) -> ["home_team" => score, "vis_team" => score], [...],
        [
            "milano" => 88,
            "bologna" => 102
        ],
        [
            "ferrara" => 55,
            "bologna" => 80
        ],
        [
            "lucca" => 80,
            "bologna" => 70
        ],
    ];

    var_dump($matches);

    for ($i=0; $i < count($matches); $i++) {
        var_dump($matches[$i]);
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-1</title>
    </head>
    <body>
        <h1>Log-in</h1>
        <p>

        </p>

    </body>
</html>
