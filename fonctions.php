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
