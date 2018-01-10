<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 07.01.2018
 * Time: 11:06
 */
/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
function mittedubleeri($massiiv){
    $valjasta = '';
    /*vaatan iga elementi massiivis ja kui seda massiivis veel ei ole, lisan selle sinna ja väljastan selle*/
    foreach($massiiv as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element.'</br>';
        }
    }
}
mittedubleeri(array(1, 1, 1, 2, 2, 2, 2, 3));

?>