// JavaScriptで1-100までをコンソールに出力する
// プログラムを作ってください。
// ただし、3の倍数のときは、「Fizz」, 
// 5の倍数のときは、「Buzz」, 
// 15の倍数のときは、「FizzBuzz」と出力してください。
for (let i = 1; i <= 100; i++) {
    if (i % 15 === 0) {
        console.log("FizzBuzz");
    } else if(i % 3 === 0) {
        console.log("Fizz");
    } else if(i % 5 === 0) {
        console.log("Buzz");
    } else {
        console.log(i);
    }
}