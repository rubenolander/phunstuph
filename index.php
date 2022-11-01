<?php
//Declare types and require in the related files.
declare(strict_types=1);
require __DIR__ . '/header.php';
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
        <h3> This page is pretty much hardcoded before the final event of 2022, Rally Japan, and will most likely not be updated after the final event. Not that it matters; Kalle Rovanperä has already won the championship.</h2>
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
        <!-- Date to next rally, and a countdown timer. -->
        <section class="nextEvent">
            <h3> NEXT EVENT </h3>
            <h4> WRC FORUM8 Rally Japan </h4>
            <p> Starting on November 10th and ending on the November 13th. </p>
            <p>
                <?php
                // Call on function that calculates time left until rally japan.
                echo timeUntilRally();


                ?>
            </p>
            <small>
                <?php
                echo "(You updated this page on " . date('F dS') . " at " . date('G:i:s') . ".)";
                ?>
            </small>

        </section>
        <section class="teamsStanding">
            <h3> MANUFACTURER STANDINGS </h3>
            <h4> as of 12 out of 13 events driven</h4>
            <article>
                <p>
                    <?php foreach ($wrcTeams as $wrcTeam) : ?>
                        <img src="<?php echo $wrcTeam['logo'] ?>" alt="picture of car manufacturer logo>" />
                        <?php echo nl2br(" $wrcTeam[standing]. $wrcTeam[name], current score = $wrcTeam[team_points]\n") ?>
                    <?php endforeach ?>
                </p>
            </article>
        </section>
        <!-- Hard coded comment section with option to add one username + one comment. -->
        <section class="commentSection"> 4
            <form action="" method="post"></form>
        </section>
    </main>
    <?php
    require __DIR__ . '/footer.php';
    ?>