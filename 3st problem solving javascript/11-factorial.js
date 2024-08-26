#!/usr/bin/node

/**
 * factorial - calculates the factorial of a given number.
 * @n : the number to calculate the factorial of.
 * Return: the factorial of the number.
 */

let factorial = function (n) {
	let result = 1;
	for (let i = 2; i <= n; i++) {
		result *= i;
	}
	return result;
};

console.log(factorial(5));
