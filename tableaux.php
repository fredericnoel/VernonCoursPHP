<?php

include 'fonctions.php';

$test = array(true, 12, 'toto');
$eleves = array('Michel', $test, 'Patrick', 'Bob');
$ages = [56, 42, 20, $eleves];

dump($ages);

echo afficherTableau($ages);
