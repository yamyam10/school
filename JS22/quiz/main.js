const list = ["C", "Db", "D", "Eb", "E", "F", "Gb", "G", "Ab", "A", "Bb", "B"];
let correct = "";
const playButton = document.querySelector(".play");

const result = document.querySelector(".result");
const resultTitle = document.querySelector(".result p");
const resetButton = document.querySelector(".reset");

const keys = {
    C: document.querySelector(".c"),
    Db: document.querySelector(".db"),
    D: document.querySelector(".d"),
    Eb: document.querySelector(".eb"),
    E: document.querySelector(".e"),
    F: document.querySelector(".f"),
    Gb: document.querySelector(".gb"),
    G: document.querySelector(".g"),
    Ab: document.querySelector(".ab"),
    A: document.querySelector(".a"),
    Bb: document.querySelector(".bb"),
    B: document.querySelector(".b"),
};

let audio = null;

function init() {
    random();
    // 再生ボタンを押されたら
    playButton.addEventListener("click", function () {
        // すべての音を鳴らす

        // 正解の音を鳴らす
        playSE(correct);
    });

    // 鍵盤を押されたら
    for (const key in keys) {
        keys[key].addEventListener("click", function () {
            pushKey(key);
        });
    }

    // もう一回を押されたら
    resetButton.addEventListener("click", function () {
        reset();
    });
}

function random() {
    correct = list[Math.floor(Math.random() * list.length)];
    audio = new Audio(`./se/${correct}.wav`);
}

function playSE(name) {
    audio = new Audio(`./se/${name}.wav`);
    audio.play();
}

function pushKey(keyname) {
    if (keyname == correct) {
        // 正解の場合
        resultTitle.innerHTML = "正解";
    } else {
        // 不正解の場合
        resultTitle.innerHTML = "不正解";
    }
    keys[keyname].classList.toggle("answer");
    keys[correct].classList.toggle("correct");
    result.classList.toggle("hidden");
    playSE(keyname);

    for (const key in keys) {
        keys[key].disabled = true;
    }
}

// もう一回を押されたら
function reset() {
    for (const key in keys) {
        keys[key].classList.remove("answer");
        keys[key].classList.remove("correct");
        keys[key].disabled = false;
    }
    result.classList.toggle("hidden");
    random();
}

init();
