#!/usr/bin/node

/**
 * sorting - entry point to find the biggest number of an array.
 * @numbers : the array to sort.
 * Return : return the first index of the array (biggest number).
 */

const numbers = [1, 5, 9];

function sorting(numbers) {
	numbers.sort((a, b) => b - a);
	return 'biggest number', numbers[0];
}
console.log(sorting(numbers));

/** --------- anther solution
let numbers = [1, 5, 9]

function sorting(numbers) {
	if (numbers.length === 0) {
		return null;
	}
	let biggestNumber = numbers[0];

	for (let i = 1; i <= numbers.length; i++) {
		if (numbers[i] > biggestNumber) {
			biggestNumber = numbers[i];
		}
	}
	return `biggest number: ${biggestNumber}`;
}
console.log(sorting(numbers));
 */
