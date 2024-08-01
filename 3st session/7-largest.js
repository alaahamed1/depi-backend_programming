let arr = [1, 5, 9]

for (let i = 0; i <= arr.length; i++) {
    let newArr = []
    for (let j = 0; j <= arr.length; j++) {
        if (i > j) {
            newArr += i
        }
    }
    console.log(newArr[0])
}
