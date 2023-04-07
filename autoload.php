<?php
function load($className) {
    include_once "$className.php";
//    echo "In autoload.php le nom de la casse à charger est : $className";
}
//function load2($className) {
////    include_once "$className.php";
//    echo "In autoload.php le nom de la casse à charger est : $className";
//}

//spl_autoload_register('load2');
spl_autoload_register('load');