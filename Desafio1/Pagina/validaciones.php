<?php
function esVacio($var){
    return empty(trim($var));
}

function esTexto($var){
    return preg_match('/^[a-zA-Z ]+$/',$var);
}

function esCodigo($var){
    return preg_match('/^[P]{1}[R]{1}[O]{1}[D]{1}[0-9]{5}$/',$var);
}
?>