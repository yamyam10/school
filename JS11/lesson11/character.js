//id=character のElement取得
const character = document.getElementById('character')
//座標
var x = 0
var y = 0
//絶対座標
character.style.position = 'absolute'
character.style.left = x + 'px'
character.style.top = y + 'px'
//キャラクターのサイズ
const rect = character.getClientRects()[0]
console.log(rect)

const character_width = rect.width
const character_height = rect.height
//キャラクターのスピード
const speed = 3
//キャラクターの方向
var direction = ''
//タイマーの時間間隔
const interval = 10
//タイマー
var timer

/**
 * キャラクター移動
 */
const moveCharacter = () => {
    //interval の間隔で処理を繰り返す
    timer = setInterval(() => {
        if (direction == 'right') {
            x += speed
        } else if (direction == 'left') {
            x -= speed
        } else if (direction == 'down') {
            y += speed
        } else if (direction == 'top') {
            y -= speed
        }
        //はみ出しチェック
        checkBoarder()
        //キャラクター座標更新
        updateCharacterPlot()
    }, interval)
}

/**
 * キャラクター座標更新
 */
const updateCharacterPlot = () => {
    character.style.left = x + 'px'
    character.style.top = y + 'px'
}

/**
 * キャラクター停止
 */
const stopCharacter = () => {
    clearInterval(timer)
}

/**
 * 境界チェック
 */
const checkBoarder = () => {
    const limitX = window.innerWidth - character_width
    const limitY = window.innerHeight - character_height

    if (x < 0) x = 0
    if (y < 0) y = 0
    if (x > limitX) x = limitX
    if (y > limitY) y = limitY
}

/**
 * キーボードのキーから方向決定 
 */
const keydownEvent = (event) => {
    var key_code = event.keyCode
    direction = ''
    //上下左右の矢印キーが押されたら、direction にフラグをつける
    if (key_code == 37) direction = 'left'
    if (key_code == 38) direction = 'top'
    if (key_code == 39) direction = 'right'
    if (key_code == 40) direction = 'down'
    console.log(direction)
    //スペースキー（停止）
    if (key_code == 32) {
        stopCharacter()
    }
    //方向があればキャラクターの停止＆移動
    if (direction) {
        stopCharacter()
        moveCharacter()
    }
}

//キーボードイベント
document.addEventListener('keydown', keydownEvent)
