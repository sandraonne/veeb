<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 19.01.2018
 * Time: 13:05
 */
//nõuame andmebaasi töötluse funktsioonid kasutusele
require_once 'ab_funkts.php';

//tekitame ühenduse andmebaasiga
$abYhendus = yhendus();

//koostame sql lause ja saadame andmebaasi
$sql = 'show tables';
//$tulemus = saadaParing($abYhendus,$sql);
$tulemus = annaAndmed($abYhendus,$sql);
//tulemuse sisu testkujul
echo '<pre>';
print_r($tulemus);
echo '</pre>';