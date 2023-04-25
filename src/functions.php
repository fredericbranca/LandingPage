<?php

//fonction pour afficher onlinespace en MB ou GB
function convert($number) {
    if ($number < 1) {
        return $number * 1000 . 'MB';
    }
    else {
        return $number . 'GB';
    }
}

//fonction pour afficher un booléen en texte
function getYesNoBool($number) {
    if ($number) {
        return 'Yes';
    }
    else{
        return 'No';
    }
}

//fonction pour afficher les icones v ou x
function getIconeCheck($number) {
    if ($number) {
        return '<i class="fa-sharp fa-regular fa-circle-check"></i>';
    }
    else {
        return '<i class="fa-sharp fa-regular fa-circle-xmark"></i>';
    }
}