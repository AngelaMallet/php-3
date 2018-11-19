<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            for ($x = 200; $x > 0; $x -= 12) {
                echo 'Enfin !!! ' . $x . '<br />';
            }
            ?> 
        </p>
    </body>
</html>

