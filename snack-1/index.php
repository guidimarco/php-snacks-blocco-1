<?php

    // GLOBAL VAR
    $matches = [
        [ // match 1
            "vanoli basket cremona" => 80,
            "openjobmetis varese" => 67
        ],
        [
            "carpegna prosciutto pesaro" => 57,
            "dolomiti energia trentino" => 71
        ],
        [
            "banco di sardegna sassari" => 89,
            "fortitudo lavoropiù bologna" => 86
        ],
        [
            "virtus segafredo bologna" => 67,
            "unahotels reggio emilia" => 77
        ],
        [
            "acqua s. bernardo cantù" => 65,
            "umana reyer venezia" => 75
        ],
        [
            "happy casa brindisi" => 99,
            "de' longhi treviso basket" => 83
        ],
        [
            "germani brescia" => 75,
            "allianz pallacanestro trieste" => 63
        ],
    ]; // framework:: ["home_team" => score, "vis_team" => score], [...],

    // FUNCTION
    function stamp_matches($array_matches) {
        // stamp all the matches

        for ($i=0; $i < count($array_matches); $i++) {
            // get current teams
            $this_match_teams = array_keys($array_matches[$i]);

            // get current scores
            $this_match_scores = array_values($array_matches[$i]);

            echo nl2br("\n" . ucwords($this_match_teams[0]) . " - " . ucwords($this_match_teams[1]) . " | " . $this_match_scores[0] . " - " . $this_match_scores[1]);
        }
    }
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
                stamp_matches($matches);
            ?>
        </p>

    </body>
</html>
