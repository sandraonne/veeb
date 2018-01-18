<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 14.01.2018
 * Time: 13:59
 */
function registreerimisVorm(){
    echo '
    <form action="" method="post">
        <table>
            <tr>
                <td>Eesnimi</td>
                <td colspan="2"><input type="text" name="eesnimi"></td>
            </tr>
            <tr>
                <td>Perenimi</td>
                <td colspan="2"><input type="text" name="perenimi"></td>
            </tr>
            <tr>
                <td>Aasta</td>
                <td>Kuu</td>
                <td>Päev</td>
            </tr>
            <tr>
                <td>'.aasta().'</td>
                <td>'.kuu().'</td>
                <td>'.paev().'</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Registreeri">
                </td>
            </tr>
        </table>
    </form>
    ';
}

function aasta(){
    $valik = '<select name="aasta">';
    for($aasta = 1920; $aasta < 2040; $aasta++){
        $valik = $valik.'<option value="'.$aasta.'">'.$aasta.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}

function kuu() {
    $kuud = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');
    $valik = '<select name= "kuu">';
    foreach($kuud as $kuu){
        $valik = $valik.'<option value="'.$kuu.'">'.$kuu.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}

function paev(){
    $valik = '<select name="paev">';
    for($paev = 1; $paev < 32; $paev++){
        $valik = $valik.'<option value="'.$paev.'">'.$paev.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}

registreerimisVorm();
echo '<pre>';
print_r($_POST);

