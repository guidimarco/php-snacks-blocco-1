<?php

    // GLOBAL VAR
    $matches = [
        [ // match 1
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
    ]; // framework:: ["home_team" => score, "vis_team" => score], [...],
    var_dump($matches);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-1</title>
    </head>
    <body>
        <h1>Last matchweek results</h1>
        <p>
            <?php
                for ($i=0; $i < count($matches); $i++) {
                    // get current teams
                    $this_match_teams = array_keys($matches[$i]);

                    // get current scores
                    $this_match_scores = array_values($matches[$i]);

                    echo nl2br("\n" . $this_match_teams[0] . " - " . $this_match_teams[1] . " | " . $this_match_scores[0] . " - " . $this_match_scores[1]);
                }
            ?>
        </p>

    </body>
</html>
