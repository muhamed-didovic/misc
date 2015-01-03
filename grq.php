<?php
//GenomicRangeQuery
function solution($S, $P, $Q) {
	$S      = str_split($S);
	$len    = count($S);
	$lep    = count($P);
	$arr    = array();
	$result = array();
	$clone  = array_fill(0, 4, 0);
	
	for($i = 0; $i < $len; $i++){
		$arr[$i] = $clone;
		switch($S[$i]){
			case 'A':
				$arr[$i][0] = 1;
				break;
			case 'C':
				$arr[$i][1] = 1;
				break;
			case 'G':
				$arr[$i][2] = 1;
				break;
			default:
				$arr[$i][3] = 1;
				break;
		}
	}
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	for($i = 1; $i < $len; $i++){
		for($j = 0; $j < 4; $j++){
			$arr[$i][$j] += $arr[$i - 1][$j];
		}
	}
	echo "-------------";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	for($i = 0; $i < $lep; $i++){
		$x = $P[$i];
		$y = $Q[$i];
		for($a = 0; $a < 4; $a++){
			$sub = 0;
			if($x - 1 >= 0){
				$sub = $arr[$x - 1][$a];
			}
			if($arr[$y][$a] - $sub > 0){
				$result[$i] = $a + 1;
				break;
			}
		}
	}
	return $result;
}
function solution2($s, $p, $q){
	$s      = str_split($s);
	$len 	= count($p);
	$arr 	= [];
	//echo $len;die();
	$result = [];
	for($i = 0; $i < $len; $i++){
		echo "p:".$p[$i]." - q:".$q[$i]. " - len:".$i;
		$array = array_slice($s, $p[$i], ($q[$i]-$p[$i] == 0 ? 1 : $q[$i]-$p[$i]+1));
		var_dump($array);
		$result[] = min($array);
		echo "rezultat:".(min($array))."<br />";
	}
	echo "------------";
	for($i = 0; $i < $len; $i++){
		
		switch($result[$i]){
			case 'A':
				$arr[$i] = 1;
				break;
			case 'C':
				$arr[$i] = 2;
				break;
			case 'G':
				$arr[$i] = 3;
				break;
			default:
				$arr[$i] = 4;
				break;
		}
	}
	var_dump($arr);
	//echo min($s);
}
$x = 'GACACCATA';
$a = [0,0,4,7];
$b = [8,2,5,7];

$y = 'CAGCCTA';
$c = [2,5,0];
$d = [4,5,6];
var_dump(solution2($x, $a, $b));
var_dump(solution2($y, $c, $d));

?>