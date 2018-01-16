<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 14.01.2018
 * Time: 13:59
 */
function registreerimisVorm (){
    echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
    Eesnimi: <input type="text" name="eesnimi"><br />
    <br />
    Perenimi: <input type="text" name="perenimi"><br /><br />
    Aasta: 
    <br /><br />
    Kuu: <select name="kuu">
            <option value="">Vali kuu</option>
            <option value="1">Jaanuar</option>
            <option value="2">Veebruar</option>
            <option value="3">Märts</option>
            <option value="4">Aprill</option>
            <option value="5">Mai</option>
            <option value="6">Juuni</option>
            <option value="7">Juuli</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">Oktoober</option>
            <option value="11">November</option>
            <option value="12">Detsember</option>
            </select>
            <br /><br />
    Päev: 
    <br /><br />
    <input type="submit" value="Registreeri">
    </form>
    ';
}
function aasta(){
    $start = date('Y');
    $varasem = 1950;
    $hilisem = date('Y');
    print '<select>';
    foreach (range($hilisem,$varasem) as $item) {
        print '<option value="'.$item.'"'.($item === $start ? ' selected="selected"' : '').'>'.$item.'</option>';
    }
}

function paev() {
    $start=date('d');
    $algus = 1;
    $lopp = 31;
    print '<select>';
    foreach (range($lopp,$algus) as $item) {
        print '<option value="'.$item.'"'.($item === $start ? ' selected="selected"' : '').'>'.$item.'</option>';
    }
}

registreerimisVorm();
aasta();
paev();