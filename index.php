<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Home Partie 8</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            ?>
        <p><a href="exercice<?= $i ?>/index.php">Exercice <?= $i ?></a></p>
        <?php
        }
        ?>
    </body>
</html>