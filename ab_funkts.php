<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 19.01.2018
 * Time: 12:30
 */
/*andmebaasi ühendamine*/

require_once 'ab_konf.php'; //nõuame konfiguratsioonifaili sisu kasutamist

//koostan funktsiooni, mis tekitab ühenduse andmebaasi serveriga ja valib andmebaasi, mida hakkan töötluses kasutama

function yhendus(){
    $yhendus = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br / >';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        return false;
    } else {
        echo 'Ühendus andmebaasi serveriga on olemas<br />';
        return $yhendus;
    }
}

//
function saadaParing($yhendus, $sql){
    $tulemus = mysqli_query($yhendus, $sql);
    if (!$tulemus){
        echo 'Probleem päringuga '.$sql.'<br / >';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
        return false;
    } else {
        echo 'Päring läks läbi<br />';
        return true;
    }
}