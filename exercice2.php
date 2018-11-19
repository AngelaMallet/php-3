<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $first = 0;
            $second = 3;
            while ($first < 20) {
                echo $first * $second . '<br />'; 
                $first++;
            }
            ?></p>
    </body>
</html>

