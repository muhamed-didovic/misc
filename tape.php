
<?php 

function solution($A) {
    
    $sum1   = $A[0];
    $sum2   = array_sum($A) - $sum1;
    $found  = array('index'=>0, 'abs' => abs($sum1 - $sum2));
    $c = count($A) - 1;
    $i = 1;
    while($i < $c){
        $sum1 += $A[$i];
        $sum2 -= $A[$i];
        $abs = abs($sum1 - $sum2);
        if($abs < $found['abs']){
            $found['index'] = $i;
            $found['abs'] = $abs;
        }
        $i++;
    }
    //var_dump($found['abs']);
    return $found['abs'];
}
function solution2($A) {
    // write your code in PHP5
    $head = $A[0];
    $tail = array_sum($A)-$A[0];
    $min_diff = abs($head-$tail);
    for($i=1,$cnt=count($A);$i<$cnt-1;++$i) {
        $head += $A[$i];
        $tail -= $A[$i];
        if($min_diff>abs($head-$tail)) $min_diff = abs($head-$tail);
    }
    return $min_diff;
}

echo tape([3,1,2,4,3]);

function tape($A){
    $head = $A[0];
    $tail = array_sum($A) - $head;
    $min_diff = abs($head-$tail);
    //echo "a".$min_diff;
    $numberOfElementsInArray = count($A);
    for($i = 0;$i < $numberOfElementsInArray; $i++){
        $head += $A[$i];
        $tail -= $A[$i];
        $new_abs = abs($head-$tail); 
        if ($min_diff > $new_abs) $min_diff = $new_abs;
    }
    return $min_diff;
}