<?php


function solution($A) {

	sort($A, SORT_NUMERIC);
	$length = count($A);

	$B = range(1,$length);
	var_dump($B);
	if ($A===$B) {
		return 1;
	} else {
		return 0;
	}

}

function solution2($A) {
    sort($A, SORT_NUMERIC);
    $i=0;
    $c = count($A);
    while($i < $c){
        if($i+1 <> $A[$i++]){
            return 0;
        }
    }
    return 1;
}

echo "Returns: ".solution([4, 1, 3, 2])."\n";
