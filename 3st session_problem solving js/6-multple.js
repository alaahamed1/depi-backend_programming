#!/usr/bin/node

/**
 * checkFunc - entry point checks wether a given
 * positive number is multiple 5 or a multiple 8.
 * @n : number to check.
 * Return: return true if condition achieved.
 */

const checkFunc = function (n) {
  if (n >= 0) {
    return (n % 5 == 0) || (n % 8 == 0);
  }
};
console.log(checkFunc(8));
