<?php

$arr = [4 , 9 , 7];

for( $i = 0; $i < count($arr); $i++ ) {
    if( $arr[$i] % 2 == 0 ) {
        echo 'Even'.PHP_EOL;
    } else {
        echo 'Odd'.PHP_EOL;
    }
}