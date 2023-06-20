// axiosのアクセス
// axios.get(url) HTTPリクエストをしている
// axios.post(url)

// 料理のレシピのJSON
// https://gist.githubusercontent.com/Kazunari-h/a4b948ee2ecb68519c18b68e1812e77c/raw/f9d09b38771604d1f16f8c0a2c126ef6c68f7719/section.json

// JSON
// JSの連想配列(key, value)

/* 
{
    "name": "おすすめレシピ",
    "child": [連想配列, 連想配列....]
}
*/
axios
    .get("https://gist.githubusercontent.com/Kazunari-h/a4b948ee2ecb68519c18b68e1812e77c/raw/5efd92a2cf774987bb714e190065df89bdf5f1e8/section.json")
    .then(res => {

        // 取得した結果はthenの中で処理される
        // 取得したJSONはres.dataの中にある
        console.log(res.data);
        // titleとclassがついた要素の中身をres.data.nameにする
        document.querySelector(".title").innerHTML = res.data.name
        // forEach 中身を取得しながら配列を繰り返す
        // res.data.child 配列
        res.data.child.forEach(item => {
            console.log(item.name);

            // createElement 要素を作り出す
            const li = document.createElement("li")
            const img = document.createElement("img")
            const h3 = document.createElement("h3")
            const p = document.createElement("p")

            img.src = item.img
            img.classList.add("thumbnail")
            h3.innerText = item.name

            li.appendChild(img)
            li.appendChild(h3)
            li.appendChild(p)
            //li.innerHTML = item.name
            // 要素A.appendChild(要素B)
            // appendChildは 要素Aに要素Bを追加する
            document.querySelector(".list").appendChild(li)

        });

            // for (const item of res.data.child) {
            //     //
            // }
    })

        //  // 要素の作成
        //  const li = document.createElement("li")
        //  // 要素の編集
        //  li.innerHTML = "aaa"
        //  // 要素を追加
        //  document.querySelector(".list").appendChild(li)
        //  要素.classList.add("class名")