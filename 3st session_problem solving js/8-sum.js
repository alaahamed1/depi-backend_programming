#!/usr/bin/node

/**
 * sum - sum the numbers from 1 to n.
 * @n : number to pass.
 * Return : return the sum of the numbersfrom 1:n.
 */

let sum = function (n) {
	sum = 0;
	for (let i = 1; i <= n; i++) {
		sum += i;
	}
	return sum;
};
console.log(sum(10));
