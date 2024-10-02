<?php

include __DIR__ . "/teams.php";
include __DIR__ . "/header.php";

?>

<main>

    <?php

    foreach ($teams as $key => $team) { ?>
        <a class="teams" href="<?= $team['url'] ?>">
            <article>
                <img src="<?= $team['logo'] ?>" alt="<?= $key ?>">
                <h2><?= $key ?></h2>
                <p><?= $team['league'] ?></p>
                <p>Group: <?= $team['group'] ?></p>
                <p>Uefa Ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>The team is based in <?= $team['city'] ?></p>
                <br>
            </article>
        </a>

    <?php } ?>

</main>

<?php

include __DIR__ . "/footer.php";
