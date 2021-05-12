let a = [11, 2, 8, 10, 5, 99, 1, 8, 9];
let b = [];
for (let i = 0; i < 3; i++){
    for (let n = 0; n < 3; n++){
        b.push(a[3*n+i]);
    }
}
console.log(b);