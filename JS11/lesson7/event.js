const inputCharacterName = () => {
    console.log('入力しました！')
    var character_name = document.getElementById('character_name').value
    console.log(character_name)
    var message = 'ようこそ！' + character_name + 'さん'
    document.getElementById('message').innerHTML = message 
}