<?php

include __DIR__ . "/teams.php";
include __DIR__ . "/header.php";

foreach ($teams as $team) { ?>

    <article>
        <img src="<?= $team['logo'] ?>">
        <h2>League: <?= $team['league'] ?></h2>
        <p>Uefa coefficeient Ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
    </article>

<?php }
