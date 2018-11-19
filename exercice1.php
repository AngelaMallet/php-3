<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 1 PHP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <p><?php 
$dix = 0;

while ($dix <= 10)
{
    echo $dix;
    $dix++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
  ?></p>
</body>
</html>

