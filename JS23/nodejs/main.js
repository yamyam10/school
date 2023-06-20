// console.log("こんにちは");

// 3の倍数 [Fizz]
// 5の倍数 [Buzz]
// 15の倍数 [FizzBuzz]
// + - * / %
// i % 3 === 0

// for (let i = 1; i <= 100; i++) {
//     if (i % 15 === 0) {
//         console.log("FizzBuzz");
//     } else if(i % 3 === 0) {
//         console.log("Fizz");
//     } else if(i % 5 === 0) {
//         console.log("Buzz");
//     } else {
//         console.log(i);
//     }
// }

// for (let i = 1; i <= 40; i++) {
//     if (i % 3 === 0) {
//         console.log("こんにちは");
//     } else if (`${i}`.iOf("3") != -1) {
//         console.log("こんにちは");
//     } else {
//         console.log(i);
//     }
// }

// トランプを表示しよう
// 13 * 4 = 52

// const mark = ["◆", "♥", "♣", "♠"]
// const num = ["A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"]

// for (let i = 0; i < mark.length * num.length; i++) {
//     console.log(`${mark[i % mark.length]}${num[Math.floor(i / mark.length)]}`);
// }

// 0-99までのランダムな数字
// 3つをかぶりがないようにコンソールに出力するプログラムを作ってください。



// let list = []
// while(list.length < 3) {
//     const randNum = Math.floor(Math.random() * 10)
//     if (!list.includes(randNum)) {
//         list.push(randNum)
//         console.log(randNum);
//     }
// }

// for (let i = 1; i <= 100000; i++) {
//     if (i % 56 === 0) {
//         console.log(i);
//     }
// }


// let list = [1, 1]
// for (let i = 0; i < 9; i++) {
//     if (i > 1) {
//         list.push(list[list.length - 1] + list[list.length - 2])
//     } 
//     console.log(list[i]);
// }

let list = []
while(list.length < 3) {
    const randNum = Math.floor(Math.random() * 2400)
    if (!list.includes(randNum)) {
        list.push(randNum)
        // console.log(randNum);
    }
    var string = String(randNum);
    //console.log(string);
    var rn = string.slice( 0, 1 ) ;
    //console.log(rn);
    var result = Number(rn);
    // console.log(result);
    list.sort((a, b) => b - a);
    console.log(result);
    console.log(randNum);
}