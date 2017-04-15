<?php

$value_size = ini_get( 'post_max_size' );
$value_last_symbol = $value_size{ strlen($value_size) - 1 };
$value_size = (int)$value_size;

switch( strtoupper($value_last_symbol) ) {

    case 'M':
        $value_size *= 1024; break;
    case 'G':
        $value_size *= 1024; break;
    case 'K':
        $value_size *= 1024; break;
    default:
        $value_size *= 1;
}

echo $value_size . '<br>';