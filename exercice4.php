<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $first = 1;
            while ($first < 10) {
                echo $first . '<br />'; 
                $first*=1.5;
            }
            ?></p>
    </body>
</html>

