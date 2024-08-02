#!/usr/bin/node

/**
 * checkFunc - check the number wether positive or negative.
 * @n : number to check.
 * Return : return positive or negative.
 */
const checkFunc = function (n) {
	if (n >= 0) {
		return `${n} is positive`;
	} else if (n < 0) {
		return `${n} is negative`;
	}
};
console.log(checkFunc(-2));
