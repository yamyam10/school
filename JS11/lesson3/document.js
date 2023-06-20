/**
 * pタグをつけて出力 
 */
function outputP(message) {
    var tag = '<p style="color: red;">' + message + '</p>'
    document.write(tag)
}
outputP('旅行')
outputP('ゲーム')
outputP('スポーツ観戦')

document.title='プロフィール'
document.body.style.color="#000"
document.body.style.background="#00f0ff"