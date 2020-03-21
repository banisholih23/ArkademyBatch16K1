function triangle(n) {
	console.log("Input		: triangle("+n+")\n");
	if ( n < 0 ) {
		console.log("Parameter harus angka dan bilangan positif\n");
		return null;
	}
	for (let i = 0; i < n; i++) {
		p ="".repeat(n+(i-1))+"#".repeat(i+1);
		console.log(p+"\n");
	}
}
triangle(5);