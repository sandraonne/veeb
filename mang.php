<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 12.01.2018
 * Time: 8:55
 */
function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ? $serveriArv : rand(1,20);
    $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ? ++$katseteArv : 0;
    /*echo $serveriArv.'<br />';*/
    echo '
    Arva ära arv 1-20:<br />
    <form action = "'.$_SERVER['PHP_SELF'].'" method = "post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
    <input type = "text" name="kasutajaArv"><br> 
    <input type = "submit" value ="Kontrolli">
    </form>
    ';
}

function vormiAndmed(){
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    $korras = false;
    if(empty($_POST)) {
        /*echo 'Vorm ei saatnud andmeid';*/
    } else {
        /*echo 'Vorm saatis andmed välja<br />';*/
        if (empty($_POST['kasutajaArv'])){
            echo 'Andmed peavad olema sisestatud<br />';
        } else {
            /*echo 'Andmed on sisestatud<br />';*/
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv){
    if ($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv){
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if (abs($serveriArv-$kasutajaArv) <= 5){
        if ($kasutajaArv == $serveriArv){
            echo 'Õnnitlen! Arvasid ära '.++$_POST['katseteArv'].' korraga<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}

vorm();
/*vormiAndmed();*/
if(vormiAndmed()) {
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}
?>