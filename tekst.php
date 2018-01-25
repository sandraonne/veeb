<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ // klassi algus
    // klassi omadused = klassi väljad (fields)
    // klassi muutuja (variable)
    var $sone = ''; // teksti kirjeldavad sõnad

    // tekst constructor
    // @param string $sone
    public function __construct($sone)
    {
        $this->maaraTekst($sone);
    }
    // klassi tegevused
    // meetodid - funktsioonid, mis suuudavad seletada, kuidas üksik tegevus sooritatakse
    function maaraTekst($sone){ //teksti määramine maaraTekst ('Tere maailm')
        $this->sone = $sone;
    }
    function prindiTekst() { // teksti väljastamine
        echo $this->sone.'<br />';
    }
} // klassi lõpp