<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 07.01.2018
 * Time: 11:05
 */
/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud.
 * Kontrollimiseks näiteks kasutada järgmine massiiv:
 * 1, 0, 6, 0, 0, 3, 5
 * Tulemus väljastatakse antud funktsiooni abil kujul:
 * Tulemus: 1 * 6 * 5 = 30
*/
function elementidekorrutis($massiiv){
    $korrutis = 1;
    $kord = 0;
    echo 'Tulemus: ';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and $i % 2 == 0){
            if($kord == 0){
                echo $massiiv[$i];
                $kord = 1;
            } else {
                echo ' * '.$massiiv[$i];
            }
            $korrutis = $korrutis * $massiiv[$i];
        }
    }
    echo ' = '.$korrutis.'<br />';
}
elementideKorrutis(array(1, 0, 6, 0, 0, 3, 5));
?>