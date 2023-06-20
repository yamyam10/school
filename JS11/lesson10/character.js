//id=character のElement取得
const character = document.getElementById('character')
//絶対座標
character.style.position = 'absolute'
//タイマー
var timer
//タイマーの時間間隔
const interval = 10
//キャラクターのX,y座標
var x = 0
var y = 50
character.style.top = y + 'px'

//キャラクターの方向
var dirction = 'under'

function moveCharacter() {
    timer = setInterval(function () {
        if (dirction == 'right') {
            //キャラクターを右に動かす(左からのpx)
            //X座標を増やす
            x += 1
            character.style.left = x + 'px'
        } else if (dirction == 'under') {
            //キャラクターを下に動かす(上からのpx)
            y += 1
            character.style.top = y + 'px'
        }
    }, interval)
}

function stopCharacter() {
    clearInterval(timer)
}

//Startボタンをクリックしたら、moveCharacter() を実行
document.getElementById('start_btn')
    .addEventListener('click', moveCharacter)

//Stopボタンをクリックしたら、stopCharacter() を実行
document.getElementById('stop_btn')
    .addEventListener('click', stopCharacter)