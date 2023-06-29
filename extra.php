<?php
$v=30;
switch($v){
    case $v<18:
        echo "voto insufficiente.";
        break;
    case $v>=18 && $v<21:
        echo " voto sufficiente";
        break; 
    case $v>=21 && $v<24:
        echo "il voto é buono";
        break;
    case $v>=24 && $v<27:
        echo "la tua valutazione è distinto ";
        break;
    case $v>=27 && $v<=29:
        echo "voto ottimo";
        break;
    default:
    echo "voto eccellente";

};
