<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

// loome teksti objekti
$minuTekst = new tekst('Tere, maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';

// prindime välja
$minuTekst->prindiTekst();

// loome veel ühe objekti ja määrame sisu
$mustTekst = new tekst('Must tekst');
echo '<pre>';
print_r($mustTekst);
echo '</pre>';