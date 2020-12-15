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
        // var_dump($matches[$i]);
        $this_match_teams = array_keys($matches[$i]);
        $this_match_scores = array_values($matches[$i]);

        // var_dump($this_match_teams);
        // var_dump($this_match_scores);

        var_dump($this_match_teams[0] . " - " . $this_match_teams[1] . " | " . $this_match_scores[0] . " - " . $this_match_scores[1]);

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
