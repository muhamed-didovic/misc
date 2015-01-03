function fi(n){
	return function(n, a, b){
		console.log(n, a, b);
		return  0<n ? arguments.callee(n-1, b, a+b) : a;
	}(n,0,1);
};

var fb = (function(cache2){

	return cache2 = cache2 || {}, function(n) {
			if (cache2[n]) return cache2[n];
			else {
				/*if (n <= 0) 
					return 0;
				else if (n > 2) return n;
				else 
					return f(n-1) + f(n-2);*/
				
				return cache2[n] = ( n == 0 ? 0 
										    : (n < 0 ? -fibo(-n) 
										   			 : (n <= 2 ? 1 
										   			           : fb(n-2) + fb(n-1)
										   			   )
										   	  )
								    );
			}
		}
})();
console.log(fb(3));