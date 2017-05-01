<?php

$people = [
    'Dmytro' => 'Ukrainian',
    'John' => 'English',
    'Toshiba' => 'Japan'
];

foreach ( $people as $key => $val ) {
    echo "$key : $val" . '<br>';
}

$nums = [1, 2, 3, 4, 5];

echo var_dump($nums) . '<br>';

foreach ( $nums as &$v ) {
    $v *= 10;
}

echo var_dump($nums) . '<br>';
unset( $v );
echo $v;