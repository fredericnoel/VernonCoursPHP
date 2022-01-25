<?php

$valeur = 42;
$resultat = "";

if (is_numeric($valeur)) {
    if ($valeur > 0) {
        $resultat = "positive";
    } elseif ($valeur < 0) {
        $resultat = "negative";
    } else {
        $resultat = "nulle";
    }
} else {
    $resultat = "non numerique";
}

echo "La valeur est $resultat.";
