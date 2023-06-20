const correct = 4000
let animationCorrectText = ""

function numberPadding(number, length, paddingString) {
    const paddingStrings = Array(length).fill(`${paddingString}`).join("");
    return Number("1" + `${paddingStrings}${number}`.slice(-length))
        .toLocaleString()
        .slice(1);
}

document
    .getElementById("action")
    .addEventListener("click", function () {
        // setInterval 一定時間ごとに処理を行う
        // setInterval(処理, 間隔(ミリ秒指定))
        // アロー関数 () => {}
        let count = 0
        animationCorrectText = ''
        const price = document.getElementById("price")
        // 表示に関するタイマー処理
        const timer = setInterval(() => {
            count = (count + 1) % 10
            price.innerText = numberPadding(animationCorrectText, 11, count)
        }, 100)

        setTimeout(() => {
            let length = `${correct}`.length
            let timer1 = setInterval(() => {
                animationCorrectText = `${correct}`.slice(length - 1)
                console.log(`${correct}`.slice(length - 1));
                length = length - 1
                if(length === 0) {
                    clearInterval(timer)
                    clearInterval(timer1)
                    price.innerHTML = '&#092;' + correct.toLocaleString()
                }

            }, 500)
        }, 1000)
    })
// function () {} 無名関数
