<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 25.01.2018
 * Time: 11:10
 */
require_once 'tekst.php';
class vtekst extends tekst
{
    // lisame värvi ka
    var $varv = '';
    public function __construct($sone, $svarv)
    {
        parent::__construct($sone);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
        $this->varv = $varv;
    }

}