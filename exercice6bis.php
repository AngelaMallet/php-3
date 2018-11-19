<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 bis PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            for ($x = 20; $x > 0; $x -= 2) {
                echo 'C\'est presque bon ' . $x . '<br />';
            }
            ?>
        </p>
    </body>
</html>

