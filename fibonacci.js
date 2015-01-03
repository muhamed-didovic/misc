function fib(n) {
  return function(n,a,b) {
  	console.log(arguments);
    return n>0 ? arguments.callee(n-1,b,a+b) : a;
  }(n,0,1);
}
var fibo = (function(cache){
    return cache = cache || {}, function(n){
    	console.log(cache)
        if (cache[n]) return cache[n];
        else return cache[n] = ( n == 0 ? 0 : ( n < 0 ? -fibo(-n)
            : (n <= 2 ? 1 : fibo(n-2) + fibo(n-1)) ) );
    };
})();

//console.log(fibo(5));