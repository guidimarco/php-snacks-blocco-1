<?php

    // GLOBAL VAR
    $matches = [
        [ // match 1
            "home" => "vanoli basket cremona",
            "home_score" => 80,
            "vis" => "openjobmetis varese",
            "vis_score" => 67
        ],
        [
            "home" => "carpegna prosciutto pesaro",
            "home_score" => 57,
            "vis" => "dolomiti energia trentino",
            "vis_score" => 71
        ],
        [
            "home" => "banco di sardegna sassari",
            "home_score" => 89,
            "vis" => "fortitudo lavoropiù bologna",
            "vis_score" => 86
        ],
        [
            "home" => "virtus segafredo bologna",
            "home_score" => 67,
            "vis" => "unahotels reggio emilia",
            "vis_score" => 77
        ],
        [
            "home" => "acqua s. bernardo cantù",
            "home_score" => 65,
            "vis" => "umana reyer venezia",
            "vis_score" => 75
        ],
        [
            "home" => "happy casa brindisi",
            "home_score" => 99,
            "vis" => "de' longhi treviso basket",
            "vis_score" => 83
        ],
        [
            "home" => "germani brescia",
            "home_score" => 75,
            "vis" => "allianz pallacanestro trieste",
            "vis_score" => 63
        ],
    ]; // framework:: ["home" => "name team home", "home_score" => score_team_home, "vis" => "name team visitor", "vis_score" => score_team_vis], [...],

    // FUNCTION
    function stamp_matches($array_matches) {
        // stamp all the matches

        for ($i=0; $i < count($array_matches); $i++) {
            // get current match
            $this_match = $array_matches[$i];

            echo nl2br("\n" . ucwords($this_match["home"]) . " - " . ucwords($this_match["vis"]) . " | " . $this_match["home_score"] . " - " . $this_match["vis_score"]);
        }
    };
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
