<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $x = 1;

            while ($x < 15) {
                $x += 1;

                if ($x % 2 == 0) {
                    echo 'On y arrive presque ';
                    continue;
                }

                echo $x . '<br />';
            }
            ?>
        </p>
    </body>
</html>

