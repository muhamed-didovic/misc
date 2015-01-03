<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="fibonacci.js"></script>
	<script type="text/javascript" src="fib.js"></script>
</head>
<body>
<?php 

	$map = [0 => 0, 1 => 1];

	//echo fibonacci_iteration(70, $map) . PHP_EOL;

	//we use &map array variable since on every call the array would be copied to memory instead of being referenced
	function fibonacci_recursion($n, &$map)
	{
	    if(!isset($map[$n]))
	        $map[$n] = fibonacci_recursion($n-1, $map) + fibonacci_recursion($n-2, $map);

	    return $map[$n];
	}

	function fibonacci_iteration($n)
	{
	    if($n == 0)
	        return 0;

	    $previous = 0;
	    $current = 1;
	    for($i = 1; $i < $n; $i++) {
	        $new = $previous + $current;
	        $previous = $current;
	        $current = $new;
	    }

	    return $current;
	}


	function fibRec($n) {
	    return $n < 2 ? $n : fibRec($n-1) + fibRec($n-2);
	}

	$array = [0 => 0, 1 => 1];
	function f($n ,&$array){
		if(!isset($array[$n]))
			$array[$n] = f($n-1, $array) + f($n-2, $array);

		return $array[$n];
	}
	echo "f: ".f(7, $array);

?>
</body>
</html>
