//id が monsters のタグを取得（親要素）
var monstersElement = document.getElementById('monsters')

//子要素の pタグ作成
var monsterElement1 = document.createElement('p')

//pタグの中に文字を入れる: <p>スライム</p>
monsterElement1.innerHTML = 'スライム'

//親要素に子要素を追加
monstersElement.appendChild(monsterElement1)

var monsterElement2 = document.createElement('p')
monsterElement2.innerHTML = 'キメラ'
monstersElement.appendChild(monsterElement2)

//親要素から子要素を削除
monstersElement.removeChild(monsterElement1)

//aタグを作成
var monster1A = document.createElement('a');
monster1A.href = "http://google.com/search?q=" + monsterElement1.innerHTML;
monster1A.target = "_blank";
monster1A.innerText = monsterElement1.innerHTML;

//親要素にaタグを追加
monstersElement.appendChild(monster1A);

//divタグを作成
var monsterDiv1 = document.createElement('div')
//imgタグを作成
var monsterImg1 = document.createElement('img')
monsterImg1.src = './images/monster_006.png'
//divにimgタグを追加 <div><img ...></div>
monsterDiv1.appendChild(monsterImg1)
//モンスター名のpタグ
var monsterP1 = document.createElement('p')
monsterP1.innerHTML = 'モンスター1'
monsterDiv1.appendChild(monsterP1)
//divタグを親要素monsters に追加
monstersElement.appendChild(monsterDiv1)

//monster2
var monsterDiv2 = document.createElement('div')
var monsterImg2 = document.createElement('img')
monsterImg2.src = './images/monster_022.png'
monsterDiv2.appendChild(monsterImg2)
var monsterP2 = document.createElement('p')
monsterP2.innerHTML = 'モンスター2'
monsterDiv2.appendChild(monsterP2)
monstersElement.appendChild(monsterDiv2)

//monster3
var monsterDiv3 = document.createElement('div')
var monsterImg3 = document.createElement('img')
monsterImg3.src = './images/monster_040.png'
monsterDiv3.appendChild(monsterImg3)
var monsterP3 = document.createElement('p')
monsterP3.innerHTML = 'モンスター3'
monsterDiv3.appendChild(monsterP3)
monstersElement.appendChild(monsterDiv3)

//タイマーのサンプル
var timerP = document.createElement('p')
monstersElement.appendChild(timerP)
var count = 0


//タイマー 1000 = 1秒
var timer = setInterval(() => {
    //1ずつ増える
    count++
    timerP.innerHTML = count
    }, 100)