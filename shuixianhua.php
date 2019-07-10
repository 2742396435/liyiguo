
<?php
function cube( $n )
{
    return $n * $n * $n;
}

function is_narcissistic ( $n )
{
    $hundreds = floor( $n / 100);    //分解出百位
    $tens = floor( $n / 10 ) % 10;    //分解出十位
    $ones = floor( $n % 10 );    //分解出个位
    return (bool)(cube($hundreds)+cube($tens)+cube($ones) == $n);
}


for ( $i = 100; $i < 1000; ++ $i )
{
    if ( is_narcissistic($i) )
        echo $i."\n";
}
