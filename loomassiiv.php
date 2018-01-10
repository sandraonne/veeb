<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 07.01.2018
 * Time: 10:49
 */
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
function looMassiiv($elementidearv){
    $massiiv = array();
    for($kord = 1; $kord <= $elementidearv; $kord++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
/*Testin*/
$testmassiiv = looMassiiv(3);
print_r($testmassiiv);

?>