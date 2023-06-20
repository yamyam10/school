var priceElement = document.getElementById('price')
console.log(priceElement)
var price =priceElement.textContent
console.log(price)

var messageElement = document.getElementById('message')
messageElement.innerText = 'いらっしゃい'
messageElement.innerText = '<p>いらっしゃい</p>'
messageElement.innerHTML = '<p>いらっしゃい</p>'

//サイコロ
function randomNumber(min,max){
    var number = Math.floor(Math.random() * (max + 1 - min)) + min
    return number 
}
var resultElement = document.getElementById('dice-result')
resultElement.innerText = randomNumber(1,6)

var element = document.querySelectorAll("p#iten_name")
    for (var element of elements) {
        console.log(element)
    }