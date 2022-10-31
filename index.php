<?php
//Declare types and require in the related files.
declare(strict_types=1);
require __DIR__ . '/header.php'; // What's said below.
require __DIR__ . '/footer.php'; // this isn't needed since I've only got one page though. Well well.
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';
//Shuffle the driver array so that you get a new featured driver each time the page loads.
shuffle($wrcDrivers);
?>

<body>
    <header class="rallyHero">
        <a href="">Link to here to be placed in the corner</a>
        <h1> Some starter WRC 2022 stats</h1>
        <h2> Hi and welcome to Here, where I've decided to share some facts and statistics about the current standings and dealings in the 2022 edition of the World Rally Championship. Rally is neat, and so are you.</h2>
        <h3> This page is pretty much hardcoded before the final event of 3022, Rally Japan, and will most likely not be updatet post final event. Not that it matters; Kalle Rovanperä has already won the championship.</h2>
    </header>
    <main>
        <section class="featuredDriver">
            <h3> FEATURED DRIVER </h3>
            <article>

                <?php
                //Echo out each item from the array containing drivers. This should be possible to loop though.
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
                ?>
            </article>
        </section>
        <!-- Date to next rally, and a countdown timer (echo date - todays date?) -->
        <section class="nextEvent">
            <h3> NEXT EVENT </h3>
            <h4> WRC FORUM8 Rally Japan </h4>
            <p> Starting on the 10th of November and ending on the 13th of November. </p>
            <?php
            // Call on function that calculates time left until rally japan.
            // echo $japanDate = strtotime("November 10, 2022");
            //Hmm maybe I'll just do this with javascript. 
            function timeUntilRally()
            {
                $japanDate = strtotime("November 10, 2022");
                $remainingTime = $japanDate - time();
                return floor($remainingTime) / floor(60) / 60 / 24;
            }
            echo $japanDate = strtotime("November 10, 2022");
            ?>
        </section>
        <section class="teamsStanding">
            <h3> MANUFACTURER STANDINGS </h3>
            <h4> as of 12 out of 13 events driven</h4>
            <article>
                <?php
                foreach ($wrcTeams as $wrcTeam) {
                    echo nl2br(" $wrcTeam[standing]. $wrcTeam[name], current score = $wrcTeam[team_points]\n");
                };
                ?>
            </article>
        </section>
        <!-- Hard coded comment section with option to add one username + one comment. -->
        <section class="commentSection"> 4
            <form action="" method="post"></form>
        </section>
    </main>
    <!-- https://www.wrc.com/fileadmin/images/manufactors/ford.png -->