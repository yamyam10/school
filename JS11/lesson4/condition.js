/*** 
  1km未満だったら徒歩
  1km以上 - 5km未満だったら自転車
  それ以外だったら電車
 ***/
var distance = 8
var action = ''

if (distance < 1) {
    action = '徒歩'
} else if (distance >= 1 && distance < 5) {
    action = '自転車'
} else {
    action = '電車'
}
document.write(action)

var is_empty = false
if (is_empty) {
    action = 'ご飯が食べたい'
} else {
    action = '遊ぼう'
}
document.write(action)

//燃えるゴミ、燃えないゴミ、回収なしの判別
var date =new Date()
var weekday = '火'
var type = ''
switch (weekday) {
    case '月':
        type = '燃えるゴミ'
        break;
    case '水':
        type = '燃えないゴミ'
        break;
    default:
        type = '回収なし'
        break;
}
document.write('<br>')
document.write(weekday)
document.write('<br>')
document.write(type)