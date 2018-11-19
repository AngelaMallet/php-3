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
            $x = 21;

            while ($x > 0) {
                $x -= 1;

                if ($x % 2 == 0) {
                    echo 'C\'est presque bon ';
                    continue;
                }

                echo $x . '<br />';
            }
            ?>
        </p>
    </body>
</html>

