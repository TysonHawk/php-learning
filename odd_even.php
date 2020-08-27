<?php

// Printing odd number from 1 to 20

for( $i = 1 ; $i <= 20 ; $i++ ){
    if( $i % 2 != 0){
        echo $i . PHP_EOL;
    }
};

// Checking if the number is even or odd from 1 to 10

for( $i = 1 ; $i <= 10 ; $i++ ){
    if( $i % 2 == 0){
        echo "Even" . PHP_EOL;
    }
    else{
        echo "Odd" . PHP_EOL;
    }
};