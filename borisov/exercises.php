<?php

for ( $num = 1; $num <= 20; $num +=2 ) {
    echo $num . '<br>';
};

$string = 'Hello';
$string_length = strlen($string);
$i = 0;

while ( $i < $string_length ) {
    echo strtoupper( $string{$i} ) . '<br>';
    $i++;
}