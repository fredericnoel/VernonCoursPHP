<?php

include 'fonctions.php';

$test = array(true, 12, 'toto');
$eleves = array('Michel', $test, 'Patrick', 'Bob');
$ages = [56, 42, 20, $eleves];
//array_push($ages, 56);
sort($ages);

/* dump($ages);
* echo afficherTableau($ages);
* echo factorielle(10);
*/

$stagiaires = [
    'Mathilde' => 27,
    'Pierre' => 30,
    'Raymonde' => 72
];

$stagiaires['Jean-Louis'] = 48;

dump($stagiaires);

foreach ($stagiaires as $cle => $valeur) {
    echo $cle . ' a ' . $valeur . ' ans';
}
