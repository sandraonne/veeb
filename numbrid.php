<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 14.12.2017
 * Time: 12:13
 */
for ($arv = 1; $arv <=10; $arv++) {
    if ($arv % 2 == 0) {
        $varv = 'blue';
    } else {
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br />';
}
?>