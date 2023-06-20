Window.onload=function(){
    console.log('ぺ―ジ読み込み完了')
}

function calculate(x){
 var y = x + 5
 return y
}
var answer = calculate(10)
console.log(answer)

var answer = calculate(-7)
console.log(answer)

function totalPrice(price, amount) {
    const tax = 1.1
    var total_price = price * amount * tax
    return total_price
}

var total_price = totalPrice(200, 5)
console.log(total_price)

const hello =function(name){
    return name + 'さん、こんにちは!'
}
var message = hello('HAL 東京')
console.log(message)

const hello2 = (name) => {
    return name + 'さん、こんにちは!'
}
var message = hello2('HAL 東京(2)')
console.log(message)

function calculateSpeed(distance, hour) {
    //時速(km/h) = 距離(km) ÷ 時間(h)
    var speed = distance / hour
    return speed    
}

var speed = calculateSpeed(250, 4)
console.log(speed + 'km/h')