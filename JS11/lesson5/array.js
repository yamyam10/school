var drinks=['コーヒー','紅茶','ほうじ茶']
console.log(drinks)
console.log(drinks[0])
console.log(drinks[1])
console.log(drinks[2])
//個数
console.log(drinks.length)
//データの追加
drinks.push('炭酸水')
console.log(drinks)
//データの削除(最後)
drinks.pop()
console.log(drinks);

//データの更新
drinks[1] = 'ウーロン茶'
console.log(drinks);


var character={
    id:1,
    name:'HAL',
    job:'student',
    level:1,
    hp:15,
    mp:0,
    exp:0,
}
console.log(character)
console.log(character.id)
console.log(character.name)
console.log(character.exp)

character.weapon='ナイフ'
console.log(character.weapon)