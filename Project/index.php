<?php

include __DIR__ . "/teams.php";
include __DIR__ . "/header.php";

?>

<main>

    <?php

    foreach ($teams as $team) { ?>
        <a class="teams" href="<?= $team['url'] ?>">
            <article>
                <img src="<?= $team['logo'] ?>" alt="<?= $team['name'] ?>">
                <h2><?= $team['name'] ?></h2>
                <p><?= $team['league'] ?></p>
                <p>Group: <?= $team['group'] ?></p>
                <p>Uefa Coefficeient Ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>The team is based in <?= $team['city'] ?></p>
            </article>
        </a>

    <?php } ?>

</main>

<?php

include __DIR__ . "/footer.php";
