<?php

declare(strict_types=1);


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
    } else {
        return "The rally is currently ongoing!";
    }
}
