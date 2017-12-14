<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 14.12.2017
 * Time: 13:35
 */
for ($rida = 1; $rida < 6; $rida++){
    $varv = '#';
    for ($kord = 1; $kord < 7; $kord++){
        $juhuarv = rand(0, 15);
        $symbol = dechex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
    'Värviline tekst'.
    '</font>'.
    '<br/ >';
}

?>