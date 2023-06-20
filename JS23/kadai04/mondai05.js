// JavaScriptで1-100までをコンソールに出力する
// プログラムを作ってください。
// ただし、4の倍数のときは、「にゃー」, 
// 7の倍数のときは、「わん」, 
// 28の倍数のときは、「わん、にゃー」と出力してください。
for (let i = 1; i <= 100; i++) {
    if (i % 28 === 0) {
        console.log("わん、にゃー");
    } else if(i % 4 === 0) {
        console.log("にゃー");
    } else if(i % 7 === 0) {
        console.log("わん");
    } else {
        console.log(i);
    }
}