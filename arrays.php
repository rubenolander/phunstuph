<?php

declare(strict_types=1);
$teamToyota = "Toyota Gazoo Racing World Rally Team";
$teamHyundai = "Hyundai Shell Mobis World Rally Team";
$teamMsport = "M-Sport Ford World Rally Team";

$wrcDrivers = [
    [
        'name' => 'Kalle Rovanperä',
        'season_points' => 255,
        'co_driver' => 'Jonne Halttunen',
        'event_wins_2022' => 6,
        'team' => $teamToyota
    ],
    [
        'name' => 'Ott Tänak',
        'season_points' => 187,
        'co_driver' => 'Martin Järveoja',
        'event_wins_2022' => 3,
        'team' => $teamHyundai
    ],
    [
        'name' => 'Thierry Neuville',
        'season_points' => 166,
        'co_driver' => 'Martijn Wydaeghe',
        'event_wins_2022' => 1,
        'team' => $teamHyundai
    ],
    [
        'name' => 'Elfyn Evans',
        'season_points' => 124,
        'co_driver' => 'Scott Martin',
        'event_wins_2022' => 0,
        'team' => $teamToyota
    ],
    [
        'name' => 'Takamoto Katsuta',
        'season_points' => 107,
        'co_driver' => 'Aaron Johnston',
        'event_wins_2022' => 0,
        'team' => $teamToyota
    ],
    [
        'name' => 'Sebastién Ogier',
        'season_points' => 85,
        'co_driver' => 'Benjamin Veillas',
        'event_wins_2022' => 1,
        'team' => $teamToyota,
    ],
    [
        'name' => 'Craig Breen',
        'season_points' => 79,
        'co_driver' => 'Paul Nagle',
        'event_wins_2022' => 0,
        'team' => $teamMsport,
    ],
    [
        'name' => 'Dani Sordo',
        'season_points' => 59,
        'co_driver' => 'Cándido Carrera',
        'event_wins_2022' => 0,
        'team' => $teamHyundai,
    ],
    [
        'name' => 'Gus Greensmith',
        'season_points' => 36,
        'co_driver' => 'Jonas Andersson',
        'event_wins_2022' => 0,
        'team' => $teamMsport,
    ],
    [
        'name' => 'Sebastién Loeb',
        'season_points' => 35,
        'co_driver' => 'Isabelle Galmiche',
        'event_wins_2022' => 1,
        'team' => $teamMsport,
    ],
];
// <!-- https://www.wrc.com/fileadmin/images/manufactors/ford.png -->
$wrcTeams = [
    [
        'standing' => 1,
        'name' => $teamToyota,
        'team_points' => 503,
        'logo' => 'https://www.wrc.com/fileadmin/images/manufactors/toyota.png',
    ],
    [
        'standing' => 2,
        'name' => $teamHyundai,
        'team_points' => 410,
        'logo' => 'https://www.wrc.com/fileadmin/images/manufactors/hyundai.png'
    ],
    [
        'standing' => 3,
        'name' => $teamMsport,
        'team_points' => 238,
        'logo' => 'https://www.wrc.com/fileadmin/images/manufactors/ford.png',
    ]
];
