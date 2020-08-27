<?php
/*
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

//Read if a number is even or odd

$x = (int)readline("Enter any Number: ");

if( $x % 2 == 0 ){
    echo "The Number is Even" . PHP_EOL;
}
else{
    echo "The Number is Odd" . PHP_EOL;
};

//Print even number from 1 to 20

for( $i = 1 ; $i <= 20 ; $i++ ){
    if( $i % 2 == 0){
        echo "$i" . PHP_EOL;
    }
};

//Sum of odd number.

$x = 0;
for( $i = 1 ; $i <= 10 ; $i++ ){
    if( $i % 2 != 0 ){
        $x = $x + $i;
    }
};

echo "The Total Sum of Odd Number $x" . PHP_EOL;

//Sum of even number

$x = 0;
for( $i = 1 ; $i <= 10 ; $i++ ){
    if( $i % 2 == 0 ){
        $x = $x + $i;
    }
};

echo "The Total Sum of Even Number $x" . PHP_EOL;

//Addition of the sum of odd and even number.

$x = 0;
$y = 0;
$z = 0;
for( $i = 1 ; $i <= 10 ; $i++ ){
    if( $i % 2 == 0 ){
        $x = $x + $i;
    }
    else{
        $y = $y + $i;
    }
};

$z = $x + $y;

echo "The Total Sum of Even Numbers is $x" . PHP_EOL;
echo "The Total Sum of Odd Numbers is $y" . PHP_EOL;
echo "The Addition of the Sum of Even and Odd Numbers are $z" . PHP_EOL;
*/
//Calculate the rows of the triangle from the row index

$n = (int)readline("Number lines do you want: ");
$x = 1;
for( $i = 1 ; $i <= $n ; $i++ ){
    for( $j = 1 ; $j <= $i ; $j++ ){
        echo " ";
        echo " $x";
        $x = $x + 2;
    }
    echo PHP_EOL;
}

$y = (int)readline("Sum of the line number: ");

$z = 0;
for( $i = 0 ; $i < $y ; $i++ ){
    $z = $z + $i;
}

$first = (2 * $z) + 1;
$sum = 0;
for( $i = 0 ; $i < $y ; $i++ ){
    $sum = $sum + $first;
//    $sum = $sum + 2;
    $first = $first + 2;
};

echo "$sum" . PHP_EOL;