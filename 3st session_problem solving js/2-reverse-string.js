#!/usr/bin/node
const argv = process.argv[2];
const arr = Array.from(argv);
arr.reverse();
const res = arr.join('');
console.log(res);
