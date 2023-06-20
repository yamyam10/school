var monster = 'スライム'
console.log(monster)

var amount = 2
var price = 150
var discount = 10

//個数を増やす
amount++

//合計金額 ＝ 価格 × 個数
var total_price = price * amount
console.log(total_price)

total_price -= discount
console.log(total_price)

var item = 'オランジーナ'

var message = item + 'の合計金額は' + total_price + '円です'
var message2 = `${item}の合計金額は${total_price}円です`
console.log(message)
console.log(message2)

var is_alive
var hp = 10

//hpが０より大きい
is_alive = (hp > 0)

console.log(is_alive)

hp -= 20
is_alive = (hp > 0)
console.log(is_alive)