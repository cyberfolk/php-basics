<?php
$matchs = [
    [
        "home_team" => "Olimpia Milano",
        "away_team" => "Cantù",
        "score_home_team" => 55,
        "score_away_team" => 60
    ],
    [
        "home_team" => "Pescara",
        "away_team" => "Varese",
        "score_home_team" => 55,
        "score_away_team" => 60
    ],
    [
        "home_team" => "Roma",
        "away_team" => "Napoli",
        "score_home_team" => 55,
        "score_away_team" => 60
    ]
];

foreach ($matchs as $match) {
    echo $match['home_team'] . " - " . $match['away_team'] . " | "  . $match['score_home_team'] . " - " . $match['score_away_team'] . "<br/>";
}
