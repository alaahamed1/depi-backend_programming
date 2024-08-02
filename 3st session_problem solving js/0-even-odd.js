#!/usr/bin/node
const argv = process.argv[2];

if (argv) {
  if (argv % 2 === 0) {
    console.log('Even');
  } else {
    console.log('Odd');
  }
} else if (argv === undefined) {
  console.log('No number Available!');
}
