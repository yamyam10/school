// JavaScriptで1-240までのランダムな数字3つを
// かぶりがないようにコンソールに出力する
// プログラムを作ってください。
let list = []
while(list.length < 3) {
    const randNum = Math.ceil(Math.random() * 240)
    if (!list.includes(randNum)) {
        list.push(randNum)
        console.log(randNum);
    }
}