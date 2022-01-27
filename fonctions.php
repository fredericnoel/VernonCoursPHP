<?php

function bonjour()
{
    echo "Bonjour !";
}

function bonjourPersonnalisee(string $nom): string
{
    return "Bonjour $nom !";
}

function surfaceRectangle(float $x, float $y): float
{
    return abs($x) * abs($y);
}

function volumeParallepipede(float $x, float $y, float $z): float
{
    return abs($x) * abs($y) * abs($z);
}

function volParAvecSurface(float $x, float $y, float $z): float
{
    $volume = abs($z) * surfaceRectangle($x, $y);
    return $volume;
}

function dump($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}

function afficherTableau(array $tableau): string
{
    $resultat = "<ul>";

    for ($i = 0; $i < count($tableau); $i++) {
        $resultat .= "<li>";

        if (is_array($tableau[$i])) {
            $resultat .= afficherTableau($tableau[$i]);
        } else {
            $resultat .= $tableau[$i];
        }

        $resultat .= "</li>";
    }

    $resultat .= "</ul>";

    return $resultat;
}

function factorielle(int $nombre): int
{
    if ($nombre === 0) {
        return 1;
    } else {
        return $nombre * factorielle($nombre - 1);
    }
}
