<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 07.01.2018
 * Time: 11:04
 */
/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastamassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr>';
        echo '<td>';
        echo $element;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
$testmassiiv=array('red','blue','green','yellow');

valjastamassiiv($testmassiiv);
echo '<hr />';
?>