#!/usr/bin/node

/**
 * checkFunc - entry function checks if one of 2 int
 * is positive and the other is negative.
 * @num1 : number one.
 * @num2 : number two.
 * Return: return true if one of 2 numbers is positive.
 */

const checkFunc = function (num1, num2) {
  if (num1 > 0 && num2 < 0) {
    return true;
  } else if (num1 < 0 && num2 > 0) {
    return true;
  } else {
    return false;
  }
};
