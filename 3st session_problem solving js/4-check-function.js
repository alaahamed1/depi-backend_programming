#!/usr/bin/node

/**
 * checkFunc - entry point to check 2 numbers
 * if one of the 2 numbers or sum of them = 50.
 * @num1 - number one.
 * @num2 - nmber two.
 * Return - return true if the condition achieved.
 */

const num1 = process.argv[2];
const num2 = process.argv[3];
const checkFunc = function (num1, num2) {
  sum = num1 + num2;

  if (num1 == 50 || num2 == 50 || sum == 50) {
    return true;
  } else {
    return false;
  }
};
const res = checkFunc(5, 45);
console.log(res);
