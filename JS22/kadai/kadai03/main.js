// boxをクリックしたら回転する
document.querySelector(".box").addEventListener("click", function (event) {
    document.querySelector(".box").classList.toggle("rotate");
});

// マウスを動かしたら地球がついてくる

document
    .querySelector(".container")
    .addEventListener("mousemove", function (event) {
        const box = document.querySelector(".box");

        // console.log(event.clientX);
        // console.log(event.clientY);

        box.style.top = `${event.clientY}px`;
        box.style.left = `${event.clientX}px`;
    });

// スクロールしたら、でかくする
window.addEventListener("scroll", function (event) {
    document.querySelector(".box img").style.transform = `scale(${
        1 + window.scrollY / 1000
    })`;
});
