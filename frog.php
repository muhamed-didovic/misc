<?php 

function frog($X, $Y, $D) {
    // write your code in PHP5
    return (int)ceil(($Y-$X)/$D) . "rez:".(($Y-$X)/$D);
}

echo frog(0,10,3);