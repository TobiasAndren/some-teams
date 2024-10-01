<?php

include __DIR__ . "/teams.php";
include __DIR__ . "/header.php";

?>

<main>

    <?php

    foreach ($teams as $team) { ?>
        <a class="teams" href="<?= $team['url'] ?>">
            <article>
                <img src="<?= $team['logo'] ?>">
                <h2>League: <?= $team['league'] ?></h2>
                <p>Uefa coefficeient ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>The team is based in <?= $team['city'] ?></p>
            </article>
        </a>

    <?php } ?>

</main>