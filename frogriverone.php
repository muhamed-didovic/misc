<?php

function solution($X, $A) {
	// write your code in PHP5
	$B = array();
	$pass = (1+$X)*$X/2; //(n*(n+1)/2)
	echo "pass".$pass;
	foreach($A as $key => $value) {
		if($value<=$X && !isset($B[$value])) {
			echo "<br />values:$value";
			$B[$value] = 1;
			$pass -= $value;
		}
		if($pass==0) return $key;
	}
	return -1;
}

function solution2($X, $A) {
    $tiles  = array();
    for ($i = 0; $i < count($A); $i++){
        $j = $A[$i] - 1;
        if (!isset($tiles[$j])){
            $X--;
            $tiles[$j] = true;
        }
        if (!$X){
            return $i;
        }
    }
    return -1;
}

function solution3($X, $A) {

    $check_array = array();
    for ($i=0; $i < count($A); $i++ ) {
        $check_array[$i] = 0;
    }

    for ($i=0; $i < count($A); $i++) {

        if ($check_array[$A[$i]]==0) {
            $check_array[$A[$i]]=1;
            $X--;
        }

        if ($X==0) { return $i; }

    }

    return -1;

}
function f($x, $array){
	if($s = array_search($x, $array))
		return  $s;
	return -1;
}
echo "Should return 6<br />";
echo "Returns: ".solution(5, [1,3,1,4,2,3,5,4])."\n";