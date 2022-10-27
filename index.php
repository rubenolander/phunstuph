<?php

declare(strict_types=1);
require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';
shuffle($wrcDrivers);
?>

<body>
    <header class="rallyHero">
        <a href="">Link to here to be placed in the corner</a>
        <h1> Rubens WRC 2022 </h1>
        <h2> Text som beskriver vad det här är för sida egentligen. Text som beskriver vad det här är för sida egentligen. Text som beskriver vad det här är för sida egentligen.</h2>
        <main>
    </header>
    <article class="featuredDriver">
        <?php echo "Name: ";
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
    <article> article2 som kanske listar vilka event som körts under året.</article>
    <article> Breaking news</article>
    <article> en till sån</article>
    </main>

</body>