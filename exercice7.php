<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
             for ($num = 1; $num <= 100; $num += 15) {
                echo 'On tient le bon bout ' . $num . '<br />';
            }
            ?>
        </p>
    </body>
</html>

