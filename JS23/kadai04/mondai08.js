// 1-2400までのランダムな数字3つをつかって、
// その数の並び替えでもっとも大きな数字になるパターンを
// 出力してください。(9, 31, 15 => 93115)
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

// 数値を文字列にして1行目を取得して
// それを数値に変えて降順で並び替えみたいなのを
// しようとしましたが難しくてできませんでした。