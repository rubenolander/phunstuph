<?php
session_start();
//Connect the related files.
require 'header.php';
require 'arrays.php';
require 'functions.php';
//Shuffle the driver array so that you get a new featured driver each time the page loads.
shuffle($wrcDrivers);

if (isset($_POST['name'], $_POST['comment'])) {
    $guestBookName = htmlspecialchars($_POST['name']);
    $guestBookComment = htmlspecialchars($_POST['comment']);
    $guestBookComments[] = [
        'name' => $guestBookName,
        'comment' => $guestBookComment,
    ];
}
?>

<body>
    <header class="rallyHero">
        <a href="http://www.ruebn.se/phunstuph/">Return here.</a>
        <h1> Ruben's minor foray into WRC 2022</h1>
        <h2> Hi and welcome! 'Tis a place where I'm sharing some statistics about the current standings in the 2022 edition of the World Rally Championship.</h2>
        <h3 class="headerH3"> The data output here is valid as of pre Rally Japan.</h2>
    </header>
    <main>
        <header class="wrcBar">
            <h3><a href="https://www.wrc.com/en/" class="wrcLink">Visit the official WRC webpage</a></h3>
        </header>
        <!-- Coming up is 3 sections with data (dates,names etc)
        first one is featured driver, where I echo out a random driver from the WRC1 roster. -->
        <section class="featuredDriver">
            <h3> FEATURED DRIVER </h3>
            <article>
                <p>
                    <?php
                    //Echo out each item from the array containing drivers.
                    echoDriver($wrcDrivers);
                    ?>
                </p>
            </article>
        </section>
        <!-- Date to next rally, and a countdown timer. -->
        <section class="nextEvent">
            <h3> NEXT EVENT </h3>
            <h4> WRC FORUM8 Rally Japan </h4>
            <p> Starting on November 10th and ending on November 13th. </p>
            <p>
                <?php
                echo timeUntilRally();
                ?>
            </p>
            <hr>
            <small>
                <?= "(You updated this page on " . date('F jS') . " at " . date('G:i:s e') . ")"; ?>
            </small>

        </section>
        <section class="manufacturerStandings">
            <!-- Manufacturer standing, where I print the 3 teams and their logos and score as of today. -->
            <h3> MANUFACTURER STANDINGS </h3>
            <h4> as of 12 out of 13 events driven</h4>
            <article>
                <p>
                    <?php foreach ($wrcTeams as $wrcTeam) : ?>
                        <?= nl2br("\n $wrcTeam[standing]. $wrcTeam[name], current score = $wrcTeam[team_points]") ?>
                        <img src="<?= $wrcTeam['logo'] ?>" alt="Tiny picture of car manufacturer logo, either Toyota, Hyundai or Ford>" class="manufacturerLogo" />
                    <?php endforeach ?>
                </p>
            </article>
        </section>
        <!-- Hard coded comment section with option to add one username + one comment. -->
        <aside class="commentSection">
            <h3>Guest book!</h3>
            <small>(sorry, your comment won't be saved when you leave)</small>
            <form method="post">
                <input type="text" name="name" placeholder="Enter your name:">
                <textarea name="comment" placeholder="Enter your comment:"></textarea>
                <button type="submit">Add comment</button>
            </form>
            <article class="bookGuests">
                <h3>Comments</h3>
                <?php foreach ($guestBookComments as $comment) : ?>
                    <small><?= $comment['name']; ?></small>
                    <p><?= $comment['comment']; ?></p>
                    <hr>
                <?php endforeach; ?>
            </article>
        </aside>
    </main>
    <?php
    require 'footer.php';
    ?>