<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 bis PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
             for ($x = 0; $x <= 100; $x += 15) {
                echo 'On tient le bon bout ' . $x . '<br />';
            }
            ?>
        </p>
    </body>
</html>

