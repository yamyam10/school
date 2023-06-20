function showMessage() {
    alert('HAL東京！！')
}

//イベント追加
var messageBtn = document.getElementById('message_btn')
messageBtn.addEventListener('click', showMessage)

//イベント削除ボタン
var removeEventBtn = document.getElementById('remove_event_btn')
removeEventBtn.addEventListener('click', () => {
    messageBtn.removeEventListener('click', showMessage)
})

//マウスオーバー
document.getElementById('mouse_area').addEventListener('mouseover', (e) => {
    // console.log(e.target)
    e.target.innerText = 'マウスオーバー！'
})
//マウスアウト
document.getElementById('mouse_area').addEventListener('mouseout', (e) => {
    // console.log(e.target)
    e.target.innerText = 'マウスがはずれました！'
})
//マウス移動
document.getElementById('mouse_point').addEventListener('mousemove', (e) => {
    // console.log(e.x, e.y)
    var plot_string = `(X, Y) = (${e.pageX}, ${e.pageY})`
    e.target.innerText = plot_string
})

//キーボードイベント
document.addEventListener('keydown', keydownEvent)

function keydownEvent(event) {
    var key_code = event.keyCode
    var action = ''
    if (key_code == 37) action = '左'
    if (key_code == 38) action = '上'
    if (key_code == 39) action = '右'
    if (key_code == 40) action = '下'
    document.getElementById('keycode_area').innerHTML = action
}