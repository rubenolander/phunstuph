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

function echoDriver($wrcDrivers)
{
    echo nl2br('Name: ' .  $wrcDrivers[0]['name'] . "\n"
        . 'Points in WRC 2022: ' . $wrcDrivers[0]['season_points'] . "\n"
        . 'Co-Driver: ' . $wrcDrivers[0]['co_driver'] . "\n"
        . 'WRC 2022 event wins: ' . $wrcDrivers[0]['event_wins_2022'] . "\n"
        . 'Team: ' . $wrcDrivers[0]['team']);
}
