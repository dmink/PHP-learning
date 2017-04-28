<?php

$value_size = ini_get( 'post_max_size' );
$value_last_symbol = $value_size{ strlen($value_size) - 1 };
$value_size = (int)$value_size;

switch( strtoupper($value_last_symbol) ) {

    case 'G':
        $value_size *= 1024;
    case 'M':
        $value_size *= 1024;
    case 'K':
        $value_size *= 1024;
}
 
echo $value_size;

phpinfo();