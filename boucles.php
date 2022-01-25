<?php

$resultat = "<ul>";

for ($i = -15946; $i < 32098; $i += 7) {
    if ($i % 17 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
    }
}

$resultat .= "</ul>";

echo $resultat;
