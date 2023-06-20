function randomNumber(min,max){
    var number = Math.floor(Math.random() * (max + 1 - min)) + min
    return number 
}
function randomMonster() {
    var number = randomNumber(1, 3)
    var image_path = './images/monster_' + number + '.png'

    var img = document.getElementById('monster')
    img.src = image_path
}
function randomMonster() {
    var number = randomNumber(1, 1)
    var image_path = './images/character_' + number + '.png'

    var img = document.getElementById('character')
    img.src = image_path
}

