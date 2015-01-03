<?php

function solution($N, $A){
    $cond     = $N + 1;
    $cur_max  = 0;
    $last_upd = 0;
    $cnt_arr  = array();
    $cnt      = count($A);
    for($i = 0; $i < $cnt; $i++){
        $cur = $A[$i];
        if($cur == $cond){
            $last_upd = $cur_max;
        }
        else{
            $pos = $cur - 1;
            if(!isset($cnt_arr[$pos])){
                $cnt_arr[$pos] = 0;
            }
            if($cnt_arr[$pos] < $last_upd){
                $cnt_arr[$pos] = $last_upd + 1;
            }
            else{
                $cnt_arr[$pos] ++;
            }
            if($cnt_arr[$pos] > $cur_max){
                $cur_max = $cnt_arr[$pos];
            }
        }
    }
    for($i = 0; $i < $N; $i++){
        if(!isset($cnt_arr[$i])){
            $cnt_arr[$i] = 0;
        }
        if($cnt_arr[$i] < $last_upd){
            $cnt_arr[$i] = $last_upd;
        }
    }
    return $cnt_arr;
}
/*class Solution {
    public int[] solution(int N, int[] A) {
        int MAX = 0, B = 0, CI;
        int[] C = new int[N];
        
        for(int i = 0; i < A.length; i++)
        {
            CI = A[i]-1;
            if(A[i] <= N && A[i] >= 1)
            {
                C[CI] = Math.max(B,C[CI]) + 1;
                MAX = Math.max(MAX,C[CI]);
            }else if(A[i] == N + 1)
            {
                B = MAX;
            }
        }
        
        for(int i = 0; i < C.length; i++)
            C[i] = Math.max(C[i],B);
        
        return C;
    }
}*/
function solution2($n, $a)
{var_dump($a);
    $max = 0; $b = 0; $ci;
    $c = array_fill(0,$n, 0);
    $len = count($a);
    echo "len:$len<br />";
    for($i = 0; $i < $len; $i++){
        $ci = $a[$i]-1;
        echo "novi ci:".$ci."<br />";
        if($a[$i] <= $n && $a[$i] >= 1){
            echo "-".$b."*".$c[$ci]."-<br />";
            
            $c[$ci] = max($b,  $c[$ci]) + 1;
            echo "c[ci]:".$c[$ci]."--<br />";
            
            $max = max($max, $c[$ci]);
            echo "max:".$max."<br />";

        } else if($a[$i] == $n + 1){
            
            $b = $max;
            echo "else:".$b."*********";

        }
        var_dump($c);
        echo "-------------------------------------";
    }
    $length = count($c);
    for($i = 0; $i < $length; $i++){
            $c[$i] = max($c[$i],$b);
    }    
    return $c;
}
$a = [3,4,4,6,1,4,4];
$b = solution2(5, $a);
//$t = sort($b);
var_dump( $b);