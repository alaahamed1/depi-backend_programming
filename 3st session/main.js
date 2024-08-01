let x = 4;
let y = 6;

for (let i = 1; i <= y; i++) {
  let row = '';
  for (let j = 1; j <= i; j++) {
    row += '#';
  } 
  console.log(row);
}