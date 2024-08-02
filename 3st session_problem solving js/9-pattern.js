
const x = 4;

for (let i = 1; i <= x; i++) {
	let row = '';
	for (let j = 1; j <= i; j++) {
		row += '#';
	}
	console.log(row);
}
