<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 07.01.2018
 * Time: 11:04
 */
/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'Kõige väiksem = '.$min.'<br />';
    echo 'Kõige suurem = '.$max.'<br />';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        } else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
//        echo $massiiv[$i].'<br />';
    }
}

$testmassiiv = array('1', '3', '5', '7','9');
vahetaMinMax($testmassiiv);
function valjastamassiiv($testmassiiv){
    print_r($testmassiiv);
}
valjastamassiiv($testmassiiv);

?>