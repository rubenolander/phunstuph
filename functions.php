<?php

declare(strict_types=1);

//This belongs to <section> 2.
function timeUntilRally()
{
    $rallyJapanStart = strtotime("November 10, 2022 10:00");
    // Ok need to make this easy for myself. 
    // Difference between the target date and today below.
    $secondsToJapan = $rallyJapanStart - time();
    //To get days, divide seconds to japan with the number of seconds in a day (60*60*24=86400)
    $daysToJapan = $secondsToJapan / 86400;
    $secondsToJapan %= (86400); //Time left in hours.
    floor($hoursToJapan = floor($secondsToJapan / (60 * 60)));
    $secondsToJapan %= (3600); //And time left in minutes.
    floor($minutesToJapan = floor($secondsToJapan / 60));
    if ($secondsToJapan > 0) {
        return "It's currently " . floor($daysToJapan) . " days, $hoursToJapan hours and $minutesToJapan minutes to Rally Forum8 in Japan.";
    } else if ($daysToJapan < -3) {
        return "The rally has concluded.";
    } else {
        return "The rally is currently ongoing!";
    }
}


//This belongs to <section> 4.
if (isset($_POST['name'], $_POST['comment'])) {
    $guestBookComments[] = [
        'name' => $_POST['name'],
        'comment' => $_POST['comment'],
    ];
}

function echoDriver($wrcDrivers)
{
    echo "Name: ";
    print_r($wrcDrivers[0]['name']);
    echo nl2br("\nPoints in WRC 2022: ");
    print_r($wrcDrivers[0]['season_points']);
    echo nl2br("\nCo-Driver: ");
    print_r($wrcDrivers[0]['co_driver']);
    echo nl2br("\nWRC 2022 event wins: ");
    print_r($wrcDrivers[0]['event_wins_2022']);
    echo nl2br("\nTeam: ");
    print_r($wrcDrivers[0]['team']);
}
