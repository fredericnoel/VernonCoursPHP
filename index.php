<?php

$valeur = 42;
$resultat = "";

if (is_numeric($valeur)) {
    switch ($valeur) {
        case ($valeur > 0):
            $resultat = "positive";
            break;
        case ($valeur < 0):
            $resultat = "negative";
            break;
        default:
            $resultat = "nulle";
    }
} else {
    $resultat = "non numerique";
}

echo "La valeur est $resultat.";
?>

<p><a href="boucles.php">Boucles</a></p>
<p><a href="inclusion.php">Inclusion</a></p>