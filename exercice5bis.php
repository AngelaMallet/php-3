<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 bis PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            for ($x = 1; $x <= 15; $x += 2) {
                echo 'On y arrive presque ' . $x . '<br />';
            }
            ?> 
        </p>
    </body>
</html>

