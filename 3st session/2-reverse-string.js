#!/usr/bin/node
const argv = process.argv[2];
let arr = Array.from(argv);
arr.reverse();
let res = arr.join('');
console.log(res);
