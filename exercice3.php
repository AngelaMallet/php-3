<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $first = 100;
            $second = 3;
            while ($first >= 10) {
                echo $first*$second . '<br />'; 
                $first--;
            }
            ?></p>
    </body>
</html>

